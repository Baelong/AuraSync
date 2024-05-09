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

        /* Custom button styles */
        .btn-group {
            margin-top: 20px;
        }

        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
            color: #fff;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
            border-color: #545b62;
        }

        .btn-secondary:focus, .btn-secondary.focus {
            box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5);
        }

        /* Red button style */
        .btn-red {
            background-color: #dc3545;
            border-color: #dc3545;
        }
    </style>
</head>
<body>

<div class="container">
    <h1 class="mb-4">Barber Chosen</h1>

    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($data as $index => $barber): ?>
                <tr class="barber-row active" data-barber-id="<?= $barber->barber_profile_id ?>">
                    <td><?= $barber->first_name ?></td>
                    <td><?= $barber->last_name ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <h1 class="mb-4 mt-5">Services Selected</h1>

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
                <tr class="service-row active" data-service-id="<?= $service->service_id ?>">
                    <td><?= $service->name ?></td>
                    <td><?= $service->description ?></td>
                    <td><?= $service->price ?></td>
                    <td><?= $service->discount ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <h1 class="mb-4 mt-5">Date Chosen</h1>

    <h4> 
        <tr class="date">
            <td><?= $data3 ?></td>
        </tr>
    </h4>

	<div class="mt-5">
    <h1>Slot Chosen</h1>
    <h4> 
        <tr class="slot">
            <td><?= $data4 ?></td>
        </tr>
    </h4>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

<script>
    $(document).ready(function(){
        $('.btn-group').on('click', '.btn-secondary', function() {
            var selectedSlot = $(this).attr('id'); // Accessing the ID of the clicked button
            if(selectedSlot) {
                var form = $('<form method="POST" action="/Appointment/Pay"></form>');
                form.append('<input type="hidden" name="slot" value="' + selectedSlot + '">');
                form.appendTo('body').submit();
            } else {
                alert('Please select a date.');
            }
        });
    });
</script>



</body>
</html>
