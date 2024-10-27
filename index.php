<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/public/css/login.css">
</head>

<body>

    <div class="login-card">
        <h2>Login</h2>
        <form action="contents/home.php">
            <input type="text" placeholder="Username" id="name" required>
            <input type="password" id="pass" placeholder="Password" required>
            <div>
                <input type="checkbox" name="" id="show" onclick="showPassword()">
                <label for="show">show</label>
            </div>
            <button type="submit" onclick="btnSubmit()">Login</button>
        </form>
    </div>

    <script src="../public/js/getUsers.js"></script>
    <script>
        function showPassword() {
            var x = document.getElementById("pass");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</body>

</html>