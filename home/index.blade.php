@extends('pub_theme::layouts.app')
@section('content')
	<div class="title m-b-md">
                    Lara Xot
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
                <example></example>
                <cookie-law></cookie-law>

    @verbatim
    <v-app id="inspire">
          <input type="text" id="rating" value="3">
          <v-rating
            v-model="rating"
            empty-icon='far fa-star fa-3x'
            full-icon='fas fa-star  fa-3x'
            half-icon='fas fa-star-half-alt  fa-3x'
            color="yellow darken-3"
            background-color="grey darken-1"
            empty-icon="$ratingFull"
            half-increments
            hover
          ></v-rating>
        <div>
        <span class="caption text-uppercase">model:</span>
        <span class="font-weight-bold">
          {{ rating }}
        </span>
      </div>
  </v-app>
  @endverbatim

@endsection

@push('scripts')
<script>
    
    //window.app.rating=2;
    /*
    Vue.nextTick(function () {
        vm.$el.textContent === 'new message' // true
    })
    Vue.set(vm.someObject, 'b', 2)
    */
</script>
@endpush