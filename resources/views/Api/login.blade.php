<html>
<head></head>

<body>

<form method="post" action=" {{url('/api/login')}}">

    Email/Mobile <input type="text" name="value"><br>
    password    <input type="text" name="password"><br>
    <input type="submit" name="Login">
    <input type="reset" name="Reset">

</form>

</body>
</html>