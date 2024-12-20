<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2207e1cbdd2dae14e3a4659ea71a548d
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Classes\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2207e1cbdd2dae14e3a4659ea71a548d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2207e1cbdd2dae14e3a4659ea71a548d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2207e1cbdd2dae14e3a4659ea71a548d::$classMap;

        }, null, ClassLoader::class);
    }
}
