@extends('pub_theme::layouts.plane')
@section('body')
	<div class="flex-center position-ref full-height">
		@include('pub_theme::layouts.partials.headernav')
		<div class="content" id="app">
			@yield('content')
		</div>
	</div>
@endsection