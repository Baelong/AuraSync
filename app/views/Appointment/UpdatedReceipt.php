<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Receipt</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin-top: 5%;
            padding: 20px;
        }

        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
            padding: 30px;
            max-width: 600px;
            margin: 0 auto;
        }

        .receipt-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .receipt-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .receipt-table th,
        .receipt-table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        .receipt-table th {
            background-color: #f5f5f5;
        }

        .total {
            margin-top: 30px;
            text-align: right;
        }

        .total span {
            font-weight: bold;
            color: #007bff;
        }

        .footer {
            margin-top: 30px;
            text-align: center;
            color: #666;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">User Profile</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item">
                        <a class="nav-link" href='/ClientProfile/index'>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href='/ClientProfile/edit_profile'>Modify my profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Appointment/clientAppointments">My Appointments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href='/Client/browse_barbers'>Browse for barbers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Client/logout">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<div class="container">
    <div class="receipt-header">
        <h1>Appointment Receipt</h1>
    </div>
    <table class="receipt-table">
        <thead>
            <tr>
                <th colspan="2">Barber Chosen</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data as $barber): ?>
                <tr>
                    <td><?= $barber->first_name ?></td>
                    <td><?= $barber->last_name ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <table class="receipt-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Discount</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data2 as $service): ?>
                <tr>
                    <td><?= $service->name ?></td>
                    <td><?= $service->description ?></td>
                    <td><?= $service->price ?></td>
                    <td><?= $service->discount ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="Date">
        Date: <span><?= $data3 ?></span>
    </div>
    <div class="time">
        Time: <span> 
                    <?php
                        $hour = floor(($data4 - 1) / 2) + 9;
                        $minute = ($data4 % 2 == 0) ? "30" : "00"; 

                        // Format the time
                        $time = sprintf("%02d:%s", $hour, $minute);

                        // Print the time
                        echo $time;
                    ?>
                </span>
    </div>
    <div class="total">
        Total Amount: <span><?= $data2[0]->price ?></span>
    </div>
    <div class="footer">
        Thank you for choosing us!<br>
        <a href="/ClientProfile/index">Done</a>
    </div>
</div>

</body>
</html>
