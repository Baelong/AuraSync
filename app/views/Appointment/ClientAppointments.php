<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Client Appointments</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding-top: 70px;
            background-color: #f0f0f0;
        }
        .nav-item{
            border-bottom: none;
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
        li{
            padding: 10px;
            border-bottom: 1px solid #ccc;
            display: flex;
            justify-content: space-between;
            align-items: center; /* Align items vertically */
        }
        li:last-child {
            border-bottom: none;
        }
        .appointment-details {
            flex: 1;
        }
        .view-details-button {
            background-color: #007bff;
            border: none;
            color: white;
            padding: 6px 12px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 12px;
            border-radius: 4px;
            cursor: pointer;
            border: 1px solid #007bff;
        }
        .view-details-button:hover {
            background-color: #0056b3;
        }
        .no-appointments {
            text-align: center;
            color: #999;
            margin-top: 20px;
        }
        .button-container {
            display: flex;
            justify-content: flex-end;
            align-items: center;
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
    <?php if (!empty($appointments)) : ?>
        <div class="container">
            <h1>Client Appointments</h1>
            <ul>
                <?php foreach ($appointments as $key => $appointment) : ?>
                    <li id="AppointmentList">
                        <div class="appointment-details">
                            <p><strong>Date:</strong> <?= $appointment->date ?></p>
                            <p><strong>Time:</strong>  
                                <?php
                                    $hour = floor(($appointment->slot - 1) / 2) + 9;
                                    $minute = ($appointment->slot % 2 == 0) ? "30" : "00"; 

                                    // Format the time
                                    $time = sprintf("%02d:%s", $hour, $minute);

                                    // Print the time
                                    echo $time;
                                ?></p>
                            <p><strong>Service name:</strong> <?= $services[$key]->name ?></p>
                        </div>
                        <div class="button-container">
                            <form id="form_<?= $appointment->appointment_id ?>" action="/Appointment/index" method="post">
                                <input type="hidden" name="appointment_id" value="<?= $appointment->appointment_id ?>">
                                <button class="view-details-button" type="button" onclick="submitForm('<?= $appointment->appointment_id ?>')">View Details</button>
                            </form>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php else : ?>
        <div class="container">
            <h1>Client Appointments</h1>
            <div class="no-appointments">No appointments booked.</div>
        </div>
    <?php endif; ?>

    <script>
        function submitForm(appointmentId) {
            document.getElementById("form_" + appointmentId).submit();
        }
    </script>
</body>
</html>
