<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit00b0586185a4406ba5c4618dbc22fba9
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit00b0586185a4406ba5c4618dbc22fba9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit00b0586185a4406ba5c4618dbc22fba9::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
