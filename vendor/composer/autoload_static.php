<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitca3e877059835752634fda230d2b91ca
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Phpml\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Phpml\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-ai/php-ml/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitca3e877059835752634fda230d2b91ca::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitca3e877059835752634fda230d2b91ca::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
