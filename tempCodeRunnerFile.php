<?php require"header.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #add8e6; 
        background-image: url('background.jpg'); 
        background-size: cover;
        background-repeat: no-repeat;
        margin: 0;
        padding: 0;
    }
        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        main {
            font-family: ;
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1, h2 {
            color: #333;
        }

        p, ul {
            color: #555;
        }

        .cta-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4caf50;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
    <title>Clothes Recommendation System</title>
</head>
<body>
    <header>
        <h1 style="color:wheat">Clothes Recommendation System</h1>
        <p style="color:wheat">Discover the perfect outfits for any occasion and weather.</p>
    </header>
    <main>
        <h2>Welcome to Our Recommendation System</h2>
        <p>Find the ideal clothing recommendations tailored just for you. Simply select the weather, occasion, and gender, and we'll provide you with stylish suggestions.</p>
        <h3>Why Choose Us?</h3>
    <ul>
        <li>Curated collection of stylish outfits.</li>
        <li>Personalized recommendations based on your preferences.</li>
        <li>Easy and convenient to use.</li>
        <li>Stay updated with the latest fashion trends.</li>
    </ul>
        <a href="index.php" class="cta-button">Get Started</a>
    </main>
</body>
</html>