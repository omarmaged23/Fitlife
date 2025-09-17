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
    <title>Mediterranean Diet - FitLife</title>
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
            <a href="mediterranean-diet.html" class="diet-nav-item active">Mediterranean</a>
            <a href="low-carb-diet.php" class="diet-nav-item">Low-Carb</a>
        </div>
    </section>

    <!-- Hero Section -->
    <section class="diet-hero">
        <div class="container text-center">
            <h1 class="pacifico-regular">Mediterranean Diet</h1>
            <p>A balanced and healthy diet inspired by traditional eating patterns of Mediterranean countries</p>
        </div>
    </section>

    <!-- Diet Overview -->
    <section class="diet-info-section">
        <div class="container">
            <h2 class="section-title">About the Mediterranean Diet</h2>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="tip-card">
                        <h4>What is the Mediterranean Diet?</h4>
                        <p>The Mediterranean diet is inspired by the traditional eating patterns of countries bordering the Mediterranean Sea, such as Italy, Greece, and Spain. This diet emphasizes plant-based foods, olive oil, fish, and whole grains while limiting red meat and processed foods. It's rich in antioxidants, healthy fats, and nutrients that promote heart health and longevity.</p>
                    </div>
                </div>
            </div>
            
            <div class="row mt-4">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="tip-card text-center">
                        <h4>Heart Health</h4>
                        <p>Reduces risk of heart disease and cardiovascular problems</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="tip-card text-center">
                        <h4>Brain Health</h4>
                        <p>Improves cognitive function and reduces dementia risk</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="tip-card text-center">
                        <h4>Antioxidants</h4>
                        <p>Rich in antioxidants that fight inflammation</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="tip-card text-center">
                        <h4>Weight Management</h4>
                        <p>Helps maintain healthy weight and prevents obesity</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Food Categories -->
    <section class="diet-info-section">
        <div class="container">
            <h2 class="section-title">Mediterranean Diet Foods</h2>
            <div class="food-categories">
                <!-- Allowed Foods -->
                <div class="food-category allowed">
                    <h3>Foods to Eat</h3>
                    <ul class="food-list">
                        <li>Extra virgin olive oil</li>
                        <li>Fresh vegetables (tomatoes, cucumbers, peppers)</li>
                        <li>Fresh and dried fruits</li>
                        <li>Whole grains (brown rice, quinoa)</li>
                        <li>Legumes (lentils, beans, chickpeas)</li>
                        <li>Fatty fish (salmon, tuna)</li>
                        <li>Nuts and seeds</li>
                        <li>Dairy products (cheese, yogurt)</li>
                        <li>Herbs and spices</li>
                    </ul>
                </div>

                <!-- Restricted Foods -->
                <div class="food-category restricted">
                    <h3> Foods to Limit</h3>
                    <ul class="food-list">
                        <li>Red meat (in small amounts)</li>
                        <li>Processed foods</li>
                        <li>Added sugars</li>
                        <li>Sugary drinks</li>
                        <li>Fast food</li>
                        <li>Artificial sweets</li>
                        <li>Hydrogenated oils</li>
                        <li>Excessive salt</li>
                        <li>Alcohol (in moderation only)</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Weekly Meal Plan -->
    <section class="diet-info-section">
        <div class="container">
            <h2 class="section-title">Weekly Mediterranean Meal Plan</h2>
            <div class="meal-plan">
                <p class="text-center mb-4" style="color: var(--text-light); font-size: 1.1rem;">Here's a balanced and diverse weekly meal plan for the Mediterranean diet</p>
                
                <div class="meal-plan-grid">
                    <!-- Monday -->
                    <div class="meal-day">
                        <h4>Monday</h4>
                        <div class="meal-time">
                            <h5>Breakfast</h5>
                            <p>Whole grain toast with olive oil + tomatoes + feta cheese</p>
                        </div>
                        <div class="meal-time">
                            <h5>Lunch</h5>
                            <p>Greek salad with olive oil + whole grain bread</p>
                        </div>
                        <div class="meal-time">
                            <h5>Dinner</h5>
                            <p>Grilled fish with vegetables + brown rice</p>
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
                            <p>Lentil soup with vegetables</p>
                        </div>
                        <div class="meal-time">
                            <h5>Dinner</h5>
                            <p>Grilled chicken with roasted vegetables</p>
                        </div>
                    </div>

                    <!-- Wednesday -->
                    <div class="meal-day">
                        <h4>Wednesday</h4>
                        <div class="meal-time">
                            <h5>Breakfast</h5>
                            <p>Omelet with vegetables and olive oil</p>
                        </div>
                        <div class="meal-time">
                            <h5>Lunch</h5>
                            <p>Quinoa salad with vegetables and hummus</p>
                        </div>
                        <div class="meal-time">
                            <h5>Dinner</h5>
                            <p>Pasta with vegetables and olive oil</p>
                        </div>
                    </div>

                    <!-- Thursday -->
                    <div class="meal-day">
                        <h4>Thursday</h4>
                        <div class="meal-time">
                            <h5>Breakfast</h5>
                            <p>Oatmeal with fruits and nuts</p>
                        </div>
                        <div class="meal-time">
                            <h5>Lunch</h5>
                            <p>Tuna salad with olive oil</p>
                        </div>
                        <div class="meal-time">
                            <h5>Dinner</h5>
                            <p>Roasted vegetables with cheese and thyme</p>
                        </div>
                    </div>

                    <!-- Friday -->
                    <div class="meal-day">
                        <h4>Friday</h4>
                        <div class="meal-time">
                            <h5>Breakfast</h5>
                            <p>Avocado toast with olive oil</p>
                        </div>
                        <div class="meal-time">
                            <h5>Lunch</h5>
                            <p>Vegetable soup with whole grains</p>
                        </div>
                        <div class="meal-time">
                            <h5>Dinner</h5>
                            <p>Salmon with vegetables and lemon</p>
                        </div>
                    </div>

                    <!-- Saturday -->
                    <div class="meal-day">
                        <h4>Saturday</h4>
                        <div class="meal-time">
                            <h5>Breakfast</h5>
                            <p>Whole grain pancakes with honey</p>
                        </div>
                        <div class="meal-time">
                            <h5>Lunch</h5>
                            <p>Chicken salad with olive oil</p>
                        </div>
                        <div class="meal-time">
                            <h5>Dinner</h5>
                            <p>Stuffed vegetables with rice and meat</p>
                        </div>
                    </div>

                    <!-- Sunday -->
                    <div class="meal-day">
                        <h4>Sunday</h4>
                        <div class="meal-time">
                            <h5>Breakfast</h5>
                            <p>Omelet with cheese and vegetables</p>
                        </div>
                        <div class="meal-time">
                            <h5>Lunch</h5>
                            <p>Greek salad with olive oil</p>
                        </div>
                        <div class="meal-time">
                            <h5>Dinner</h5>
                            <p>Grilled chicken with vegetables and brown rice</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Recipes Section -->
    <section class="diet-info-section">
        <div class="container">
            <h2 class="section-title">Healthy Mediterranean Recipes</h2>
            <div class="recipe-grid">
                <!-- Recipe 1 -->
                <div class="recipe-card">
                    <img src="assets/images/top-view-salad-with-feta-cheese-cutting-board-with-olives.jpg" alt="Greek Salad" class="recipe-image">
                    <div class="recipe-content">
                        <h3>Traditional Greek Salad</h3>
                        <div class="recipe-meta">
                            <span> 15 minutes</span>
                            <span>4 people</span>
                        </div>
                        <p class="recipe-description">A fresh and nutritious salad from Greek cuisine</p>
                        <div class="recipe-ingredients">
                            <h5>Ingredients:</h5>
                            <ul>
                                <li>Fresh tomatoes, diced</li>
                                <li>Diced cucumber</li>
                                <li>Red onion</li>
                                <li>Feta cheese</li>
                                <li>Black olives</li>
                                <li>Olive oil</li>
                                <li>Balsamic vinegar</li>
                                <li>Oregano</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Recipe 2 -->
                <div class="recipe-card">
                    <img src="assets/images/grilled-salmon-fillet-with-asparagus-lemon-wedges-plate.jpg" alt="Grilled Salmon" class="recipe-image">
                    <div class="recipe-content">
                        <h3>Grilled Salmon with Lemon</h3>
                        <div class="recipe-meta">
                            <span> 25 minutes</span>
                            <span> 4 people</span>
                        </div>
                        <p class="recipe-description">A healthy dish rich in omega-3</p>
                        <div class="recipe-ingredients">
                            <h5>Ingredients:</h5>
                            <ul>
                                <li>4 salmon fillets</li>
                                <li>Lemon</li>
                                <li>Olive oil</li>
                                <li>Minced garlic</li>
                                <li>Fresh herbs</li>
                                <li>Salt and pepper</li>
                                <li>Roasted vegetables</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Recipe 3 -->
                <div class="recipe-card">
                    <img src="assets/images/top-view-delicious-lentil-soup-with-female-holding-plate-dark-bread-loafs-dark-surface.jpg" alt="Lentil Soup" class="recipe-image">
                    <div class="recipe-content">
                        <h3>Mediterranean Lentil Soup</h3>
                        <div class="recipe-meta">
                            <span> 35 minutes</span>
                            <span>6 people</span>
                        </div>
                        <p class="recipe-description">A warm and nutritious soup from Mediterranean cuisine</p>
                        <div class="recipe-ingredients">
                            <h5>Ingredients:</h5>
                            <ul>
                                <li>1 cup red lentils</li>
                                <li>Diced onion</li>
                                <li>Diced carrots</li>
                                <li>Celery</li>
                                <li>Garlic</li>
                                <li>Vegetable broth</li>
                                <li>Olive oil</li>
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
            <h2 class="section-title">Important Mediterranean Diet Tips</h2>
            <div class="tips-grid">
                <div class="tip-card">
                    <h4>Olive Oil</h4>
                    <p>Use extra virgin olive oil as the main fat in cooking</p>
                </div>
                <div class="tip-card">
                    <h4>Fatty Fish</h4>
                    <p>Eat fatty fish at least twice a week</p>
                </div>
                <div class="tip-card">
                    <h4>Fresh Vegetables</h4>
                    <p>Eat 5-7 servings of vegetables and fruits daily</p>
                </div>
                <div class="tip-card">
                    <h4>Whole Grains</h4>
                    <p>Choose whole grains over refined ones</p>
                </div>
                <div class="tip-card">
                    <h4>Nuts and Seeds</h4>
                    <p>Eat a handful of nuts and seeds daily</p>
                </div>
                <div class="tip-card">
                    <h4>Moderate Alcohol</h4>
                    <p>If you drink alcohol, do so in moderation (1 glass for women, 2 for men)</p>
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
