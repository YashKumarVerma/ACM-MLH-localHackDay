<?php 

// Routes are defined here
Route::set('','landing@homepage');


Route::set('getDataOfNextDays/$timeStamp/$lat/$long','api@getDataOfNextDays');