<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Profile</title>
</head>
<body>
    <h2>Create Profile</h2>
    <form action="/Client/create_profile" method="post">
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="age">Age:</label>
            <input type="number" id="age" name="age" required>
        </div>
        <button type="submit">Create Profile</button>
    </form>
</body>
</html>