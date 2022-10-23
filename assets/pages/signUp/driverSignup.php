<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap 5.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/assets/fontawesome-free-6.2.0-web/css/all.min.css">

    <link rel="stylesheet" href="/assets/css/signUp.css">

    <title>Sign up | W-Taxi</title>
</head>

<body>

    <?php
    ini_set('display_errors', '1');
    error_reporting(E_ALL);
    $firstName = $lastName = $email = $tel = $username = $password = $confirm_pass = "";
    ?>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $firstName = test_input($_POST["firstName"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/", $firstName)) {
            $nameErr = "Only letters and white space allowed";
        }

        if (empty($_POST["lastName"])) {
            $lastName = "";
        } else {
            $lastName = test_input($_POST["lastName"]);
        }

        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }

        if (empty($_POST["tel"])) {
            $tel = "";
        } else {
            $tel = test_input($_POST["tel"]);
        }

        if (empty($_POST["username"])) {
            $username = "";
        } else {
            $username = test_input($_POST["username"]);
        }

        if (empty($_POST["password"])) {
            $password = "";
        } else {
            $password = test_input($_POST["password"]);
        }

        if (empty($_POST["confirm_pass"])) {
            $confirm_pass = "";
        } else {
            $confirm_pass = test_input($_POST["confirm_pass"]);
        }
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    <!-- signup form-->
    <div class="container-fluid">
        <div class="row-6 d-flex justify-content-between mt-4">
            <div class="col-3 ms-5">
                <a class="" href="../../../index.php">
                    <img class="img-fluid logo" id="logo" src="../../img/logo.svg" alt="logo">
                </a>
            </div>
            <div class="col-3">
                <p>Profilingiz bormi? <a href="../login/login.php" class="text-success">Saytga kiring</a></p>
            </div>
        </div>
        <div class="row m-0">
            <form class="form p-1  px-lg-5" method="post" action="connectionDB.php">
                <div class="col-8 signupContent p-5 my-5 border border-secondary rounded">
                    <div class="row m-0 text-center mb-2">
                        <h2 class="form-heading mt-2 fw-bold fs-1">Ro'yxatdan o'ting</h2>
                    </div>

                    <div class="row m-0">
                        <fieldset class="row form-control d-flex mb-3">
                            <legend class="float-none w-auto">Foydalanuvchi ma'lumotlari</legend>
                            <div class="col-12 col-sm-6 col-md-6 mb-3">
                                <input class="form-control w-100 p-2" type="text" name="firstName" id="firstName" required value="" placeholder="Ismingiz" />
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 mb-3 ">
                                <input class="form-control w-100 p-2 m-0" type="text" name="lastName" value="" placeholder="Familiyangiz" />
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 mb-3 ">
                                <input class="form-control w-100 p-2 m-0" placeholder="Tug'ilgan sana" type="text" onfocus="(this.type = 'date')"  name="birthday" value=""  max="2004-01-01" />
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 mb-3 ">
                                <input class="form-control w-100 p-2" type="email" name="email" value="" id="email" placeholder="E-mail" />
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 mb-3 ">
                                <input class="form-control w-100 p-2" type="tel" name="tel" value="" required placeholder="Telefon raqam" />
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 mb-3 ">
                                <input class="form-control w-100 p-2" type="text" name="drivingLicence" value="" required placeholder="Haydovchilik guvohnomasi raqami"/>
                            </div>
                        </fieldset>

                        <fieldset class="row form-control mb-3">
                            <legend class="float-none w-auto">Mashina ma'lumotlari</legend>
                            <div class="col-12 col-sm-8 d-flex mb-3">
                                <div class="input-group mb-3">
                                    <select class="form-select" aria-label="Make select example">
                                        <option value="chevrolet">Chevrolet</option>
                                        <option value="kia">Kia</option>
                                        <option value="daewoo">Daewoo</option>
                                        <option value="jiguli">Jiguli</option>
                                        <option value="lada">Vaz(lada)</option>
                                        <option value="hyundai">Hyundai</option>
                                        <option value="skoda">Skoda</option>
                                        <option value="other">Boshqa</option>
                                    </select>
                                    <input class="form-control p-2" type="text" name="carModel" value="" aria-label="Text input with dropdown button" required placeholder="Mashina modeli">
                                </div>
                            </div>

                            <div class="col-12 col-sm-8 d-flex mb-3">
                                <div class="input-group mb-3">
                                    <select class="form-select" aria-label="Make select example">
                                        <option value="hudud_kodi">Hudud kodini tanlang</option>
                                        <option value="01">01</option>
                                        <option value="10">10</option>
                                        <option value="20">20</option>
                                        <option value="25">25</option>
                                        <option value="30">30</option>
                                        <option value="40">40</option>
                                        <option value="50">50</option>
                                        <option value="60">60</option>
                                        <option value="70">70</option>
                                        <option value="75">75</option>
                                        <option value="80">80</option>
                                        <option value="85">85</option>
                                        <option value="90">90</option>
                                        <option value="95">95</option>
                                    </select>
                                    <input class="form-control p-2" type="text" name="carNumber" value="" aria-label="Text input with dropdown button" required placeholder="Mashina raqami:855 QAA">
                                </div>
                            </div>

                            <div class="col mb-3">
                                <div class="row-8 mb-3 gap-5 d-flex">
                                    <div class="col-md-4 gap-3 mb-3">
                                        <label class="form-label" for="carColor">Rangi</label>
                                        <select class="form-select form-control" aria-label="car color">
                                            <option value="black" class="fa-solid fa-circle fa-black">&#xf111; Qora
                                            </option>
                                            <option value="white" class="fa-solid fa-circle fa-white" selected>&#xf111; Oq </option>
                                            <option value="yellow" class="fa-solid fa-circle fa-yellow">&#xf111; Sariq</option>
                                            <option value="red" class="fa-solid fa-circle fa-red">&#xf111; Qizil</option>
                                            <option value="green" class="fa-solid fa-circle fa-green">&#xf111; Yashil</option>
                                            <option value="gray" class="fa-solid fa-circle fa-gray">&#xf111; Kulrang</option>
                                            <option value="blue" class="fa-solid fa-circle fa-blue">&#xf111; Ko'k</option>
                                            <option value="brown" class="fa-solid fa-circle fa-brown">&#xf111; Jigarrang</option>
                                            <option value="silver" class="fa-solid fa-circle fa-silver">&#xf111; Kumushrang</option>
                                            <option value="orange" class="fa-solid fa-circle fa-orange">&#xf111; Zarg'aldoq</option>
                                            <option value="lightBlue" class="fa-solid fa-circle fa-lightBlue">&#xf111; Ochiq ko'k</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4 gap-3 mb-3">
                                        <label class="form-label" for="seatNumber">O'rindiqlar soni</label>
                                        <select class="form-select " aria-label="seat number">
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2 gap-3 mb-3">
                                        <label class="form-label" for="carYear">Mashina yili</label>
                                        <input class="form-control" type="number" placeholder="YYYY" min="2007" max="2022">
                                    </div>

                                </div>

                            </div>
                            <div class="col-12 col-sm-8">
                                <label class="form-label" for="carPhoto">Mashina rasmlari</label>
                                <div class="input-group mb-3">
                                    <input type="file" multiple accept="image/*" class="form-control" id="inputGroupFile02">
                                    <label class="input-group-text" for="inputGroupFile02">Yuklash</label>
                                </div>
                            </div>
                        </fieldset>


                        <fieldset class="row form-control mb-3">

                            <legend class="float-none w-auto">Kirish ma'lumotlari</legend>
                            <div class="col-12 col-sm-6 col-md-6 mb-3">
                                <input class="form-control" type="text" id="username" name="username" value="" required placeholder="Foydalanuvchi nomi" />
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 mb-3">
                                <input class="form-control" type="password" id="newPassword" name="password" value="" required placeholder="Yangi parol" />
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 mb-3 ">
                                <input class="form-control" type="password" id="confirmPassword" name="confirm_pass" value="" required placeholder="Parolni tasdiqlang" />
                            </div>
                        </fieldset>

                    </div>
                    <div class="row m-0 mb-2">
                        <p id="errorMsg" style="display: none">
                            Parollar bir xil emas
                        </p>
                    </div>

                    <div class="row-12 m-0">
                        <div class="col mb-3 mb-2">
                            <input type="checkbox" id="notify_email" />
                            <label for="notify_email">Yangiliklar haqida elektron pochta xabarlarini olish </label>
                        </div>
                        <div class="col mb-3 mb-4">
                            <label>Hisob yaratish xizmat shartlari, <span style="color:green;">Maxfiylik siyosati</span> va <span style="color:green">birlamchi bildirishnoma</span> sozlamalarimizdan rozi ekanligingizni bildiradi.</label>
                        </div>
                    </div>
                    <div class="row m-0">
                        <div class="col-12 mb-2 text-center">
                            <input class="btn btn-success p-2 w-50" type="submit" id="submitBtn" name="submit" value="Ro'yhatdan o'tish">
                        </div>
                    </div>
                </div>
            </form>
        </div> <!-- end of signup form -->
        <div class="row">
            <div class="col-12 text-center">
                <p>&copy; <span id="date"></span>2022 <span style="color:#fb9403">W-Taxi</span> | All Rights Reserved </p>
            </div>
        </div>
    </div>


</body>

</html>