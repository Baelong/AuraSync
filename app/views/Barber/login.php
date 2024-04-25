<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentication</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            margin-top: 50px;
            text-align: center;
        }

        .form-group {
            margin-top: 20px;
        }

        .form-control {
            width: 300px;
            margin: auto;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        a {
            color: #007bff;
            text-decoration: none;
            margin-left: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <form method="post" action="">
        <div class="form-group">
            <label>Email:</label>
            <input type="text" class="form-control" name="email" placeholder="Jondoe@gmail.com" />
        </div>
        <div class="form-group">
            <label>Password:</label>
            <input type="password" class="form-control" name="password" placeholder="password" />
        </div>

        <div class="form-group">
            <input type="submit" name="action" value="Login" />
            <a href="/Barber/register">I have no account, bring me to the barber registration page</a>
        </div>
    </form>
</div>

</body>
</html>
