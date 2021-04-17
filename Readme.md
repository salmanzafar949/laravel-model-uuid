# laravel-model-uuid

A Laravel package to add uuid to models

## Table of contents
* [Installation](#installation)
* [Configuration](#configuration-optional)
* [Model Uuid](#model-uuid)
* [Publishing files / configurations](#publishing-files)


# Installation

```bash
composer require salmanzafar/laravel-model-uuid
```

## Configuration (optional)
Publishing service provider

```bash
php artisan vendor:publish --provider="Salman\LaravelModelUUID\LaravelModelUUISServiceProvider::class"
```

## Enable the package (Optional)
This package implements Laravel auto-discovery feature. After you install it the package provider and facade are added automatically for laravel >= 5.5.

### Model Uuid

There are many cases where we want to use `uuid` as `primray key` in our model now that is also easier you can use `uuid` as `pk` in a jiffy

```php
namespace App;

use \Vault\LaravelVaultUUID\Concerns\UsesUuid;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
   use UsesUuid;
}
``` 
By just using `UsesUuid` in your model now you have `uuid` as `pk` in your model. don't forget to make changes in migration

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->uuid('id')->primary();            
            $table->string('name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}

```

### Publishing files
The below command will publish all related files inside `App\Concerns` folder

```bash
php artisan publish:uuid-trait
```
