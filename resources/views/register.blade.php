@extends("layouts.app")

@section("title", "Registration")

@section("content")
<section class="hero is-light is-fullheight">

  <div class="hero-body">
    <div class="container">

        @if($errors->any())
        <div class="notification is-danger">
            <button class="delete"></button>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </div>
        @endif

        <form method="POST" action="{{ route("register.create") }}">
            @csrf

            <input
            class="input mb-3"
            type="text"
            name="first_name"
            placeholder="first name"
            value="{{old('first_name')}}"
            >

            <input
            class="input mb-3"
            type="text"
            name="last_name"
            placeholder="last name"
            value="{{old('last_name')}}"
            >

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
            class="input mb-3"
            type="password"
            name="password_confirmation"
            placeholder="repeat password"
            >

            <input
            class="button is-success"
            type="submit"
            name="submit"
            value="Register"
            >
        </form>

    </div>
  </div>

</section>

@endsection
