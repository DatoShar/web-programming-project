<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {

    $fullname = trim($_POST['fullname']);
    $email = trim($_POST['email']);
    $password = $_POST['pass'];
    $confirm_password = $_POST['confirm_pass'];
    $terms = isset($_POST['terms']);
        $errors = [];
    
    if (empty($fullname)) {
        $errors[] = "Full name is required";
    }
    
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Valid email is required";
    }
    
    if (empty($password)) {
        $errors[] = "Password is required";
    }
    
    if ($password !== $confirm_password) {
        $errors[] = "Passwords do not match";
    }
    
    if (!$terms) {
        $errors[] = "You must agree to the terms and conditions";
    }
    

    if (empty($errors)) {

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        

        $user_data = [
            'fullname' => $fullname,
            'email' => $email,
            'password' => $hashed_password,
            'registration_date' => date('Y-m-d H:i:s')
        ];
  
        $user_line = json_encode($user_data) . "\n";
        
       $file_path = 'users.txt';
    
        if (!file_exists($file_path)) {
            file_put_contents($file_path, "");
        }
  
        if (file_put_contents($file_path, $user_line, FILE_APPEND | LOCK_EX)) {
            $success_message = "Account created successfully!";
    
            $_POST = [];
        } else {
            $errors[] = "Error saving user data. Please try again.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Styles/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
    <link rel="icon" type="images/ico" href="Images/icons/amazon-tab-icon.ico">
    <title>Register</title>
</head>

<body class="register-page">
    <header>
        <section class="left-section">
            <a href="index.php">
                <div class="title-container">
                    <picture>
                        <source srcset="Images/icons/amazon-logo-white.png" media="(min-width: 801px)" />
                        <img class="website-logo" src="Images/icons/amazon-mobile-logo-white.png" alt="Amazon Logo" />
                    </picture>
                </div>
            </a>
        </section>

        <section class="middle-section">
            <div class="input-container">
                <input class="search" type="search" placeholder="Search" />
                <button class="search-btn" type="submit">
                    <img src="images/icons/search.svg" alt="Search Button" />
                    <div class="tooltip">Search</div>
                </button>
                <button class="voice-search-btn">
                    <img class="voice-search-icon" src="images/icons/voice-search-icon.svg" alt="voice-search-icon" />
                    <div class="tooltip">Search with your voice</div>
                </button>
            </div>
        </section>
        <section class="right-section">
            <a href="login.php" class="login-icon-container">
                <img src="Images/icons/account.png" alt="account-icon" />
            </a>
            <div class="cart-container">
                <img src="images/icons/cart-icon.png" alt="cart-icon" />
                <div class="products-counter">0</div>
            </div>

            <button class="menu-toggle" onclick="toggleDropdown()">☰</button>

            <div class="user-dropdown" id="userDropdown" hidden>
                <a href="login.php" class="dropdown-item">Login</a>
                <a href="cart.php" class="dropdown-item">Cart</a>
        </section>
    </header>

    <nav class="sidebar"></nav>
    <main class="register-main">
        <div class="form-container">
            <h2>Create Account</h2>

            <?php if (!empty($success_message)): ?>
            <div class="success-msg"
                style="color: green; margin-bottom: 15px; padding: 10px; background-color: #d4edda; border: 1px solid #c3e6cb; border-radius: 4px;">
                <?php echo htmlspecialchars($success_message); ?>
            </div>
            <?php endif; ?>

            <?php if (!empty($errors)): ?>
            <div class="error-messages"
                style="color: red; margin-bottom: 15px; padding: 10px; background-color: #f8d7da; border: 1px solid #f5c6cb; border-radius: 4px;">
                <?php foreach ($errors as $error): ?>
                <div>
                    <?php echo htmlspecialchars($error); ?>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>

            <form name="form" method="POST" onsubmit="return isvalid()">
                <div class="form-group">
                    <label for="fullname">Full Name</label>
                    <input type="text" id="fullname" name="fullname"
                        value="<?php echo isset($_POST['fullname']) ? htmlspecialchars($_POST['fullname']) : ''; ?>"
                        required />
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email"
                        value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>"
                        required />
                </div>
                <div class="form-group">
                    <label for="pass">Password</label>
                    <input type="password" id="pass" name="pass" required />
                </div>
                <div class="form-group">
                    <label for="confirm_pass">Confirm Password</label>
                    <input type="password" id="confirm_pass" name="confirm_pass" required />
                </div>
                <div class="checkbox-group">
                    <input type="checkbox" id="terms" name="terms" <?php echo (isset($_POST['terms']) &&
                        $_POST['terms']) ? 'checked' : '' ; ?> required />
                    <label for="terms">I agree to the terms and conditions</label>
                </div>
                <div class="error" id="error-msg">Please complete the form and agree to the terms.</div>
                <button type="submit" name="submit" class="submit-btn">Register</button>
            </form>

            <div class="register-link">
                <p>Already have an account? <a href="login.php">Sign in</a></p>
            </div>
        </div>
    </main>

    <script>
        function isvalid() {
            const f = document.form;
            const fullname = f.fullname.value.trim();
            const email = f.email.value.trim();
            const pass = f.pass.value;
            const confirm = f.confirm_pass.value;
            const terms = f.terms.checked;

            if (!fullname || !email || !pass || !confirm) {
                alert("All fields are required!");
                return false;
            }

            if (!email.includes("@") || !email.includes(".")) {
                alert("Please enter a valid email address!");
                return false;
            }

            if (pass !== confirm) {
                alert("Passwords do not match!");
                return false;
            }

            if (!terms) {
                alert("You must agree to the terms and conditions!");
                return false;
            }

            return true;
        }
    </script>

    <?php include("includes/footer.php"); ?>