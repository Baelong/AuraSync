<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Availability</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        .container {
            max-width: 600px;
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
        form {
            margin-top: 20px;
        }
        .form-group {
            margin-bottom: 10px;
        }
        .checkbox-label {
            margin-left: 5px;
        }
        input[type="checkbox"] {
            margin-right: 10px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 3px;
            padding: 10px 20px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1><?= __('Create Availability') ?></h1>
        <form action="<?= __('/Availability/createAvailability') ?>" method="post">
            <div class="form-group">
                <input type="checkbox" id="Monday" name="Monday" value="1">
                <label for="monday" class="checkbox-label"><?= __('Monday') ?></label>
            </div>
            <div class="form-group">
                <input type="checkbox" id="Tuesday" name="Tuesday" value="1">
                <label for="tuesday" class="checkbox-label"><?= __('Tuesday') ?></label>
            </div>
            <div class="form-group">
                <input type="checkbox" id="Wednesday" name="Wednesday" value="1">
                <label for="wednesday" class="checkbox-label"><?= __('Wednesday') ?></label>
            </div>
            <div class="form-group">
                <input type="checkbox" id="Thursday" name="Thursday" value="1">
                <label for="thursday" class="checkbox-label"><?= __('Thursday') ?></label>
            </div>
            <div class="form-group">
                <input type="checkbox" id="Friday" name="Friday" value="1">
                <label for="friday" class="checkbox-label"><?= __('Friday') ?></label>
            </div>
            <div class="form-group">
                <input type="checkbox" id="Saturday" name="Saturday" value="1">
                <label for="saturday" class="checkbox-label"><?= __('Saturday') ?></label>
            </div>
            <div class="form-group">
                <input type="checkbox" id="Sunday" name="Sunday" value="1">
                <label for="sunday" class="checkbox-label"><?= __('Sunday') ?></label>
            </div>
            <input type="submit" value="<?= __('Save Availability') ?>">
        </form>
    </div>
</body>

</html>
