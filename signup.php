<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="./bootstrap/css/bootstrap.css" rel="stylesheet">
    <style>
        /* Gradient background for the page */
        body {
            background: linear-gradient(to right, #00c6ff, #0072ff);
            height: 100vh;
        }

        /* Card gradient background */
        .card {
            background: linear-gradient(to right, #00b3b3, #004c8c);
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .card img {
            display: block;
            margin: 0 auto 20px;
            width: 80px;
        }

        .form-label {
            font-weight: bold;
        }

        .btn-light {
            background-color: #ffffff;
            border: none;
        }
    </style>
</head>
<body>
    <section class="container d-flex justify-content-center align-items-center vh-100">
        <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="post" class="form-group">
            <div class="card p-4" style="width: 100%; max-width: 400px;">
                <!-- Profile Image -->
                <img src="./img/profile-user.png" alt="Logo" class="d-flex justify-content-center align-items-center">
                
                <!-- Title -->
                <h3 class="text-center text-white mb-3">Create an Account</h3>
                
                <!-- Full Name Field -->
                <label for="name" class="form-label text-white">Full Name</label>
                <input class="form-control mb-2" type="text" name="name" id="name" placeholder="Full Name" required>

                <!-- Email Field -->
                <label for="email" class="form-label text-white">Email Address</label>
                <input class="form-control mb-2" type="email" name="email" id="email" placeholder="Email Address" required>

                <!-- Password Field -->
                <label for="password" class="form-label text-white">Password</label>
                <input class="form-control mb-2" type="password" name="password" id="password" placeholder="Password" required>

                <!-- Confirm Password Field -->
                <label for="confirmPassword" class="form-label text-white">Confirm Password</label>
                <input class="form-control mb-2" type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirm Password" required>

                <!-- Submit Button -->
                <button class="btn btn-light mb-2 w-100" type="submit">Sign Up</button>

                <!-- Already have an account? -->
                <div class="text-center mt-3">
                    <p class="text-white">Already a member? <a href="login.php" class="text-white">Login here</a></p>
                </div>
            </div>
        </form>
    </section>
</body>
</html>