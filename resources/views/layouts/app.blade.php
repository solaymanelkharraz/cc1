<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdvancedEventSolutions - CC1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { background-color: #f8f9fa; }
        .navbar { margin-bottom: 30px; }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('evenements.index') }}">Event Manager</a>
            <div class="navbar-nav">
                <a class="nav-link" href="{{ route('evenements.index') }}">Events List</a>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="text-center mt-5 py-3 text-muted">
        &copy; 2026 AdvancedEventSolutions - Exam CC1
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>