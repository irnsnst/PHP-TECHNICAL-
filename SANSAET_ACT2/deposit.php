<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deposit</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('wi.jpeg'); 
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.8); /* d */
            padding: 20px; 
            border-radius: 10px; 
            text-align: center;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
            max-width: 500px; /* Limit the maximum width */
            width: 90%; /* Set width to 90% of the viewport */
        }

        h1 {
            color: #007bff;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        label {
            margin-bottom: 10px;
        }

        input[type="number"] {
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            width: 100%;
            box-sizing: border-box;
            margin-bottom: 20px;
        }

        button {
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 1em;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s;
        }

        button:hover {
            background-color: gold;
        }

        .btn1 {
            margin-top: 20px;
            text-align: center;
        }

        @media (max-width: 768px) {
            h1 {
                font-size: 1.5em;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Deposit Money</h1>
        <form action="deposit.php" method="post">
            <label for="amount">Amount:</label>
            <input type="number" name="amount" id="amount" step="0.01" required>
            <button type="submit">Deposit</button>
        </form>
        <?php
session_start();

if(isset($_POST['amount'])) {
    $amount = floatval($_POST['amount']);
    if($amount > 0) {
        if(isset($_SESSION['balance'])) {
            $_SESSION['balance'] += $amount;
        } else {
            $_SESSION['balance'] = $amount;
        }
        echo "<p>Deposit of $amount successful!</p>";
    } else {
        echo "<p>Please enter a valid amount to deposit.</p>";
    }
}
        ?>
        <div class="btn1">
            <button onclick="window.location.href='index.php?data=value'">Home</button>
        </div>
    </div>
</body>
</html>
