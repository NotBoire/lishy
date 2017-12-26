<?php

class HomeHandler {
    function get() {
        $twigLoader = new TwigLoader();
        $template = 'base.html.twig';
        $params = array();
        $twigLoader->load(dirname(__FILE__) . '/views', $template, $params);
    }
}

