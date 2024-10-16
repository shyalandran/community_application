<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Community</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=partner_exchange" />

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        /* .gradient-text {
            background: linear-gradient(#e66465, #9198e5);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            color: transparent;
        } */
         .brand-color {
          color: #000000;
         }
         .section {
          color: #000000;
         }

         .playfair-display {
            font-family: "Playfair Display", serif;
            font-optical-sizing: auto;
            font-weight: 400;
            font-style: normal;
          }

          .lato-regular {
            font-family: "Lato", sans-serif;
            font-weight: 400;
            font-style: normal;
          }

          .merriweather-sans{
            font-family: "Merriweather Sans", sans-serif;
            font-optical-sizing: auto;
            font-weight: 400;
            font-style: normal;
          }

          .background-img {
            background-image: url('https://static.vecteezy.com/system/resources/previews/021/599/588/non_2x/abstract-white-and-gray-overlap-circles-background-3d-paper-circle-banner-with-drop-shadows-minimal-simple-design-for-presentation-flyer-brochure-website-book-etc-vector.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
          }

          .poppins-regular {
            font-family: "Poppins", sans-serif;
            font-weight: 400;
            font-style: normal;
          }
    </style>

</head>
<body class="playfair-display background-img">

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
                <ul class="navbar-nav">
                    <li class="nav-item active" >
                        <a class="nav-link section" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link section" href="disease.php">Women Entrepreneurs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link section" href="insurance.php">Social Initiative</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link section" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link section" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>

            <div class="text-end">
              <button type="button" class="btn btn-outline-dark me-2"><a href="login.php" class="nav-link">Login</a></button>
              <button type="button" class="btn btn-dark"><a href="login.php" class="nav-link">Sign-up</a></button>
            </div>
        </nav>
    </header>

    <main>
      <div class="container  align-text-midle  px-4">
        <div class="row align-items-center g-5 ">
            <!-- Text Section -->
            <div class="col-lg-6 " style="margin-left: -70px;">
              <h1 class="display-5 fw-bold text-body-emphasis  lh-1 mb-4">Unite, Empower, and Build a Brighter Tomorrow</h1>
              <p class="lead mb-5 lato-regular">The core mission of the website is to build stronger, more connected communities by bridging gaps and empowering individuals and groups to achieve their goals.</p>
              <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                  <button type="button" class="btn btn-warning btn-lg px-4 me-md-2 lato-regular"><a class="nav-link" href="disease.php">Women Entrepreneurs</a></button>
                  <button type="button" class="btn btn-outline-warning btn-lg px-4 lato-regular">Social Initiative</button>
              </div>
          </div>
          <!--img section-->
          <div class="col-10 col-sm-8 col-lg-6" >
            <img src="assets/img/file.png" class="d-block mx-lg-6 " alt="Bootstrap Themes" width="700" height="500" loading="lazy">
          </div>
        </div>
        <!-- Features Section -->
        <div class="row g-4 py-2 row-cols-1  row-cols-lg-3" style="margin-left: -70px;">
          <div class="col d-flex align-items-start">
            <div class="icon-square text-body-emphasis  d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
            </svg>
            </div>
            <div>
              <h3 class="fs-2 text-body-emphasis">Women Entrepreneurs</h3>
              <p class="lato-regular">Empowering women to lead, innovate, and succeed in their entrepreneurial journeys.</p>
            </div>
          </div>

          <div class="col d-flex align-items-start">
            <div class="icon-square text-body-emphasis  d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bg-gradient bi-globe2" viewBox="0 0 16 16">
            <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m7.5-6.923c-.67.204-1.335.82-1.887 1.855q-.215.403-.395.872c.705.157 1.472.257 2.282.287zM4.249 3.539q.214-.577.481-1.078a7 7 0 0 1 .597-.933A7 7 0 0 0 3.051 3.05q.544.277 1.198.49zM3.509 7.5c.036-1.07.188-2.087.436-3.008a9 9 0 0 1-1.565-.667A6.96 6.96 0 0 0 1.018 7.5zm1.4-2.741a12.3 12.3 0 0 0-.4 2.741H7.5V5.091c-.91-.03-1.783-.145-2.591-.332M8.5 5.09V7.5h2.99a12.3 12.3 0 0 0-.399-2.741c-.808.187-1.681.301-2.591.332zM4.51 8.5c.035.987.176 1.914.399 2.741A13.6 13.6 0 0 1 7.5 10.91V8.5zm3.99 0v2.409c.91.03 1.783.145 2.591.332.223-.827.364-1.754.4-2.741zm-3.282 3.696q.18.469.395.872c.552 1.035 1.218 1.65 1.887 1.855V11.91c-.81.03-1.577.13-2.282.287zm.11 2.276a7 7 0 0 1-.598-.933 9 9 0 0 1-.481-1.079 8.4 8.4 0 0 0-1.198.49 7 7 0 0 0 2.276 1.522zm-1.383-2.964A13.4 13.4 0 0 1 3.508 8.5h-2.49a6.96 6.96 0 0 0 1.362 3.675c.47-.258.995-.482 1.565-.667m6.728 2.964a7 7 0 0 0 2.275-1.521 8.4 8.4 0 0 0-1.197-.49 9 9 0 0 1-.481 1.078 7 7 0 0 1-.597.933M8.5 11.909v3.014c.67-.204 1.335-.82 1.887-1.855q.216-.403.395-.872A12.6 12.6 0 0 0 8.5 11.91zm3.555-.401c.57.185 1.095.409 1.565.667A6.96 6.96 0 0 0 14.982 8.5h-2.49a13.4 13.4 0 0 1-.437 3.008M14.982 7.5a6.96 6.96 0 0 0-1.362-3.675c-.47.258-.995.482-1.565.667.248.92.4 1.938.437 3.008zM11.27 2.461q.266.502.482 1.078a8.4 8.4 0 0 0 1.196-.49 7 7 0 0 0-2.275-1.52c.218.283.418.597.597.932m-.488 1.343a8 8 0 0 0-.395-.872C9.835 1.897 9.17 1.282 8.5 1.077V4.09c.81-.03 1.577-.13 2.282-.287z"/>
            </svg>
            </div>
            <div>
              <h3 class="fs-2 text-body-emphasis">Social Initiative</h3>
              <p class="lato-regular">Uniting for positive change through impactful, community-driven social projects.</p>
            </div>
          </div>

          <div class="col d-flex align-items-start">
            <div class="icon-square text-body-emphasis d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-graph-up-arrow" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M0 0h1v15h15v1H0zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5"/>
            </svg>
            </div>
            <div>
              <h3 class="fs-2 text-body-emphasis">Empower Communities</h3>
              <p class="lato-regular">Building stronger, connected communities by fostering collaboration and growth.</p>
            </div>
          </div>
        </div>
      </div>
      
    </main>
    

    <footer class=" my-4 fixed-bottom" >
        <p class="text-center text-body-secondary">© 2024 NexCommunity, Inc</p>
    </footer>
    

    <!-- Bootstrap JavaScript Bundle (includes Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>