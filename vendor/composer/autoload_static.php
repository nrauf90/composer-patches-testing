<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9607b641ae4d8ba807e8f83e012b3ac0
{
    public static $prefixLengthsPsr4 = array (
        'n' => 
        array (
            'nrauf90\\Greeting\\' => 17,
        ),
        'c' => 
        array (
            'cweagans\\Composer\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'nrauf90\\Greeting\\' => 
        array (
            0 => __DIR__ . '/..' . '/nrauf90/greeting/src',
        ),
        'cweagans\\Composer\\' => 
        array (
            0 => __DIR__ . '/..' . '/cweagans/composer-patches/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9607b641ae4d8ba807e8f83e012b3ac0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9607b641ae4d8ba807e8f83e012b3ac0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9607b641ae4d8ba807e8f83e012b3ac0::$classMap;

        }, null, ClassLoader::class);
    }
}
