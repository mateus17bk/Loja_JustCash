<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdc91119e814e712461766207c2826c8b
{
    public static $files = array (
        'f084d01b0a599f67676cffef638aa95b' => __DIR__ . '/..' . '/smarty/smarty/libs/bootstrap.php',
    );

    public static $classMap = array (
        'Carrinho' => __DIR__ . '/../..' . '/model/Carrinho.class.php',
        'Categorias' => __DIR__ . '/../..' . '/model/Categorias.class.php',
        'Conexao' => __DIR__ . '/../..' . '/model/Conexao.class.php',
        'Config' => __DIR__ . '/../..' . '/model/Config.class.php',
        'Correios' => __DIR__ . '/../..' . '/model/Correios.class.php',
        'EasyPeasyICS' => __DIR__ . '/..' . '/phpmailer/phpmailer/extras/EasyPeasyICS.php',
        'Itens' => __DIR__ . '/../..' . '/model/ItensPedido.class.php',
        'Login' => __DIR__ . '/../..' . '/model/Login.class.php',
        'PHPMailer' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmailer.php',
        'PHPMailerOAuth' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmaileroauth.php',
        'PHPMailerOAuthGoogle' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmaileroauthgoogle.php',
        'POP3' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.pop3.php',
        'Paginacao' => __DIR__ . '/../..' . '/model/Paginacao.class.php',
        'Pedidos' => __DIR__ . '/../..' . '/model/Pedidos.class.php',
        'Produtos' => __DIR__ . '/../..' . '/model/Produtos.class.php',
        'ProdutosImages' => __DIR__ . '/../..' . '/model/ProdutosImages.class.php',
        'Rotas' => __DIR__ . '/../..' . '/model/Rotas.class.php',
        'SMTP' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.smtp.php',
        'Sistema' => __DIR__ . '/../..' . '/model/Sistema.class.php',
        'Template' => __DIR__ . '/../..' . '/model/Template.class.php',
        'ntlm_sasl_client_class' => __DIR__ . '/..' . '/phpmailer/phpmailer/extras/ntlm_sasl_client.php',
        'phpmailerException' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmailer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitdc91119e814e712461766207c2826c8b::$classMap;

        }, null, ClassLoader::class);
    }
}
