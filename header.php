<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/5c5946fe44.js" crossorigin="anonymous"></script>
    <style>body {
        font-family: Arial, sans-serif;
        background-color: #add8e6; 
        background-image: url('images/background.jpg'); 
        background-size: cover;
        background-repeat: no-repeat;
        margin: 0;
        padding: 0;
    }
    h1{
        text-align: center;
    }

    form {
        display: flex;
        flex-direction: column;
    }
    
    label {
        margin-bottom: 8px;
    }
    
    select, button {
        margin-bottom: 16px;
        padding: 8px;
    }
    
    button {
        cursor: pointer;
        background-color: #4caf50;
        color: #FFFFFF;
        border: none;
        border-radius: 4px;
    }
    
    #recommendation {
        margin-top: 20px;
    }

#recommendation .product-container .product-item img {
    width: 100% !important;
    height: auto !important;
    max-height: 500px !important;
    border-radius: 8px !important;
}
#recommendation .product-container {
    display: flex;
    flex-direction: column;
    align-items: center;
}

#recommendation .product-item {
    border: 2px solid #ddd;
    margin: 20px;
    padding: 20px;
    text-align: center;
    max-width: 800px;
}

#recommendation .product-item img {
    width: 100%;
    height: auto;
    max-height: 300px;
    border-radius: 8px;
}

#recommendation .product-item p {
    margin-top: 15px;
    font-size: 24px; 
    font-family: 'Cursive', sans-serif; 
    color: #FFFFFF;
}

</style>
    <title>Clothes Recommendation System</title>
  </head>
  <body>
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <div class="container" style="margin-top: none">
        <a class="navbar-brand text-white" href="#">Clothes Recommendation System</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="index.php">Recommendations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
