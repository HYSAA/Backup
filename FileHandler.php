<?php

// namespace MyNamespace;

class FileHandler {
    public static function writeCSS($filePath, $css) {
        file_put_contents($filePath, $css);
    }

    public static function readCSS($filePath) {
        if (file_exists($filePath)) {
            return file_get_contents($filePath);
        }
        return null;
    }

    public static function createFile($filePath) {
        if (!file_exists($filePath)) {
            touch($filePath);
        }
    }

    public static function saveCSSToFile($filePath, $css) {
        self::writeCSS($filePath, $css);
    }

    //html

    public static function writeHTML($filePathHTML, $html) {
        file_put_contents($filePathHTML, $html);
    }

    public static function readHTML($filePathHTML) {
        if (file_exists($filePathHTML)) {
            return file_get_contents($filePathHTML);
        }
        return null;
    }


    public static function createFileHTML($filePathHTML) {
        if (!file_exists($filePathHTML)) {
            touch($filePathHTML);
        }
    }

    public static function saveHTMLToFile($filePathHTML, $html) {
        self::writeHTML($filePathHTML, $html);
    }
}
