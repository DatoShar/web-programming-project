console.log("Script loaded and running");



document.addEventListener("DOMContentLoaded", () => {
    const sidebarLinks = [
        { href: "index.php", icon: "Images/icons/home.svg", alt: "Home Icon", text: "Home" },
        { href: "products.php", icon: "Images/icons/product.png", alt: "Products Icon", text: "Products" },
        { href: "deals.php", icon: "Images/icons/deals.png", alt: "Deals Icon", text: "Deals" },
        { href: "support.php", icon: "Images/icons/support.png", alt: "Support Icon", text: "Support" },
        { href: "about.php", icon: "Images/icons/about.png", alt: "About Icon", text: "About" }
    ];


    const sidebar = document.querySelector(".sidebar");
    if (sidebar) {
        sidebarLinks.forEach(link => {
            const a = document.createElement("a");
            a.href = link.href;
            a.className = "sidebar-link";
            a.innerHTML = `
                <img src="${link.icon}" alt="${link.alt}" />
                <span>${link.text}</span>
            `;
            sidebar.appendChild(a);
        });
    }
});


const items = [
    {
        category: "sports-grid",
        image: "Images/Items/barcelona-kit.png",
        alt: "Barcelona kit",
        name: "Nike Barcelona Home Jersey 2024-2025 (New Spotify Sponsor)",
        price: "$20.99",
        oldPrice: "$29.99"
    },
    {
        category: "sports-grid",
        image: "Images/items/basketball.png",
        alt: "Basketball",
        name: "AND1 Chaos Rubber Basketball 29.5\"",
        price: "$15.00",
        oldPrice: "$19.99"
    },
    {
        category: "sports-grid",
        image: "Images/items/tennis-racquet.png",
        alt: "Tennis Racquet",
        name: "Blade Pro 98 V9 Tennis Racket",
        price: "$429.95",
        oldPrice: "$499.99"
    },
    {
        category: "sports-grid",
        image: "Images/items/running-shoes.png",
        alt: "Running Shoes",
        name: "Nike Pegasus 41 - Road Running Shoes",
        price: "$105.50",
        oldPrice: "$129.99"
    },
    {
        category: "sports-grid",
        image: "Images/items/dumbbell.png",
        alt: "Dumbbell",
        name: "Rubber Hex Dumbbell",
        price: "$34.32",
        oldPrice: "$44.32"
    },
    {
        category: "sports-grid",
        image: "Images/items/football-boots.png",
        alt: "Football Boots",
        name: "Adidas F50 Elite Laceless",
        price: "$339.93",
        oldPrice: "$399.99"
    },
    {
        category: "sports-grid",
        image: "Images/items/Football.png",
        alt: "football",
        name: "FIFA South Africa Jabulani",
        price: "$557.04",
        oldPrice: "$649.99"
    },
    {
        category: "sports-grid",
        image: "Images/items/skipping-rope.png",
        alt: "Skipping Rope",
        name: "Speed Skipping Rope",
        price: "$9.49",
        oldPrice: "$14.99"
    },
    {
        category: "sports-grid",
        image: "Images/items/boxing-gloves.png",
        alt: "boxing gloves",
        name: "Powerlock 2 Hook & Loop Pro Training Gloves",
        price: "$99.99",
        oldPrice: "$129.99"
    },
    {
        category: "sports-grid",
        image: "Images/items/golf-clubs.png",
        alt: "golf clubs",
        name: "Top Flite 2024 XL 13-Piece Complete Set",
        price: "$279.99",
        oldPrice: "$319.99"
    },
    {
        category: "sports-grid",
        image: "Images/items/real-madrid-kit.png",
        alt: "real madrid kit",
        name: "FIFA Pro Match BallMens Home Shirt 24/25 White",
        price: "$87.50",
        oldPrice: "$104.99"
    },
    {
        category: "sports-grid",
        image: "Images/items/dart-board.png",
        alt: "dart board",
        name: "Bullseye Elite Dartboard",
        price: "$42.95",
        oldPrice: "$55.00"
    },
    //home-grid
    {
        category: "home-grid",
        image: "Images/items/hoover.png",
        alt: "Vacuum",
        name: "Henry HVR Bagged Cylinder Vacuum",
        price: "$149.00",
        oldPrice: "$179.00"
    },
    {
        category: "home-grid",
        image: "Images/items/electric-kettle.png",
        alt: "electric kettle",
        name: "Tefal KO2M08G0 Morning Kettle - Dark Night",
        price: "$19.00",
        oldPrice: "$25.00"
    },
    {
        category: "home-grid",
        image: "Images/items/toaster.png",
        alt: "toaster",
        name: "Dualit 46526 Architect 4 Slice Toaster",
        price: "$144.00",
        oldPrice: "$159.00"
    },
    {
        category: "home-grid",
        image: "Images/items/chopping-board.png",
        alt: "chopping-board",
        name: "Habitat Industrial Acacia Wood Butchers Block",
        price: "$29.00",
        oldPrice: "$35.00"
    },
    {
        category: "home-grid",
        image: "Images/items/couch.png",
        alt: "couch",
        name: "Habitat Sacha Fabric Cuddle Chair - Charcoal - Ash Leg",
        price: "$1200.00",
        oldPrice: "$1399.00"
    },
    {
        category: "home-grid",
        image: "Images/items/pan.png",
        alt: "pan",
        name: "Scoville Neverstick 30cm Frying Pan",
        price: "$14.90",
        oldPrice: "$19.99"
    },
    {
        category: "home-grid",
        image: "Images/items/artificial-plant.png",
        alt: "artificial plant",
        name: "Habitat Artificial Green Topiary Fern Plant",
        price: "$7.00",
        oldPrice: "$10.00"
    },
    {
        category: "home-grid",
        image: "Images/items/backpack.png",
        alt: "backpack",
        name: "Thule Accent 15.6 Inch Laptop Backpack - Black",
        price: "$89.00",
        oldPrice: "$109.00"
    },
    {
        category: "home-grid",
        image: "Images/items/hairdryer.png",
        alt: "hairdryer",
        name: "Remington D3010 Power Dry Hair Dryer",
        price: "$19.40",
        oldPrice: "$24.99"
    },
    {
        category: "home-grid",
        image: "Images/items/fridge.png",
        alt: "fridge",
        name: "Bottom-freezer refrigerator, Stainless steel",
        price: "$899.99",
        oldPrice: "$999.99"
    },
    {
        category: "home-grid",
        image: "Images/items/oven.png",
        alt: "oven",
        name: "True Convection Wall Oven Selfclean, black Stainless steel",
        price: "$2200.00",
        oldPrice: "$2399.00"
    },
    {
        category: "home-grid",
        image: "Images/items/washing-machine.png",
        alt: "washing machine",
        name: "Bush WMSAA714EW 7KG 1400 Spin Washing Machine",
        price: "$219.00",
        oldPrice: "$249.00"
    }
    ,
    //electronics-grid 
    {
        category: "electronics-grid",
        image: "Images/items/mac-book.png",
        alt: "macbook laptop",
        name: "Apple MacBook Pro 2024 16.2in M4 Max 48GB 1TB - Silver",
        price: "$3799.00",
        oldPrice: "$4099.00"
    },
    {
        category: "electronics-grid",
        image: "Images/items/playstation-portal.png",
        alt: "playstation portal",
        name: "PlayStation Portal™ Remote Player",
        price: "$199.99",
        oldPrice: "$229.99"
    },
    {
        category: "electronics-grid",
        image: "Images/items/ps5-pro.png",
        alt: "ps5 pro",
        name: "PlayStation®5 Pro Console",
        price: "$699.99",
        oldPrice: "$749.99"
    },
    {
        category: "electronics-grid",
        image: "Images/items/samsung-tv.png",
        alt: "samsung tv",
        name: "Samsung 50 Inch Smart 4K UHD HDR LED TV",
        price: "$368.00",
        oldPrice: "$429.99"
    },
    {
        category: "electronics-grid",
        image: "Images/items/iphone-16-pro-max.png",
        alt: "iphone 16 pro max",
        name: "SIM Free iPhone 16 Pro Max 5G 256GB AI Mobile Phone - Desert",
        price: "$1099.00",
        oldPrice: "$1199.00"
    },
    {
        category: "electronics-grid",
        image: "Images/items/apple-vision-pro.png",
        alt: "apple vision pro",
        name: "Apple Vision Pro MQL83 256GB White",
        price: "$3490.00",
        oldPrice: "$3799.00"
    },
    {
        category: "electronics-grid",
        image: "Images/items/sony-xm6.png",
        alt: "sony xm6 headphones",
        name: "Sony WH-1000XM6 Wireless Noise Canceling Headphones",
        price: "$449.99",
        oldPrice: "$499.99"
    },
    {
        category: "electronics-grid",
        image: "Images/items/samsung-galaxy-fold-z-6.png",
        alt: "samsung galaxy z fold 6",
        name: "SIM Free Samsung Galaxy Z Fold6 5G 256GB AI Phone - Silver",
        price: "$2054.28",
        oldPrice: "$2199.00"
    },
    {
        category: "electronics-grid",
        image: "Images/items/go-pro.png",
        alt: "gopro",
        name: "GoPro HERO13 Action Camera - Black",
        price: "$399.99",
        oldPrice: "$429.99"
    },
    {
        category: "electronics-grid",
        image: "Images/items/beats-speaker.png",
        alt: "speaker",
        name: "Beats Pill",
        price: "$149.99",
        oldPrice: "$169.99"
    },
    {
        category: "electronics-grid",
        image: "Images/items/meta-rayban.png",
        alt: "rayban glasses",
        name: "RayBan Meta Headliner RW4009 Black/Polar green",
        price: "$541.59",
        oldPrice: "$589.00"
    },
    {
        category: "electronics-grid",
        image: "Images/items/rtx-5090.png",
        alt: "rtx-5090",
        name: "Asus ROG Astral LC GeForce RTX 5090 OC Edition",
        price: "$3409.99",
        oldPrice: "$3699.99"
    },
    //clothes-grid
    {
        category: "clothes-grid",
        image: "Images/items/foam-runners.png",
        alt: "yeezy",
        name: "adidas Yeezy Foam RNNR",
        price: "$81.00",
        oldPrice: "$99.00"
    },
    {
        category: "clothes-grid",
        image: "Images/items/sidemen-jacket.png",
        alt: "SDMN jacket",
        name: "SDMN x Hot Wheels Racing JacketMen's Graphic Tee",
        price: "$125.00",
        oldPrice: "$150.00"
    },
    {
        category: "clothes-grid",
        image: "Images/items/black-hoodie.png",
        alt: "Hoodie",
        name: "Noir Pulse Hoodie",
        price: "$74.39",
        oldPrice: "$85.00"
    },
    {
        category: "clothes-grid",
        image: "Images/items/jordan-trainers.png",
        alt: "jordan trainers",
        name: `Air Jordan 3 Retro "Rare Air"`,
        price: "$210.00",
        oldPrice: "$240.00"
    },
    {
        category: "clothes-grid",
        image: "Images/items/balenciaga-bag.png",
        alt: "balenciaga bag",
        name: "Women's Rodeo Handbag Medium Grained Calfskin in Sesame",
        price: "$6450",
        oldPrice: "$7200"
    },
    {
        category: "clothes-grid",
        image: "Images/items/no-two-ways.png",
        alt: "no two ways trainers",
        name: `notwoways Model 1 HKE Ultimate JME Trainer`,
        price: "$110.00",
        oldPrice: "$150.00"
    },
    {
        category: "clothes-grid",
        image: "Images/items/jorts.png",
        alt: "GCDS jorts",
        name: "GCDS logo-patch denim shorts",
        price: "$205.00",
        oldPrice: "$256.00"
    },
    {
        category: "clothes-grid",
        image: "Images/items/brown-dress.png",
        alt: "ralph lauren collection top",
        name: `Ralph Lauren Collection buckle-detail strapless top`,
        price: "$2445.00",
        oldPrice: "$2907.00"
    },
    {
        category: "clothes-grid",
        image: "Images/items/bum-bag.png",
        alt: "belt bag",
        name: "Stone Island Compass-patch belt bag",
        price: "$184.99",
        oldPrice: "$233.00"
    },
    {
        category: "clothes-grid",
        image: "Images/items/socks.png",
        alt: "Socks",
        name: `RHUDE Trophy racing socks`,
        price: "$63.00",
        oldPrice: "$74.00"
    },
    {
        category: "clothes-grid",
        image: "Images/items/beanie.png",
        alt: "prada beanie",
        name: "Prada triangle-logo wool-cashmere beanie",
        price: "$499.99",
        oldPrice: "$575.00"
    },
    {
        category: "clothes-grid",
        image: "Images/items/cap.png",
        alt: "baseball cap",
        name: "VETEMENTS Flame-logo baseball cap",
        price: "$1899.99",
        oldPrice: "$2203.00"
    }

];

const isDealsPage = document.body.id === "deals";

items.forEach(item => {
    const grid = document.getElementById(item.category);
    if (!grid) return;

    const itemDiv = document.createElement("div");
    itemDiv.className = "item-info";

    const isOnSale = isDealsPage && item.oldPrice;

    itemDiv.innerHTML = `
        <div class="item-image">
            ${isOnSale ? '<div class="sale-badge">SALE</div>' : ''}
            <img src="${item.image}" alt="${item.alt}" />
        </div>
        <div class="item-name-container">
            <p class="item-name">${item.name}</p>
        </div>
        <div class="price-container">
            ${isOnSale
            ? `<p class="price">
                          <span class="old-price">${item.oldPrice}</span>
                          <span class="new-price">${item.price}</span>
                       </p>`
            : `<p class="price">Price: ${item.oldPrice}</p>`
        }
        </div>
        <div class="selector-container"> 
            <select class="quantity-select">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
        </div>
        <div class="buttons"> 
            <button type="button" class="add-to-cart-btn">Add to cart</button>
        </div>
    `;

    grid.appendChild(itemDiv);
});



document.querySelector('.voice-search-btn').addEventListener('click', async () => {
    try {
        const status = await navigator.permissions.query({ name: 'microphone' });

        if (status.state === 'granted') {
            console.log('Microphone already granted.');

        } else if (status.state === 'prompt') {
            const stream = await navigator.mediaDevices.getUserMedia({ audio: true });
            console.log('Microphone access granted.');
            stream.getTracks().forEach(track => track.stop());
        } else {
            alert('Microphone permission denied. Please allow it in browser settings.');
        }
    } catch (error) {
        console.error('Error checking microphone permission:', error);
    }
});


let cartCount = parseInt(localStorage.getItem('cartCount')) || 0;
const cartCounter = document.querySelector('.products-counter');
if (cartCounter) {
    cartCounter.textContent = cartCount;
}


document.addEventListener('click', (e) => {
    if (e.target.classList.contains('add-to-cart-btn')) {
        const itemElement = e.target.closest('.item-info');
        const quantitySelect = itemElement.querySelector('select');
        const quantity = parseInt(quantitySelect.value);

        cartCount += quantity;
        cartCounter.textContent = cartCount;
        localStorage.setItem('cartCount', cartCount);
    }
});

// cartCount = 0;
// cartCounter.textContent = cartCount;
// localStorage.setItem('cartCount', cartCount);

$(document).ready(function () {
    const $track = $('.carousel-track');
    const $items = $track.children();

    $items.clone().appendTo($track);
});

function toggleDropdown() {
    const dropdown = document.getElementById('userDropdown');
    dropdown.hidden = !dropdown.hidden;
}
