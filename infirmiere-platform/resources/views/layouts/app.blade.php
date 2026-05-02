<!DOCTYPE html>
<html>
<head>
    <title>Infirmières Platform</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-dark bg-dark px-3">
    <a class="navbar-brand" href="/dashboard">Dashboard</a>
    <a href="/logout" class="btn btn-danger btn-sm">Logout</a>
</nav>

<div class="container mt-4">
    @yield('content')
</div>

</body>
</html>