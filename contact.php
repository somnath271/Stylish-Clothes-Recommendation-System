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

    </header>
    <div class="container">

        <form action="contact.php" method="post" onsubmit="return validateForm()" style="padding:20px">
            <label for="name" style="color:wheat">Your Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email" style="color:wheat">Your Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message" style="color:wheat">Your Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <button type="submit">Submit</button>
        </form>
    </div>

    <script src="script.js"></script>
</body>
</html>
