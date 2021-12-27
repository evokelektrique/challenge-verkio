@extends("layouts.app")

@section("title", "Home")

@section("content")
<section class="hero is-light is-fullheight">

  <div class="hero-body">
    <div class="container has-text-centered">
      <p class="title">
        Home
      </p>
      <p class="subtitle pt-5">
        @if(Auth::check())
        <a class="button is-success" href="{{route("dashboard")}}">Visit Dashboard</a>
        <a class="button is-danger is-outlined" href="{{route("logout")}}">Logout</a>
        @else
        <a class="button" href="{{route("login")}}">Login</a>
        <a class="button" href="{{route("register.index")}}">Register</a>
        @endif
      </p>
    </div>
  </div>

</section>
@endsection
