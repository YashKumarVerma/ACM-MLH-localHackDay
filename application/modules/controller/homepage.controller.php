<?php


model::load('blazer');


function landing(){
    $view = new Blazer();
    $view->render('homepage.html', NULL, $GLOBALS['turbo']);
}

