<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit52f2958c6923c7bf8d627a79787b5e84
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit52f2958c6923c7bf8d627a79787b5e84', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit52f2958c6923c7bf8d627a79787b5e84', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit52f2958c6923c7bf8d627a79787b5e84::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}