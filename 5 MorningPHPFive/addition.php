<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <h1>Enter two numbers to add</h1>

    <form method="post" action="addition_handler.php">
<!--        input 1-->
        <label for="num1">First Number: <br>
            <input name="num1" type="text" placeholder="Enter First Number">
        </label><br><br>
<!--        input 2-->
        <label for="num2">Second Number: <br>
            <input name="num2" type="text" placeholder="Enter Second Number">
        </label><br><br>

        <input name="calc" type="submit" value="calculate">
    </form>
</body>
</html>