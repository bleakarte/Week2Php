<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Enter two numbers to add</h1>

<form method="post" action="bmi_calculator_handler.php">
    <!--        input 1-->
    <label for="name">Name: <br>
        <input name="name" type="text" placeholder="Enter Name">
    </label><br><br>
    <!--        input 2-->
    <label for="weight">Weight (Kgs): <br>
        <input name="weight" type="text" placeholder="Enter Weight">
    </label><br><br>
    <!--        input 3-->
    <label for="height">Height (m): <br>
        <input name="height" type="text" placeholder="Enter Height">
    </label><br><br>

    <input name="BMI" type="submit" value="calculate">
</form>
</body>
</html>
