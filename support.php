<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');
    $fileInfo = '';

    if (!empty($_FILES['file']['name'])) {
        $uploadDir = 'uploads/';
        if (!is_dir($uploadDir)) mkdir($uploadDir, 0755, true);
        $filename = basename($_FILES['file']['name']);
        $targetFile = $uploadDir . time() . '-' . preg_replace('/[^a-zA-Z0-9._-]/', '_', $filename);

        if (move_uploaded_file($_FILES['file']['tmp_name'], $targetFile)) {
            $fileInfo = $targetFile;
        } else {
            $fileInfo = 'Upload failed';
        }
    }

    $entry = date('Y-m-d H:i:s') . " | Name: $name | Email: $email | Message: $message | File: $fileInfo" . PHP_EOL;
    file_put_contents('support-submits.txt', $entry, FILE_APPEND | LOCK_EX);
}
?>

<!DOCTYPE html>
<html lang="en" class="support-html">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Styles/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
    <link rel="icon" type="images/ico" href="Images/icons/amazon-tab-icon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <title>Customer Support</title>
</head>

<body class="support-page">
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
        </section>
    </header>

    <nav class="sidebar">
    </nav>

    <main class="support-main">
        <h1>Contact Us</h1>

        <div class="contact-us">
            <form method="POST" class="support-form" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" placeholder="e.g. John Doe" id="name" name="name" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" placeholder="e.g. example@gmail.com" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" placeholder="Report the problem..." required></textarea>
                </div>

                <div class="form-group">
                    <label for="file" class="file-label">Choose file</label>
                    <input type="file" id="file" name="file" accept=".jpg,.jpeg,.png,.pdf,.doc,.docx,.txt" />
                </div>

                <div class="form-group">
                    <input type="submit" value="Send">
                </div>
            </form>

            <div class="contact-details">
                <h2>Contact Information</h2>

                <div class="contact-card">
                    <p><strong>Name:</strong> Sarah Bennett</p>
                    <p><strong>Address:</strong> 271 Maplewood Lane, Austin, TX 73301</p>
                    <p><strong>Phone:</strong> (512) 555-3842</p>
                    <p><strong>Email:</strong> sarah.b@fakeemail.com</p>
                </div>

                <div class="contact-card">
                    <p><strong>Name:</strong> Jason Lee</p>
                    <p><strong>Address:</strong> 884 Sunset Avenue, Seattle, WA 98101</p>
                    <p><strong>Phone:</strong> (206) 555-9275</p>
                    <p><strong>Email:</strong> jason.lee@demo.net</p>
                </div>

                <div class="contact-card">
                    <p><strong>Name:</strong> Olivia Carter</p>
                    <p><strong>Address:</strong> 1429 Willow Creek Rd, Denver, CO 80202</p>
                    <p><strong>Phone:</strong> (720) 555-2134</p>
                    <p><strong>Email:</strong> o.carter@example.org</p>
                </div>

                <div class="link-tree">
                    <div class="social-media">
                        <a href="https://www.facebook.com/Amazon" target="_blank" rel="noopener noreferrer">
                            <i class="fab fa-facebook fa-2x"></i>
                        </a>
                        <a href="https://www.instagram.com/amazon" target="_blank" rel="noopener noreferrer">
                            <i class="fab fa-instagram fa-2x"></i>
                        </a>
                        <a href="https://twitter.com/amazon" target="_blank" rel="noopener noreferrer">
                            <i class="fab fa-x-twitter fa-2x"></i>
                        </a>
                        <a href="https://www.linkedin.com/company/amazon" target="_blank" rel="noopener noreferrer">
                            <i class="fab fa-linkedin fa-2x"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include 'includes/footer.php'; ?>