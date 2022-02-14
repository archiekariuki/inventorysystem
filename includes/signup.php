<?php include "functions.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <title>Sign-Up</title>
</head>

<body>
    <header>
        <div class="container">
            <nav class="navbar navbar-light">
                <a class="navbar-brand" href="#">DCS-ITU</a>
            </nav>
        </div>
    </header>
    <section>
        <div class="container">
            <form action="functions.php" method="POST">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="fname">Firstname</label>
                            <input type="text" class="form-control" name="fname" id="fname" required>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="lname">Lastname</label>
                            <input type="text" class="form-control" name="lname" id="lname" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" class="form-control" name="email" id="email" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" name="username" id="username" required>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" name="create" id="create">
                    </div>
                </div>
            </form>
        </div>
    </section>
</body>

</html>