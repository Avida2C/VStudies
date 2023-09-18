<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit263107e8f708e10c46d04ec2070f3d9c
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

        spl_autoload_register(array('ComposerAutoloaderInit263107e8f708e10c46d04ec2070f3d9c', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit263107e8f708e10c46d04ec2070f3d9c', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit263107e8f708e10c46d04ec2070f3d9c::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}