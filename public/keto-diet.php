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
    <!-- custom css file for diet plans -->
    <link rel="stylesheet" href="css/diet-plans.css">
    <title>Keto Diet - FitLife</title>
</head>
<body>
<!-- start Navbar -->
<?php require_once 'navbar.php'; ?>
<!-- end Navbar -->
    <!-- Diet Navigation -->
    <section class="diet-nav">
        <div class="container">
            <a href="vegan-diet.php" class="diet-nav-item">Vegan</a>
            <a href="keto-diet.html" class="diet-nav-item active">Keto</a>
            <a href="mediterranean-diet.php" class="diet-nav-item">Mediterranean</a>
            <a href="low-carb-diet.php" class="diet-nav-item">Low-Carb</a>
        </div>
    </section>

    <!-- Hero Section -->
    <section class="diet-hero">
        <div class="container text-center">
            <h1 class="pacifico-regular">Keto Diet</h1>
            <p>A low-carb, high-fat diet designed to put your body into ketosis for rapid fat burning and improved health</p>
        </div>
    </section>

    <!-- Diet Overview -->
    <section class="diet-info-section">
        <div class="container">
            <h2 class="section-title">About the Keto Diet</h2>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="tip-card">
                        <h4>What is the Keto Diet?</h4>
                        <p>The ketogenic (keto) diet is a low-carbohydrate, high-fat eating plan that aims to put your body into a state of ketosis. In ketosis, your body burns fat for fuel instead of carbohydrates. This diet typically involves consuming less than 50 grams of carbs per day while increasing healthy fats and maintaining moderate protein intake.</p>
                    </div>
                </div>
            </div>
            
            <div class="row mt-4">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="tip-card text-center">
                        <h4>Fat Burning</h4>
                        <p>Stimulates the body to burn fat as the primary energy source</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="tip-card text-center">
                        <h4>Weight Loss</h4>
                        <p>Rapid and effective weight loss results</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="tip-card text-center">
                        <h4>Mental Clarity</h4>
                        <p>Improved focus and mental clarity</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="tip-card text-center">
                        <h4>Blood Sugar Control</h4>
                        <p>Better blood sugar levels and insulin sensitivity</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Food Categories -->
    <section class="diet-info-section">
        <div class="container">
            <h2 class="section-title">Keto-Friendly Foods</h2>
            <div class="food-categories">
                <!-- Allowed Foods -->
                <div class="food-category allowed">
                    <h3>Foods to Eat</h3>
                    <ul class="food-list">
                        <li>Red meat and poultry</li>
                        <li>Fatty fish (salmon, tuna)</li>
                        <li>Eggs</li>
                        <li>High-fat dairy products</li>
                        <li>Healthy oils (olive oil, coconut oil)</li>
                        <li>Nuts and seeds</li>
                        <li>Low-carb vegetables</li>
                        <li>Avocados</li>
                        <li>Berries in limited amounts</li>
                    </ul>
                </div>

                <!-- Restricted Foods -->
                <div class="food-category restricted">
                    <h3> Foods to Avoid</h3>
                    <ul class="food-list">
                        <li>Grains (rice, wheat, oats)</li>
                        <li>Sugar and sweets</li>
                        <li>High-sugar fruits</li>
                        <li>Legumes</li>
                        <li>Starchy vegetables (potatoes, corn)</li>
                        <li>Sugary drinks and juices</li>
                        <li>Bread and pasta</li>
                        <li>Processed foods</li>
                        <li>Alcohol</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Weekly Meal Plan -->
    <section class="diet-info-section">
        <div class="container">
            <h2 class="section-title">Weekly Keto Meal Plan</h2>
            <div class="meal-plan">
                <p class="text-center mb-4" style="color: var(--text-light); font-size: 1.1rem;">Here's a balanced weekly meal plan for the keto diet</p>
                
                <div class="meal-plan-grid">
                    <!-- Monday -->
                    <div class="meal-day">
                        <h4>Monday</h4>
                        <div class="meal-time">
                            <h5>Breakfast</h5>
                            <p>Fried eggs with butter + avocado + bacon</p>
                        </div>
                        <div class="meal-time">
                            <h5>Lunch</h5>
                            <p>Chicken salad with olive oil + cheese</p>
                        </div>
                        <div class="meal-time">
                            <h5>Dinner</h5>
                            <p>Grilled salmon with roasted vegetables</p>
                        </div>
                    </div>

                    <!-- Tuesday -->
                    <div class="meal-day">
                        <h4>Tuesday</h4>
                        <div class="meal-time">
                            <h5>Breakfast</h5>
                            <p>Omelet with cheese and vegetables</p>
                        </div>
                        <div class="meal-time">
                            <h5>Lunch</h5>
                            <p>Beef burger without bun + salad</p>
                        </div>
                        <div class="meal-time">
                            <h5>Dinner</h5>
                            <p>Grilled chicken with buttered broccoli</p>
                        </div>
                    </div>

                    <!-- Wednesday -->
                    <div class="meal-day">
                        <h4>Wednesday</h4>
                        <div class="meal-time">
                            <h5>Breakfast</h5>
                            <p>Keto smoothie (avocado + coconut milk)</p>
                        </div>
                        <div class="meal-time">
                            <h5>Lunch</h5>
                            <p>Tuna salad with olive oil</p>
                        </div>
                        <div class="meal-time">
                            <h5>Dinner</h5>
                            <p>Grilled beef with green vegetables</p>
                        </div>
                    </div>

                    <!-- Thursday -->
                    <div class="meal-day">
                        <h4>Thursday</h4>
                        <div class="meal-time">
                            <h5>Breakfast</h5>
                            <p>Keto pancakes (almond flour + eggs)</p>
                        </div>
                        <div class="meal-time">
                            <h5>Lunch</h5>
                            <p>Chicken salad with avocado</p>
                        </div>
                        <div class="meal-time">
                            <h5>Dinner</h5>
                            <p>Grilled fish with creamed spinach</p>
                        </div>
                    </div>

                    <!-- Friday -->
                    <div class="meal-day">
                        <h4>Friday</h4>
                        <div class="meal-time">
                            <h5>Breakfast</h5>
                            <p>Boiled eggs + avocado + nuts</p>
                        </div>
                        <div class="meal-time">
                            <h5>Lunch</h5>
                            <p>Beef salad with olive oil</p>
                        </div>
                        <div class="meal-time">
                            <h5>Dinner</h5>
                            <p>Chicken with cream sauce + vegetables</p>
                        </div>
                    </div>

                    <!-- Saturday -->
                    <div class="meal-day">
                        <h4>Saturday</h4>
                        <div class="meal-time">
                            <h5>Breakfast</h5>
                            <p>Omelet with bacon and cheese</p>
                        </div>
                        <div class="meal-time">
                            <h5>Lunch</h5>
                            <p>Fish burger without bun</p>
                        </div>
                        <div class="meal-time">
                            <h5>Dinner</h5>
                            <p>Grilled meat with roasted vegetables</p>
                        </div>
                    </div>

                    <!-- Sunday -->
                    <div class="meal-day">
                        <h4>Sunday</h4>
                        <div class="meal-time">
                            <h5>Breakfast</h5>
                            <p>Fried eggs + avocado + bacon</p>
                        </div>
                        <div class="meal-time">
                            <h5>Lunch</h5>
                            <p>Chicken salad with cheese</p>
                        </div>
                        <div class="meal-time">
                            <h5>Dinner</h5>
                            <p>Salmon with green vegetables</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Recipes Section -->
    <section class="diet-info-section">
        <div class="container">
            <h2 class="section-title">Healthy Keto Recipes</h2>
            <div class="recipe-grid">
                <!-- Recipe 1 -->
                <div class="recipe-card">
                    <img src="assets/images/omelette-with-radish-red-onion-fresh-salad.jpg" alt="Keto Omelet" class="recipe-image">
                    <div class="recipe-content">
                        <h3>Keto Omelet with Cheese and Vegetables</h3>
                        <div class="recipe-meta">
                            <span>15 minutes</span>
                            <span> 2 people</span>
                        </div>
                        <p class="recipe-description">A delicious and filling omelet perfect for the keto diet</p>
                        <div class="recipe-ingredients">
                            <h5>Ingredients:</h5>
                            <ul>
                                <li>4 eggs</li>
                                <li>Shredded cheddar cheese</li>
                                <li>Diced green peppers</li>
                                <li>Diced onions</li>
                                <li>Butter</li>
                                <li>Salt and pepper</li>
                                <li>Fresh herbs</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Recipe 2 -->
                <div class="recipe-card">
                    <img src="assets/images/chicken-parmesan-caesar-salad-with-lettuce-cherry-tomatoes-inside-white-bowl-served-with-sauce-bread.jpg" alt="Keto Salad" class="recipe-image">
                    <div class="recipe-content">
                        <h3>Keto Chicken Salad with Avocado</h3>
                        <div class="recipe-meta">
                            <span> 20 minutes</span>
                            <span> 3 people</span>
                        </div>
                        <p class="recipe-description">A satisfying salad rich in healthy fats</p>
                        <div class="recipe-ingredients">
                            <h5>Ingredients:</h5>
                            <ul>
                                <li>Grilled chicken breast</li>
                                <li>Diced avocado</li>
                                <li>Lettuce</li>
                                <li>Cherry tomatoes</li>
                                <li>Feta cheese</li>
                                <li>Olive oil</li>
                                <li>Balsamic vinegar</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Recipe 3 -->
                <div class="recipe-card">
                    <img src="assets/images/grilled-salmon-fillet-with-asparagus-lemon-wedges-plate.jpg" alt="Grilled Salmon" class="recipe-image">
                    <div class="recipe-content">
                        <h3>Grilled Salmon with Butter</h3>
                        <div class="recipe-meta">
                            <span> 25 minutes</span>
                            <span> 4 people</span>
                        </div>
                        <p class="recipe-description">A protein-rich healthy dish rich in omega-3</p>
                        <div class="recipe-ingredients">
                            <h5>Ingredients:</h5>
                            <ul>
                                <li>4 salmon fillets</li>
                                <li>Butter</li>
                                <li>Minced garlic</li>
                                <li>Lemon</li>
                                <li>Fresh herbs</li>
                                <li>Salt and pepper</li>
                                <li>Olive oil</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tips Section -->
    <section class="diet-info-section">
        <div class="container">
            <h2 class="section-title">Important Keto Tips</h2>
            <div class="tips-grid">
                <div class="tip-card">
                    <h4>Drink Plenty of Water</h4>
                    <p>Drink at least 3 liters of water daily to compensate for fluid loss</p>
                </div>
                <div class="tip-card">
                    <h4>Add Salt</h4>
                    <p>Add salt to your food to compensate for sodium loss in keto</p>
                </div>
                <div class="tip-card">
                    <h4>Track Carbs</h4>
                    <p>Calculate net carbs (total carbs - fiber)</p>
                </div>
                <div class="tip-card">
                    <h4>Healthy Fats</h4>
                    <p>Focus on healthy fats like avocado, nuts, and olive oil</p>
                </div>
                <div class="tip-card">
                    <h4>Keto Flu</h4>
                    <p>Expect temporary symptoms in the first week like headaches and fatigue</p>
                </div>
                <div class="tip-card">
                    <h4>Consult a Doctor</h4>
                    <p>Consult your doctor before starting, especially if you have chronic conditions</p>
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
    <script src="js/diet-plans.js"></script>
</body>
</html>
