<!DOCTYPE html>
<html lang="en">

<head>
    <title>Juan Daniel Jaimes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/global.css" type="text/css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="menu-style.css" type="text/css">
    <script src="https://kit.fontawesome.com/51785679f0.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    include "html/header.php";
    ?>
    <section id="menu">
        <div class="container">
            <h1 class="text-center">Menu</h1>
            <p>Order Online</p>
            <div id="menu-content">
                <div>
                    <h2>Pizzas</h2>
                    <h3>Thin Crust Pizza</h3>
                    <div class="text-center">
                        <p>Sizes</p>
                    </div>
                    <div class="menu-items">
                        <p>12"</p>
                        <p>14"</p>
                        <p>16"
                        <p>18"</p>
                    </div>
                    <div class="menu-items">
                        <p>Small</p>
                        <p>Medium</p>
                        <p>Large
                        <p>XLarge</p>
                    </div>
                    <div><a class="btn btn-order" href="?menu-item=12">Create Thin Crust <i class="fas fa-cart-plus"></i></a></div>
                    </br>
                    <h3>Pan Pizza</h3>
                    <div class="text-center">
                        <p>Sizes</p>
                    </div>
                    <div class="menu-items">
                        <p>12"</p>
                        <p>14"</p>
                        <p>16"
                        <p>18"</p>
                    </div>
                    <div class="menu-items">
                        <p>Small</p>
                        <p>Medium</p>
                        <p>Large
                        <p>XLarge</p>
                    </div>
                    <div class="btn btn-order">Create Pan Pizza</div>
                    </br>
                    <h3>Fresh Ingredients</h3>
                    <div>
                        <p>Meats:</br>Sausage, Peperoni, Chicken, Shrimp, Bacon, Ham, Chorizo, and Ground Beef</p>
                    </div>
                </div>
                <div>
                    <h2>Appetizers & Sides</h2>
                    <div class="menu-items">
                        <p>French Fries(small)</p>
                        <p><i class="fas fa-cart-plus"></i></p>
                    </div>
                    <div class="menu-items">
                        <p>French Fries(large)</p>
                        <p><i class="fas fa-cart-plus"></i></p>
                    </div>
                    <div class="menu-items">
                        <p>Spicy Fries</p>
                        <p><i class="fas fa-cart-plus"></i></p>
                    </div>
                    <div class="menu-items">
                        <p>Onion Rings</p>
                        <p><i class="fas fa-cart-plus"></i></p>
                    </div>
                </div>
                <div>
                    <h2>Beverages</h2>
                    <div class="menu-items">
                        <p>Bottle Water</p>
                        <p><i class="fas fa-cart-plus"></i></p>
                    </div>
                    <div class="menu-items">
                        <p>Can of Pop</p>
                        <p><i class="fas fa-cart-plus"></i></p>
                    </div>
                    <div class="menu-items" href="?id=0">
                        <p>1 Liter Soda</p>
                        <p><i class="fas fa-cart-plus"></i></p>
                    </div>
                    <div class="menu-items">
                        <p>2 Liter Soda</p>
                        <p><i class="fas fa-cart-plus"></i></p>
                    </div>
                </div>
                <div>
                    <h2>Specialty Pizzas</h2>
                    <div class="text-center">
                        <p>Sizes</p>
                    </div>
                    <div class="menu-items">
                        <p>12"</p>
                        <p>14"</p>
                        <p>16"
                        <p>18"</p>
                    </div>
                    <div class="menu-items">
                        <p>Small</p>
                        <p>Medium</p>
                        <p>Large
                        <p>XLarge</p>
                    </div>
                    </br>
                    <div class="text-center">
                        <p>Veggie:</br>mushrooms, onions, green, peppers, and black olives</p>
                    </div>
                    <div class="menu-items">
                        <p>11.40$</p>
                        <p>12.75$</p>
                        <p>14.75$
                        <p>16.50$</p>
                    </div>
                    <div class="btn btn-order">Order Veggie</div>
                    </br>
                    <div class="text-center">
                        <p>Hawaiian:</br>Ham, and Pineapple</p>
                    </div>
                    <div class="menu-items">
                        <p>11.40$</p>
                        <p>12.75$</p>
                        <p>14.75$
                        <p>16.50$</p>
                    </div>
                    <div class="btn btn-order">Order Hawaiian</div>
                    </br>
                    <div class="text-center">
                        <p>Mexican:</br>beans, chorizo, jalapenos, onions, and cilantro</p>
                    </div>
                    <div class="menu-items">
                        <p>11.40$</p>
                        <p>12.75$</p>
                        <p>14.75$
                        <p>16.50$</p>
                    </div>
                    <div class="btn btn-order">Order Mexican</div>
                    </br>
                    <div class="text-center">
                        <p>Deluxe:</br>sausage, pepperoni, onions, and green peppers</p>
                    </div>
                    <div class="menu-items">
                        <p>11.40$</p>
                        <p>12.75$</p>
                        <p>14.75$
                        <p>16.50$</p>
                    </div>
                    <div class="btn btn-order">Order Deluxe</div>
                    </br>
                </div>
                <div>
                    <h2>Sandwiches, Burgers, & Subs</h2>

                    <div class="menu-items">
                        <p>Italian Beef</p>
                        <p><i class="fas fa-cart-plus"></i></p>
                    </div>
                    <div class="menu-items">
                        <p>Italian Sausage</p>
                        <p><i class="fas fa-cart-plus"></i></p>
                    </div>
                    <div class="menu-items">
                        <p>Polish Sausage</p>
                        <p><i class="fas fa-cart-plus"></i></p>
                    </div>
                    <div class="menu-items">
                        <p>Combo Sandwich</p>
                        <p><i class="fas fa-cart-plus"></i></p>
                    </div>
                    <div class="menu-items">
                        <p>Combo Sandwich</p>
                        <p><i class="fas fa-cart-plus"></i></p>
                    </div>
                    <div class="menu-items">
                        <p>Combo Sandwich</p>
                        <p><i class="fas fa-cart-plus"></i></p>
                    </div>
                    <div class="menu-items">
                        <p>Combo Sandwich</p>
                        <p><i class="fas fa-cart-plus"></i></p>
                    </div>
                    <div class="menu-items">
                        <p>Combo Sandwich</p>
                        <p><i class="fas fa-cart-plus"></i></p>
                    </div>
                    <div class="menu-items">
                        <p>Combo Sandwich</p>
                        <p><i class="fas fa-cart-plus"></i></p>
                    </div>
                    <div class="menu-items">
                        <p>Combo Sandwich</p>
                        <p><i class="fas fa-cart-plus"></i></p>
                    </div>
                    <div class="menu-items">
                        <p>Combo Sandwich</p>
                        <p><i class="fas fa-cart-plus"></i></p>
                    </div>
                    <div class="menu-items">
                        <p>Combo Sandwich</p>
                        <p><i class="fas fa-cart-plus"></i></p>
                    </div>
                    <div class="menu-items">
                        <p>Combo Sandwich</p>
                        <p><i class="fas fa-cart-plus"></i></p>
                    </div>
                    <div class="menu-items">
                        <p>Combo Sandwich</p>
                        <p><i class="fas fa-cart-plus"></i></p>
                    </div>

                </div>
                <div>
                    <h2>Fried Chicken & Ribs</h2>
                    <h3>Fried Chicken Dinner</h3>
                    <div class="menu-items">
                        <p>2 piece</p>
                        <p><i class="fas fa-cart-plus"></i></p>
                    </div>
                    <div class="menu-items">
                        <p>5 piece</p>
                        <p><i class="fas fa-cart-plus"></i></p>
                    </div>
                </div>
                <div>
                    <h2>Salads</h2>
                    <h3>Grilled Chicken Breast</h3>
                    <div class="menu-items">
                        <p>2 piece</p>
                        <p><i class="fas fa-cart-plus"></i></p>
                    </div>
                    <div class="menu-items">
                        <p>5 piece</p>
                        <p><i class="fas fa-cart-plus"></i></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    include "html/footer.php";
    ?>
</body>

</html>