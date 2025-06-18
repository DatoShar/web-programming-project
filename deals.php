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
    <title>Deals</title>
</head>

<body class="deals-page" id="deals">
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
            <form class="input-container" id="search-form">
                <input class="search" id="search-input" type="search" placeholder="Search" />
                <button class="search-btn" type="submit">
                    <img src="images/icons/search.svg" alt="Search Button" />
                    <div class="tooltip">Search</div>
                </button>
                <button class="voice-search-btn" type="button">
                    <img class="voice-search-icon" src="images/icons/voice-search-icon.svg" alt="voice-search-icon" />
                    <div class="tooltip">Search with your voice</div>
                </button>
            </form>
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

    <main>
        <div class="categories">
            <div class="sub"><a href="#Sports">
                    Sports Gear
                </a></div>
            <div class="sub"><a href="#Home">
                    Home Essentials
                </a></div>
            <div class="sub"><a href="#Electronics">
                    Electronics
                </a></div>
            <div class="sub"><a href="#Clothes">
                    Clothes
                </a></div>
        </div>
        <h2 id="Sports" class="sub-categories">Sports Gear</h2>
        <section class="item-grid" id="sports-grid"></section>

        <h2 id="Home" class="sub-categories">Home Essentials</h2>
        <section class="item-grid" id="home-grid"></section>

        <h2 id="Electronics" class="sub-categories">Electronics</h2>
        <section class="item-grid" id="electronics-grid"></section>

        <h2 id="Clothes" class="sub-categories">Clothes</h2>
        <section class="item-grid" id="clothes-grid"></section>


    </main>
    <?php include 'includes/footer.php'; ?>