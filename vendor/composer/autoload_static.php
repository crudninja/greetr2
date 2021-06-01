<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6672241a78502291ec18c917f9aad9ce
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LegacySeller\\Greetr2\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LegacySeller\\Greetr2\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6672241a78502291ec18c917f9aad9ce::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6672241a78502291ec18c917f9aad9ce::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6672241a78502291ec18c917f9aad9ce::$classMap;

        }, null, ClassLoader::class);
    }
}
