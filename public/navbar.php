<?php @session_start(); ?>
<!-- start Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold primary-color fs-3 d-flex align-items-center" href="index.php">
            FitLife
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link fw-500" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-500" href="vegan-diet.php">Diet Plans</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-500" href="exercises.php">Exercises</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-500" href="BMI_calculator.php">Calculators</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <?php if(!isset($_SESSION['user'])): ?>
                <li class="nav-item">
                    <a class="nav-link fw-500" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn ms-2 px-3 fw-500 register-btn" href="register.php">Register</a>
                </li>
                <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link fw-500" href="profile.php">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-500" href="routes/routes.php?action=logout">Logout</a>
                </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
<!-- end Navbar -->