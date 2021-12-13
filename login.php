<?php
    require 'auth.php';
?>
<html>
    <head>
        <title>E-Learning</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/login.css">
    </head>
    <body> 
        <div class="container fadeIn first d-flex wrapper">
            <div class="row content m-auto">
                <div class="col-md-6 m-auto">
                    <img src="https://cdn.pixabay.com/photo/2017/05/09/13/33/laptop-2298286_960_720.png" class="img-fluid animated">
                </div>
                <div class="col-md-5 m-auto">
                    <div class="text-center">
                        <label class="h5 mb-4">Login Gudang</label>
                    </div>  
                    <form method="POST">
                        <div class="form-group">
                            <label for="email">Username</label>
                            <input type="text" class="form-control" name="id_user" required>
                        </div>
                        <div class="form-group mt-3">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" required>
                        </div>
                        <div class="form-group form-check mt-3">
                            <input type="checkbox" class="form-check-input">
                            <label class="form-check-label" for="checkbox">Remember Me</label>
                        </div>
                        <button type="submit" class="btn btn-class mt-3" name="signIn">Login</button>
                    </form>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="js/bootstrap.js"></script>
    </body>
</html>