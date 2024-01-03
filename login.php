<?php
include_once 'koneksi.php'
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warnet</title>
    <!-- Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 display-flex">

    <div class="container mt-5 p-8">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title text-center text-2xl font-bold">LOGIN FORM</h2>
                        <hr>
                        <form action="login_act.php" method="post">
                            <div class="mb-3 pt-3">
                                <label for="username" class="form-label">Username:</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password:</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="mb-3 flex justify-center">
                                <button type="submit"
                                    class="rounded p-3 bg-sky-500 hover:bg-sky-700 bg-clip-text text-transparent bg-gradient-to-r from-blue-500 to-sky-500 text-2xl border border-dark rounded">Masuk</button>
                                <a href="register.php">
                                    <button type="button"
                                        class="rounded p-3 bg-green-500 hover:bg-green-700 ml-4 bg-clip-text text-transparent bg-gradient-to-r from-red-500 to-yellow-500 text-2xl border border-dark rounded">Daftar</button>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>