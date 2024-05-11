<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
            padding-top: 50px;
        }

        .container {
            margin-top: 50px;
        }

        h1 {
            color: #007bff;
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            max-width: 400px;
            margin: auto;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
            padding: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"], input[type="tel"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 5px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Reschedule</h1>
        <form action="/Appointment/a" method="POST">
            <div class="form-group">
                <label for="date">Date:</label>
                <input type="text" id="date" name="date" value="<?= $data->date ?>" required>
            </div>
            <div class="form-group">
                <label for="time">Time:</label>
                <input type="text" id="time" name="time" value="<?php
                                $hour = floor(($data->slot - 1) / 2) + 9;
                                $minute = ($data->slot % 2 == 0) ? "30" : "00"; 

                                // Format the time
                                $time = sprintf("%02d:%s", $hour, $minute);

                                // Print the time
                                echo $time;
                                ?>" required>
            </div>
            <input type="submit" value="Save Changes">
        </form>
    </div>
</body>
</html>
