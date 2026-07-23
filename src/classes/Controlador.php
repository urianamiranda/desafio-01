<?php

namespace App\classes;

class Controlador
{
    public static function getMercadorias(): array
    {
        return require __DIR__ . '/../data/mercadorias.php';
    }

    public static function findMercadoria(string $chave): array
    {
        $mercadorias = self::getMercadorias();

        return $mercadorias[$chave] ?? [];
    }

    public static function render(array $mercadoria): void
    {
        ob_start();

        if (empty($mercadoria)) {
            require __DIR__ . '/../views/selecione.html';
        } else {
            require __DIR__ . '/../views/dados-mercadoria.php';
        }

        $content = ob_get_clean();

        require __DIR__ . '/../views/layout.php';
    }

    public static function run(): void
    {
        if (!isset($_GET['mercadoria'])) {
            ob_start();

            require __DIR__ . '/../views/404.html';

            $content = ob_get_clean();

            require __DIR__ . '/../views/layout.php';
            return;
        }

        $chave = $_GET['mercadoria'];

        $mercadoria = self::findMercadoria($chave);

        self::render($mercadoria);
    }
}