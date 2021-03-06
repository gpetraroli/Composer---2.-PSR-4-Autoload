<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite9b61e16996d6a5739162b6655487aec
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\wcs\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\wcs\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/wcs',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite9b61e16996d6a5739162b6655487aec::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite9b61e16996d6a5739162b6655487aec::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite9b61e16996d6a5739162b6655487aec::$classMap;

        }, null, ClassLoader::class);
    }
}
