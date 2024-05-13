
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
			display: flex;
			justify-content: center;
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
            background-color: #000;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
			
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #333;
        }

        a {
            color: #007bff;
            text-decoration: none;
            margin: 10px;
			font-size: 10px;
			transition: color 0.5s;
        }
		a:hover{
			color: #F11100;
		}
		.card-login{
			background-color: #fff;
			border-radius: 8px;
			box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
			padding: 20px;
			width: 500px;
			height: 450px;
			margin-top: 45px;
		}
    </style>
</head>
<body>
<div class="card-login">
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
            <a href="/Client/register">I have no account, bring me to the client registration page</a>
        </div>
        <a href="/Authentication/index">Return to user type selection</a>
    </form>
</div>
</div>
</body>
</html>
