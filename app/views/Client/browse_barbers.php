<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BarberProfile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <style>
        body {
            padding-top: 80px;
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .container {
            margin-top: 50px;
        }

        .search-container {
            margin-bottom: 20px;
        }

        .table {
            background-color: #ffffff;
        }

        .table th,
        .table td {
            vertical-align: middle;
        }

        .table th {
            font-weight: bold;
            text-transform: uppercase;
        }

        .table-responsive {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .btn-search {
            background-color: #007bff;
            border-color: #007bff;
            color: #ffffff;
        }

        .btn-search:hover {
            background-color: #0056b3;
            border-color: #0056b3;
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

    <div class="container mt-5">
        <div class="search-container">
            <form method="POST" action="/Client/search">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="<?= __('Search by Full Name') ?>" aria-label="<?= __('Search by name') ?>" aria-describedby="button-search" name="name">
                    <button class="btn btn-search" type="submit" id="button-search"><i class="bi bi-search"></i> <?= __('Search') ?></button>
                </div>
            </form>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <th scope="col"><?= __('First Name') ?></th>
                        <th scope="col"><?= __('Last Name') ?></th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($data as $index => $barber): ?>
                    <tr class="barber-row" data-barber-id="<?= $barber->barber_profile_id ?>">
                        <td><?= $barber->first_name ?></td>
                        <td><?= $barber->last_name ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var barberRows = document.querySelectorAll('.barber-row');
            barberRows.forEach(function(row) {
                row.addEventListener('click', function() {
                    var barberId = this.getAttribute('data-barber-id');
                    var form = document.createElement('form');
                    form.method = 'POST';
                    form.action = '/Client/viewBarberProfile';
                    var input = document.createElement('input');
                    input.type = 'hidden';
                    input.name = 'barber_profile_id';
                    input.value = barberId;
                    form.appendChild(input);
                    document.body.appendChild(form);
                    form.submit();
                });
            });
        });
    </script>
</body>

</html>
