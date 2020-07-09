<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

</head>
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal">Meduza - Latest News</h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="#">News</a>
        <a class="p-2 text-dark" href="#">Currency</a>
    </nav>
    <a class="btn btn-outline-primary" href="#">Sign up</a>
</div>
<div id="login">
    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div id="login-box" class="col-md-12">
                    <form id="login-form" class="form" action="" method="post">
                        <h3 class="text-center text-dark">Login</h3>
                        <div class="form-group">
                            <label for="username" class="text-dark">Username:</label><br>
                            <input type="text" name="username" id="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password" class="text-dark">Password:</label><br>
                            <input type="text" name="password" id="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <a href="forgot" class="text-dark">Forgot password?</a>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-dark btn-md" value="Submit">
                        </div>
                        <div id="register-link" class="text-right">
                            <a href="registration" class="text-dark">Register here</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</html>