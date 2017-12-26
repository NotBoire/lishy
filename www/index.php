<?php
require('../vendor/autoload.php');
ToroHook::add("404",  function() {
  http_response_code(404);
});
Toro::serve(array(
    "/" => "HomeHandler",
));
