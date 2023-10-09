<?php

namespace App\utils;

class View
{
    private static $vars = [];

    public static function init($vars = [])
    {
        self::$vars = $vars;
    }

    private static function getContentView(string $view): string
    {
        $filePath = __DIR__ . '/../../resources/view/' . $view . '.html';
        return file_exists($filePath) ? file_get_contents($filePath) : '';
    }

    public static function render(string $view, array $vars = []): string|null
    {
        $contentView = self::getContentView($view);

        $vars = array_merge(self::$vars, $vars);

        $keys = array_keys($vars);
        $keys = array_map(function ($item) {
            return '{{' . $item . '}}';
        }, $keys);

        return str_replace($keys, array_values($vars), $contentView);
    }
}