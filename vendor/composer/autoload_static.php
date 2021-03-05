<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6e0364fa7e0d0b2a6038a16162e2660e
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'HMVC\\' => 5,
        ),
        'D' => 
        array (
            'Dcblogdev\\PdoWrapper\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'HMVC\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'Dcblogdev\\PdoWrapper\\' => 
        array (
            0 => __DIR__ . '/..' . '/dcblogdev/pdo-wrapper/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Dcblogdev\\PdoWrapper\\Database' => __DIR__ . '/..' . '/dcblogdev/pdo-wrapper/src/Database.php',
        'HMVC\\controllers\\homecontroller' => __DIR__ . '/../..' . '/app/controllers/homecontroller.php',
        'HMVC\\core\\app' => __DIR__ . '/../..' . '/app/core/app.php',
        'HMVC\\core\\controller' => __DIR__ . '/../..' . '/app/core/controller.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6e0364fa7e0d0b2a6038a16162e2660e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6e0364fa7e0d0b2a6038a16162e2660e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6e0364fa7e0d0b2a6038a16162e2660e::$classMap;

        }, null, ClassLoader::class);
    }
}
