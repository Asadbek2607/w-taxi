<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap 5.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../css/signUp.css">
    <title>Sign Up | W-Taxi</title>
</head>
<body>
    <div class="container-fluid">
       <div class="row mb-3">
            <div class="col m-3">
                 <a class="" href="../../../index.php">
                    <img class="img-fluid logo" src="../../img/logo.svg" alt="logo">
                </a>
            </div>
       </div>
       <div class="row text-center">
            <div class="col chooseRoleContent border rounded border-secondary p-4">
                <div class="row">
                    <div class="col p-3 fw-semibold fs-2">Haydovchi yoki yo'lovchi sifatida qo'shiling</div>
                </div>
                <div class="row gap-5 role--taxiDriver d-flex justify-content-center">
                    <a class="col-4 role--taxiDriver border border-secondary rounded p-4 m-1" role="button" id="role--taxiDriver">
                        <div>
                            <img class="img-fluid" src="../../img/signUp/taxi-driver.png" alt="driver">
                            <div class="fs-3 fw-semibold">Haydovchi</div>
                        </div>
                    </a>
                    <a class="col-4 role--passenger border border-secondary rounded p-4 m-1" role="button" id="role--passenger">
                        <div>
                            <img class="img-fluid" src="../../img/signUp/passenger.png" alt="passenger">
                            <div class="fs-3 fw-semibold">Yo'lovchi</div>
                        </div>
                    </a>
                </div>
                <div class="row-2 p-2 mt-3">
                    <div class="col">
                        <button id="signupBtn" class="btn btn-warning disabled px-5 m-2 text-white">Ro'yhatdan o'tish</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>Profilingiz bormi? <a href="../login/login.php" class="text-success">Saytga kiring</a></p>
                    </div>
                </div>
            </div>
       </div>
    </div>
    <script src="../../js/app.js"></script>
</body>
</html>