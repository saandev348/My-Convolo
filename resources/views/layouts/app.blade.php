<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>@yield('title')</title>
    <style>
        .saan-display {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}
.saan-display form {
    width: 45%;
    margin:auto;
}
    </style>
</head>
<body>
@section('header')
        <header>
            <!-- Your dynamic header content goes here -->
            <!-- <h1>My Laravel App Header</h1> -->
        </header>
    @show

    <div class="content">
        @yield('content')
    </div>

    @section('footer')
        <footer>
            <!-- Your dynamic footer content goes here -->
            <!-- <p>&copy; 2024 My Laravel App</p> -->
        </footer>
    @show
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
