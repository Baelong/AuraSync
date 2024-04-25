<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Appointments</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
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
        li {
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }
        li:last-child {
            border-bottom: none;
        }
        .appointment-info {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .appointment-date {
            font-weight: bold;
        }
        .appointment-status {
            color: #007bff;
        }
        .no-appointments {
            text-align: center;
            color: #999;
            margin-top: 20px;
        }
    </style>
</head>
<body>
     <?php if (!empty($appointments)) : ?>
        <div class="container">
            <h1>Client Appointments</h1>
            <ul>
                <?php foreach ($appointments as $appointment) : ?>
                    <li>
                        <div class="appointment-info">
                            <span class="appointment-date"><?= $appointment->date ?></span>
                            <span class="appointment-status"><?= $appointment->status ?></span>
                            <span class="payment-status"><?= $appointment->payment_status ?></span>
                        </div>
                        <div class="appointment-details">
                            <p><strong>Time:</strong> <?= $appointment->time ?></p>
                            <p><strong>Service:</strong> <?= $appointment->service_id ?></p>
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
</body>
</html>


