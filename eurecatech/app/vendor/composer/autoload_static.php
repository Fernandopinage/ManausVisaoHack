<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit237b3833987237d469632c1de17d1f89
{
    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Phpml' => 
            array (
                0 => __DIR__ . '/..' . '/php-ai/php-ml/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit237b3833987237d469632c1de17d1f89::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit237b3833987237d469632c1de17d1f89::$classMap;

        }, null, ClassLoader::class);
    }
}
