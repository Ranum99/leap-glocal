<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitaced4d99c1cf2bea90a5e330e37f4478
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitaced4d99c1cf2bea90a5e330e37f4478::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitaced4d99c1cf2bea90a5e330e37f4478::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitaced4d99c1cf2bea90a5e330e37f4478::$classMap;

        }, null, ClassLoader::class);
    }
}
