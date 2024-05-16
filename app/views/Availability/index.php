<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Availability</title>
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
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Availability</h1>
        <table>
            <thead>
                <tr>
                    <th>Day</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Monday</td>
                    <td><?php echo $availability['Monday'] ? 'Available' : 'Not Available'; ?></td>
                </tr>
                <tr>
                    <td>Tuesday</td>
                    <td><?php echo $availability['Tuesday'] ? 'Available' : 'Not Available'; ?></td>
                </tr>
                <tr>
                    <td>Wednesday</td>
                    <td><?php echo $availability['Wednesday'] ? 'Available' : 'Not Available'; ?></td>
                </tr>
                <tr>
                    <td>Thursday</td>
                    <td><?php echo $availability['Thursday'] ? 'Available' : 'Not Available'; ?></td>
                </tr>
                <tr>
                    <td>Friday</td>
                    <td><?php echo $availability['Friday'] ? 'Available' : 'Not Available'; ?></td>
                </tr>
                <tr>
                    <td>Saturday</td>
                    <td><?php echo $availability['Saturday'] ? 'Available' : 'Not Available'; ?></td>
                </tr>
                <tr>
                    <td>Sunday</td>
                    <td><?php echo $availability['Sunday'] ? 'Available' : 'Not Available'; ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
