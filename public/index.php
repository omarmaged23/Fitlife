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
     <!--custom Css Link -->
     <link rel="stylesheet" href="css/style.css">
     <title>Home</title>
</head>
<body>

    <!-- start Hero -->
    <section id="home" class="hero">
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="6000">
                <img src="./assets/images/slider1.jpg" class="d-block w-100" alt="Train smart, feel strong">
                <div class="carousel-caption d-md-block">
                  <h1 class="hero-title mb-2">Train Smart</h1>
                  <p class="hero-subtitle mb-4">Personalized workouts to build strength and improve performance.</p>
                  <div class="hero-ctas d-flex gap-2 justify-content-center">
                    <a href="register.php" class="btn btn-hero">Get Started</a>
                    <a href="#diets" class="btn btn-hero-outline">Explore Plans</a>
                  </div>
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="6000">
                <img src="./assets/images/slider2.jpg" class="d-block w-100" alt="Eat clean, stay energized">
                <div class="carousel-caption d-md-block">
                  <h1 class="hero-title mb-2">Eat Clean</h1>
                  <p class="hero-subtitle mb-4">Balanced nutrition tailored to your goals and lifestyle.</p>
                  <div class="hero-ctas d-flex gap-2 justify-content-center">
                    <a href="#diets" class="btn btn-hero">View Diets</a>
                    <a href="#calculators" class="btn btn-hero-outline">Calculate Calories</a>
                  </div>
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="6000">
                <img src="./assets/images/slider3.jpg" class="d-block w-100" alt="Track progress, stay motivated">
                <div class="carousel-caption d-md-block">
                  <h1 class="hero-title mb-2">Track Progress</h1>
                  <p class="hero-subtitle mb-4">Visualize your journey and stay motivated every day.</p>
                  <div class="hero-ctas d-flex gap-2 justify-content-center">
                    <a href="#calculators" class="btn btn-hero">Try Calculators</a>
                    <a href="#coaches" class="btn btn-hero-outline">Find a Coach</a>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </section>
     <!-- end Hero -->

     <!-- start About -->
     <section id="about" class="about py-5">
        <div class="container">
            <h2 class="title-section pacifico-regular mb-4">About FitLife</h2>
            <div class="row align-items-center g-4">
                <div class="col-lg-6">
                    <p class="lead text-muted mb-3">FitTrack helps you monitor your workouts, track your calories, and stay motivated to achieve your fitness goals.</p>
                    <p class="text-muted">We combine smart tracking, friendly insights, and fun challenges to keep you consistent and make progress visible.</p>

                    <div class="row g-3 mt-2">
                        <div class="col-6 col-md-3">
                            <div class="about-feature text-center">
                                <div class="emoji" aria-hidden="true">🏃</div>
                                <div class="label">Workouts</div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="about-feature text-center">
                                <div class="emoji" aria-hidden="true">🔥</div>
                                <div class="label">Calories</div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="about-feature text-center">
                                <div class="emoji" aria-hidden="true">📈</div>
                                <div class="label">Progress</div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="about-feature text-center">
                                <div class="emoji" aria-hidden="true">💤</div>
                                <div class="label">Sleep</div>
                            </div>
                        </div>
                    </div>

                    <div class="row g-3 mt-3">
                        <div class="col-md-6">
                            <div class="about-card h-100">
                                <h6 class="mb-1">Track workouts easily</h6>
                                <p class="small text-muted mb-0">Log sets, reps, and time in seconds.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="about-card h-100">
                                <h6 class="mb-1">Personalized nutrition plans</h6>
                                <p class="small text-muted mb-0">Get macros tailored to your goals.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="about-card h-100">
                                <h6 class="mb-1">Monitor your progress</h6>
                                <p class="small text-muted mb-0">Visualize trends with clean charts.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="about-card h-100">
                                <h6 class="mb-1">Stay motivated with challenges</h6>
                                <p class="small text-muted mb-0">Join streaks and community goals.</p>
                            </div>
                        </div>
                    </div>

                    <a href="#" class="btn btn-outline-primary mt-4">Join Now</a>
                </div>
                <div class="col-lg-6">
                    <img src="./assets/images/about.jpg" alt="About Visual" class="img-fluid rounded-3 shadow-sm">
                </div>
            </div>
        </div>
     </section>
     <!-- end About -->

    
     <!-- start Diet Plans -->
     <section id="diets" class="diets py-5">
        <div class="container">
            <h2 class="title-section pacifico-regular mb-4">Diet Plans</h2>
                <div class="row g-4">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="diet-card h-100">
                        <img src="./assets/images/2211.i402.011.S.m004.c13.Cartoon avocado flat composition.jpg" class="diet-img" alt="Vegan Diet">
                        <div class="diet-body">
                            <h5 class="diet-title">Vegan</h5>
                            <a href="vegan-diet.php" class="btn  w-100">Explore</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="diet-card h-100">
                        <img src="./assets/images/4803731.jpg" class="diet-img" alt="Keto Diet">
                        <div class="diet-body">
                            <h5 class="diet-title">Keto</h5>
                            <a href="keto-diet.php" class="btn  w-100">Explore</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="diet-card h-100">
                        <img src="./assets/images/Sandy_Agr-01_Single-09.jpg" class="diet-img" alt="Mediterranean Diet">
                        <div class="diet-body">
                            <h5 class="diet-title">Mediterranean</h5>
                            <a href="mediterranean-diet.php" class="btn  w-100">Explore</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="diet-card h-100">
                        <img src="./assets/images/wt8j_phm9_221215.jpg" class="diet-img" alt="Low-Carb Diet">
                        <div class="diet-body">
                            <h5 class="diet-title">Low-Carb</h5>
                            <a href="low-carb-diet.php" class="btn  w-100">Explore</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </section>
     <!-- end Diet Plans -->

     <!-- start Exercises Preview -->
     <section id="exercises" class="exercises-preview py-5">
        <div class="container">
            <h2 class="title-section pacifico-regular mb-4">Exercise Library</h2>
            <div class="row align-items-center g-4">
                <div class="col-lg-6">
                    <h3 class="mb-3">Diverse Exercise Collection</h3>
                    <p class="lead text-muted mb-3">Discover over 50 exercises designed for all fitness levels and body parts.</p>
                    <p class="text-muted mb-4">From cardiovascular exercises to strength training and flexibility, we have everything you need to achieve your fitness goals.</p>
                    
                    <div class="row g-3 mb-4">
                        <div class="col-6 col-md-3">
                            <div class="exercise-feature text-center">
                                <div class="emoji" aria-hidden="true">🏃‍♂️</div>
                                <div class="label">Cardio</div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="exercise-feature text-center">
                                <div class="emoji" aria-hidden="true">💪</div>
                                <div class="label">Strength</div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="exercise-feature text-center">
                                <div class="emoji" aria-hidden="true">🧘‍♀️</div>
                                <div class="label">Flexibility</div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="exercise-feature text-center">
                                <div class="emoji" aria-hidden="true">🔥</div>
                                <div class="label">Core</div>
                            </div>
                        </div>
                    </div>
                    
                    <a href="exercises.php" class="btn btn-outline-primary">Explore Exercises</a>
                </div>
                <div class="col-lg-6">
                    <img src="./assets/images/person-exercising-with-personal-trainer.png" alt="Exercise Library" class="img-fluid rounded-3 shadow-sm">
                </div>
            </div>
        </div>
     </section>
     <!-- end Exercises Preview -->
    
     <!-- Start Coaches -->
     <section id="coaches" class="coaches py-5">
        <div class="container">
            <h2 class="title-section pacifico-regular mb-4">Coaches</h2>
            <div class="row g-4 justify-content-center align-items-center text-center gap-2">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="coach-card h-100">
                        <img src="./assets/images/confident-sportsman-with-headphones-jumping-rope.jpg" class="object-fit-contain w-100" alt="">
                        <h3>John Doe</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.</p>
                        <a href="#" class="btn  w-100">View Profile</a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="coach-card h-100">
                        <img src="./assets/images/portrait-handsome-man.jpg" class="object-fit-contain w-100" alt="">
                        <h3>Michael Smith</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.</p>
                        <a href="#" class="btn  w-100">View Profile</a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="coach-card h-100">
                        <img src="./assets/images/fit-woman-gym-side-view.jpg" class="object-fit-contain w-100" alt="">
                        <h3>Emily Johnson</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.</p>
                        <a href="#" class="btn  w-100">View Profile</a>
                    </div>
                </div>
            </div>
        </div>
     </section>
     <!-- End Coaches -->

    <!-- Start Calculators -->
    <section id="calculators" class="calculators py-5">
        <div class="container">
            <h2 class="title-section pacifico-regular mb-4">Calculators</h2>
            <div class="row g-4 justify-content-center">
                <div class="col-12 col-md-6 col-lg-4">
                    <a href="BMI_calculator.php" class="calc-card d-block h-100">
                        <div class="calc-body text-center p-4">
                            <div class="calc-emoji mb-2" aria-hidden="true"><img src="./assets/images/weight-scale_10895924.png" alt="weight" class="img-fluid" width="50" height="50"></div>
                            <h5 class="mb-2">Ideal Weight Calculator</h5>
                            <p class="text-muted small mb-0">Estimate your healthy weight range.</p>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <a href="calorie_calculator.php" class="calc-card d-block h-100">
                        <div class="calc-body text-center p-4">
                            <div class="calc-emoji mb-2" aria-hidden="true"><img src="./assets/images/calories_10968079.png" alt="calories" class="img-fluid" width="50" height="50"></div>
                            <h5 class="mb-2">Calories Calculator</h5>
                            <p class="text-muted small mb-0">Find your daily calorie needs (TDEE).</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Calculators -->
   <!-- CTA -->
   <section class="cta py-5">
    <div class="container">
        <p class="text-center text-white">Start Your Fitness Journey with FitLife</p>
        <a href="register.php" class="btn btn-primary">Get Started</a>
    </div>
   </section>
   <!-- End CTA -->

   <!-- Start Footer -->
   <footer class="footer">
    <div class="container">
        <p class="text-center text-white">Copyright © 2025 FitTrack. All rights reserved.</p>
    </div>
   </footer>
   <!-- End Footer -->

    <!-- Bootstrap Bundle with Popper -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- JavaScript Link -->
     <script src="js/index.js"></script>
</body>
</html>
