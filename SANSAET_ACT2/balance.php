<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Balance</title>
    <style>
        body {
            background-image: url('ba.jpeg'); 
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent white background */
            padding: 20px; 
            border-radius: 10px; 
            text-align: center;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
            max-width: 500px; /* Limit the maximum width */
            width: 90%; /* Set width to 90% of the viewport */
        }

        h1 {
            color: white;
            font-size: 3em;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            margin-bottom: 20px;
        }

        .balance {
            font-size: 2em;
            margin-bottom: 10px;
        }

        .btn1 {
            margin-top: 20px;
            text-align: center;
        }

        button {
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 1.2em;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        }

        button:hover {
            background-color: gold;
        }

        @media (max-width: 768px) {
            h1 {
                font-size: 2em;
            }
        }
    </style>
</head>
<body>
    <?php
    session_start();
    ?>
    <div class="container">
        <h1>Your Balance:</h1>
        <div class="cont">
        <?php
            if(isset($_SESSION['balance'])) {
                echo "<p class='balance'>Balance: $".$_SESSION['balance']."</p>";
            } else {
                echo "<p class='balance'>Balance: $0.00</p>";
            }  
        ?>
        </div>
        <div class="btn1">
            <button onclick="window.location.href='index.php?data=value'">Home</button>
        </div>
    </div>
</body>
</html>
