<?php
include 'conn.php';
$searchErr = '';
$clothes_details='';
if(isset($_POST['save']))
{
    if(!empty($_POST['weather']) && !empty($_POST['occasion']) && !empty($_POST['gender']))
    {
        $weather = $_POST['weather'];
        $occasion = $_POST['occasion'];
        $gender = $_POST['gender'];
        $stmt = $conn->prepare("SELECT * FROM clothes WHERE Weather = ? AND Occasion = ? AND Gender = ?");

        $stmt->bind_param("sss", $weather, $occasion, $gender);

        $stmt->execute();

        $clothes_details = $stmt->get_result();
    }
    else
    {
        $searchErr = "Please enter the information";
    }
}
?>
<?php require "header.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f0f8ff;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            animation: fadeIn 1.5s;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
            color: #333;
        }

        select, button {
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        button {
            background-color: rgb(218, 165, 32);
            color: #fff;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
        }

        button:hover {
            background-color: rgb(218, 165, 32);
            transform: scale(1.05);
        }

        .error {
            color: red;
            margin-bottom: 10px;
        }

        .product-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            padding: 20px;
        }

        .product-item {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 10px;
            text-align: center;
            transition: transform 0.3s;
        }

        .product-item:hover {
            transform: scale(1.05);
        }

        .product-item img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 10px;
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
    </style>
    <title>Clothes Recommendation System</title>
</head>

<body>
    <header>
        <h1>Clothes Recommendation System</h1>
    </header>

    <div class="container">
        <form action="#" method="post">
            <label for="weather">Select Weather:</label>
            <select name="weather" id="weather" required>
                <option value="sunny" <?php if(isset($_POST['weather']) && $_POST['weather'] == 'sunny') echo 'selected'; ?>>Sunny</option>
                <option value="rainy" <?php if(isset($_POST['weather']) && $_POST['weather'] == 'rainy') echo 'selected'; ?>>Rainy</option>
                <option value="cold" <?php if(isset($_POST['weather']) && $_POST['weather'] == 'cold') echo 'selected'; ?>>Cold</option>
            </select>

            <label for="occasion">Select Occasion:</label>
            <select name="occasion" id="occasion" required>
                <option value="casual" <?php if(isset($_POST['occasion']) && $_POST['occasion'] == 'casual') echo 'selected'; ?>>Casual</option>
                <option value="formal" <?php if(isset($_POST['occasion']) && $_POST['occasion'] == 'formal') echo 'selected'; ?>>Formal</option>
                <option value="sports" <?php if(isset($_POST['occasion']) && $_POST['occasion'] == 'sports') echo 'selected'; ?>>Sports</option>
            </select>

            <label for="gender">Gender:</label>
            <select name="gender" id="gender" required>
                <option value="Male" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'Male') echo 'selected'; ?>>Male</option>
                <option value="Female" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'Female') echo 'selected'; ?>>Female</option>
            </select>

            <button type="submit" name="save">Get Recommendation</button>
        </form>
    </div>

    <h1 style="text-align: center; color: #333; margin-top: 30px;">Recommendation Result:</h1>
    <div id="recommendation">
        <div class="container">
            <div class="product-container">
                <?php
                if (!$clothes_details) {
                    echo '<p style="text-align: center; color: #333;">No data found</p>';
                } else {
                    foreach ($clothes_details as $key => $value) {
                        ?>
                        <div class="product-item">
                            <img src="images/<?php echo $value['Photo']; ?>" alt="<?php echo $value['Name']; ?>">
                            <p><?php echo $value['Name']; ?></p>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <footer>
        <p>&copy; 2024 Somnath Bhattarai. All rights reserved.</p>
    </footer>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>
