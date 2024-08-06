<?php require "header.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #add8e6;
            background-image: url('background.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            margin: 0;
            padding: 0;
        }

        header {
            background: rgba(0, 0, 0, 0.5);
            color: #fff;
            text-align: center;
            padding: 50px 20px;
            margin-bottom: 20px;
            position: relative;
            overflow: hidden;
        }

        header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('background.jpg');
            background-size: cover;
            background-position: center;
            z-index: -1;
            opacity: 0.5;
            filter: blur(5px);
        }

        main {
            font-family: 'Playfair Display', serif;
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.9);
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            animation: slideIn 1s ease-out;
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
            transition: background-color 0.3s, transform 0.3s;
        }

        .cta-button:hover {
            background-color: #45a049;
            transform: scale(1.05);
        }

        .features {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .feature {
            text-align: center;
            margin: 20px;
        }

        .feature i {
            font-size: 3em;
            margin-bottom: 10px;
            color: #4caf50;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
            margin-top: 20px;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideIn {
            from { transform: translateY(20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
    </style>
    <title>Clothes Recommendation System</title>
</head>

<body>
    <header>
        <h1>Clothes Recommendation System</h1>
        <p style="color:black">Discover the perfect outfits for any occasion and weather.</p>
    </header>
    <main class="container">
        <h2 class="text-center">Welcome to Our Recommendation System</h2>
        <p>Find the ideal clothing recommendations tailored just for you. Simply select the weather, occasion, and gender, and we'll provide you with stylish suggestions.</p>
        <h3>Why Choose Us?</h3>
        <div class="features">
            <div class="feature">
                <i class="fas fa-tshirt"></i>
                <p>Curated collection of stylish outfits.</p>
            </div>
            <div class="feature">
                <i class="fas fa-user-check"></i>
                <p>Personalized recommendations based on your preferences.</p>
            </div>
            <div class="feature">
                <i class="fas fa-clock"></i>
                <p>Easy and convenient to use.</p>
            </div>
            <div class="feature">
                <i class="fas fa-trend-up"></i>
                <p>Stay updated with the latest fashion trends.</p>
            </div>
        </div>
        <div class="text-center">
            <a href="index.php" class="cta-button">Get Started</a>
        </div>
    </main>
    <footer>
        <p>&copy; 2024 Somnath Bhattarai. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
