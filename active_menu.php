{{ Request::routeIs('index') ? 'active' : '' }}

// routeIs('Have to give here route name not url')

{{ Request::routeIs('index') ? 'active' : 
	Request::routeIs('home') ? 'active' : ''
}}

// for one route but passing different route
{{ Request::routeIs('viewPublication') && Request::segment(3) != 1 ? 'active' : "" }}
{{ Request::routeIs('viewPublication') && Request::segment(3) == 1 ? 'active' : "" }}">
