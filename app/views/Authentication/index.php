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
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        .form-group {
            margin-top: 50px;
            text-align: center;
        }

        .form-group a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #000;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            margin-right: 10px;
        }

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
    <h1 class="navbar-title">AuraSync</h1>
</div>

<div class="navbar">
    <a href="/Authentication/index">Home</a>
    <a href="#about">About</a>
    <a href="#contact">Contact</a>
</div>

<div class="container">
    <img src="https://via.placeholder.com/200" alt="Logo" style="width: 200px; height: auto;">
    <div class="content">
        <h1><?= __('Welcome to AuraSync') ?></h1>
        <p><?= __('AuraSync is a platform designed to streamline the booking process for clients and barbers. Whether youre scheduling appointments or managing your profile, AuraSync makes it simple and secure.') ?></p>
        <p><?=__('Choose your user type below to get started:') ?></p>
        <div class="form-group">
            <a href="/Client/login"><?=__('Client') ?></a>
            <a href="/Barber/login"><?=__('Barber') ?></a>
        </div>
    </div>
</div>

</body>
</html>
