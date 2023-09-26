<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VStudies - Admin</title>

    <!-- Stylesheet-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">

</head>

<body class="bodyStyle">
    <?php require_once "header.php" ?>

    <div class="wrapper pt-4">
        <div class="w-100">
            <div class="pb-5" style="justify-content: center;">
                <form class="loginStyle" action="post">
                    <h3 class="pb-2">Admin Login</h3>
                    <label for="username"> Username</label>
                    <input type="username" name="username" placeholder="Username">
                    <label for="password">Password</label>
                    <input type="password" name="password" placeholder="Password">
                    <button>Login</button>
                </form>
            </div>
        </div>
    </div>

    <?php require_once "footer.php" ?>

    <!-- JavaScript linked-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="Javascript/javascript.js"></script>

    <!-- SCRIPTS SECTION -->


</body>

</html>