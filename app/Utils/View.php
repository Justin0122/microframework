<?php

namespace App\Utils;
class View {
    private $content;

    public function __construct($content) {
        $this->content = $content;
    }

    public function getContent() {
        return $this->content;
    }
}
