<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}



if(isset($_POST['order_btn'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $number = $_POST['number'];
   $method = mysqli_real_escape_string($conn, $_POST['method']);
   $placed_on = date('Y-m-d'); // Correct date format for MySQL

   $cart_total = 0;
   $cart_products = []; // Array to store product details

   // Fetch Cart Items
   $cart_query = mysqli_query($conn, "SELECT * FROM cart WHERE user_id = '$user_id'") or die(mysqli_error($conn));

   if(mysqli_num_rows($cart_query) > 0){
      
      while($cart_item = mysqli_fetch_assoc($cart_query)){
         $product_name = $cart_item['name'];
         $quantity = $cart_item['quantity'];
         $price = $cart_item['price'];
         $sub_total = $price * $quantity;
         $cart_total += $sub_total;

         // Store product names with quantities
         $cart_products[] = $product_name . ' (' . $quantity . ')';
      }

      // Convert product array to a string
      $total_products = implode(', ', $cart_products);

      //  Insert into orders table
      $insert_order = "INSERT INTO orders (user_id, name, number, method, total_products, total_price, placed_on) 
                      VALUES ('$user_id', '$name', '$number', '$method', '$total_products', '$cart_total', '$placed_on')";

      mysqli_query($conn, $insert_order) or die(mysqli_error($conn));

      // Get the last inserted order ID
      $order_id = mysqli_insert_id($conn);

      //  Insert each product into order_items table (including user_id)
      mysqli_data_seek($cart_query, 0); // Reset pointer for looping again
      while($cart_item = mysqli_fetch_assoc($cart_query)){
         $product_name = $cart_item['name'];
         $quantity = $cart_item['quantity'];
         $price = $cart_item['price'];

         mysqli_query($conn, "INSERT INTO order_items (order_id, user_id, product_name, quantity, price) 
            VALUES ('$order_id', '$user_id', '$product_name', '$quantity', '$price')") or die(mysqli_error($conn));
      }

      // Clear the cart
      mysqli_query($conn, "DELETE FROM cart WHERE user_id = '$user_id'") or die(mysqli_error($conn));

      $message[] = 'Order placed successfully!';
   } else {
      $message[] = 'Your cart is empty!';
   }
}















?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>checkout</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>checkout</h3>
   
</div>

<section class="display-order">

   <?php  
      $grand_total = 0;
      $select_cart = mysqli_query($conn, "SELECT * FROM cart WHERE user_id = '$user_id'") or die('query failed');
      if(mysqli_num_rows($select_cart) > 0){
         while($fetch_cart = mysqli_fetch_assoc($select_cart)){
            $total_price = ($fetch_cart['price'] * $fetch_cart['quantity']);
            $grand_total += $total_price;
   ?>
   <p> <?php echo $fetch_cart['name']; ?> <span>(<?php echo 'Rs.'.$fetch_cart['price'].'/-'.' x '. $fetch_cart['quantity']; ?>)</span> </p>
   <?php
      }
   }else{
      echo '<p class="empty">your cart is empty</p>';
   }
   ?>
   <div class="grand-total"> grand total : <span>Rs.<?php echo $grand_total; ?>/-</span> </div>

</section>

<section class="checkout">

   <form action="" method="post">
      <h3>place your order</h3>
      <div class="flex">
         <div class="inputBox">
            <span>your name :</span>
            <input type="text" name="name" required placeholder="enter your name">
         </div>
         <div class="inputBox">
            <span>your Table Num :</span>
            <input type="number" name="number" required placeholder="enter your number">
         </div>
         <div class="inputBox">
            <span>Enter your email or phone number:</span>
            <input type="varchar" name="email" required placeholder="enter your email">
         </div>
         <div class="inputBox">
            <span>payment method :</span>
            <select name="method">
               <option value="cash on delivery">cash on delivery</option>
               
            </select>
         </div>
         
      </div>
      <input type="submit" value="order now" class="btn" name="order_btn">
   </form>

</section>









<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>