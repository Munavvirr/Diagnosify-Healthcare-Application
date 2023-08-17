<!doctype html>
<html lang="en">

<style>
.headstyle {
    color: rgb(255, 255, 255);
    font-variant: petite-caps;
    background-color: rgb(0, 0, 0, 0.8);
    margin-bottom: 0px
}

.divstyle {
    border-radius: 10px 10px 10px 10px;
    margin-left: 1px;
    margin-right: 1px
}

.bgColor {
    background-color: black;
}

.text-truncate:hover {
    white-space: normal;
    overflow: visible;
    text-overflow: inherit;
}

.navbar {
    background-color: black;
}

.card-body {
    background-color: black;
}

.img1 {
    background-color: black;
}
</style>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>HealthCure</title>
</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Diagnosify</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="/">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="/login">Login</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="/register">Register</a>
                    </li>


                </ul>
            </div>
        </div>
    </nav>

    <div class="bgColor" style="padding-top: 10%; padding-bottom: 10%;">

        <h1 class="text-center display-2 text-white pt-5">Diagnosify</h1>
        <p class="pb-5 text-center pt-2 display-6" style='color: grey; font-size: 21px; line-height: 33px;'>Find your
            doctor online, Book as you wish with Diagnosify. <br>Make your appointment now.</p>
        <center>
            <a href="/login">
                <button class="btn btn-large btn-light btn-outline-dark p-3">Make Appointment</button>
            </a>
        </center>
        <br><br>
    </div>






    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(document).ready(function() {
        $('.text-truncate').hover(function() {
            $(this).removeClass('text-truncate');
        }, function() {
            $(this).addClass('text-truncate');
        });
    });
    </script>

</body>

</html>