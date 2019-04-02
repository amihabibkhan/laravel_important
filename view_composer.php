<?php

view()->composer('*', function ($view){
    $pub_type = Publication_type::all();
    $sliders = Gallery::where('type', 2)->orWhere('type', 3)->get();
    $view->with('pub_type', $pub_type)->with('sliders', $sliders);
});
        
        
        
