<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BarberProfile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
    </style>
</head>
<body>



<div class="container">
    <h1 class="mb-4">Barber Profile</h1>

    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="table-dark">
      <tr>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Bio</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Age</th>
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

    
    <h1 class="mb-4 mt-5">Services Offered</h1>

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

    <h1 class="mb-4 mt-5">Availability</h1>

<div class="table-responsive">
    <table class="table table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th scope="col">Monday</th>
                <th scope="col">Tuesday</th>
                <th scope="col">Wednesday</th>
                <th scope="col">Thursday</th>
                <th scope="col">Friday</th>
                <th scope="col">Saturday</th>
                <th scope="col">Sunday</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($data3 as $index => $availability): ?>
            <tr>
                <td><?= $availability->Monday == 1 ? 'Yes' : 'No' ?></td>
                <td><?= $availability->Tuesday == 1 ? 'Yes' : 'No' ?></td>
                <td><?= $availability->Wednesday == 1 ? 'Yes' : 'No' ?></td>
                <td><?= $availability->Thursday == 1 ? 'Yes' : 'No' ?></td>
                <td><?= $availability->Friday == 1 ? 'Yes' : 'No' ?></td>
                <td><?= $availability->Saturday == 1 ? 'Yes' : 'No' ?></td>
                <td><?= $availability->Sunday == 1 ? 'Yes' : 'No' ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var serviceRows = document.querySelectorAll('.service-row');
        var barberRows = document.querySelectorAll('.barber-row');
        serviceRows.forEach(function(row) {
            row.addEventListener('click', function() {
                var serviceId = this.getAttribute('data-service-id');
                var barberId = this.getAttribute('data-barber-id');
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
