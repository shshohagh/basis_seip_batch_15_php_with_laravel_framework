<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit129da2e3b9dbb6047fbba8a5c6892c2a
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

        spl_autoload_register(array('ComposerAutoloaderInit129da2e3b9dbb6047fbba8a5c6892c2a', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit129da2e3b9dbb6047fbba8a5c6892c2a', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit129da2e3b9dbb6047fbba8a5c6892c2a::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}