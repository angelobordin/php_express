<?php

namespace App\utils;

class View {
    private static function getContentView(string $view): string {
        $filePath = __DIR__.'/../../resources/view/'.$view.'.html';
        return file_exists($filePath) ? file_get_contents($filePath) : ''; 
    }

    public static function render(string $view, array $vars = []): string | null {
        $contentView = self::getContentView($view);

        $keys = array_keys($vars);
        $keys = array_map(function($item) {
            return '{{'.$item.'}}';
        }, $keys);



        return str_replace($keys, array_values($vars), $contentView);
    }
}