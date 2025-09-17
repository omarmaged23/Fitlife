<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts Link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital,opsz,wght@0,6..96,400..900;1,6..96,400..900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Manrope:wght@200..800&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <!-- Bootstrap Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Global css file for navbar -->
    <link rel="stylesheet" href="css/navbarStyla.css">
    <!-- Custom css file for exercises -->
    <link rel="stylesheet" href="css/exercises.css?v=<?php echo time(); ?>">
    <title>Exercises - FitLife</title>
</head>
<body>
<!-- start Navbar -->
<?php require_once 'navbar.php'; ?>
<!-- end Navbar -->

    <!-- Exercise Navigation -->
    <section class="exercise-nav">
        <div class="container">
            <a href="#cardio" class="exercise-nav-item" data-category="cardio">Cardio</a>
            <a href="#strength" class="exercise-nav-item" data-category="strength">Strength</a>
            <a href="#flexibility" class="exercise-nav-item" data-category="flexibility">Flexibility</a>
            <a href="#core" class="exercise-nav-item" data-category="core">Core</a>
            <a href="#upper-body" class="exercise-nav-item" data-category="upper-body">Upper Body</a>
            <a href="#lower-body" class="exercise-nav-item" data-category="lower-body">Lower Body</a>
        </div>
    </section>

    <!-- Hero Section -->
    <section class="exercise-hero">
        <div class="container text-center">
            <h1 class="pacifico-regular">Exercise Library</h1>
            <p>Discover a comprehensive collection of exercises designed for all fitness levels and body parts to help you achieve your fitness goals</p>
        </div>
    </section>

    <!-- Exercise Overview -->
    <section class="exercise-info-section">
        <div class="container">
            <h2 class="section-title">About Our Exercise Library</h2>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="tip-card">
                        <h4>What is Our Exercise Library?</h4>
                        <p>Our comprehensive exercise library features over 50 carefully selected exercises across 6 different categories. Each exercise includes detailed instructions, targeted muscle groups, equipment requirements, and difficulty levels. Whether you're a beginner or advanced athlete, you'll find exercises tailored to your fitness level and goals.</p>
                    </div>
                </div>
            </div>
            
            <div class="row mt-4">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="tip-card text-center">
                        <h4>Cardio Exercises</h4>
                        <p>Improve heart health and burn calories with our cardiovascular exercises</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="tip-card text-center">
                        <h4>Strength Training</h4>
                        <p>Build muscle and increase strength with our resistance exercises</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="tip-card text-center">
                        <h4>Flexibility</h4>
                        <p>Improve mobility and reduce muscle tension with stretching exercises</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="tip-card text-center">
                        <h4>Core Training</h4>
                        <p>Strengthen your core and improve stability with targeted exercises</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Exercise Categories -->
    <section class="exercise-info-section">
        <div class="container">
            <h2 class="section-title">Exercise Categories</h2>
            <div class="exercise-categories">
                <!-- Cardio Exercises -->
                <div class="exercise-category cardio" id="cardio">
                    <h3>Cardio Exercises</h3>
                    <p class="category-description">High-energy exercises to improve cardiovascular health and burn calories</p>
                    <div class="exercise-grid" id="cardio-exercises">
                        <!-- Cardio exercises will be loaded here -->
                    </div>
                </div>

                <!-- Strength Exercises -->
                <div class="exercise-category strength" id="strength">
                    <h3>Strength Training</h3>
                    <p class="category-description">Resistance exercises to build muscle and increase strength</p>
                    <div class="exercise-grid" id="strength-exercises">
                        <!-- Strength exercises will be loaded here -->
                    </div>
                </div>

                <!-- Flexibility Exercises -->
                <div class="exercise-category flexibility" id="flexibility">
                    <h3>Flexibility & Stretching</h3>
                    <p class="category-description">Stretching exercises to improve mobility and reduce muscle tension</p>
                    <div class="exercise-grid" id="flexibility-exercises">
                        <!-- Flexibility exercises will be loaded here -->
                    </div>
                </div>

                <!-- Core Exercises -->
                <div class="exercise-category core" id="core">
                    <h3>Core & Abs</h3>
                    <p class="category-description">Targeted exercises to strengthen your core and improve stability</p>
                    <div class="exercise-grid" id="core-exercises">
                        <!-- Core exercises will be loaded here -->
                    </div>
                </div>

                <!-- Upper Body Exercises -->
                <div class="exercise-category upper-body" id="upper-body">
                    <h3>Upper Body</h3>
                    <p class="category-description">Exercises to strengthen arms, shoulders, chest, and back</p>
                    <div class="exercise-grid" id="upper-body-exercises">
                        <!-- Upper body exercises will be loaded here -->
                    </div>
                </div>

                <!-- Lower Body Exercises -->
                <div class="exercise-category lower-body" id="lower-body">
                    <h3>Lower Body</h3>
                    <p class="category-description">Exercises to strengthen legs, glutes, and improve lower body power</p>
                    <div class="exercise-grid" id="lower-body-exercises">
                        <!-- Lower body exercises will be loaded here -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Exercise Tips Section -->
    <section class="exercise-info-section">
        <div class="container">
            <h2 class="section-title">Exercise Safety Tips</h2>
            <div class="tips-grid">
                <div class="tip-card">
                    <h4>Warm Up First</h4>
                    <p>Always start with a 5-10 minute warm-up to prepare your muscles and joints for exercise</p>
                </div>
                <div class="tip-card">
                    <h4>Use Proper Form</h4>
                    <p>Focus on correct technique rather than speed or weight to prevent injuries</p>
                </div>
                <div class="tip-card">
                    <h4>Start Slowly</h4>
                    <p>Begin with lighter weights and fewer repetitions, gradually increasing intensity</p>
                </div>
                <div class="tip-card">
                    <h4>Stay Hydrated</h4>
                    <p>Drink water before, during, and after your workout to maintain proper hydration</p>
                </div>
                <div class="tip-card">
                    <h4>Listen to Your Body</h4>
                    <p>Stop immediately if you feel pain or discomfort beyond normal muscle fatigue</p>
                </div>
                <div class="tip-card">
                    <h4>Cool Down</h4>
                    <p>End your workout with stretching to help muscles recover and prevent stiffness</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Back to Home Button -->
    <a href="index.php" class="back-to-home" title="Back to Home">
        🏠
    </a>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <!-- Custom JS -->
    <script src="js/exercises.js?v=<?php echo time(); ?>"></script>
</body>
</html>