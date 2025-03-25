{{-- resources/views/home.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library System - Home</title>
    <!-- Add Bootstrap CSS or any other preferred CSS framework -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 bg-dark text-white" style="height: 100vh;">
                <h4 class="text-center mt-3">Library System</h4>
                <ul class="nav flex-column mt-5">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Books</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Authors</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Categories</a>
                    </li>
                </ul>
            </div>

            <!-- Main Content Area -->
            <div class="col-md-9">
                <!-- Navbar -->
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Library System</a>
                        <div class="d-flex">
                            <!-- Logout Button -->
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button class="btn btn-danger" type="submit">Logout</button>
                            </form>
                        </div>
                    </div>
                </nav>

                <!-- Page Content -->
                <div class="container mt-5">
                    <h2>Welcome to the Library</h2>
                    <p>This is the home page of your library system. You can manage books, authors, and categories here.</p>
                    <!-- More content goes here -->
                </div>
            </div>
        </div>
    </div>

    <!-- Add Bootstrap JS (optional, for any interactive components) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
