<!DOCTYPE html>
<html>
<head>
    <title><?= $name ?> view</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <form>
        <input id='appointment' value="5/4/2024 14:00">
        <button type="button" name="Cancel" onclick="CancelAppointments()">Cancel</button>
        <button type="button" name="Edit" onclick="EditAppointments()">Edit</button>
    </form>

    <script>
        function CancelAppointments() {
            document.getElementById("appointment").value = "";
        }

        function EditAppointments() {
            document.getElementById("appointment").value = "5/4/2024 16:00";
        }
    </script>
</body>
</html>
