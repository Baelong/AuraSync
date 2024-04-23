<html>
<head>
    <title><?= $name ?> view</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body>

   

    <div class='container'>
        <form method="POST" action="/BarberProfile/search">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search by name" aria-label="Search by name" aria-describedby="button-search" name="name">
                <button class="btn btn-outline-primary" type="submit" id="button-search"><i class="bi bi-search"></i></button>
            </div>
        </form>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data as $index => $barber): ?>
                    <tr>
                        <td><?= $barber->first_name ?></td>
                        <td><?= $barber->last_name ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
