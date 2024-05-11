<?php


require_once 'FileHandler.php';
require_once 'CSSGenerator.php'; // Include the CSSGenerator file

$filePath = "style.css";
FileHandler::createFile($filePath);

$generator = new MyNamespace\CSSGenerator();
$generator->addSelector("body", null, null)
    ->addProperty("font-family", "Times New Roman")
    ->addProperty("background-color", "#f0f0f0")
    ->addCloseSelector()

    ->addSelector(null, "id", "main")
    ->addProperty("width", "80%")
    ->addProperty("margin", "0 auto")
    ->addProperty("padding", "20px")
    ->addProperty("border", "4mm ridge rgba(211, 220, 50, .6);")
    ->addCloseSelector()

    ->addSelector(null, "class", "container")
    ->addProperty("width", "100%")
    ->addProperty("margin", "0 auto")
    ->addProperty("padding", "20px")
    ->addProperty("border", "4mm ridge rgba(211, 220, 50, .6);")
    ->addProperty("background-color", "#000")
    ->addProperty("color", "#fff")
    ->addCloseSelector()
    
    ->addSelector("p", null, null)
    ->addProperty("color", "#ff0000")
    ->addCloseSelector();

FileHandler::saveCSSToFile($filePath, $generator->getCSSContent());
