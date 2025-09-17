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
    <title>Vegan Diet - FitLife</title>
</head>
<body>
<!-- start Navbar -->
<?php require_once 'navbar.php'; ?>
<!-- end Navbar -->

    <!-- Diet Navigation -->
    <section class="diet-nav">
        <div class="container">
            <a href="vegan-diet.php" class="diet-nav-item active">Vegan</a>
            <a href="keto-diet.php" class="diet-nav-item">Keto</a>
            <a href="mediterranean-diet.php" class="diet-nav-item">Mediterranean</a>
            <a href="low-carb-diet.php" class="diet-nav-item">Low-Carb</a>
        </div>
    </section>

    <!-- Hero Section -->
    <section class="diet-hero">
        <div class="container text-center">
            <h1 class="pacifico-regular">Vegan Diet</h1>
            <p>A healthy and balanced plant-based diet that excludes all animal products for optimal health and environmental benefits</p>
        </div>
    </section>

    <!-- Diet Overview -->
    <section class="diet-info-section">
        <div class="container">
            <h2 class="section-title">About the Vegan Diet</h2>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="tip-card">
                        <h4>What is a Vegan Diet?</h4>
                        <p>A vegan diet is a plant-based eating pattern that excludes all animal products including meat, dairy, eggs, and honey. It focuses on fruits, vegetables, grains, legumes, nuts, and seeds. This diet is rich in fiber, vitamins, and antioxidants while being naturally low in saturated fats.</p>
                    </div>
                </div>
            </div>
            
            <div class="row mt-4">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="tip-card text-center">
                        <div class="tip-icon"><img src="assets/images/eco-friendly-sign.jpg"  alt="Eco-Friendly" width="50" height="50"></div>
                        <h4>Eco-Friendly</h4>
                        <p>Reduces carbon footprint and preserves natural resources</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="tip-card text-center">
                        <div class="tip-icon"><img src="assets/images/heart-cardiac-career-billboard-rate.jpg"  alt="Heart Health" width="50" height="50"></div>
                        <h4>Heart Health</h4>
                        <p>Lowers risk of heart disease and improves cardiovascular health</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="tip-card text-center">
                        <div class="tip-icon"><img src="assets/images/weight-scale_10895924.png"  alt="Eco-Friendly" width="50" height="50"></div>
                        <h4>Weight Management</h4>
                        <p>Helps maintain healthy weight and reduces obesity risk</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="tip-card text-center">
                        <div class="tip-icon"><img src="assets/images/chalkboard-drawing-head-arrows.jpg"  alt="Mental Clarity" width="50" height="50"></div>
                        <h4>Mental Clarity</h4>
                        <p>Improves cognitive function and mental well-being</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Food Categories -->
    <section class="diet-info-section">
        <div class="container">
            <h2 class="section-title">Foods to Eat and Avoid</h2>
            <div class="food-categories">
                <!-- Allowed Foods -->
                <div class="food-category allowed">
                    <h3>Foods to Eat</h3>
                    <ul class="food-list">
                        <li>All fresh vegetables and leafy greens</li>
                        <li>Fresh and dried fruits</li>
                        <li>Whole grains (brown rice, quinoa, oats)</li>
                        <li>Legumes (lentils, beans, chickpeas)</li>
                        <li>Nuts and seeds</li>
                        <li>Soy products (tofu, tempeh)</li>
                        <li>Herbs and spices</li>
                        <li>Healthy plant oils</li>
                        <li>Plant-based milk alternatives</li>
                    </ul>
                </div>

                <!-- Restricted Foods -->
                <div class="food-category restricted">
                    <h3>Foods to Avoid</h3>
                    <ul class="food-list">
                        <li>All types of meat and poultry</li>
                        <li>Fish and seafood</li>
                        <li>Dairy products (milk, cheese, yogurt)</li>
                        <li>Eggs and egg products</li>
                        <li>Honey and bee products</li>
                        <li>Processed foods with animal ingredients</li>
                        <li>Fast food and junk food</li>
                        <li>Gelatin and animal-based additives</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Weekly Meal Plan -->
    <section class="diet-info-section">
        <div class="container">
            <h2 class="section-title">Weekly Vegan Meal Plan</h2>
            <div class="meal-plan">
                <p class="text-center mb-4" style="color: var(--text-light); font-size: 1.1rem;">Here's a balanced and diverse weekly meal plan for the vegan diet</p>
                
                <div class="meal-plan-grid">
                    <!-- Monday -->
                    <div class="meal-day">
                        <h4>Monday</h4>
                        <div class="meal-time">
                            <h5>Breakfast</h5>
                            <p>Oatmeal with berries and almonds + plant milk</p>
                        </div>
                        <div class="meal-time">
                            <h5>Lunch</h5>
                            <p>Quinoa salad with vegetables + hummus</p>
                        </div>
                        <div class="meal-time">
                            <h5>Dinner</h5>
                            <p>Pasta with vegetables + side salad</p>
                        </div>
                    </div>

                    <!-- Tuesday -->
                    <div class="meal-day">
                        <h4>Tuesday</h4>
                        <div class="meal-time">
                            <h5>Breakfast</h5>
                            <p>Whole grain toast with avocado + green smoothie</p>
                        </div>
                        <div class="meal-time">
                            <h5>Lunch</h5>
                            <p>Lentil soup + whole grain bread</p>
                        </div>
                        <div class="meal-time">
                            <h5>Dinner</h5>
                            <p>Grilled tofu with roasted vegetables + brown rice</p>
                        </div>
                    </div>

                    <!-- Wednesday -->
                    <div class="meal-day">
                        <h4>Wednesday</h4>
                        <div class="meal-time">
                            <h5>Breakfast</h5>
                            <p>Green smoothie with banana and spinach</p>
                        </div>
                        <div class="meal-time">
                            <h5>Lunch</h5>
                            <p>Veggie burger + roasted potatoes</p>
                        </div>
                        <div class="meal-time">
                            <h5>Dinner</h5>
                            <p>Vegetable curry with basmati rice</p>
                        </div>
                    </div>

                    <!-- Thursday -->
                    <div class="meal-day">
                        <h4>Thursday</h4>
                        <div class="meal-time">
                            <h5>Breakfast</h5>
                            <p>Whole grain pancakes with maple syrup</p>
                        </div>
                        <div class="meal-time">
                            <h5>Lunch</h5>
                            <p>Black bean salad with quinoa</p>
                        </div>
                        <div class="meal-time">
                            <h5>Dinner</h5>
                            <p>Roasted vegetables with hummus</p>
                        </div>
                    </div>

                    <!-- Friday -->
                    <div class="meal-day">
                        <h4>Friday</h4>
                        <div class="meal-time">
                            <h5>Breakfast</h5>
                            <p>Quinoa porridge with dried fruits</p>
                        </div>
                        <div class="meal-time">
                            <h5>Lunch</h5>
                            <p>Vegetable soup + mixed salad</p>
                        </div>
                        <div class="meal-time">
                            <h5>Dinner</h5>
                            <p>Veggie pizza with fresh vegetables</p>
                        </div>
                    </div>

                    <!-- Saturday -->
                    <div class="meal-day">
                        <h4>Saturday</h4>
                        <div class="meal-time">
                            <h5>Breakfast</h5>
                            <p>Avocado toast with tomatoes + orange juice</p>
                        </div>
                        <div class="meal-time">
                            <h5>Lunch</h5>
                            <p>Bean burger with salad</p>
                        </div>
                        <div class="meal-time">
                            <h5>Dinner</h5>
                            <p>Pasta with vegetables and vegan cheese</p>
                        </div>
                    </div>

                    <!-- Sunday -->
                    <div class="meal-day">
                        <h4>Sunday</h4>
                        <div class="meal-time">
                            <h5>Breakfast</h5>
                            <p>Oatmeal with banana and nuts</p>
                        </div>
                        <div class="meal-time">
                            <h5>Lunch</h5>
                            <p>Quinoa salad with vegetables and hummus</p>
                        </div>
                        <div class="meal-time">
                            <h5>Dinner</h5>
                            <p>Roasted vegetables with brown rice</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Recipes Section -->
    <section class="diet-info-section">
        <div class="container">
            <h2 class="section-title">Healthy Vegan Recipes</h2>
            <div class="recipe-grid">
                <!-- Recipe 1 -->
                <div class="recipe-card">
                    <img src="assets/images/tabbouleh-salad.jpg" alt="Quinoa Salad" class="recipe-image">
                    <div class="recipe-content">
                        <h3>Quinoa Salad with Vegetables</h3>
                        <div class="recipe-meta">
                            <span> 20 minutes</span>
                            <span> 4 people</span>
                        </div>
                        <p class="recipe-description">A healthy and nutritious salad combining quinoa with fresh vegetables</p>
                        <div class="recipe-ingredients">
                            <h5>Ingredients:</h5>
                            <ul>
                                <li>1 cup cooked quinoa</li>
                                <li>Diced cucumber</li>
                                <li>Cherry tomatoes</li>
                                <li>Colorful bell peppers</li>
                                <li>Chopped parsley</li>
                                <li>Olive oil</li>
                                <li>Lemon juice</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Recipe 2 -->
                <div class="recipe-card">
                    <img src="assets/images/top-view-delicious-lentil-soup-with-female-holding-plate-dark-bread-loafs-dark-surface.jpg" alt="Lentil Soup" class="recipe-image">
                    <div class="recipe-content">
                        <h3>Vegan Lentil Soup</h3>
                        <div class="recipe-meta">
                            <span> 30 minutes</span>
                            <span> 6 people</span>
                        </div>
                        <p class="recipe-description">A warm and nutritious soup rich in plant protein</p>
                        <div class="recipe-ingredients">
                            <h5>Ingredients:</h5>
                            <ul>
                                <li>1 cup red lentils</li>
                                <li>Diced onion</li>
                                <li>Diced carrots</li>
                                <li>Celery</li>
                                <li>Garlic</li>
                                <li>Vegetable broth</li>
                                <li>Spices</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Recipe 3 -->
                <div class="recipe-card">
                    <img src="assets/images/top-view-high-protein-meal-assortment.jpg" alt="Grilled Tofu" class="recipe-image">
                    <div class="recipe-content">
                        <h3>Grilled Tofu with Vegetables</h3>
                        <div class="recipe-meta">
                            <span> 25 minutes</span>
                            <span> 3 people</span>
                        </div>
                        <p class="recipe-description">A protein-rich healthy dish with roasted vegetables</p>
                        <div class="recipe-ingredients">
                            <h5>Ingredients:</h5>
                            <ul>
                                <li>400g tofu</li>
                                <li>Colorful bell peppers</li>
                                <li>Onion</li>
                                <li>Zucchini</li>
                                <li>Olive oil</li>
                                <li>Spices</li>
                                <li>Fresh herbs</li>
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
            <h2 class="section-title">Important Tips and Guidelines</h2>
            <div class="tips-grid">
                <div class="tip-card">
                    <h4>Color Variety</h4>
                    <p>Eat vegetables and fruits of different colors to ensure you get all vitamins and minerals</p>
                </div>
                <div class="tip-card">
                    <h4>Stay Hydrated</h4>
                    <p>Drink at least 8 glasses of water daily to stay hydrated and improve digestion</p>
                </div>
                <div class="tip-card">
                    <h4>Nuts and Seeds</h4>
                    <p>Eat a handful of nuts and seeds daily for healthy fats and protein</p>
                </div>
                <div class="tip-card">
                    <h4>Track Nutrients</h4>
                    <p>Use apps to track your protein, iron, calcium, and vitamin B12 intake</p>
                </div>
                <div class="tip-card">
                    <h4>Meal Planning</h4>
                    <p>Plan your meals in advance to ensure variety and get all nutrients</p>
                </div>
                <div class="tip-card">
                    <h4>Consult a Doctor</h4>
                    <p>Consult your doctor or nutritionist before starting the vegan diet</p>
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
