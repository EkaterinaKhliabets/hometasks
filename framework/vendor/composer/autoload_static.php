<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5ee2ef199dfe238cf5572491f3fb6a78
{
    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->fallbackDirsPsr4 = ComposerStaticInit5ee2ef199dfe238cf5572491f3fb6a78::$fallbackDirsPsr4;
            $loader->classMap = ComposerStaticInit5ee2ef199dfe238cf5572491f3fb6a78::$classMap;

        }, null, ClassLoader::class);
    }
}