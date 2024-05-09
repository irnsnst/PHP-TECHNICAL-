<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Withdraw</title>
    <style>
        body {
            background-color: #f0f0f0;
			 background-image: url('bab.png'); 
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px; 
            border-radius: 10px; 
            text-align: center;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
            width: 80%;
            max-width: 400px; /* Adjust the maximum width */
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        form {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="number"] {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-bottom: 10px;
        }

        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 1em;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }

        .btn1 {
            text-align: center;
        }

        .btn1 button {
            margin-top: 10px;
        }

        @media (max-width: 768px) {
            .container {
                width: 90%;
            }
        }
    </style>
</head>
<body>
   <?php
    session_start();

if(isset($_POST['amount'])) {
    $amount = floatval($_POST['amount']);
    if($amount > 0) {
        if(isset($_SESSION['balance']) && $amount <= $_SESSION['balance']) {
            $_SESSION['balance'] -= $amount;
            $message = "<p>You've withdrawn $amount</p>";
        } else {
            $message = "<p>Insufficient balance!</p>";
        }
    } else {
        $message = "<p>Please enter a valid amount to withdraw.</p>";
    }
}
    ?>
    <div class="container">
        <h1>Withdraw:</h1>
        <form action="withdraw.php" method="post">
            <label for="amount">Amount:</label>
            <input type="number" name="amount" id="amount" step="0.01" required>
            <button type="submit">Withdraw</button>
        </form>
        <?php if(isset($message)) { echo $message; } ?>
        <div class="btn1">
            <button onclick="window.location.href='index.php?data=value'">Home</button>
        </div>
    </div>
</body>
</html>
