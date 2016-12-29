<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit99573c54f4d7dcf04c4e257f6c750649
{
    public static $files = array (
        '2c102faa651ef8ea5874edb585946bce' => __DIR__ . '/..' . '/swiftmailer/swiftmailer/lib/swift_required.php',
        '1cfd2761b63b0a29ed23657ea394cb2d' => __DIR__ . '/..' . '/topthink/think-captcha/src/helper.php',
    );

    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'think\\composer\\' => 15,
            'think\\captcha\\' => 14,
            'think\\auth\\' => 11,
            'think\\' => 6,
        ),
        'm' => 
        array (
            'mailer\\' => 7,
        ),
        'a' => 
        array (
            'anerg\\OAuth2\\' => 13,
        ),
        'C' => 
        array (
            'Cart\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'think\\composer\\' => 
        array (
            0 => __DIR__ . '/..' . '/topthink/think-installer/src',
        ),
        'think\\captcha\\' => 
        array (
            0 => __DIR__ . '/..' . '/topthink/think-captcha/src',
        ),
        'think\\auth\\' => 
        array (
            0 => __DIR__ . '/..' . '/5ini99/think-auth/src',
        ),
        'think\\' => 
        array (
            0 => __DIR__ . '/../..' . '/thinkphp/library/think',
        ),
        'mailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/yuan1994/tp-mailer/src/mailer',
        ),
        'anerg\\OAuth2\\' => 
        array (
            0 => __DIR__ . '/..' . '/anerg2046/sns_auth/src',
        ),
        'Cart\\' => 
        array (
            0 => __DIR__ . '/..' . '/mike182uk/cart/src',
        ),
    );

    public static $classMap = array (
        'GeetestLib' => __DIR__ . '/..' . '/gee-team/gt-php-sdk/lib/class.geetestlib.php',
        'MsgGeetestLib' => __DIR__ . '/..' . '/gee-team/gt-php-sdk/lib/class.geetestmsg.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit99573c54f4d7dcf04c4e257f6c750649::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit99573c54f4d7dcf04c4e257f6c750649::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit99573c54f4d7dcf04c4e257f6c750649::$classMap;

        }, null, ClassLoader::class);
    }
}
