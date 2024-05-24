<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentication</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        .header {
            background-color: #000;
            text-align: center;
            color: #fff;
            padding: 30px 0;
        }

        .navbar {
            background-color: #333; 
            overflow: hidden;
            position: relative;
        }

        .navbar a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
            border-radius: 5px; 
            margin-right: 10px;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        .form-group {
            margin-top: 20px; 
            text-align: center;
        }

        .form-group select,
        .form-group a {
            padding: 10px; 
            background-color: #000;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px; 
            outline: none;
            -webkit-appearance: none; 
            -moz-appearance: none; 
            appearance: none; 
            margin-right: 10px;
            text-decoration: none; /* Removed underline */
        }

        .form-group select:hover,
        .form-group a:hover {
            background-color: #333; 
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            display: flex; 
            justify-content: space-between; 
        }

        .content {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            flex: 1; 
        }

        .content img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1 class="navbar-title"><?= __('AuraSync') ?></h1>
    </div>
    <div class="navbar">
        <a href="<?= __('/Authentication/index') ?>">Home</a>
        <a href="#about"><?= __('About') ?></a>
        <a href="#contact"><?= __('Contact') ?></a>
        
    </div>

    <div class="container">
        <img src="https://via.placeholder.com/200" alt="<?= __('Logo') ?>" style="width: 200px; height: auto;">
        <div class="content">
            <h1><?= __('Welcome to AuraSync') ?></h1>
            <p><?= __('AuraSync is a platform designed to streamline the booking process for clients and barbers. Whether you\'re scheduling appointments or managing your profile, AuraSync makes it simple and secure.') ?></p>
            <p><?= __('Choose your user type below to get started:') ?></p>
            <div class="form-group">
            <a href="<?= __('/Client/login') ?>" style="text-decoration: none;"><?= __('Client') ?></a>
            <a href="<?= __('/Barber/login') ?>" style="text-decoration: none;"><?= __('Barber') ?></a>
        </div>
        </div>
    </div>

    <div class="form-group">
        <select id="languageDropdown" onchange="changeLanguage()">
            <option value="" disabled selected>Choose language</option>
            <option value="en">English</option>
            <option value="fr">French</option>
        </select>
    </div>

    <script>
        function changeLanguage() {
            var lang = document.getElementById("languageDropdown").value;
            var url = window.location.href.split('?')[0]; 
            window.location.href = url + '?lang=' + lang; 
        }
    </script>
</body>
</html>
