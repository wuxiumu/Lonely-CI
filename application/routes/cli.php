<?php

/**
 * CLI Routes
 *
 * This routes only will be available under a CLI environment
 */

// To enable Luthier-CI built-in cli commands
// uncomment the followings lines:

Luthier\Cli::maker();
Luthier\Cli::migrations();

Route::cli('test', function(){ // <- (note that here the method is 'cli' and not 'get', 'post', etc.)
    echo 'Hello world!';
});

Route::cli('make/controller/{name}', function($name){
    echo 'Making the controller ' . $name ;
});