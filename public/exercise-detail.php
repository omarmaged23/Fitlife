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
    <link rel="stylesheet" href="css/exercises.css">
    <title>Exercise Details - FitLife</title>
</head>
<body>
<!-- start Navbar -->
<?php require_once 'navbar.php'; ?>
<!-- end Navbar -->
    <!-- Exercise Navigation -->
    <section class="exercise-nav">
        <div class="container">
            <a href="exercises.php" class="exercise-nav-item">← Back to Exercises</a>
            <a href="#instructions" class="exercise-nav-item">Instructions</a>
            <a href="#muscles" class="exercise-nav-item">Muscles</a>
            <a href="#tips" class="exercise-nav-item">Tips</a>
        </div>
    </section>

    <!-- Hero Section -->
    <section class="exercise-hero">
        <div class="container text-center">
            <h1 class="pacifico-regular" id="exerciseTitle">Exercise Name</h1>
            <p id="exerciseDescription">Exercise Description</p>
        </div>
    </section>

    <!-- Exercise Details Section -->
    <section class="exercise-info-section" id="instructions">
        <div class="container">
            <h2 class="section-title">Exercise Instructions</h2>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="tip-card">
                        <h4>How to Perform</h4>
                        <ol class="instructions-list" id="exerciseInstructions">
                            <!-- Instructions will be loaded here -->
                        </ol>
                    </div>
                </div>
            </div>
            
            <div class="row mt-4">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="tip-card text-center">
                        <h4>Duration</h4>
                        <p id="exerciseDuration">-</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="tip-card text-center">
                        <h4>Difficulty</h4>
                        <p id="exerciseDifficulty">-</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="tip-card text-center">
                        <h4>Equipment</h4>
                        <p id="exerciseEquipment">-</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="tip-card text-center">
                        <h4>Repetitions</h4>
                        <p id="exerciseReps">-</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Exercise Video Section -->
    <section class="exercise-info-section">
        <div class="container">
            <h2 class="section-title">Exercise Demonstration</h2>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="tip-card text-center">
                        <h4>Video Tutorial</h4>
                        <div class="video-placeholder">
                            <div>
                                <i class="fas fa-play-circle" style="font-size: 3rem; color: var(--primary-color); margin-bottom: 1rem;"></i>
                                <p>Exercise demonstration video</p>
                                <small class="text-muted">Video will be added soon </small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Targeted Muscles Section -->
    <section class="exercise-info-section" id="muscles">
        <div class="container">
            <h2 class="section-title">Targeted Muscles</h2>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="tip-card">
                        <h4>Primary Muscles Worked</h4>
                        <div class="muscles-list" id="exerciseMuscles">
                            <!-- Muscles will be loaded here -->
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row mt-4">
                <div class="col-lg-6 mb-4">
                    <div class="tip-card">
                        <h4>Equipment Needed</h4>
                        <ul class="equipment-list" id="exerciseEquipmentList">
                            <!-- Equipment will be loaded here -->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="tip-card">
                        <h4>Exercise Details</h4>
                        <div class="exercise-details">
                            <div class="detail-item mb-3">
                                <strong>Sets:</strong>
                                <span id="detailSets">-</span>
                            </div>
                            <div class="detail-item mb-3">
                                <strong>Rest Time:</strong>
                                <span>30-60 seconds between sets</span>
                            </div>
                            <div class="detail-item mb-3">
                                <strong>Frequency:</strong>
                                <span>2-3 times per week</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tips Section -->
    <section class="exercise-info-section" id="tips">
        <div class="container">
            <h2 class="section-title">Exercise Tips</h2>
            <div class="tips-grid">
                <div class="tip-card">
                    <h4>Proper Form</h4>
                    <p>Focus on maintaining correct posture and technique throughout the entire movement</p>
                </div>
                <div class="tip-card">
                    <h4>Breathing</h4>
                    <p>Breathe out during the exertion phase and breathe in during the relaxation phase</p>
                </div>
                <div class="tip-card">
                    <h4>Progression</h4>
                    <p>Start with lighter weights or fewer repetitions and gradually increase intensity</p>
                </div>
                <div class="tip-card">
                    <h4>Safety</h4>
                    <p>Stop immediately if you feel sharp pain or discomfort beyond normal muscle fatigue</p>
                </div>
                <div class="tip-card">
                    <h4>Warm-up</h4>
                    <p>Always warm up with light cardio and dynamic stretching before starting</p>
                </div>
                <div class="tip-card">
                    <h4>Cool-down</h4>
                    <p>End your workout with static stretching to help muscles recover</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Exercises Section -->
    <section class="exercise-info-section">
        <div class="container">
            <h2 class="section-title">Related Exercises</h2>
            <div class="row g-4" id="relatedExercises">
                <!-- Related exercises will be loaded here -->
            </div>
        </div>
    </section>

    <!-- Back to Home Button -->
    <a href="index.php" class="back-to-home" title="Back to Home">
        🏠
    </a>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>
    <!-- Custom JS -->
    <script src="js/exercise-detail.js"></script>
</body>
</html>