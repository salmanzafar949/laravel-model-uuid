<?php


namespace Salman\LaravelModelUUID\Services;

use Illuminate\Filesystem\Filesystem;

class PublishTraitsService
{
    public static function publishTraits()
    {
        return self::checkDirectory();
    }

    private static function checkDirectory()
    {

        $copDirectory = new Filesystem();

        $path = dirname(__DIR__, 1);

        $fromPath = $path.'/Concerns';

        $toPath = app_path('/Concerns/');

        return $copDirectory->copyDirectory($fromPath, $toPath);
    }

}
