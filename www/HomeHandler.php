<?php

class HomeHandler {
    function get() {
        $twigLoader = new TwigLoader();
        $template = 'home.html.twig';
        $params = array();
        $twigLoader->load(dirname(__FILE__) . '/views', $template, $params);
    }
}

