<?php

class ContentHandler {
    function get($project) {
        $twigLoader = new TwigLoader();
        $template = 'project.html.twig';
        $params = array('project' => $project);
        $twigLoader->load(dirname(__FILE__) . '/views', $template, $params);
    }
}

