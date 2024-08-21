<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <div class="container">
            <h1>Dahsboard , {{ Auth::user()->name }}</h1>
            <a href="{{ route('logout') }}">
                <button class="btn btn-info">Logout</button>
            </a>
    </div>
</body>
</html>
