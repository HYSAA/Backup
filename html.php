<?php

require_once 'FileHandler.php';
require_once 'HTMLGenerator.php';

$filePath = "index.html";
FileHandler::createFile($filePath);

$htmlGenerator = new MyNamespace\HTMLGenerator(); // Initialize $htmlGenerator

$htmlGenerator->addTag('header')
->addLinkTag('style.css', ['rel' => 'stylesheet'])
    ->addTag('div', ['class' => 'wrapper'])
    ->addTag('h1', ['class' => 'logo'])->addContent('Resto')->addCloseTag('h1')
    ->addTag('nav')
    ->addTag('h2')->addContent('Main Navigation')->addCloseTag('h2')
    ->addTag('ul')
    ->addTag('li')->addLinkTag('#')->addContent('Our Story')->addCloseTag('a')->addCloseTag('li')
    ->addTag('li')->addLinkTag('#')->addContent('Menu')->addCloseTag('a')->addCloseTag('li')
    ->addTag('li')->addLinkTag('#')->addContent('Reservations')->addCloseTag('a')->addCloseTag('li')
    ->addTag('li')->addLinkTag('#')->addContent('News')->addCloseTag('a')->addCloseTag('li')
    ->addTag('li')->addLinkTag('#')->addContent('Reviews')->addCloseTag('a')->addCloseTag('li')
    ->addCloseTag('ul')
    ->addCloseTag('nav')
    ->addCloseTag('div')
    ->addCloseTag('header');

$htmlGenerator->addTag('div', ['id' => 'main-banner'])
    ->addImgTag('https://image.ibb.co/hiVAvv/banner.jpg', ['alt' => 'Welcome to Resto'])
    ->addCloseTag('div');

$htmlGenerator->addTag('div', ['class' => 'wrapper'])
    ->addTag('section', ['id' => 'home-menu'])
    ->addTag('h2')->addContent('Menu')->addCloseTag('h2')
    ->addTag('ul')
    ->addTag('li')
    ->addTag('span', ['class' => 'dish'])->addContent('Voluptate cillum fugiat')->addCloseTag('span')
    ->addTag('span', ['class' => 'price'])->addContent('$30')->addCloseTag('span')
    ->addTag('span', ['class' => 'description'])->addContent('Cheese, tomato, mushrooms, onions')->addCloseTag('span')
    ->addCloseTag('li')
    ->addTag('li')
    // Repeat the above for other menu items
    ->addCloseTag('ul')
    ->addCloseTag('section');

$htmlGenerator->addTag('section', ['id' => 'featured'])
    ->addTag('ul')
    ->addTag('li')
    ->addImgTag('https://image.ibb.co/ehFAvv/thumb_1.jpg')
    ->addTag('a', ['href' => '#'])->addContent('Fugiat nulla sint')->addCloseTag('a')
    ->addTag('span')->addContent('$30')->addCloseTag('span')
    ->addTag('span', ['class' => 'rating'])->addCloseTag('span')
    ->addCloseTag('li')
    // Repeat the above for other featured items
    ->addCloseTag('ul')
    ->addCloseTag('section')
    ->addCloseTag('div');

$htmlGenerator->addTag('footer')
    ->addTag('div', ['class' => 'wrapper'])
    ->addTag('ul')
    ->addTag('li')->addContent('New York Restaurant')->addCloseTag('li')
    ->addTag('li')->addContent('3926 Anmoore Road')->addCloseTag('li')
    ->addTag('li')->addContent('New York, NY 10014')->addCloseTag('li')
    ->addTag('li')->addContent('718-749-1714')->addCloseTag('li')
    ->addCloseTag('ul')
    // Repeat the above for other locations and footer links
    ->addCloseTag('div')
    ->addCloseTag('footer');

FileHandler::saveHTMLToFile($filePath, $htmlGenerator->getHTMLContent());

?>
