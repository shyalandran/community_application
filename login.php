<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->

    <style>
        html,body {
            height: 100%;
            }

            .form-signin {
            max-width: 330px;
            padding: 1rem;
            }

            .form-signin .form-floating:focus-within {
            z-index: 2;
            }

            .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
            }

            .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            }

            .background-img {
                background-image: url('https://static.vecteezy.com/system/resources/previews/021/599/588/non_2x/abstract-white-and-gray-overlap-circles-background-3d-paper-circle-banner-with-drop-shadows-minimal-simple-design-for-presentation-flyer-brochure-website-book-etc-vector.jpg');
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: 100% 100%;
            }
    </style>
</head>

<body class="align-items-center background-img ">

    <header class="d-flex  flex-row-reverse lato-regular fs-4 align-items-center justify-content-center justify-content-md-between pe-5 py-4" style="background-color: #F3C623;">
        <nav class="navbar navbar-expand-lg navbar-light w-100">
            <a class="navbar-brand fs-3 brand-color ms-5" href="#" style="margin-right: 0px;">
              <img src="assets/img/applogo.png" alt="Logo" width="50" height="50" class="d-inline-block align-text-midle">
              Nex Community
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse  navbar-collapse justify-content-center " id="navbarNav" style="margin-left: -120px;">
            </div>

            <div class="text-end">
              <button type="button" class="btn btn-outline-dark me-2"><a href="login.php" class="nav-link">Login</a></button>
              <button type="button" class="btn btn-dark"><a href="signup.php" class="nav-link">Sign-up</a></button>
            </div>
        </nav>
    </header>

    <main class="form-signin w-100 m-auto card p-5 d-flex my-5">
        <form action="./register.php" method="post">
            <h1 class="fs-2 mb-3 fw-normal text-center">Login</h1>

            <div class="form-floating">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
            <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="pass">
            <label for="floatingPassword">Password</label>
            </div>

            <div class="form-check text-start my-3">
            <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Remember me
            </label>
            </div>
            <button class="btn btn-primary w-100 py-2" type="submit" name="login">Login</button>
            <p class="text-center"><a href="./signup.php" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">New User</a></p>
        </form>
    </main>
</body>
</html>