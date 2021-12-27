@extends("layouts.dashboard")

@section("title", "Index")

@section("content")
<div class="table-container">
    <table class="table is-striped is-hoverable is-fullwidth">
        <thead>
            <tr>
                <th>#</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Type</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->first_name }}</td>
                <td>{{ $user->last_name }}</td>
                <td>{{ $user->type }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
