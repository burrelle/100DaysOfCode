<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit995e5c74e37107fe90ced06a6d4008bc
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Acme\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Acme\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit995e5c74e37107fe90ced06a6d4008bc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit995e5c74e37107fe90ced06a6d4008bc::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
