<?php
session_start();

$loginError = "";
$loginSuccess = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $inputEmail = trim($_POST['email']);
    $inputPassword = $_POST['password'];
    $termsAccepted = isset($_POST['terms']);

    if (!$termsAccepted) {
        $loginError = "You must agree to the terms and conditions.";
    } else {
        if (file_exists("users.txt")) {
            $file = fopen("users.txt", "r");
            $isValid = false;
            while (($line = fgets($file)) !== false) {
                $line = trim($line);
                $data = json_decode($line, true);
                if (!$data) continue;

                if ($data['email'] === $inputEmail && password_verify($inputPassword, $data['password'])) {
                    $_SESSION['username'] = $data['email'];
                    $_SESSION['fullname'] = $data['fullname'];

                    setcookie("user_email", $data['email'], time() + (86400 * 7), "/");

                    $isValid = true;

                    $logEntry = date('Y-m-d H:i:s') . " - Login: " . $data['email'] . " - IP: " . ($_SERVER['REMOTE_ADDR'] ?? 'unknown') . PHP_EOL;
                    file_put_contents("login.log", $logEntry, FILE_APPEND | LOCK_EX);

                    break;
                }
            }
            fclose($file);

            if ($isValid) {
                $loginSuccess = "Login successful. Welcome, " . htmlspecialchars($_SESSION['fullname']) . "!";
            } else {
                $loginError = "Invalid email or password.";
            }
        } else {
            $loginError = "User data file not found.";
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
    <link rel="icon" type="images/icon" href="Images/icons/amazon-tab-icon.ico">
    <title>Amazon Clone</title>
</head>

<body class="login-page">
    <header>
        <section class="left-section">
            <a href="index.php">
                <div class="title-container">
                    <picture>
                        <source srcset="Images/icons/amazon-logo-white.png" media="(min-width: 801px)">
                        <img class="website-logo" src="Images/icons/amazon-mobile-logo-white.png" alt="Amazon Logo">
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
            </div>
        </section>
    </header>

    <nav class="sidebar"></nav>

    <main class="login-main">
        <div class="form-container">
            <h2>Sign In</h2>

            <?php if ($loginError): ?>
                <div style="color: #b71c1c; background: #ffcdd2; padding: 10px; border-radius: 4px; margin-bottom: 15px;">
                    <?= htmlspecialchars($loginError) ?>
                </div>
            <?php endif; ?>

            <?php if ($loginSuccess): ?>
                <div style="color: #1b5e20; background: #c8e6c9; padding: 10px; border-radius: 4px; margin-bottom: 15px;">
                    <?= htmlspecialchars($loginSuccess) ?>
                </div>
            <?php endif; ?>

            <form method="POST">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input 
                        type="email" 
                        id="email" 
                        name="email" 
                        required 
                        value="<?= isset($_COOKIE['user_email']) ? htmlspecialchars($_COOKIE['user_email']) : '' ?>"
                    />
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required />
                </div>
                <div class="checkbox-group">
                    <input type="checkbox" id="terms" name="terms" required />
                    <label for="terms">I agree to the terms and conditions</label>
                </div>
                <button type="submit" class="submit-btn">Sign In</button>
            </form>

            <div class="register-link">
                <p>Don't have an account? <a href="register.php">Sign up</a></p>
            </div>
            <div class="delete-user-link">
                <p><a href="delete-user.php">Delete User Account</a></p>
            </div>
        </div>
    </main>

    <?php include 'includes/footer.php'; ?>
