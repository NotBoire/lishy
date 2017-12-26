<?php

class LogoHandler {
    function get() {
        $twigLoader = new TwigLoader();
        $template = 'logo.html.twig';
        $params = array();
        $twigLoader->load(dirname(__FILE__) . '/views', $template, $params);
    }
}

