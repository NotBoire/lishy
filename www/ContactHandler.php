<?php

class ContactHandler {
    function get() {
        $twigLoader = new TwigLoader();
        $template = 'contact.html.twig';
        $params = array();
        $twigLoader->load(dirname(__FILE__) . '/views', $template, $params);
    }
}

