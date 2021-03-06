<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbbe248065c338a4bf5b14cbf58cf1f85
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbbe248065c338a4bf5b14cbf58cf1f85::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbbe248065c338a4bf5b14cbf58cf1f85::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbbe248065c338a4bf5b14cbf58cf1f85::$classMap;

        }, null, ClassLoader::class);
    }
}
