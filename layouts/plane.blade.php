<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!--<![endif]-->
@section('htmlheader')
    @include('pub_theme::layouts.partials.htmlheader')
@show
<body>
	@yield('body')

	@section('scripts')
    	@include('pub_theme::layouts.partials.scripts')
	@show
	
</body>
</html>
{{-- 
{{ \xdebug_print_function_stack( '['.__LINE__.']['.__FILE__.']' ) }}
--}}