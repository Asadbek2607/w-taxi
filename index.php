<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap 5.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style.css">
     <!-- font-awesome -->
     <link rel="stylesheet" href="assets/fontawesome-free-5.12.1-web/css/all.min.css"/>
    <title>W Taxi || Homepage</title>
</head>
<body>
    <div class="container-fluid p-0 overflow-hidden">
        <div class="row">
            <div class="col">
                <header>
                    <div class="container-xl p-0">
                        <nav class="navbar navbar-expand-lg">
                            <div class="container-fluid">
                                <a class="navbar-brand" href="index.php">
                                    <img id="logo" src="assets/img/logo.svg" alt="logo">
                                </a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarScroll">
                                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                                </ul>
                                <form class="d-flex">
                                    <a id="signupBtn" href="assets/pages/signUp/signUp.php" class="btn text-white fs-4" type="button">Ro'yxatdan o'tish</a>
                                    <a id="loginBtn" href="assets/pages/login/login.php" class="btn text-white fs-4" type="button">Kirish</a>
                                </form>
                                </div>
                            </div>
                        </nav>
                        <div class="text-center shadow-lg rounded p-5 m-5 justify-content-center opacity-background">
                            <h1 class="text-light display-2"><span style="color:#fb9403">W-Taxi</span>ga xush kelibsiz!</h1>
                            <a id="startBtn" class="btn btn-outline-light btn-lg" href="#chooseRole">Boshlash</a>
                        </div>
                    </div>
                </header>
                <div class="row choose-role text-center justify-content-center gap-5" id="chooseRole">
                    <h2 class="text-white mt-3 ">Haydovchimisiz yoki yo'lovchi?</h2>
                    <div class="col col-sm-4 p-0">
                        <div class="role-card role-card__driver position-relative">
                            <img src="/assets/img/driver.jpg" class="img-fluid" alt="...">
                            <div>
                                <a href="/assets/pages/signUp/driverSignup.php" class="btn btn-lg btn-danger" id="switchDriverBtn">Haydovchi</a>
                            </div>
                        </div>
                    </div>
                    <div class="col col-sm-4 p-0">
                        <div class="role-card role-card__pass position-relative">
                            <img src="/assets/img/passenger.jpg" class="img-fluid" alt="...">
                            <div>
                                <a href="/assets/pages/signUp/passengerSignup.php" class="btn btn-lg btn-success"  id="switchPassBtn">Yo'lovchi</a>
                            </div>
                        </div>
                    </div>
                </div> <!-- END OF choose-role -->

                <!-- FOOTER -->
                <footer class="row footer text-center text-white">
                    <div class="col">

                        <!-- social icons -->
                        <ul class="social-icons">
                            <li>
                                <a href="https://www.facebook.com/KenjabaevAsadbek" class="social-icon">
                                <i class="fab fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/in/kenjabaev-asadbek-929090138/" class="social-icon">
                                <i class="fab fa-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/channel/UCWTKrQIPkcVh1iTY1kAAMgg" class="social-icon">
                                <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.twitter.com" class="social-icon">
                                <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/kenjabaev07/" class="social-icon">
                                <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                        </ul>

                        <p>&copy; <span id="date"></span>2022 <span style="color:#fb9403">W-Taxi</span> | all rights reserved </p>
                        <img id="logoFooter" src="assets/img/logo.svg" alt="logo">
                    </div>
                </footer>
            </div>
        </div>
    </div>
    <script src="assets/js/app.js"></script>
</body>
</html>