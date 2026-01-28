<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
   
<?php include 'header.php'; ?>





<section class="authors">

   <h1 class="title">Meals</h1>

   <div class="box-container">

      <div class="box">
         <img src="img/chicken pizza.jpg" alt="">
         <div class="share">
            
         </div>
         <h3>Chicken Pizza</h3>
         <h3>Time: 10min</h3>
         <h1>Made with Italian Sauce, Chicken, and spicy pizza.
                        Chicken pizza features a crispy crust topped with rich tomato sauce, juicy grilled chicken, and gooey melted cheese. The flavorful blend of herbs, garlic, and spices enhances every bite. Perfectly baked, it delivers a delicious combination of smoky, savory, and cheesy goodness! 🍕🔥
                    
         </h1>
         
      </div>

      <div class="box">
         <img src="img/cheese_pizza.jpg" alt="">
         <div class="share">
            
         </div>
         <h3>Cheese Pizza</h3>
         <h3>Time: 15min</h3>
         <h1> Made with Italian Sauce, cheese, and organic vegetables.
                        Cheese pizza is a classic delight with a crispy crust, rich tomato sauce, and a generous layer of gooey melted cheese. The perfect blend of mozzarella and spices creates a creamy, savory flavor. Simple yet delicious, it's a favorite for all cheese lovers! 🧀🍕🔥
                              
         </h1>
      </div>

      <div class="box">
      <img src="img/chilichicken_p.jpg" alt="">
         <div class="share">
            
         </div>
         <h3>Chilichicken Pizza</h3>
         <h3>Time: 16min</h3>
         <h1> spicy chicken,green chilies,onion and mozzaralla.
                          Chili chicken pizza features a crispy crust topped with spicy chili-marinated chicken, zesty tomato sauce, and gooey melted cheese. Bold flavors of garlic, paprika, and red chili flakes add a fiery kick. Perfect for spice lovers craving a delicious, smoky, and cheesy bite! 🌶️🔥🍕
                                       
         </h1>
      </div>

      <div class="box">
      <img src="img/pepperoni.jpg" alt="">
         <div class="share">
            
         </div>
         <h3>Peparoni Pizza</h3>
         <h3>Time: 15min</h3>
         <h1> sMade with Italian Sauce, Pepperoni, and organic vegetables.
                        Pepperoni pizza is a fan favorite, featuring a crispy crust topped with savory tomato sauce, melted mozzarella cheese, and a generous layer of spicy, crispy pepperoni slices. The pepperoni adds a delicious smoky flavor with a satisfying crunch. A perfect balance of cheese, spice, and crunch in every bite! 🍕🥓
                                                 
         </h1>
      </div>

      <div class="box">
      <img src="img/menu-burger.jpg" alt="">
         <div class="share">
            
         </div>
         <h3>Chicken Burger</h3>
         <h3>Time: 10min</h3>
         <h1>  Made with Italian chicken, Pepperoni, and organic vegetables.
                        A chicken burger features a juicy, seasoned chicken patty served on a soft bun with fresh toppings like lettuce, tomato, and creamy sauce. It’s a delicious, satisfying choice for any burger lover! 🍔🍗
                                                           
         </h1>
      </div>

      <div class="box">
      <img src="img/cheese_burger.jpg" alt="">
         <div class="share">
            
         </div>
         <h3>Cheese burger</h3>
         <h3>Time: 10min</h3>
         <h1>  Made with Italian Sauce, Pepperoni, and organic vegetables.
                        A cheese burger features a juicy beef patty topped with melted cheese, usually cheddar, served on a soft, toasted bun. Topped with fresh lettuce, tomato, pickles, and a tasty sauce, it's a classic favorite for cheese lovers! 🍔🧀
                                                                      
         </h1>
      </div>
      <div class="box">
      <img src="img/chrispy chicken burger.jpg" alt="">
         <div class="share">
            
         </div>
         <h3>chrispy chicken burger</h3>
         <h3>Time: 10min</h3>
         <h1>  Made with Italian Sauce, Pepperoni, and organic vegetables.
                        A crispy chicken burger features a golden, breaded and fried chicken patty, served on a soft bun. It's typically topped with fresh lettuce, tomato, pickles, and a creamy sauce, offering a satisfying crunch with every bite! 🍔🍗
                                                                                
         </h1>
      </div>
      <div class="box">
      <img src="img/veg_burger.jpg" alt="">
         <div class="share">
            
         </div>
         <h3>Vege burger</h3>
         <h3>Time: 10min</h3>
         <h1>  Made with Italian Sauce, Pepperoni, and organic vegetables.
                        A vegetable burger features a flavorful patty made from a mix of vegetables like beans, lentils, or chickpeas, often combined with spices and herbs. Served on a soft bun with fresh lettuce, tomato, pickles, and creamy sauce, it's a satisfying, plant-based option! 🍔🌱
                                                                                      
         </h1>
      </div>
      <div class="box">
      <img src="img/chicken_momo.jpg" alt="">
         <div class="share">
            
         </div>
         <h3>Chicken Momo</h3>
         <h3>Time: 20min</h3>
         <h1>  
                        Chicken momo is a popular dumpling dish filled with seasoned minced chicken, vegetables, and aromatic spices. The dumplings are either steamed or fried, creating a soft, flavorful bite. Often served with a spicy dipping sauce, it's a delicious and savory treat! 🍗🥟
                                                                                             
         </h1>
      </div>

      <div class="box">
      <img src="img/menu-momo.jpg" alt="">
         <div class="share">
            
         </div>
         <h3>Vege Momo</h3>
         <h3>Time: 15min</h3>
         <h1>  
         Veg momo is a popular snack originating from Tibet and Nepal, made of steamed dumplings filled with a mixture of finely chopped vegetables like cabbage, carrots, and onions, often seasoned with spices. It’s served with a flavorful dipping sauce, typically made of tomato, garlic, and chili. This dish is enjoyed as a quick snack or appetizer and is loved for its light, savory taste.                                                                                 
         </h1>
      </div>

      <div class="box">
      <img src="img/fired momo.jpg" alt="">
         <div class="share">
            
         </div>
         <h3>Fried Momo</h3>
         <h3>Time: 15min</h3>
         <h1> 
                        golden version of the traditional momo, where the dumplings are filled with either chicken or vegetables, then deep-fried until crispy on the outside. The filling remains tender and flavorful, and it’s often served with a spicy dipping sauce for an extra kick! 🥟🔥
                    </h1>
      </div>

      <div class="box">
      <img src="img/jhol momo.jpg" alt="">
         <div class="share">
            
         </div>
         <h3>Jahol Momo</h3>
         <h3>Time: 15min</h3>
         <h1> 
                        Jhol momo is a unique variation of momo, served in a flavorful, spicy broth rather than being steamed or fried. The dumplings are filled with chicken, vegetables, or both, and are immersed in a tangy, chili-infused soup with aromatic herbs and spices. It's a warm, comforting dish, perfect for those who love a bit of heat and savory goodness! 🥟🍲🌶️
                    </h1>
      </div>

      <div class="box">
      <img src="img/checken_p.jpg" alt="">
         <div class="share">
            
         </div>
         <h3>Chicken Pasta</h3>
         <h3>Time: 10min</h3>
         <h1>Italian pasta is a traditional dish from Italy, made with various types of pasta like spaghetti, penne, or fettuccine, paired with rich and flavorful sauces. Popular variations include creamy Alfredo, tangy marinara, and classic pesto. It is loved worldwide for its authentic taste, fresh ingredients, and versatility</h1>
      </div>

      <div class="box">
      <img src="img/R.jpeg" alt="">
         <div class="share">
            
         </div>
         <h3>Italian Pasta</h3>
         <h3>Time: 20min</h3>
         <h1>Chicken pasta is a delicious and hearty dish made with tender chicken pieces, pasta, and a flavorful sauce. It can be prepared in various styles, such as creamy Alfredo, spicy arrabbiata, or classic tomato-based marinara. This dish is loved for its rich flavors and versatility, making it a perfect meal for any occasion.</h1>
      </div>

      <div class="box">
      <img src="img/chese_pasta.jpg" alt="">
         <div class="share">
            
         </div>
         <h3>Cheese Pasta</h3>
         <h3>Time: 15min</h3>
         <h1>Cheese pasta is a creamy and comforting dish made with pasta coated in a rich, cheesy sauce. It can be made with different types of cheese like cheddar, parmesan, or mozzarella for a deliciously gooey texture. This dish is a favorite for all ages and can be enjoyed as a quick meal or a side dish</h1>
      </div>
      

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>