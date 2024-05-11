<?php

namespace MyNamespace;

class HTMLGenerator {
    private $html_content = "";

    public function addTag($tagName, $attributes = []) {
        $this->html_content .= '<' . $tagName;
        if (!empty($attributes) && is_array($attributes)) { // Check if $attributes is an array
            foreach ($attributes as $key => $value) {
                $this->html_content .= ' ' . $key . '="' . $value . '"';
            }
        }
        $this->html_content .= ">\n";
        return $this;
    }

    public function addContent($content) {
        $this->html_content .= "$content\n";
        return $this;
    }

    public function addCloseTag($tagName) {
        $this->html_content .= "</$tagName>\n";
        return $this;
    }

    public function addLinkTag($href, $attributes = []) {
        $attributes['href'] = $href;
        $this->addTag('link', $attributes);
        return $this;
    }

    public function addImgTag($src, $attributes = []) {
        $attributes['src'] = $src;
        $this->addTag('img', $attributes);
        return $this;
    }

    public function getHTMLContent() {
        return $this->html_content;
    }
}