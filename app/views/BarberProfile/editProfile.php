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
            padding-top: 70px;
        }

        .container {
            margin-top: 50px;
            max-width: 400px;
            margin: auto;
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
    <h1><?= __('Edit Profile') ?></h1>
        <form method='post' action=''>
            <div class="form-group">
                <label><?= __('First name:') ?></label>
                <input type="text" class="form-control" name="first_name" placeholder="<?= __('Jon') ?>" value="<?= $data->first_name ?>" />
            </div>
            <div class="form-group">
                <label><?= __('Last name:') ?></label>
                <input type="text" class="form-control" name="last_name" placeholder="<?= __('Doe') ?>" value="<?= $data->last_name ?>" />
            </div>
            <div class="form-group">
                <label><?= __('Bio:') ?></label>
                <input type="text" class="form-control" name="bio" placeholder="<?= __('Bio') ?>" value="<?= $data->bio ?>" />
            </div>
            <div class="form-group">
                <label><?= __('Phone Number:') ?></label>
                <input type="text" class="form-control" name="phone_number" placeholder="<?= __('514-444-7777') ?>" value="<?= $data->phone_number ?>" />
            </div>
            <div class="form-group">
                <label><?= __('Age:') ?></label>
                <input type="text" class="form-control" name="age" placeholder="<?= __('18') ?>" value="<?= $data->age ?>" />
            </div>
            <div class="form-group">
                <input type="submit" name="action" value="<?= __('Record my profile') ?>" /> 
            </div>
        </form>
    </div>
</body>
</html>
