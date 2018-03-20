<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit11e6a7175ba7fce3d4eab770e9bb7330
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Engine\\DI\\' => 10,
            'Engine\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Engine\\DI\\' => 
        array (
            0 => __DIR__ . '/../..' . '/engine/DI',
        ),
        'Engine\\' => 
        array (
            0 => __DIR__ . '/../..' . '/engine',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit11e6a7175ba7fce3d4eab770e9bb7330::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit11e6a7175ba7fce3d4eab770e9bb7330::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
