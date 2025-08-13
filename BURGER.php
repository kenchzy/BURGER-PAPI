<?php
// landing.php

// Page data
$title = "Burger yummy papi";
$description = "Sink your teeth into the juiciest burgers in town! 
Freshly grilled, packed with flavor, and served with love. 
Order now and experience burger bliss.";
$image = "burger.jpg"; // Replace with your burger image file
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fff8f0;
        }
        .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 50px;
        }
        .description {
            width: 50%;
        }
        .description h1 {
            font-size: 48px;
            color: #d62828;
        }
        .description p {
            font-size: 18px;
            line-height: 1.6;
            color: #333;
        }
        .description button {
            background-color: #f77f00;
            border: none;
            padding: 15px 30px;
            font-size: 18px;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }
        .description button:hover {
            background-color: #d62828;
        }
        .image {
            width: 45%;
            text-align: right;
        }
        .image img {
            max-width: 100%;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body>

<div class="container">
    <div class="description">
        <h1><?php echo $title; ?></h1>
        <p><?php echo $description; ?></p>
        <button>Order Now</button>
    </div>
    <div class="image">
        <img src="<?php echo $image; ?>" alt="Burger Image">
    </div>
</div>

</body>
</html>
