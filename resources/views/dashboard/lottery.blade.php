@extends("layouts.dashboard")

@section("title", "Lottery")

@section("content")

<div class="has-text-centered">
    <form method="POST" action="{{ route('dashboard.lottery.create')}}" class="mb-5">
        @csrf

        <input class="button is-success is-large" type="submit" name="submit" value="Find random user!">
    </form>


    @if (\Session::has('success'))
    <div class="notification is-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
    @endif

    @if (\Session::has('error'))
    <div class="notification is-danger">
        <ul>
            <li>{!! \Session::get('error') !!}</li>
        </ul>
    </div>
    @endif
</div>
@endsection
