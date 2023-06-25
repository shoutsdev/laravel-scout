<!DOCTYPE html>
<html>
<head>
    <title>Laravel 10 Scout Full Text Search Tutorial - shouts.dev</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <h1>Laravel 10 Scout Full Text Search Tutorial</h1>

    <form method="GET">
        <div class="input-group mb-3">
            <input
                type="text"
                name="search"
                value="{{ request()->get('search') }}"
                class="form-control"
                placeholder="Search..."
                aria-label="Search"
                aria-describedby="button-addon2">
            <button class="btn btn-success" type="submit" id="button-addon2">Search</button>
        </div>
    </form>

    <table class="table table-bordered data-table">
        <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $key=> $user)
            <tr>
                <td>{{ ++$key }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

</body>

</html>
