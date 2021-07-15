<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Calculate the simple interest</h1>

<form method="post" action="simple_interest_handler.php">
    <!--        input 1-->
    <label for="name">Name: <br>
        <input name="name" type="text" placeholder="Enter Name">
    </label><br><br>
    <!--        input 2-->
    <label for="principle">Principle: <br>
        <input name="principle" type="text" placeholder="Enter Loan Amount">
    </label><br><br>
    <!--        input 3-->
    <label for="interest">Interest: <br>
        <input name="interest" type="text" placeholder="Enter Interest PA">
    </label><br><br>
    <!--        input 4-->
    <label for="time">Time: <br>
        <input name="time" type="text" placeholder="Enter Duration of loan">
    </label><br><br>

    <input name="SI" type="submit" value="calculate">
</form>
</body>
</html>

