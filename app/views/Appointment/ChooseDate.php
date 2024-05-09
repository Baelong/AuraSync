<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BarberProfile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet">
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
   

    <h1 class="mb-4 mt-5">Choose Appointment Date</h1>

    <input type="text" id="datepicker" name="appointment_date" class="form-control" placeholder="Select Date">
    <button id="chooseDateButton" class="btn btn-primary mt-3">Choose Date</button>

</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script>
    $(document).ready(function(){
        var tomorrow = new Date();
        tomorrow.setDate(tomorrow.getDate() + 1); // Set minimum date as tomorrow

        var twoMonthsLater = new Date();
        twoMonthsLater.setMonth(twoMonthsLater.getMonth() + 2); // Set maximum date as two months later

        // Define the allowed days of the week
        var unAllowedDays = [];
        <?php foreach($data3 as $index => $availability): ?>
            if(<?= $availability->Monday ?> === 0){
                unAllowedDays.push(1); // 1 represents Monday
            }
            if(<?= $availability->Tuesday ?> === 0){
                unAllowedDays.push(2); // 2 represents Tuesday
            }
            if(<?= $availability->Wednesday ?> === 0){
                unAllowedDays.push(3); // 3 represents Wednesday
            }
            if(<?= $availability->Thursday ?> === 0){
                unAllowedDays.push(4); // 4 represents Thursday
            }
            if(<?= $availability->Friday ?> === 0){
                unAllowedDays.push(5); // 5 represents Friday
            }
            if(<?= $availability->Saturday ?> === 0){
                unAllowedDays.push(6); // 6 represents Saturday
            }
            if(<?= $availability->Sunday ?> === 0){
                unAllowedDays.push(0); // 0 represents Sunday
            }
        <?php endforeach; ?>

        $('#datepicker').datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true,
            startDate: tomorrow,
            endDate: twoMonthsLater,
            beforeShowDay: function(date) {
                var day = date.getDay();
                // Return false for disallowed days
                return !unAllowedDays.includes(day);
            }
        });

        $('#chooseDateButton').on('click', function() {
            var selectedDate = $('#datepicker').val();
            if(selectedDate) {
                var form = $('<form method="POST" action="/Appointment/chooseTime"></form>');
                form.append('<input type="hidden" name="date" value="' + selectedDate + '">');
                form.appendTo('body').submit();
            } else {
                alert('Please select a date.');
            }
        });
    });
</script>





</body>
</html>
