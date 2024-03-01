<?php
include 'conn.php';
$searchErr = '';
$clothes_details='';
if(isset($_POST['save']))
{
	if(!empty($_POST['weather']) and !empty($_POST['occasion']) and !empty($_POST['gender']))
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
<?php require"header.php"; ?>
<head>
    <style>
    header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h1 style="color:wheat">Clothes Recommendation System</h1>

    </header>

    <div class="container">
        <form action="#" method="post" style="padding:50px">
    <label for="weather" style="color:wheat">Select Weather:</label>
    <select name="weather" id="weather" required>
        <option value="sunny" <?php if(isset($_POST['weather']) && $_POST['weather'] == 'sunny') echo 'selected'; ?>>Sunny</option>
        <option value="rainy" <?php if(isset($_POST['weather']) && $_POST['weather'] == 'rainy') echo 'selected'; ?>>Rainy</option>
        <option value="cold" <?php if(isset($_POST['weather']) && $_POST['weather'] == 'cold') echo 'selected'; ?>>Cold</option>
    </select>

    <label for="occasion" style="color:wheat">Select Occasion:</label>
    <select name="occasion" id="occasion" required>
        <option value="casual" <?php if(isset($_POST['occasion']) && $_POST['occasion'] == 'casual') echo 'selected'; ?>>Casual</option>
        <option value="formal" <?php if(isset($_POST['occasion']) && $_POST['occasion'] == 'formal') echo 'selected'; ?>>Formal</option>
        <option value="sports" <?php if(isset($_POST['occasion']) && $_POST['occasion'] == 'sports') echo 'selected'; ?>>Sports</option>
    </select>

    <label for="gender" style="color:wheat">Gender:</label>
    <select name="gender" id="gender" required>
        <option value="Male" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'Male') echo 'selected'; ?>>Male</option>
        <option value="Female" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'Female') echo 'selected'; ?>>Female</option>
    </select>

    <button type="submit" name="save">Get Recommendation</button>
</form>

       
    </div>
    <h1 style="color:wheat">Recommendation Result:</h1>
    <div id="recommendation">  
    <div class="container2">   
    <div class="product-container">
    <?php
    if (!$clothes_details) {
        echo '<p>No data found</p>';
    } else {
        foreach ($clothes_details as $key => $value) {
            ?>
            <div class="product-item">
                <img src="images/<?php echo $value['Photo']; ?>" alt="" style="width: 100px; height: 100px;">
                <p><?php echo $value['Name']; ?></p>
            </div>
            <?php
        }
    }
    ?>
</div>

    <script src="script.js"></script>

</body>
</html>
