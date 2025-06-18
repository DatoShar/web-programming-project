<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Styles/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
    <link rel="icon" type="images/ico" href="Images/icons/amazon-tab-icon.ico" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <title>Amazon Clone</title>
</head>

<body class="home-page">
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

    <main class="index-main">
        <section class="carousel-section">
            <h2>Trending Products</h2>
            <div class="carousel-container">
                <div class="carousel-track">
                    <img src="Images/items/mac-book.png" alt="MacBook" />
                    <img src="Images/items/iphone-16-pro-max.png" alt="iPhone" />
                    <img src="Images/items/playstation-portal.png" alt="PS Portal" />
                    <img src="Images/items/go-pro.png" alt="GoPro" />
                    <img src="Images/items/apple-vision-pro.png" alt="Vision Pro" />
                    <img src="Images/items/rtx-5090.png" alt="RTX 5090" />
                    <img src="Images/items/samsung-tv.png" alt="Samsung TV" />
                    <img src="Images/items/beats-speaker.png" alt="Beats Speaker" />
                    <img src="Images/items/sony-xm6.png" alt="Sony XM6" />
                    <img src="Images/items/meta-rayban.png" alt="RayBan Meta" />
                    <img src="Images/items/samsung-galaxy-fold-z-6.png" alt="Galaxy Fold 6" />
                    <img src="Images/items/basketball.png" alt="Basketball" />
                    <img src="Images/items/real-madrid-kit.png" alt="Real Madrid Kit" />
                    <img src="Images/items/foam-runners.png" alt="Foam Runners" />
                </div>
            </div>
        </section>
        <section class="cta-section">
            <h2>Discover the Latest Tech</h2>
            <p>Browse trending gadgets, devices, and must-have gear all in one place.</p>
            <a href="products.php" class="shop-now-btn">Shop Now</a>
        </section>


        <section class="featured-products">
            <h2>Popular Picks</h2>
            <div class="product-preview-grid">
                <div class="product-card">
                    <img src="Images/items/mac-book.png" alt="MacBook">
                    <p>MacBook Pro</p>
                </div>
                <div class="product-card">
                    <img src="Images/items/iphone-16-pro-max.png" alt="iPhone">
                    <p>iPhone 16 Pro Max</p>
                </div>
                <div class="product-card">
                    <img src="Images/items/playstation-portal.png" alt="PlayStation Portal">
                    <p>PS Portal</p>
                </div>
                <div class="product-card">
                    <img src="Images/items/apple-vision-pro.png" alt="Vision Pro">
                    <p>Apple Vision Pro</p>
                </div>
            </div>
        </section>

    </main>

    <?php include 'includes/footer.php'; ?>
