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
        <h1>Create Service</h1>
		<form method='post' action=''>
			<div class="form-group">
				<label>Service Name:</label>
				<input type="text" class="form-control" name="name" placeholder="Haircut" />
			</div>
			<div class="form-group">
				<label>Description:</label>
				<input type="text" class="form-control" name="description" placeholder="Haircut Description" />
			</div>
            <div class="form-group">
				<label>Price:</label>
				<input type="text" class="form-control" name="price" placeholder="$" />
			</div>
            <div class="form-group">
				<label>Discount:</label>
				<input type="text" class="form-control" name="discount" placeholder="none" />
			</div>
            <div class="form-group">
				<input type="submit" name="action" value="Create" /> 
			</div>
		</form>
	</div>
</body>
</html>