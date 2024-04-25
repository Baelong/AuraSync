<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $name ?> view</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
            padding-top: 50px;
        }

        .container {
            max-width: 400px;
            margin: auto;
        }

        .form-group {
            margin-bottom: 20px;
        }

        input[type="submit"] {
            width: 100%;
        }

        a {
            display: block;
            text-align: center;
            color: #007bff;
        }
    </style>
</head>
<body>
	<div class='container'>
		<form method='post' action=''>
			<div class="form-group">
				<label>First name:</label>
				<input type="text" class="form-control" name="first_name" placeholder="Jon" />
			</div>
			<div class="form-group">
				<label>Last name:</label>
				<input type="text" class="form-control" name="last_name" placeholder="Doe" />
			</div>
      <div class="form-group">
				<label>Age:</label>
				<input type="text" class="form-control" name="age" placeholder="18" />
			</div>
      <div class="form-group">
				<label>Phone Number:</label>
				<input type="text" class="form-control" name="phone_number" placeholder="514-444-7777" />
			</div>
			<div class="form-group">
				<input type="submit" name="action" value="Record my profile" /> 
			</div>
		</form>
	</div>
</body>
</html>
