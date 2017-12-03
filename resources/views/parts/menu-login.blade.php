@if (Route::has('login'))
<div class="container">
    <div class="top-right links">
        @auth
            <a href="{{ url('/home') }}">Домой</a>
        @else
            <a href="{{ route('login') }}">Вход</a>
            <a href="{{ route('register') }}">Регистрация</a>
        @endauth
    </div>
</div>   
@endif
