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
    <!-- Custom Profile CSS -->
    <link rel="stylesheet" href="css/profile.css">
    <title>Profile</title>
</head>
<?php
    @session_start();
    if(!isset($_SESSION['user'])){
        header("Location: login.php");
    }
    require_once '../App/Database/Connection.php';
    require_once '../App/Helpers/Validation.php';
    require_once '../App/Controllers/ProfileController.php';
    use App\Controllers\ProfileController;

    $userData = (new ProfileController())->getProfile();
    ?>
<body>
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
    <!-- start Profile -->
    <div class="profile-section">
        <div class="container">
            <div class="row d-flex justify-content-center gap-2 gap-md-0">
<!--               Start Need Changes-->

<!--               End Need Changes -->
                <div class="col-12 col-md-6 col-lg-8">
                    <div class="profile-info">
                        <div class="text-center border-bottom pb-3 image">
                            <h3>Profile Information For "<?php echo $_SESSION['user']['name']; ?>"</h3>
                            <p><?php echo $_SESSION['user']['email']; ?></p>
                        </div>
                        <div class="row g-3">
                            <div class="col-6 col-lg-4">
                                <div class="stat-card">
                                    <div class="label">Age</div>
                                    <div class="value"><span id="statAge"><?php echo $userData->age ??  '-' ;?></span> <span class="unit">yrs</span></div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4">
                                <div class="stat-card">
                                    <div class="label">Height</div>
                                    <div class="value"><span id="statHeight"><?php echo $userData->height ?? '-' ;?></span> <span class="unit">cm</span></div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4">
                                <div class="stat-card">
                                    <div class="label">Weight</div>
                                    <div class="value"><span id="statWeight"><?php echo $userData->weight ?? '-' ;?></span> <span class="unit">kg</span></div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4">
                                <div class="stat-card">
                                    <div class="label">Goal</div>
                                    <div class="value" id="statGoal" ><?php echo $userData->goal ?? '-' ;?></div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4">
                                <div class="stat-card">
                                    <div class="label">Activity</div>
                                    <div class="value" id="statActivity"><?php echo $userData->activity_level ?? '-' ;?></div>
                                </div>
                            </div>
                        </div>
                        <div class="badges mt-3">
                            <span class="badge">Consistency</span>
                            <span class="badge">Protein Goal</span>
                            <span class="badge">Hydration</span>
                        </div>
                        <a href="#" class="btn mt-3" data-bs-toggle="modal" data-bs-target="#editProfile">Edit Profile</a>
                    </div>
                </div>
            </div>
        </div>
        <a href="vegan-diet.php" class="btn btn-primary w-25 my-5">Back to Home</a>
    </div>
    <!-- end Profile -->
    <!-- modal for edit profile -->
    <div class="modal fade" tabindex="-1" id="editProfile">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Edit Profile</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form id="editForm" action="routes/routes.php?action=edit_profile" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label class="form-label" for="fullName">Full name</label>
                    <input type="text" id="fullName" name="name" class="form-control form-control-lg" placeholder="John Doe" value="<?php echo $_SESSION['user']['name'];?>" required autofocus>
                </div>
<!--                <div class="mb-3">-->
<!--                    <label class="form-label" for="image">Image</label>-->
<!--                    <input type="file" id="image" name="image" class="form-control form-control-lg">-->
<!--                </div>-->
                <div class="row g-3">
                    <div class="col-md-4">
                        <label class="form-label" for="age">Age</label>
                        <input type="number" id="age" name="age" class="form-control form-control-lg" min="12" max="100" placeholder="24" value="<?php echo $userData ? $userData->age : '-' ;?>" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label" for="gender">Gender</label>
                        <select id="gender" name="gender" class="form-select form-select-lg" required>
                            <option value="" <?php echo !($userData->gender) ? 'selected' : '';?> disabled>Choose...</option>
                            <option value="Male" <?php echo  $userData->gender =='Male' ? 'selected' : '';?> >Male</option>
                            <option value="Female" <?php echo  $userData->gender =='Female' ? 'selected' : '';?>>Female</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label" for="goal">Goal</label>
                        <select id="goal" name="goal" class="form-select form-select-lg" required>
                            <option value="" <?php echo !($userData->goal) ? 'selected' : '';?> disabled>Choose...</option>
                            <option value="Weight loss" <?php echo  $userData->goal =='Weight loss' ? 'selected' : '';?>>Weight loss</option>
                            <option value="Muscle gain" <?php echo  $userData->goal =='Muscle gain' ? 'selected' : '';?>>Muscle gain</option>
                            <option value="Maintain weight" <?php echo  $userData->goal =='Maintain weight' ? 'selected' : '';?>>Maintain weight</option>
                        </select>
                    </div>
                </div>
                <div class="row g-3 mt-0">
                    <div class="col-md-6">
                        <label class="form-label" for="height">Height (cm)</label>
                        <div class="input-group input-group-lg">
                            <input type="number" id="height" name="height" class="form-control" min="100" max="250" value="<?php echo $userData ? $userData->height : '' ;?>" placeholder="175" required>
                            <span class="input-group-text">cm</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="weight">Weight (kg)</label>
                        <div class="input-group input-group-lg">
                            <input type="number" id="weight" name="weight" class="form-control" min="30" max="300" placeholder="72" value="<?php echo $userData ? $userData->weight : '' ;?>" required>
                            <span class="input-group-text">kg</span>
                        </div>
                    </div>
                </div>
                <div class="mb-3 mt-3">
                    <label class="form-label" for="activity">Activity level</label>
                    <select id="activity" name="activity" class="form-select form-select-lg" required>
                        <option value="" <?php echo !($userData->goal) ? 'selected' : '';?> disabled>Select activity</option>
                        <option value="Sedentary" <?php echo  $userData->activity_level =='Sedentary' ? 'selected' : '';?>>Sedentary</option>
                        <option value="Lightly active" <?php echo  $userData->activity_level =='Lightly active' ? 'selected' : '';?>>Lightly active</option>
                        <option value="Moderately active" <?php echo  $userData->activity_level =='Moderately active' ? 'selected' : '';?>>Moderately active</option>
                        <option value="Very active" <?php echo  $userData->activity_level =='Very active' ? 'selected' : '';?>>Very active</option>
                    </select>
                    <div class="form-text">Used to estimate your daily calories (TDEE).</div>
                </div>
            </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" form="editForm" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
     <!-- end modal for edit profile -->

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