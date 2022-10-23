<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- font awesome -->
    <link rel="stylesheet" href="../../fontawesome-free-6.2.0-web/css/all.min.css">

    <link rel="stylesheet" href="../../css/style.css">
    <title>Login | W-Taxi</title>
</head>
<body>
    <div class="container-fluid loginPage justify-content-center">
        <div class="row justify-content-center">

            <form class="col-4 loginCard border-light rounded mt-5 p-5 fs-5">
                <div class="row text-center mb-5">
                    <div class="col">
                        <a href="../../../index.php">
                            <img src="../../img/logo.svg" id="loginLogo" alt="logo">
                        </a>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <label class="form-label" for="username">Foydalanuvchi nomi</label>

                        <input class="form-control fontAwesome fa-solid fa-user" type="text" name="username" id="username" placeholder="&#xf007;">

                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <label class="form-label" for="password">Parol</label>
                        <input class="form-control fa-solid fa-lock fontAwesome" type="password" name="password" id="password" placeholder="&#xf023">
                    </div>
                </div>
                <div class="row align-items-center mb-3">
                    <div class="col">
                        <input class="form-check-input" type="checkbox" id="rememberMe">
                        <label for="rememberMe">Eslab qolish</label>
                    </div>
                    <div class="col">
                        <button class="btn btn-login px-5 py-2 m-2" type="submit">Kirish</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center ">
                        <p class="loginLink" >Profilingiz yo'qmi? <a href="../signUp/signUp.php" >Ro'yhatdan o'ting</a></p>
                    </div>
                </div>
            </form>

        </div>
    </div>
</body>
</html>