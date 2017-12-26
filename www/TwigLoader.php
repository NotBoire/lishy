<?php
class TwigLoader {
    public function load($path, $template, $params) {
        \Twig_Autoloader::register();
        try {
            // define template directory location
            $loader = new \Twig_Loader_Filesystem($path);
            // initialize Twig environment
            $twig = new \Twig_Environment($loader);
            // load template
            $template = $twig->loadTemplate($template);
            // render template
            echo $template->render($params);
        } catch (\Exception $e) {
            die ('ERROR: ' . $e->getMessage());
        }
    }
} 
