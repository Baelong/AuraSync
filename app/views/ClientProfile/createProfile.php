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
            justify-content: center;
            display: flex;
        }

        .container {
            max-width: 400px;
            margin: auto;
        }

        .form-group {
            margin-bottom: 20px;
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
        .card-container{
          background-color: #fff;
          border-radius: 8px;
          align-items: center;
          flex-direction: column;
          box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
          padding: 20px;
          width: 500px;
          height: 450px;
          margin-top: 45px;
        }
        a {
            display: block;
            text-align: center;
            color: #007bff;
            text-decoration: none;
            margin-top: 20px;
            font-size: 16px;
            transition: color 0.5s;
        }
        a:hover{
          color: #F11100;
        }
    </style>
</head>
<body>
    <div class='card-container'>
        <div class='container'>
            <form method='post' action=''>
                <div class="form-group">
                    <label><?= __('First name:') ?></label>
                    <input type="text" class="form-control" name="first_name" placeholder="<?= __('Jon') ?>" />
                </div>
                <div class="form-group">
                    <label><?= __('Last name:') ?></label>
                    <input type="text" class="form-control" name="last_name" placeholder="<?= __('Doe') ?>" />
                </div>
                <div class="form-group">
                    <label><?= __('Age:') ?></label>
                    <input type="text" class="form-control" name="age" placeholder="<?= __('18') ?>" />
                </div>
                <div class="form-group">
                    <label><?= __('Phone Number:') ?></label>
                    <input type="text" class="form-control" name="phone_number" placeholder="<?= __('514-444-7777') ?>" />
                </div>
                <div class="form-group">
                    <input type="submit" name="action" value="<?= __('Record my profile') ?>" /> 
                </div>
            </form>
        </div>
    </div>
</body>

</html>
