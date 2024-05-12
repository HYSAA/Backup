<?php

require_once 'FileHandler.php';
require_once 'CSSGenerator.php'; // Include the CSSGenerator file

$filePath = "style.css";
FileHandler::createFile($filePath);

$generator = new MyNamespace\CSSGenerator();
$generator->addSelector("body", null, null)
    ->addProperty("font-family", "Georgia")
    ->addProperty("margin", "0")
    ->addCloseSelector()

    ->addSelector(null, "class", "wrapper")
    ->addProperty("width", "100%")
    ->addProperty("max-width", "1080px")
    ->addProperty("padding", "0 10px")
    ->addProperty("margin", "0 auto")
    ->addCloseSelector()

    ->addSelector("h1.logo", null, null)
    ->addProperty("background-image", "url(https://image.ibb.co/nuSZNa/logo.png)")
    ->addProperty("background-repeat", "no-repeat")
    ->addProperty("width", "100px")
    ->addProperty("text-indent", "-10000px")
    ->addProperty("float", "left")
    ->addCloseSelector()

    ->addSelector("header nav", null, null)
    ->addProperty("float", "right")
    ->addCloseSelector()

    ->addSelector("header nav h2", null, null)
    ->addProperty("text-indent", "-10000px")
    ->addProperty("height", "0")
    ->addProperty("margin", "0")
    ->addCloseSelector()

    ->addSelector("header nav li", null, null)
    ->addProperty("float", "left")
    ->addProperty("list-style-type", "none")
    ->addProperty("margin", "10px 20px")
    ->addCloseSelector()

    ->addSelector("header nav li a", null, null)
    ->addProperty("text-decoration", "none")
    ->addProperty("color", "#333")
    ->addProperty("font-size", "18px")
    ->addCloseSelector()

    ->addSelector("#main-banner, #main-banner img", null, null)
    ->addProperty("width", "100%")
    ->addCloseSelector()

    ->addSelector("#main-banner img", null, null)
    ->addProperty("border-bottom", "6px solid #f34949")
    ->addCloseSelector()

    ->addSelector("#home-menu h2", null, null)
    ->addProperty("background-image", "url(https://image.ibb.co/iKBuNa/menu_flag.png)")
    ->addProperty("background-repeat", "no-repeat")
    ->addProperty("width", "156px")
    ->addProperty("height", "74px")
    ->addProperty("text-indent", "-10000px")
    ->addProperty("margin", "0 auto")
    ->addProperty("position", "relative")
    ->addProperty("top", "-4px")
    ->addCloseSelector()

    ->addSelector("#home-menu ul", null, null)
    ->addProperty("padding", "0")
    ->addProperty("list-style-type", "none")
    ->addCloseSelector()

    ->addSelector("#home-menu ul:after", null, null)
    ->addProperty("content", '""')
    ->addProperty("clear", "both")
    ->addProperty("display", "block")
    ->addCloseSelector()

    ->addSelector("#home-menu li", null, null)
    ->addProperty("float", "left")
    ->addProperty("width", "42%")
    ->addProperty("padding", "0")
    ->addProperty("margin", "20px 0 20px 8%")
    ->addCloseSelector()

    ->addSelector("#home-menu li:nth-child(odd)", null, null)
    ->addProperty("margin", "20px 8% 20px 0")
    ->addCloseSelector()

    ->addSelector(".dish", null, null)
    ->addProperty("float", "left")
    ->addProperty("color", "#555")
    ->addProperty("font-weight", "bold")
    ->addProperty("position", "relative")
    ->addProperty("z-index", "1")
    ->addProperty("background", "#fff")
    ->addProperty("padding-right", "15px")
    ->addCloseSelector()

    ->addSelector(".price", null, null)
    ->addProperty("float", "right")
    ->addProperty("color", "#555")
    ->addProperty("font-weight", "bold")
    ->addProperty("position", "relative")
    ->addProperty("z-index", "1")
    ->addProperty("background", "#fff")
    ->addProperty("padding-left", "15px")
    ->addCloseSelector()

    ->addSelector(".description", null, null)
    ->addProperty("clear", "both")
    ->addProperty("display", "block")
    ->addProperty("color", "#999")
    ->addProperty("font-style", "italic")
    ->addProperty("font-size", "14px")
    ->addProperty("padding-top", "10px")
    ->addProperty("border-top", "1px solid #ddd")
    ->addProperty("position", "relative")
    ->addProperty("top", "-8px")
    ->addCloseSelector()

    ->addSelector("#featured", null, null)
    ->addProperty("margin-top", "100px")
    ->addCloseSelector()

    ->addSelector("#featured ul", null, null)
    ->addProperty("padding", "0")
    ->addCloseSelector()

    ->addSelector("#featured ul:after", null, null)
    ->addProperty("content", '""')
    ->addProperty("display", "block")
    ->addProperty("clear", "both")
    ->addCloseSelector()

    ->addSelector("#featured li", null, null)
    ->addProperty("float", "left")
    ->addProperty("width", "23%")
    ->addProperty("margin", "1%")
    ->addProperty("list-style-type", "none")
    ->addCloseSelector()

    ->addSelector("#featured li img", null, null)
    ->addProperty("width", "100%")
    ->addProperty("margin-bottom", "10px")
    ->addCloseSelector()

    ->addSelector("#featured li a", null, null)
    ->addProperty("color", "#333")
    ->addProperty("text-decoration", "none")
    ->addProperty("float", "left")
    ->addCloseSelector()

    ->addSelector("#featured li span", null, null)
    ->addProperty("float", "right")
    ->addProperty("color", "#333")
    ->addCloseSelector()

    ->addSelector("footer", null, null)
    ->addProperty("background", "#3b3b3b")
    ->addProperty("margin-top", "100px")
    ->addProperty("padding", "30px 0")
    ->addCloseSelector()

    ->addSelector("footer:after", null, null)
    ->addProperty("content", '""')
    ->addProperty("display", "block")
    ->addProperty("clear", "both")
    ->addCloseSelector()

    ->addSelector("footer ul", null, null)
    ->addProperty("float", "left")
    ->addProperty("padding", "0")
    ->addProperty("list-style-type", "none")
    ->addProperty("color", "#eee")
    ->addProperty("width", "23%")
    ->addProperty("margin-right", "2%")
    ->addCloseSelector()

    // Add other selectors and properties similarly...

    ;

FileHandler::saveCSSToFile($filePath, $generator->getCSSContent());
