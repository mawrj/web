<?php

// Koneksi ke database
$db = mysqli_connect("localhost", "root", "", "glow");

// Fungsi untuk mendapatkan IP pengguna
function getRealIpUser() {
    switch (true) {
        case (!empty($_SERVER['HTTP_X_REAL_IP'])): 
            return $_SERVER['HTTP_X_REAL_IP'];
        case (!empty($_SERVER['HTTP_CLIENT_IP'])): 
            return $_SERVER['HTTP_CLIENT_IP'];
        case (!empty($_SERVER['HTTP_X_FORWARDED_IP'])): 
            return $_SERVER['HTTP_X_FORWARDED_IP'];
        default: 
            return $_SERVER['REMOTE_ADDR'];
    }
}

// Fungsi untuk menambahkan produk ke keranjang
function add_cart() {
    global $db;

    if (isset($_GET['add_cart'])) {
        $ip_add = getRealIpUser();
        $p_id = mysqli_real_escape_string($db, $_GET['add_cart']);
        $product_qty = mysqli_real_escape_string($db, $_POST['product_qty']);
        $product_size = mysqli_real_escape_string($db, $_POST['product_size']);
        $custom_size = mysqli_real_escape_string($db, $_POST['custom_size']);

        $check_product = "SELECT * FROM cart WHERE ip_add='$ip_add' AND p_id='$p_id'";
        $run_check = mysqli_query($db, $check_product);

        if (mysqli_num_rows($run_check) > 0) {
            echo "<script>alert('This product is already in your cart')</script>";
            echo "<script>window.open('details.php?pro_id=$p_id', '_self')</script>";
        } else {
            $query = "INSERT INTO cart (p_id, ip_add, qty, size, custom_size) VALUES ('$p_id', '$ip_add', '$product_qty', '$product_size', '$custom_size')";
            mysqli_query($db, $query);

            echo "<script>window.open('details.php?pro_id=$p_id', '_self')</script>";
        }
    }
}

// Fungsi untuk mendapatkan produk terbaru
function getPro() {
    global $db;

    $get_products = "SELECT * FROM product ORDER BY product_id DESC LIMIT 4";
    $run_products = mysqli_query($db, $get_products);

    while ($row_products = mysqli_fetch_assoc($run_products)) {
        $pro_id = $row_products['product_id'];
        $pro_name = htmlspecialchars($row_products['product_name']);
        $pro_price = number_format($row_products['product_price'], 2, ',', '.');
        $pro_img_1 = htmlspecialchars($row_products['product_img_1']);

        echo "
        <div class='col-md-4 col-sm-6 single'>
            <div class='product'>
                <a href='details.php?pro_id=$pro_id'>
                    <img class='img-responsive' src='admin_area/product_images/$pro_img_1' alt='$pro_name'>
                </a>
                <div class='text'>
                    <h3>
                        <a href='details.php?pro_id=$pro_id'>$pro_name</a>
                    </h3>
                    <p class='price'>Rp $pro_price</p>
                    <p class='button'>
                        <a class='btn btn-default' href='details.php?pro_id=$pro_id'>View Details</a>
                        <a class='btn btn-primary' href='details.php?pro_id=$pro_id'>
                            <i class='fa fa-shopping-cart'></i> Add to Cart
                        </a>
                    </p>
                </div>
            </div>
        </div>
        ";
    }
}

// Fungsi untuk mendapatkan kategori
function getCats() {
    global $db;

    $get_category = "SELECT * FROM category";
    $run_category = mysqli_query($db, $get_category);

    while ($row_category = mysqli_fetch_assoc($run_category)) {
        $category_id = htmlspecialchars($row_category['category_id']);
        $category_name = htmlspecialchars($row_category['category_name']);

        echo "<li><a href='shop.php?category=$category_id'>$category_name</a></li>";
    }
}

// Fungsi untuk menghitung item dalam keranjang
function items() {
    global $db;

    $ip_add = getRealIpUser();
    $get_items = "SELECT * FROM cart WHERE ip_add='$ip_add'";
    $run_items = mysqli_query($db, $get_items);
    echo mysqli_num_rows($run_items);
}

// Fungsi untuk menghitung total harga
function total_price() {
    global $db;

    $ip_add = getRealIpUser();
    $total = 0;

    $select_cart = "SELECT * FROM cart WHERE ip_add='$ip_add'";
    $run_cart = mysqli_query($db, $select_cart);

    while ($record = mysqli_fetch_assoc($run_cart)) {
        $pro_id = $record['p_id'];
        $pro_qty = $record['qty'];

        $get_price = "SELECT product_price FROM product WHERE product_id='$pro_id'";
        $run_price = mysqli_query($db, $get_price);
        $row_price = mysqli_fetch_assoc($run_price);

        $total += $row_price['product_price'] * $pro_qty;
    }

    echo "Rp " . number_format($total, 2, ',', '.');
}

?>
