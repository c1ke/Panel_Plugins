<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita834ebbbbdf175d7eb370f27f2333e1b
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Plugins\\Fail2ban\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Plugins\\Fail2ban\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Plugins\\Fail2ban\\Controllers\\Fail2banController' => __DIR__ . '/../..' . '/Controllers/Fail2banController.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita834ebbbbdf175d7eb370f27f2333e1b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita834ebbbbdf175d7eb370f27f2333e1b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita834ebbbbdf175d7eb370f27f2333e1b::$classMap;

        }, null, ClassLoader::class);
    }
}
