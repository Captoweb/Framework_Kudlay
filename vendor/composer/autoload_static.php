<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit47395bd12f8c2197642951ba88b4769e
{
    public static $prefixLengthsPsr4 = array (
        'i' => 
        array (
            'ishop\\' => 6,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ishop\\' => 
        array (
            0 => __DIR__ . '/..' . '/ishop/core',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit47395bd12f8c2197642951ba88b4769e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit47395bd12f8c2197642951ba88b4769e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
