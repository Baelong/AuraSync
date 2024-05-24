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
            padding-top: 90px; 
        }

        .container {
            margin-top: 50px;
            max-width: 400px;
            margin: auto;
            padding: 20px; 
            background-color: #ffffff;
            border-radius: 10px; 
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1); 
        }

        .form-group {
            margin-bottom: 20px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #000;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        a {
            display: block;
            text-align: center;
            color: #007bff;
            text-decoration: none;
            margin-top: 20px;
        }

        a:hover {
            color: #0056b3;
        }

        label {
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><?= __('Barber Profile') ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href='/BarberProfile/index'> <?= __('Home') ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href='/BarberProfile/editProfile'> <?= __('Modify my profile') ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href='/Service/index'><?= __('My Services') ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Availability/index"><?= __('Availability') ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Barber/logout"><?= __('Logout') ?></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class='container'>
    <h1><?= __('Create Service') ?></h1>
    <form method='post' action=''>
        <div class="form-group">
            <label><?= __('Service Name:') ?></label>
            <input type="text" class="form-control" name="name" placeholder="<?= __('Haircut') ?>" />
        </div>
        <div class="form-group">
            <label><?= __('Description:') ?></label>
            <input type="text" class="form-control" name="description" placeholder="<?= __('Haircut Description') ?>" />
        </div>
        <div class="form-group">
            <label><?= __('Price:') ?></label>
            <input type="text" class="form-control" name="price" placeholder="<?= __('$') ?>" />
        </div>
        <div class="form-group">
            <label><?= __('Discount:') ?></label>
            <input type="text" class="form-control" name="discount" placeholder="<?= __('none') ?>" />
        </div>
        <div class="form-group">
            <input type="submit" name="action" value="<?= __('Create') ?>" /> 
        </div>
    </form>
</div>

</body>
</html>
