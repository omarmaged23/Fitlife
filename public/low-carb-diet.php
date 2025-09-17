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
    <title>Low-Carb Diet - FitLife</title>
</head>
<body>
<!-- start Navbar -->
<?php require_once 'navbar.php'; ?>
<!-- end Navbar -->

    <!-- Diet Navigation -->
    <section class="diet-nav">
        <div class="container">
            <a href="vegan-diet.php" class="diet-nav-item">Vegan</a>
            <a href="keto-diet.php" class="diet-nav-item">Keto</a>
            <a href="mediterranean-diet.php" class="diet-nav-item">Mediterranean</a>
            <a href="low-carb-diet.html" class="diet-nav-item active">Low-Carb</a>
        </div>
    </section>

    <!-- Hero Section -->
    <section class="diet-hero">
        <div class="container text-center">
            <h1 class="pacifico-regular">Low-Carb Diet</h1>
            <p>A balanced approach to reducing carbohydrates while focusing on protein and healthy fats for sustainable weight loss</p>
        </div>
    </section>

    <!-- Diet Overview -->
    <section class="diet-info-section">
        <div class="container">
            <h2 class="section-title">About the Low-Carb Diet</h2>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="tip-card">
                        <h4>What is a Low-Carb Diet?</h4>
                        <p>A low-carb diet reduces carbohydrate intake while emphasizing protein and healthy fats. Unlike strict keto diets, low-carb diets typically allow 50-150 grams of carbs per day, making them more sustainable and flexible. This approach helps control blood sugar, reduce cravings, and promote fat loss while maintaining energy levels.</p>
                    </div>
                </div>
            </div>
            
            <div class="row mt-4">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="tip-card text-center">
                        <h4>Weight Loss</h4>
                        <p>Effective and sustainable weight loss results</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="tip-card text-center">
                        <h4>Appetite Control</h4>
                        <p>Better appetite control and reduced cravings</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="tip-card text-center">
                        <h4>Blood Sugar</h4>
                        <p>Improved blood sugar levels and insulin sensitivity</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="tip-card text-center">
                        <h4>Energy</h4>
                        <p>Stable energy levels throughout the day</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Food Categories -->
    <section class="diet-info-section">
        <div class="container">
            <h2 class="section-title">Low-Carb Diet Foods</h2>
            <div class="food-categories">
                <!-- Allowed Foods -->
                <div class="food-category allowed">
                    <h3>Foods to Eat</h3>
                    <ul class="food-list">
                        <li>Lean meats and poultry</li>
                        <li>Fish and seafood</li>
                        <li>Eggs</li>
                        <li>Dairy products (cheese, yogurt)</li>
                        <li>Healthy oils (olive oil, coconut oil)</li>
                        <li>Nuts and seeds</li>
                        <li>Low-carb vegetables</li>
                        <li>Berries in moderation</li>
                        <li>Legumes in small portions</li>
                    </ul>
                </div>

                <!-- Restricted Foods -->
                <div class="food-category restricted">
                    <h3> Foods to Limit</h3>
                    <ul class="food-list">
                        <li>Bread and pasta</li>
                        <li>Rice and grains</li>
                        <li>Sugary foods and drinks</li>
                        <li>High-sugar fruits</li>
                        <li>Starchy vegetables</li>
                        <li>Processed foods</li>
                        <li>Sweetened beverages</li>
                        <li>Desserts and candy</li>
                        <li>Alcohol (in moderation)</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Weekly Meal Plan -->
    <section class="diet-info-section">
        <div class="container">
            <h2 class="section-title">Weekly Low-Carb Meal Plan</h2>
            <div class="meal-plan">
                <p class="text-center mb-4" style="color: var(--text-light); font-size: 1.1rem;">Here's a balanced weekly meal plan for the low-carb diet</p>
                
                <div class="meal-plan-grid">
                    <!-- Monday -->
                    <div class="meal-day">
                        <h4>Monday</h4>
                        <div class="meal-time">
                            <h5>Breakfast</h5>
                            <p>Scrambled eggs with spinach + avocado</p>
                        </div>
                        <div class="meal-time">
                            <h5>Lunch</h5>
                            <p>Grilled chicken salad with olive oil</p>
                        </div>
                        <div class="meal-time">
                            <h5>Dinner</h5>
                            <p>Baked salmon with roasted vegetables</p>
                        </div>
                    </div>

                    <!-- Tuesday -->
                    <div class="meal-day">
                        <h4>Tuesday</h4>
                        <div class="meal-time">
                            <h5>Breakfast</h5>
                            <p>Greek yogurt with berries and nuts</p>
                        </div>
                        <div class="meal-time">
                            <h5>Lunch</h5>
                            <p>Turkey lettuce wraps with hummus</p>
                        </div>
                        <div class="meal-time">
                            <h5>Dinner</h5>
                            <p>Beef stir-fry with low-carb vegetables</p>
                        </div>
                    </div>

                    <!-- Wednesday -->
                    <div class="meal-day">
                        <h4>Wednesday</h4>
                        <div class="meal-time">
                            <h5>Breakfast</h5>
                            <p>Omelet with cheese and vegetables</p>
                        </div>
                        <div class="meal-time">
                            <h5>Lunch</h5>
                            <p>Tuna salad with mixed greens</p>
                        </div>
                        <div class="meal-time">
                            <h5>Dinner</h5>
                            <p>Grilled chicken with cauliflower rice</p>
                        </div>
                    </div>

                    <!-- Thursday -->
                    <div class="meal-day">
                        <h4>Thursday</h4>
                        <div class="meal-time">
                            <h5>Breakfast</h5>
                            <p>Low-carb smoothie with protein powder</p>
                        </div>
                        <div class="meal-time">
                            <h5>Lunch</h5>
                            <p>Egg salad with cucumber slices</p>
                        </div>
                        <div class="meal-time">
                            <h5>Dinner</h5>
                            <p>Pork chops with steamed broccoli</p>
                        </div>
                    </div>

                    <!-- Friday -->
                    <div class="meal-day">
                        <h4>Friday</h4>
                        <div class="meal-time">
                            <h5>Breakfast</h5>
                            <p>Cottage cheese with berries</p>
                        </div>
                        <div class="meal-time">
                            <h5>Lunch</h5>
                            <p>Chicken and vegetable soup</p>
                        </div>
                        <div class="meal-time">
                            <h5>Dinner</h5>
                            <p>Grilled fish with asparagus</p>
                        </div>
                    </div>

                    <!-- Saturday -->
                    <div class="meal-day">
                        <h4>Saturday</h4>
                        <div class="meal-time">
                            <h5>Breakfast</h5>
                            <p>Bacon and eggs with tomatoes</p>
                        </div>
                        <div class="meal-time">
                            <h5>Lunch</h5>
                            <p>Beef burger without bun + salad</p>
                        </div>
                        <div class="meal-time">
                            <h5>Dinner</h5>
                            <p>Roasted chicken with green beans</p>
                        </div>
                    </div>

                    <!-- Sunday -->
                    <div class="meal-day">
                        <h4>Sunday</h4>
                        <div class="meal-time">
                            <h5>Breakfast</h5>
                            <p>Low-carb pancakes with sugar-free syrup</p>
                        </div>
                        <div class="meal-time">
                            <h5>Lunch</h5>
                            <p>Shrimp salad with avocado</p>
                        </div>
                        <div class="meal-time">
                            <h5>Dinner</h5>
                            <p>Lamb chops with roasted vegetables</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Recipes Section -->
    <section class="diet-info-section">
        <div class="container">
            <h2 class="section-title">Healthy Low-Carb Recipes</h2>
            <div class="recipe-grid">
                <!-- Recipe 1 -->
                <div class="recipe-card">
                    <img src="assets/images/top-view-tasty-boiled-rice-with-beans-meat-inside-plate-dark-desk.jpg" alt="Cauliflower Rice" class="recipe-image">
                    <div class="recipe-content">
                        <h3>Cauliflower Rice with Chicken</h3>
                        <div class="recipe-meta">
                            <span> 20 minutes</span>
                            <span> 4 people</span>
                        </div>
                        <p class="recipe-description">A low-carb alternative to rice with lean protein</p>
                        <div class="recipe-ingredients">
                            <h5>Ingredients:</h5>
                            <ul>
                                <li>1 head cauliflower</li>
                                <li>2 chicken breasts</li>
                                <li>Mixed vegetables</li>
                                <li>Olive oil</li>
                                <li>Garlic</li>
                                <li>Ginger</li>
                                <li>Soy sauce</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Recipe 2 -->
                <div class="recipe-card">
                    <img src="assets/images/high-view-healthy-green-salad-wooden-background.jpg" alt="Zucchini Noodles" class="recipe-image">
                    <div class="recipe-content">
                        <h3>Zucchini Noodles with Pesto</h3>
                        <div class="recipe-meta">
                            <span> 15 minutes</span>
                            <span> 3 people</span>
                        </div>
                        <p class="recipe-description">A fresh and light low-carb pasta alternative</p>
                        <div class="recipe-ingredients">
                            <h5>Ingredients:</h5>
                            <ul>
                                <li>3 large zucchinis</li>
                                <li>Fresh basil</li>
                                <li>Pine nuts</li>
                                <li>Parmesan cheese</li>
                                <li>Olive oil</li>
                                <li>Garlic</li>
                                <li>Cherry tomatoes</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Recipe 3 -->
                <div class="recipe-card">
                    <img src="assets/images/top-view-sandwich-rolls-sliced-with-salad-meat-inside-white-plate-brown-wooden-desk-snack-food-meal-sandwich.jpg" alt="Low-Carb Wraps" class="recipe-image">
                    <div class="recipe-content">
                        <h3>Lettuce Wraps with Turkey</h3>
                        <div class="recipe-meta">
                            <span>25 minutes</span>
                            <span> 4 people</span>
                        </div>
                        <p class="recipe-description">Fresh and crunchy low-carb wraps</p>
                        <div class="recipe-ingredients">
                            <h5>Ingredients:</h5>
                            <ul>
                                <li>Ground turkey</li>
                                <li>Large lettuce leaves</li>
                                <li>Carrots</li>
                                <li>Cucumber</li>
                                <li>Avocado</li>
                                <li>Greek yogurt</li>
                                <li>Spices</li>
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
            <h2 class="section-title">Important Low-Carb Tips</h2>
            <div class="tips-grid">
                <div class="tip-card">
                    <h4>Track Carbs</h4>
                    <p>Monitor your daily carbohydrate intake to stay within your target range</p>
                </div>
                <div class="tip-card">
                    <h4>Focus on Vegetables</h4>
                    <p>Fill your plate with non-starchy vegetables for fiber and nutrients</p>
                </div>
                <div class="tip-card">
                    <h4>Stay Hydrated</h4>
                    <p>Drink plenty of water to support metabolism and reduce cravings</p>
                </div>
                <div class="tip-card">
                    <h4>Plan Meals</h4>
                    <p>Plan your meals in advance to avoid high-carb temptations</p>
                </div>
                <div class="tip-card">
                   <h4>Healthy Fats</h4>
                    <p>Include healthy fats like nuts, seeds, and olive oil for satiety</p>
                </div>
                <div class="tip-card">
                    <h4>Consult Professional</h4>
                    <p>Work with a nutritionist to ensure you're meeting all nutrient needs</p>
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
