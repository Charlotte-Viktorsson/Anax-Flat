<?php
return array(

    'mode'         => 'development',
    'image_path'   =>  __DIR__ . '/../img/',
    'cache_path'   =>  __DIR__ . '/../../cache/cimage/',
    //'alias_path'   =>  __DIR__ . '/img/alias/',
    //'remote_allow' => true,
    //'password'     => false,
    'shortcut' => array(
        'sepia' => "&f=grayscale&f0=brightness,-10&f1=contrast,-20&f2=colorize,120,60,0,0&sharpen",
    ),

);
