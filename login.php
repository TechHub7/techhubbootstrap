<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
    <style>
        /* Gradient background */
        body {
            background: linear-gradient(to right, #00c6ff, #0072ff);
            height: 100vh;
        }

        .card {
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .card img {
            display: block;
            margin: 0 auto 20px;
            width: 80px;
        }
        #here{
            color: white;
        }
    </style>
</head>
<body>
    <section class="container d-flex justify-content-center align-items-center vh-100">
        <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="post" class="form-group">
            <div class="card p-4" style="width: 100%; max-width: 400px;">
                <!-- Profile Image -->
                <img src="./img/profile-user.png" alt="Logo" class="d-flex justify-content-center align-items-center">
                <h3 class="text-center mb-4">Login</h3>
                
                <!-- Email Field -->
                <label for="email" class="form-label">Email ID</label>
                <input class="form-control mb-2" type="email" name="email" id="email" placeholder="Enter your email" required>

                <!-- Password Field -->
                <label for="password" class="form-label">Password</label>
                <input class="form-control mb-2" type="password" name="password" id="password" placeholder="Enter your password" required>

                <!-- Remember Me and Forgot Password -->
                <div class="d-flex justify-content-between mb-3">
                    <label>
                        <input type="checkbox" name="remember" id="remember"> Remember Me
                    </label>
                    <a href="./forgot.php">Forgot Password?</a>
                </div>

                <!-- Login Button -->
                <button class="btn btn-primary mb-2" type="submit">Login</button>
            </div>

            <!-- Signup Link -->
            <br>
            <div>
                <h5>Not yet a member? Create an account <a id="here" href="./signup.php">here.</a></h5>
            </div>
        </form>
    </section>
</body>
</html>
