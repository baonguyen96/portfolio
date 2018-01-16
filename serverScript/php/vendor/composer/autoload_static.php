<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1cd3d5f4641ba5b49c6851153e410fcb
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit1cd3d5f4641ba5b49c6851153e410fcb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1cd3d5f4641ba5b49c6851153e410fcb::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
