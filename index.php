<?php include "includes/db.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Log-In</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <header>
        <div class="container">

            <nav class="navbar navbar-light">
                <a class="navbar-brand" href="#">DCS-ITU</a>
                <ul>
                    <li><a href="includes/signup.php">Sign Up</a> </li>
                </ul>
            </nav>
        </div>
    </header>
    <section>
        <div class="container">
            <form action="includes/login.php" method="post" class="form-signin">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" id="username" placeholder="Enter your Username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Enter your Password" required>
                </div>
                <div class="form-group">
                    <?php if (isset($_GET['error'])) { ?>
                        <div class="alert alert-danger"><?php echo $_GET['error'] ?></div>
                    <?php } ?>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Log-In" name="submit">
                </div>
            </form>
        </div>
    </section>
</body>

</html>