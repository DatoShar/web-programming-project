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
    <title>About</title>
</head>

<body class="about-page">
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


    <nav class="sidebar">
    </nav>
    <main class="about-main">
        <div>
            <h1>About Us</h1>
            <p>
                Welcome to Amazon Clone, your go-to online store for a wide range of quality products at great prices.
                We aim to provide a smooth and reliable shopping experience for customers worldwide.
            </p>
            <p>
                Our focus is on fast shipping, excellent customer service, and an easy-to-use platform. Whether you need
                electronics, fashion, or home goods, we've got you covered.
            </p>
            <p>
                Thank you for choosing Amazon Clone. We're here to help — feel free to contact us anytime!
            </p>
        </div>
    </main>
   <?php include 'includes/footer.php'; ?>

   
