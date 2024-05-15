<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BarberProfile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <style>
        body {
            margin-top: 10%;
            background-color: #f8f9fa
        }

        .container {
            margin-top: 50px;
        }

        h1 {
            color: #007bff;
        }

        .table {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
        }

        th, td {
            vertical-align: middle !important;
        }

        .btn {
            margin-right: 10px;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><?= __('User Profile') ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href='<?= __('/ClientProfile/index') ?>'><?= __('Home') ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href='<?= __('/ClientProfile/edit_profile') ?>'><?= __('Modify my profile') ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= __('/Appointment/clientAppointments') ?>"><?= __('My Appointments') ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href='<?= __('/Client/browse_barbers') ?>'><?= __('Browse for barbers') ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= __('/Client/logout') ?>"><?= __('Logout') ?></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th scope="col"><?= __('Appointment ID') ?></th>
                </tr>
            </thead>
            <tbody>
                <tr class="barber-row active" data-Appointment-id="<?= $data->appointment_id ?>">
                    <td><?= $data->appointment_id ?></td>
                </tr>
            </tbody>
        </table>
    </div>

    <h1 class="mb-4"><?= __('Client Information') ?></h1>

    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th scope="col"><?= __('First Name') ?></th>
                    <th scope="col"><?= __('Last Name') ?></th>
                </tr>
            </thead>
            <tbody>
                <tr class="barber-row active" data-client-id="<?= $data2->client_profile_id ?>">
                    <td><?= $data2->first_name ?></td>
                    <td><?= $data2->last_name ?></td>
                </tr>
            </tbody>
        </table>
    </div>

    <h1 class="mb-4"><?= __('Barber Information') ?></h1>

    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th scope="col"><?= __('First Name') ?></th>
                    <th scope="col"><?= __('Last Name') ?></th>
                </tr>
            </thead>
            <tbody>
                <tr class="barber-row active" data-barber-id="<?= $data3->barber_profile_id ?>">
                    <td><?= $data3->first_name ?></td>
                    <td><?= $data3->last_name ?></td>
                </tr>
            </tbody>
        </table>
    </div>

    <h1 class="mb-4 mt-5"><?= __('Services Information') ?></h1>

    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th scope="col"><?= __('Name') ?></th>
                    <th scope="col"><?= __('Description') ?></th>
                    <th scope="col"><?= __('Price') ?></th>
                    <th scope="col"><?= __('Discount') ?></th>
                </tr>
            </thead>
            <tbody>
                <tr class="service-row active" data-service-id="<?= $data4->service_id ?>">
                    <td><?= $data4->name ?></td>
                    <td><?= $data4->description ?></td>
                    <td><?= $data4->price ?></td>
                    <td><?= $data4->discount ?></td>
                </tr>
            </tbody>
        </table>
    </div>

    <h1 class="mb-4 mt-5"><?= __('Date Chosen') ?></h1>

    <h4> 
        <tr class="date">
            <td><?= $data->date ?></td>
        </tr>
    </h4>

    <div class="mt-5">
        <h1><?= __('Time Chosen') ?></h1>
        <h4> 
            <tr class="slot">
                <td>
                    <h4> 
                        <tr class="slot">
                            <td>
                                <?php
                                $hour = floor(($data->slot - 1) / 2) + 9;
                                $minute = ($data->slot % 2 == 0) ? "30" : "00"; 

                                // Format the time
                                $time = sprintf("%02d:%s", $hour, $minute);

                                // Print the time
                                echo $time;
                                ?>
                            </td>
                        </tr>
                    </h4>

                </td>
            </tr>
        </h4>
    </div>

    <div class="mt-5">
        <!-- Reschedule Button -->
        <form action="/Appointment/editAppointmentDate" method="post" style="display: inline-block;">
            <input type="hidden" name="appointment_id" value="<?= $data->appointment_id ?>">
            <button type="submit" class="btn btn-primary"><?= __('Reschedule') ?></button>
        </form>

        <!-- Cancel Button -->
        <form action="/Appointment/deleteAppointment" method="post" style="display: inline-block;">
        <input type="hidden" name="appointment_id" value="<?= $data->appointment_id ?>">
            <button type="submit" class="btn btn-danger"><?= __('Cancel Your Appointment') ?></button>
        </form>
    </div>

</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

<script>
    
</script>

</body>

</html>
