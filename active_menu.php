{{ Request::routeIs('index') ? 'active' : '' }}

// routeIs('Have to give here route name not url')

{{ Request::routeIs('index') ? 'active' : 
	Request::routeIs('home') ? 'active' : ''
}}

// for one route but passing different route
{{ Request::routeIs('viewPublication') && Request::segment(3) != 1 ? 'active' : "" }}
{{ Request::routeIs('viewPublication') && Request::segment(3) == 1 ? 'active' : "" }}">

// we can make helper funtion by this 

function menu_active($route, $route2 = '', $route3 = '', $route4 = '', $route5 = ''){
    if (Request::routeIs($route) || Request::routeIs($route2) || Request::routeIs($route3) || Request::routeIs($route4) || Request::routeIs($route5)){
        return 'active';
    }
}

function diff_value_pass_menu_active($route, $segment, $segment_value){
    if (Request::routeIs($route) && Request::segment($segment) == $segment_value){
        return 'active';
    }
}
