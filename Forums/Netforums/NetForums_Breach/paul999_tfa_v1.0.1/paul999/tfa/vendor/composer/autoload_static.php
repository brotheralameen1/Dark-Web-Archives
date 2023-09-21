<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3d0dd43522b7a4afea021d2a391572cf
{
    public static $files = array (
        '5255c38a0faeba867671b61dfda6d864' => __DIR__ . '/..' . '/paragonie/random_compat/lib/random.php',
    );

    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'paul999\\u2f\\' => 12,
        ),
        'O' => 
        array (
            'OTPAuthenticate\\tests\\' => 22,
            'OTPAuthenticate\\' => 16,
        ),
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
        'B' => 
        array (
            'Base32\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'paul999\\u2f\\' => 
        array (
            0 => __DIR__ . '/..' . '/paul999/u2flib-server',
        ),
        'OTPAuthenticate\\tests\\' => 
        array (
            0 => __DIR__ . '/..' . '/marc1706/otp-authenticate/tests',
        ),
        'OTPAuthenticate\\' => 
        array (
            0 => __DIR__ . '/..' . '/marc1706/otp-authenticate/lib',
        ),
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
        'Base32\\' => 
        array (
            0 => __DIR__ . '/..' . '/christian-riesen/base32/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3d0dd43522b7a4afea021d2a391572cf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3d0dd43522b7a4afea021d2a391572cf::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
