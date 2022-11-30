<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit464b418417bce2fae8fb88bd678b647c
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit464b418417bce2fae8fb88bd678b647c', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit464b418417bce2fae8fb88bd678b647c', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit464b418417bce2fae8fb88bd678b647c::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
