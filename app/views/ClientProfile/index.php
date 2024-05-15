<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
           font-family: Arial, sans-serif;
            margin: 0;
            padding-top: 70px;
            background-color: #f0f0f0;
        }

        .container {
            display: flex;
            justify-content: center; /* Center the content horizontally */
            align-items: flex-start;
            padding-top: 50px;
        }

        .content {
            width: 75%;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
        }

        h1 {
            color: #000;
            text-align: center;
            margin-bottom: 20px;
        }

        dl {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        dt, dd {
            flex: 1 0 40%;
            text-align: center;
            padding: 10px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
        }

        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #007bff;
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
                        <a class="nav-link" href='/ClientProfile/editProfile'>Modify my profile</a>
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
        <div class="content">
            <h1>User profile</h1>
            <dl>
                <dt>First name:</dt>
                <dd><?= $data->first_name ?></dd>
                <dt>Last name:</dt>
                <dd><?= $data->last_name ?></dd>
                <dt>Age:</dt>
                <dd><?= $data->age ?></dd>
                <dt>Phone Number:</dt>
                <dd><?= $data->phone_number ?></dd>
            </dl>
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-9aH1Fc/T3Xe3RBf7vKj4Mzyn9tmq9OQCq6JkPqTVfh4l0tzEMOzvpwHXRnhO1QoS" crossorigin="anonymous"></script>
</body>
</html>
