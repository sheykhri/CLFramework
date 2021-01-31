<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbe671935ba550e0e59b4ef6ecd63e33a
{
    public static $files = array (
        '71ecd0286a4e74fd8732297fb587023c' => __DIR__ . '/..' . '/thingengineer/mysqli-database-class/MysqliDb.php',
        'd383f1ec7b1e54a09cb53eb6fcf751e0' => __DIR__ . '/..' . '/thingengineer/mysqli-database-class/dbObject.php',
        '012a62d9a23e60f93851b57aa97165bb' => __DIR__ . '/../..' . '/config.php',
        '3a16a101fa72caf47ab130bee59ce7f4' => __DIR__ . '/../..' . '/database/mysql.php',
    );

    public static $classMap = array (
        'App\\CoderLast\\Framework' => __DIR__ . '/../..' . '/App/framework/framework.php',
        'App\\CoderLast\\Plugins' => __DIR__ . '/../..' . '/App/Plugins/Plugins.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitbe671935ba550e0e59b4ef6ecd63e33a::$classMap;

        }, null, ClassLoader::class);
    }
}
