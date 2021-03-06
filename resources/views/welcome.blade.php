@extends('layouts.amati')


@section('content')
        <div class="flex-center position-ref full-height">
<!--             @if (Route::has('login'))
    <div class="top-right links">
        @auth
            <a href="{{ url('/home') }}">Home</a>
        @else
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>
        @endauth
    </div>
@endif -->

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Документация</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">Новости</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>

<div class="container">
  <div class="row">
   
    <div class="col">
      One of three columns
    </div>
    
    <div class="col">
        <div class="md-form">
            <i class="fa fa-envelope prefix"></i>
            <input type="text" id="form2" class="form-control">
            <label for="form2">Example label</label>
        </div>
    </div>
    
    <div class="col">
      One of three columns
    </div>
    
  </div>
</div>




@endsection