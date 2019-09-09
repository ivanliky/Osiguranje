<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit51de7cfa2618ed1de84198b50396c29e
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit51de7cfa2618ed1de84198b50396c29e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit51de7cfa2618ed1de84198b50396c29e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}