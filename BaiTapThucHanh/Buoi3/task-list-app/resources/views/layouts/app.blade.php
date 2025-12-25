<!doctype html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <title>Task List App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{ route('tasks.index') }}">Task List App</a>
        <div class="navbar-nav">
            <a class="nav-link" href="{{ route('tasks.index') }}">Danh sách</a>
            <a class="nav-link" href="{{ route('tasks.create') }}">Thêm mới</a>
        </div>
    </div>
</nav>

<div class="container mt-4">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @yield('content')
</div>

</body>
</html>
