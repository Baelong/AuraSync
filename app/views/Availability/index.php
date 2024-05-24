<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $name ?> view</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Availability</title>
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
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            text-align: left;
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
    <div class="container">
        <h1>Availability</h1>
        <table>
            <thead>
                <tr>
                    <th>Day</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Monday</td>
                    <td><?php echo $data->Monday ? 'Available' : 'Not Available'; ?></td>
                </tr>
                <tr>
                    <td>Tuesday</td>
                    <td><?php echo $data->Tuesday ? 'Available' : 'Not Available'; ?></td>
                </tr>
                <tr>
                    <td>Wednesday</td>
                    <td><?php echo $data->Wednesday ? 'Available' : 'Not Available'; ?></td>
                </tr>
                <tr>
                    <td>Thursday</td>
                    <td><?php echo $data->Thursday ? 'Available' : 'Not Available'; ?></td>
                </tr>
                <tr>
                    <td>Friday</td>
                    <td><?php echo $data->Friday ? 'Available' : 'Not Available'; ?></td>
                </tr>
                <tr>
                    <td>Saturday</td>
                    <td><?php echo $data->Saturday ? 'Available' : 'Not Available'; ?></td>
                </tr>
                <tr>
                    <td>Sunday</td>
                    <td><?php echo $data->Sunday ? 'Available' : 'Not Available'; ?></td>
                </tr>
            </tbody>
        </table>
       
    </div>
    <div class="form-group">
    <a href="/Availability/editAvailability">Edit Availability</a>
        </div>
   
</body>
</html>
