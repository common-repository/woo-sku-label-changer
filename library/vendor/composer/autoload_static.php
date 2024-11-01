<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit28bb9073a56b4237ef45e6fde1234d3f
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Wcsku\\Library\\' => 14,
        ),
        'A' => 
        array (
            'Appsero\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Wcsku\\Library\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Appsero\\' => 
        array (
            0 => __DIR__ . '/..' . '/appsero/client/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit28bb9073a56b4237ef45e6fde1234d3f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit28bb9073a56b4237ef45e6fde1234d3f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit28bb9073a56b4237ef45e6fde1234d3f::$classMap;

        }, null, ClassLoader::class);
    }
}
