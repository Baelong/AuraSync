<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $name ?> view</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding-top: 70px;
            background-color: #f0f0f0;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        li {
            padding: 10px;
            border-bottom: 1px solid #ccc;
            display: flex;
            justify-content: space-between;
        }
        li:last-child {
            border-bottom: none;
        }
        .service-details {
            flex: 1;
        }
        .no-services {
            text-align: center;
            color: #999;
            margin-top: 20px;
        }
        .form-group {
            margin-top: 50px;
            text-align: center;
        }
        .form-group a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #000000;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            margin-right: 10px;
        }
        .form-group a:hover {
            background-color: #333;
        }
        .actions a {
            margin-right: 10px;
            padding: 5px 10px;
            background-color: #28a745;
            color: #fff;
            text-decoration: none;
            border-radius: 3px;
        }
        .actions a.delete {
            background-color: #dc3545;
        }
        .actions a:hover {
            opacity: 0.8;
        }
        .nav-item{
            border-bottom: none;
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
    
    <?php if (!empty($data)) : ?>
        <div class="container">
            <h1>My Services</h1>
            <ul>
                <?php foreach ($data as $index => $service) : ?>
                    <li>
                        <div class="service-details">
                            <p><strong>Name:</strong> <?= $service->name ?></p>
                            <p><strong>Price:</strong> <?= $service->price ?></p>
                            <p><strong>Description:</strong> <?= $service->description ?></p>
                        </div>
                        <div class="actions">
                            <a href="/Service/updateService?serviceId=<?= $service->service_id ?>">Update</a>
                            <a href="/Service/deleteService?serviceId=<?= $service->service_id ?>" class="delete">Delete</a>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php else : ?>
        <div class="container">
            <h1>No services</h1>
            <div class="no-services">No services created.</div>
        </div>
    <?php endif; ?>
    <div class="form-group">
        <a href="/Service/createService">Add Service</a>
    </div>
</body>
</html>
