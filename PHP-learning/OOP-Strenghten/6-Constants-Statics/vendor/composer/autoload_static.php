<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbf297a38ab4fc1945c1fe6e0d3e150ef
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbf297a38ab4fc1945c1fe6e0d3e150ef::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbf297a38ab4fc1945c1fe6e0d3e150ef::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}