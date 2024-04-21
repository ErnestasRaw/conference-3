<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conferences</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>


<div class="container">
    @auth
        <div class="row">
            <div class="col-md-6">
                <p class="text-right">Username: {{ Auth::user()->name }}</p>
            </div>
            <div class="col-md-6 text-right">
                <a href="{{ route('conferences.create') }}" class="btn btn-outline-primary">Create Conference</a>
                <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit" class="btn btn-outline-danger">Logout</button>
                </form>
            </div>
        </div>
    @endauth
    @guest
        <div class="text-center">
            <a href="{{ route('login') }}" class="btn btn-outline-success">Login</a>
        </div>
    @endguest

    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="text-center mb-4">Conferences</h2>
            @foreach ($conferences as $conference)
                <div class="card mb-3">
                    <div class="card-body">
                        <h3>{{ $conference->name }}</h3>
                        <div class="details">
                            <p>Date: {{ $conference->date }}</p>
                            <p>Location: {{ $conference->location }}</p>
                            <p>Description: {{ $conference->description }}</p>
                        </div>
                        @auth
                            <div class="actions">
                                <a href="{{ route('conferences.edit', $conference->id) }}" class="btn btn-outline-warning">Edit</a>
                                <form action="{{ route('conferences.destroy', $conference->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger">Delete</button>
                                </form>
                            </div>
                        @endauth
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
