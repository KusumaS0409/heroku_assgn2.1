<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Record Form</title>
</head>
<body>
<form action="insert.php" method="post">
    <p>
        <label for="name">First Name:</label>
        <input type="text" name="name" id="name">
    </p>
    <p>
        <label for="email">Email:</label>
        <input type="text" name="email" id="email">
    </p>
    <p>
        <label for="phone_number">Phone number:</label>
        <input type="text" name="phone_number" id="phone_number">
    </p>
    <input type="submit" value="Submit">
</form>
</body>
</html>