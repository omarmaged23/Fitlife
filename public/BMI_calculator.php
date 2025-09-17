<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Google Fonts Link -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital,opsz,wght@0,6..96,400..900;1,6..96,400..900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Manrope:wght@200..800&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
        <!-- Booststrape Link -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
          <!-- Global css file for navbar -->
          <link rel="stylesheet" href="css/navbarStyla.css">
        <!-- Custom Calculator CSS -->
        <link rel="stylesheet" href="css/Calculator.css">
         <title>BMI Calculator</title>
</head>
<body>
    <!-- start Navbar -->
    <?php require_once 'navbar.php'; ?>
    <!-- end Navbar -->
    <?php
    $userData = null;
    if(isset($_SESSION['user'])){
        require_once '../App/Database/Connection.php';
        require_once '../App/Helpers/Validation.php';
        require_once '../App/Controllers/ProfileController.php';

        $userData = (new App\Controllers\ProfileController())->getProfile();
    }
    ?>
        <!-- Calculator Navigation -->
        <section class="calculator-nav" id="calculators">
            <div class="container">
                <a href="BMI_calculator.php" class="calculator-nav-item active">BMI Calculator</a>
                <a href="calorie_calculator.php" class="calculator-nav-item">Calorie Calculator</a>
            </div>
        </section>

        <!-- Hero Section -->
        <section class="calculator-hero">
            <div class="container text-center">
                <h1 class="pacifico-regular">BMI Calculator</h1>
                <p>Calculate your Body Mass Index to understand your weight status and get personalized health recommendations</p>
            </div>
        </section>

        <!-- Calculator Section -->
        <section class="calculator-section">
            <div class="container">
                <h2 class="section-title">Calculate Your BMI</h2>
                <div class="calculator-container">
                    <div class="row g-4">
                        <div class="col-12 col-md-6">
                            <form id="bmiForm">
                                <div class="mb-3">
                                    <label for="height" class="form-label">Height (cm)</label>
                                    <input type="number" class="form-control" id="height" placeholder="Enter your height" required value="<?php echo $userData ? $userData->height : "";?>">
                                </div>
                                <div class="mb-3">
                                    <label for="weight" class="form-label">Weight (kg)</label>
                                    <input type="number" class="form-control" id="weight" placeholder="Enter your weight" required value="<?php echo $userData ? $userData->weight : "";?>">
                                </div>
                                <div class="mb-3">
                                    <label for="gender" class="form-label">Gender</label>
                                    <select class="form-select" id="gender" required>
                                        <option value="">Select Gender</option>
                                        <option value="Male" <?php echo $userData && $userData->gender == "Male" ? "selected" : "" ?>>Male</option>
                                        <option value="Female" <?php echo $userData && $userData->gender == "Female" ? "selected" : "" ?>>Female</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Calculate BMI</button>
                            </form>
                        </div>
                        <div class="col-12 col-md-6">
                            <h3 class="text-center primary-color mb-4">Result</h3>
                            <div id="bmiResult" class="result"></div>
                            <div id="bmiAdvices" class="advices"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- BMI Information Section -->
        <section class="calculator-section">
            <div class="container">
                <h2 class="section-title">Understanding BMI</h2>
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="tip-card">
                            <h4>What is BMI?</h4>
                            <p>Body Mass Index (BMI) is a measure of body fat based on height and weight. It's a useful screening tool to identify potential weight problems, though it doesn't directly measure body fat.</p>
                        </div>
                    </div>
                </div>
                
                <div class="row mt-4">
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="tip-card text-center">
                            <h4>Underweight</h4>
                            <p>BMI less than 18.5</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="tip-card text-center">
                            <h4>Normal Weight</h4>
                            <p>BMI 18.5 - 24.9</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="tip-card text-center">
                            <h4>Overweight</h4>
                            <p>BMI 25 - 29.9</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="tip-card text-center">
                            <h4>Obese</h4>
                            <p>BMI 30 or higher</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Back to Home Button -->
        <a href="index.php" class="back-to-home" title="Back to Home">
            🏠
        </a>
         
         <!-- Bootstrap JS -->
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
         <!-- Custom Calculator JS -->
         <script src="js/calculate.js"></script>
</body>
</html>