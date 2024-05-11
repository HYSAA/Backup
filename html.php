<?php

require_once 'FileHandler.php';
require_once 'HTMLGenerator.php';

$filePath = "index.html";
FileHandler::createFile($filePath);

$htmlGenerator = new MyNamespace\HTMLGenerator(); // Initialize $htmlGenerator

$htmlGenerator->addTag('head')
    ->addLinkTag('style.css', ['rel' => 'stylesheet'])
    ->addCloseTag('head')
    ->addTag('body')
    ->addTag('div')->addImgTag('images/image.jpg', ['alt' => 'Description of the image'])->addCloseTag('div')
    ->addTag('div')->addTag('p')->addContent('The quick brown fox')->addCloseTag('p')->addCloseTag('div')
    ->addTag('div', ['class' => 'container'])->addContent('over the lazy dog')->addCloseTag('div')
    ->addCloseTag('body');

FileHandler::saveHTMLToFile($filePath, $htmlGenerator->getHTMLContent());
