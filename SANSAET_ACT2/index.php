<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('bg.png'); /* Replace 'bg.png' with the URL of your image */
            background-size: cover;
            background-position: center;
        }
        .container {
            text-align: center;
            background-color: rgba(255, 255, 255, 0.8); /* Add a semi-transparent white background to improve readability */
            padding: 20px; 
            border-radius: 10px; 
            animation: fadeIn 1s ease-out; /* Apply fade-in animation */
        }
        h1 {
            font-size: 2.5em;
            margin-bottom: 30px;
            color: #333;
        }
        .btn {
            display: inline-block;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 1em;
            cursor: pointer;
            margin: 10px;
            transition: background-color 0.3s, color 0.3s;
            text-decoration: none; 
        }
        .btn:hover {
            background-color: gold;
            color: #333; 
        }
        /* Fade-in animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
		
        .modal {
            display: none; /* Hide modal by default */
            position: fixed;
            z-index: 999;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.8); /* Black background with opacity */
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            border-radius: 10px;
            text-align: center;
            position: relative;
            animation: fadeIn 0.5s; /* Add fade-in animation */
        }

        .modal-content img {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
            /* Set a fixed aspect ratio for the images */
            width: 100%;
            height: auto;
            aspect-ratio: 16/9; /* 16:9 aspect ratio */
            object-fit: cover;
        }

        .close {
            color: #aaa;
            position: absolute;
            top: 10px;
            right: 20px;
            font-size: 30px;
            font-weight: bold;
            cursor: pointer;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
    </style>
</head>
<body>
<div class="container">
        <h1>Welcome to A-Bank</h1>
        <button id="startBtn" onclick="showOptions()" class="btn">Start</button>
        <div id="optionsContainer" style="display: none;">
            <a href="#" class="btn" onclick="openModal('balanceModal')"><i class="fas fa-chart-pie"></i> View Balance</a>
            <a href="#" class="btn" onclick="openModal('depositModal')"><i class="fas fa-money-bill-wave"></i> Deposit Money</a>
            <a href="#" class="btn" onclick="openModal('withdrawModal')"><i class="fas fa-money-check-alt"></i> Withdraw Money</a>
        </div>
    </div>

  <!-- Modals -->
<div id="balanceModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal('balanceModal')">&times;</span>
        <img src="bank.png" alt="Balance Image">
        <h2>Balance Management</h2>
        <p>Experience peace of mind and financial security with A-Bank's balance management solutions, designed to simplify your banking experience and help you stay on top of your finances effortlessly.</p>
        <a href="balance.php?data=value" class="btn">Proceed</a>
    </div>
</div>

<div id="depositModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal('depositModal')">&times;</span>
        <img src="depo.jpg" alt="Deposit Image">
        <h2>Deposit</h2>
        <p>At A-Bank, we understand the importance of secure and reliable banking solutions tailored to your needs. Our deposit services are designed to offer you peace of mind while helping you achieve your financial goals.</p>
        <a href="deposit.php?data=value" class="btn">Proceed</a>
    </div>
</div>

<div id="withdrawModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal('withdrawModal')">&times;</span>
        <img src="with.jpg" alt="Withdraw Image">
        <h2>Withdraw</h2>
        <p>Effortlessly access your funds with A-Bank's withdrawal service, ensuring convenient and secure transactions whenever you need them.</p>
        <a href="withdraw.php?data=value" class="btn">Proceed</a>
    </div>
</div>

    <script>
        function showOptions() {
            var optionsContainer = document.getElementById("optionsContainer");
            optionsContainer.style.display = "block";
            var startBtn = document.getElementById("startBtn");
            startBtn.style.display = "none"; // Hide the start button
        }
  
        function openModal(modalId) {
            var modal = document.getElementById(modalId);
            modal.style.display = "block";
        }

        function closeModal(modalId) {
            var modal = document.getElementById(modalId);
            modal.style.display = "none";
        }
    </script>

</body>
</html>
