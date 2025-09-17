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
        <title>Calorie Calculator</title>
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
        <section class="calculator-nav">
            <div class="container">
                <a href="BMI_calculator.php" class="calculator-nav-item">BMI Calculator</a>
                <a href="calorie_calculator.php" class="calculator-nav-item active">Calorie Calculator</a>
            </div>
        </section>

        <!-- Hero Section -->
        <section class="calculator-hero">
            <div class="container text-center">
                <h1 class="pacifico-regular">Calorie Calculator</h1>
                <p>Calculate your daily calorie needs based on your activity level and fitness goals for optimal health and performance</p>
            </div>
        </section>

        <!-- Calculator Section -->
        <section class="calculator-section" id="calculators">
            <div class="container">
                <h2 class="section-title">Calculate Your Daily Calories</h2>
                <div class="calculator-container">
                    <div class="row g-4">
                        <div class="col-12 col-md-6">
                            <form id="calorieForm">
                                <div class="mb-3">
                                    <label for="age" class="form-label">Age (years)</label>
                                    <input type="number" class="form-control" id="age" placeholder="Enter your age" required value="<?php echo $userData ? $userData->age : "";?>">
                                </div>
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
                                <div class="mb-3">
                                    <label for="activity" class="form-label">Activity Level</label>
                                    <select class="form-select" id="activity" required>
                                        <option value="">Select Activity Level</option>
                                        <option value="1.2" <?php echo $userData && $userData->activity_level == "Sedentary" ? "selected" : "" ?>>Sedentary (little or no exercise)</option>
                                        <option value="1.375" <?php echo $userData && $userData->activity_level == "Lightly active" ? "selected" : "" ?>>Lightly Active (light exercise 1-3 days/week)</option>
                                        <option value="1.55" <?php echo $userData && $userData->activity_level == "Moderately active" ? "selected" : "" ?>>Moderately Active (moderate exercise 3-5 days/week)</option>
                                        <option value="1.725" <?php echo $userData && $userData->activity_level == "Very active" ? "selected" : "" ?>>Very Active (hard exercise 6-7 days/week)</option>
                                        <option value="1.9" <?php echo $userData && $userData->activity_level == "Extra Active" ? "selected" : "" ?>>Extra Active (very hard exercise + physical job)</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="goal" class="form-label">Goal</label>
                                    <select class="form-select" id="goal" required>
                                        <option value="" <?php echo !$userData || !($userData->goal) ? 'selected' : '';?> disabled>Choose...</option>
                                        <option value="lose" <?php echo  $userData && $userData->goal =='Weight loss' ? 'selected' : '';?>>Weight loss</option>
                                        <option value="maintain" <?php echo $userData && $userData->goal =='Muscle gain' ? 'selected' : '';?>>Muscle gain</option>
                                        <option value="gain" <?php echo $userData && $userData->goal =='Maintain weight' ? 'selected' : '';?>>Maintain weight</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Calculate Calories</button>
                            </form>
                        </div>
                        <div class="col-12 col-md-6">
                            <h3 class="text-center primary-color mb-4">Result</h3>
                            <div id="calorieResult" class="result"></div>
                            <div id="calorieAdvices" class="advices"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Calorie Information Section -->
        <section class="calculator-section">
            <div class="container">
                <h2 class="section-title">Understanding Calorie Needs</h2>
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="tip-card">
                            <h4>What are Daily Calorie Needs?</h4>
                            <p>Your daily calorie needs depend on your Basal Metabolic Rate (BMR) and activity level. BMR is the number of calories your body needs to maintain basic functions at rest, while Total Daily Energy Expenditure (TDEE) includes calories burned through physical activity.</p>
                        </div>
                    </div>
                </div>
                
                <div class="row mt-4">
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="tip-card text-center">
                            <h4>Sedentary</h4>
                            <p>Little or no exercise</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="tip-card text-center">
                            <h4>Lightly Active</h4>
                            <p>Light exercise 1-3 days/week</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="tip-card text-center">
                            <h4>Moderately Active</h4>
                            <p>Moderate exercise 3-5 days/week</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="tip-card text-center">
                            <h4>Very Active</h4>
                            <p>Hard exercise 6-7 days/week</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Tips Section -->
        <section class="calculator-section">
            <div class="container">
                <h2 class="section-title">Calorie Management Tips</h2>
                <div class="tips-grid">
                    <div class="tip-card">
                        <h4>Track Your Food</h4>
                        <p>Use a food diary or app to monitor your daily calorie intake and stay on track with your goals.</p>
                    </div>
                    <div class="tip-card">
                        <h4>Eat Balanced Meals</h4>
                        <p>Include protein, healthy fats, and complex carbohydrates in each meal for optimal nutrition.</p>
                    </div>
                    <div class="tip-card">
                        <h4>Stay Hydrated</h4>
                        <p>Drink plenty of water throughout the day to support metabolism and reduce hunger.</p>
                    </div>
                    <div class="tip-card">
                        <h4>Plan Your Meals</h4>
                        <p>Meal planning helps you stay within your calorie goals and make healthier food choices.</p>
                    </div>
                    <div class="tip-card">
                        <h4>Monitor Progress</h4>
                        <p>Regularly check your weight and adjust your calorie intake based on your progress.</p>
                    </div>
                    <div class="tip-card">
                        <h4>Be Patient</h4>
                        <p>Healthy weight changes take time. Focus on sustainable habits rather than quick fixes.</p>
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