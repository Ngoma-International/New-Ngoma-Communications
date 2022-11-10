<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1441acdb8b53b699d116c56f0663c771
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Scott\\FilePont\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Scott\\FilePont\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit1441acdb8b53b699d116c56f0663c771::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1441acdb8b53b699d116c56f0663c771::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1441acdb8b53b699d116c56f0663c771::$classMap;

        }, null, ClassLoader::class);
    }
}