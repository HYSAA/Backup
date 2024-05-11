<?php

namespace MyNamespace;

class CSSGenerator {
    private $css_content = "";

    public function addSelector($element, $identifierType, $identifierName) {
        if ($identifierType === 'id') {
            $selector = "#$identifierName";
        } elseif ($identifierType === 'class') {
            $selector = ".$identifierName";
        } else {
            $selector = $element;
        }
        $this->css_content .= "$selector {\n";
        return $this;
    }

    public function addProperty($property, $value) {
        $this->css_content .= "\t$property: $value;\n";
        return $this;
    }

    public function addCloseSelector() {
        $this->css_content .= "}\n\n";
        return $this;
    }

    public function getCSSContent() {
        return $this->css_content;
    }
}
