<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Booststrape Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Custom login & register CSS -->
    <link rel="stylesheet" href="css/Auth.css">
    <title>Register</title>
</head>
<body>
    <?php
        @session_start();
        if(isset($_SESSION['user'])){
            header("Location: vegan-diet.php");
        }
    ?>

    <?php if(isset($_SESSION['error'])): ?>
        <div class="position-fixed top-0 end-0 p-3" style="z-index: 1055;">
            <div id="liveToast" class="toast align-items-center bg-danger text-white border-0" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="d-flex">
                    <div class="toast-body">
                        <?php echo htmlspecialchars($_SESSION['error']); ?>
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
            </div>
        </div>
        <?php unset($_SESSION['error']); endif; ?>
    <!-- start Register -->
    <section id="register" class="login-section py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-6">
                    <div class="login-card p-4 p-md-5">
                        <h3 class="text-center mb-3 primary-color">Create your account</h3>
                        <p class="text-center text-muted mb-4">Join FitTrack and start your fitness journey today</p>
                        <form action="routes/routes.php?action=register" method="post">
                            <div class="mb-3">
                                <label class="form-label">Full name</label>
                                <input type="text" name="name" class="form-control form-control-lg" placeholder="John Doe" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email address</label>
                                <input type="email" name="email" class="form-control form-control-lg" placeholder="name@example.com" required>
                            </div>
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <label class="form-label">Age</label>
                                    <input type="number" name="age" class="form-control form-control-lg" min="12" max="100" placeholder="24" required>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Gender</label>
                                    <select class="form-select form-select-lg" name="gender" required>
                                        <option value="" selected disabled>Choose...</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Goal</label>
                                    <select class="form-select form-select-lg" name="goal" required>
                                        <option value="" selected disabled>Choose...</option>
                                        <option value="Weight loss">Weight loss</option>
                                        <option value="Muscle gain">Muscle gain</option>
                                        <option value="Maintain weight">Maintain weight</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row g-3 mt-0">
                                <div class="col-md-6">
                                    <label class="form-label">Height (cm)</label>
                                    <div class="input-group input-group-lg">
                                        <input type="number" class="form-control" name="height" min="100" max="250" placeholder="175" required>
                                        <span class="input-group-text">cm</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Weight (kg)</label>
                                    <div class="input-group input-group-lg">
                                        <input type="number" class="form-control" name="weight" min="30" max="300" placeholder="72" required>
                                        <span class="input-group-text">kg</span>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 mt-3">
                                <label class="form-label">Activity level</label>
                                <select class="form-select form-select-lg" name="activity" required>
                                    <option value="" selected disabled>Select activity</option>
                                    <option value="Sedentary">Sedentary</option>
                                    <option value="Lightly active">Lightly active</option>
                                    <option value="Moderately active">Moderately active</option>
                                    <option value="Very active">Very active</option>
                                </select>
                                <div class="form-text">Used to estimate your daily calories (TDEE).</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label mb-0">Password</label>
                                <input type="password" name="password" class="form-control form-control-lg" placeholder="••••••••" minlength="6" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label mb-0">Confirm password</label>
                                <input type="password" name="confirmPassword" class="form-control form-control-lg" placeholder="••••••••" minlength="6" required>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="terms" required>
                                <label class="form-check-label" for="terms">I agree to the Terms and Privacy Policy</label>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg w-100">Create account</button>
                        </form>
                        <div class="sep my-4 text-center"><span>or sign up with</span></div>
                        <div class="row g-2">
                            <div class="col-12">
                                <a href='google-auth/google-login.php' class="btn btn-google w-100"> Google</a>
                            </div>
                        </div>
                        <p class="text-center text-muted mt-4 mb-0">Already have an account? <a href="login.php">Sign in</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end Login -->
    <!-- Back to Home Button -->
    <a href="index.php" class="back-to-home" title="Back to Home">
        🏠
    </a>
    <!-- Bootstrap Bundle with Popper -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let toastEl = document.getElementById('liveToast');
            let toast = new bootstrap.Toast(toastEl, {
                delay: 4000 // auto-close after 4s
            });
            toast.show();
        });
    </script>
</body>
</html>