<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BarberProfile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<div class="container mt-5">
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
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