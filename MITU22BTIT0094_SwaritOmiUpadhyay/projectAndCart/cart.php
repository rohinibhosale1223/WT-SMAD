
<?php
session_start();

// Initialize the cart if it doesn't exist
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Product prices and images for calculating the total and displaying the image
$product_info = [
    'asus_laptop' => ['price' => 1000, 'image' => 'asus.png'],
    'macbook_air' => ['price' => 1200, 'image' => 'macir.png'],
    'macbook_pro' => ['price' => 1500, 'image' => 'macpro.png'],
];

// Function to calculate the total price
function calculateTotal() {
    global $product_info;
    $total = 0;

    foreach ($_SESSION['cart'] as $product => $quantity) {
        if (isset($product_info[$product])) {
            $total += $product_info[$product]['price'] * $quantity;
        }
    }

    return $total;
}

// Function to render the cart items
function renderCartItems() {
    global $product_info;
    $product_names = [
        'asus_laptop' => 'Asus Laptop',
        'macbook_air' => 'MacBook Air',
        'macbook_pro' => 'MacBook Pro',
    ];

    if (empty($_SESSION['cart'])) {
        echo "<p>No items in cart</p>";
    } else {
        foreach ($_SESSION['cart'] as $product => $quantity) {
            if ($quantity > 0) {
                $product_name = $product_names[$product];
                $product_price = $product_info[$product]['price'];
                $product_image = $product_info[$product]['image'];

                echo "<div class='cart-item'>";
                echo "<img src='$product_image' class='cart-item-image' alt='$product_name' />";
                echo "<div class='cart-item-info'>";
                echo "<span class='cart-item-name'>$product_name</span>";
                echo "<span class='cart-item-quantity'>Quantity: $quantity</span>";
                echo "<span class='cart-item-price'>Price: $" . ($product_price * $quantity) . "</span>";
                echo "</div>";
                echo "<div class='cart-item-controls'>";
                echo "<button class='decrement' data-product='$product'>-</button>";
                echo "<button class='increment' data-product='$product'>+</button>";
                echo "<button class='remove' data-product='$product'>Remove</button>";
                echo "</div>";
                echo "</div>";
            }
        }
    }
}

// Handle POST requests for cart actions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['product']) && isset($_POST['action'])) {
        $product = $_POST['product'];
        $action = $_POST['action'];

        if ($action === 'increment') {
            $_SESSION['cart'][$product]++;
        } elseif ($action === 'decrement') {
            $_SESSION['cart'][$product]--;
            if ($_SESSION['cart'][$product] <= 0) {
                unset($_SESSION['cart'][$product]);
            }
        } elseif ($action === 'remove') {
            unset($_SESSION['cart'][$product]);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Shopping Cart</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style>
    /* Basic resets */
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body {
        font-family: Arial, sans-serif;
        background-color: #f5f5f5;
    }

    h1 {
        text-align: center;
        color: #333;
        margin: 20px;
    }

    .cart {
        margin:20px;
        padding: 20px;
        background-color: white;
        border: 1px solid #ddd;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .cart-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 0;
        border-bottom: 1px solid #ddd;
    }

    .cart-item-image {
        width: 50px;
        height: auto;
        margin-right: 15px;
    }

    .cart-item-info {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }

    .cart-item-controls {
        display: flex;
        gap: 10px;
    }

    .increment,
    .decrement {
        padding: 10px;
        background-color: #f39c12;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 1em;
    }

    .remove {
        padding: 10px;
        background-color: #e74c3c;
        color: white;
        border-radius: 5px;
        cursor: pointer;
    }

    .total {
        margin-right:20px;
        text-align: right;
        font-size: 1.2em;
        color: #333;
    }

    </style>
    <script>
    $(document).ready(function() {
        $(".increment").on("click", function() {
            var product = $(this).data("product");
            $.post("cart.php", { product: product, action: "increment" }, function() {
                location.reload();
            });
        });

        $(".decrement").on("click", function() {
            var product = $(this).data("product");
            $.post("cart.php", { product: product, action: "decrement" }, function() {
                location.reload();
            });
        });

        $(".remove").on("click", function() {
            var product = $(this).data("product");
            $.post("cart.php", { product: product, action: "remove" }, function() {
                location.reload();
            });
        });
    });
    </script>
</head>
<body>
    <?php include 'navbar.html'; ?>
    <h1>Shopping Cart</h1>
    <div class="cart">
        <?php renderCartItems(); ?>
    </div>

    <div class="total">
        Total: $<?php echo calculateTotal(); ?>
    </div>

</body>
</html>
