@extends("layouts.app")

@section("title", "Login")

@section("content")

<section class="hero is-light is-fullheight">
  <div class="hero-body">
    <div class="container">
        @if (\Session::has('error'))
        <div class="notification is-danger">
            <button class="delete"></button>

            <ul>
                <li>{!! \Session::get('error') !!}</li>
            </ul>
        </div>
        @endif

        @if($errors->any())
        <div class="notification is-danger">
            <button class="delete"></button>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </div>
        @endif

        <form method="POST" action="{{ route("login.create") }}">
            @csrf

            <input
            class="input mb-3"
            type="email"
            name="email"
            placeholder="email"
            value="{{old('email')}}"
            >

            <input
            class="input mb-3"
            type="password"
            name="password"
            placeholder="password"
            >

            <input
            class="button is-success"
            type="submit"
            name="submit"
            value="Login">
        </form>
    </div>
</div>
</section>
@endsection
