<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BarberProfile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            margin-top: 10%;
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .container {
            margin-top: 50px;
        }

        h1 {
            color: #007bff;
            font-size: 24px;
        }

        .table {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
        }

        th, td {
            vertical-align: middle ;
        }

        .table thead th {
            background-color: #000;
            color: #fff;
            font-weight: bold;
            border-color: #ffffff;
            font-size: 16px;
            text-transform: uppercase;
        }

        .table th,
        .table td {
            padding: 12px;
        }

        .table tbody tr:hover {
            background-color: #f2f2f2;
        }

        .table-responsive {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            margin-bottom: 30px;
        }

        .row {
            margin-bottom: 0px;
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
                        <a class="nav-link" href='/ClientProfile/index'><?= __('Home') ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href='/ClientProfile/edit_profile'><?= __('Modify my profile') ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Appointment/clientAppointments"><?= __('My Appointments') ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href='/Client/browse_barbers'><?= __('Browse for barbers') ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Client/logout"><?= __('Logout') ?></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="mb-4"><?= __('Barber Profile') ?></h1>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <th scope="col"><?= __('First Name') ?></th>
                        <th scope="col"><?= __('Last Name') ?></th>
                        <th scope="col"><?= __('Bio') ?></th>
                        <th scope="col"><?= __('Phone Number') ?></th>
                        <th scope="col"><?= __('Age') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data as $index => $barber): ?>
                        <tr class="barber-row" data-barber-id="<?= $barber->barber_profile_id ?>">
                            <td><?= $barber->first_name ?></td>
                            <td><?= $barber->last_name ?></td>
                            <td><?= $barber->bio ?></td>
                            <td><?= $barber->phone_number ?></td>
                            <td><?= $barber->age ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h1 class="mb-4 mt-5"><?= __('Services Offered') ?></h1>
            </div>
        </div>

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
                    <?php foreach($data2 as $index => $service): ?>
                        <tr class="service-row" data-service-id="<?= $service->service_id ?>">
                            <td><?= $service->name ?></td>
                            <td><?= $service->description ?></td>
                            <td><?= $service->price ?></td>
                            <td><?= $service->discount ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h1 class="mb-4 mt-5"><?= __('Availability') ?></h1>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <th scope="col"><?= __('Monday') ?></th>
                        <th scope="col"><?= __('Tuesday') ?></th>
                        <th scope="col"><?= __('Wednesday') ?></th>
                        <th scope="col"><?= __('Thursday') ?></th>
                        <th scope="col"><?= __('Friday') ?></th>
                        <th scope="col"><?= __('Saturday') ?></th>
                        <th scope="col"><?= __('Sunday') ?></th>
                    </tr>
                </thead>
        <?php if ($data3 !== null): ?>
    <tbody>
        <tr>
            <td><?= $data3->Monday == 1 ? 'Yes' : 'No' ?></td>
            <td><?= $data3->Tuesday == 1 ? 'Yes' : 'No' ?></td>
            <td><?= $data3->Wednesday == 1 ? 'Yes' : 'No' ?></td>
            <td><?= $data3->Thursday == 1 ? 'Yes' : 'No' ?></td>
            <td><?= $data3->Friday == 1 ? 'Yes' : 'No' ?></td>
            <td><?= $data3->Saturday == 1 ? 'Yes' : 'No' ?></td>
            <td><?= $data3->Sunday == 1 ? 'Yes' : 'No' ?></td>
        </tr>
    </tbody>
    <?php endif; ?>

            </table>
        </div>
    </div>

   

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var serviceRows = document.querySelectorAll('.service-row');
        var barberRows = document.querySelectorAll('.barber-row');
        var barberId = barberRows[0].getAttribute('data-barber-id');
        serviceRows.forEach(function(row) {
            row.addEventListener('click', function() {
                var serviceId = this.getAttribute('data-service-id');
                var form = document.createElement('form');
                form.method = 'POST';
                form.action = '/Appointment/chooseDate';
                var inputService = document.createElement('input');
                inputService.type = 'hidden';
                inputService.name = 'service_id';
                inputService.value = serviceId;
                var inputBarberProfileId = document.createElement('input');
                inputBarberProfileId.type = 'hidden';
                inputBarberProfileId.name = 'barber_profile_id';
                inputBarberProfileId.value = barberId;
                form.appendChild(inputService);
                form.appendChild(inputBarberProfileId);
                document.body.appendChild(form);
                form.submit();
            });
        });
    });
    </script>
</body>

</html>
