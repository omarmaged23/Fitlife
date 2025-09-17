<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Booststrape Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Custom login & register CSS -->
    <link rel="stylesheet" href="css/Auth.css">
    <title>Login</title>
</head>
<body>
    <?php
    @session_start();
    if(isset($_SESSION['user'])){
        header("Location: vegan-diet.php");
    }
    ?>

    <?php if(isset($_SESSION['success'])): ?>
    <div class="position-fixed top-0 end-0 p-3" style="z-index: 1055;">
        <div id="liveToast" class="toast align-items-center bg-success text-white border-0" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">
                    <?php echo htmlspecialchars($_SESSION['success']); ?>
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
    </div>
    <?php unset($_SESSION['success']); endif; ?>

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

    <!-- start Login -->
    <section id="login" class="login-section py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-6">
                    <div class="login-card p-4 p-md-5">
                        <h3 class="text-center mb-3 primary-color">Welcome back</h3>
                        <p class="text-center text-muted mb-4">Sign in to continue your fitness journey</p>
                        <form action="routes/routes.php?action=login" method="post">
                            <div class="mb-3">
                                <label class="form-label">Email address</label>
                                <input type="email" name="email" class="form-control form-control-lg" placeholder="name@example.com">
                            </div>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <label class="form-label mb-0">Password</label>
                                </div>
                                <input type="password" name="password" class="form-control form-control-lg" placeholder="••••••••">
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg w-100">Sign in</button>
                        </form>
                        <div class="sep my-4 text-center"><span>or continue with</span></div>
                        <div class="row g-2">
                            <div class="col-12">
                                <a href='google-auth/google-login.php' class="btn btn-google w-100"> Google</a>
                            </div>
                        </div>
                        <p class="text-center text-muted mt-4 mb-0">Don’t have an account? <a href="register.php">Register</a></p>
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