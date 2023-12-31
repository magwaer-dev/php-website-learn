<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit91c295ffd4fc5abfabcb21ca22f980eb
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MVC\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MVC\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit91c295ffd4fc5abfabcb21ca22f980eb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit91c295ffd4fc5abfabcb21ca22f980eb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit91c295ffd4fc5abfabcb21ca22f980eb::$classMap;

        }, null, ClassLoader::class);
    }
}
