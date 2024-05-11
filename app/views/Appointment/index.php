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
            background-color: #f8f9fa;
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

<div class="container">
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Appointment ID</th>
                </tr>
            </thead>
            <tbody>
                <tr class="barber-row active" data-Appointment-id="<?= $data->appointment_id ?>">
                    <td><?= $data->appointment_id ?></td>
                </tr>
            </tbody>
        </table>
    </div>

    <h1 class="mb-4">Client Information</h1>

    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
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

    <h1 class="mb-4">Barber Information</h1>

    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
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

    <h1 class="mb-4 mt-5">Services Information</h1>

    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">Discount</th>
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

    <h1 class="mb-4 mt-5">Date Chosen</h1>

    <h4> 
        <tr class="date">
            <td><?= $data->date ?></td>
        </tr>
    </h4>

    <div class="mt-5">
        <h1>Time Chosen</h1>
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
        <form action="/Appointment/editAppointment" method="post" style="display: inline-block;">
            <input type="hidden" name="appointment_id" value="<?= $data->appointment_id ?>">
            <button type="submit" class="btn btn-primary">Reschedule</button>
        </form>

        <!-- Cancel Button -->
        <form action="/Appointment/deleteAppointment" method="post" style="display: inline-block;">
            <input type="hidden" name="appointment_id" value="<?= $data->appointment_id ?>">
            <button type="submit" class="btn btn-danger">Cancel Your Appoitnment</button>
        </form>
    </div>

</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

<script>
    
</script>

</body>
</html>
