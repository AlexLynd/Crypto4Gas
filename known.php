<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/ac0bb12408.js" crossorigin="anonymous"></script>
    <title>Crypto4Gas</title>
</head>

<body onload="javascript:loadKnown();">
    <nav class="navbar navbar-expand-lg sticky-top px-5 py-3" style="margin-left: 230px">
        <div style="height: 55px;"></div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

            <div class="navbar-nav me-auto">
                <div class="dropdown">
                    <button class="btn btn-outline-dark dropdown-toggle" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Known Devices (Fuel Point 1)
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Known Devices (Fuel Point 1)</a></li>
                    </ul>
                </div>
            </div>

            <div class="navbar-nav ms-auto">
                <button type="button" class="btn btn-outline-dark"><i class="fas fa-cog"></i></button>
            </div>
        </div>
    </nav>

    <!-- side bar -->

    <?php include "menu.html";?>

    <div style="margin-left: 230px;" class="p-5">
        <!-- <h3>Known Devices</h3> -->
        <div class="card p-3">
            <div class="table-responsive">
                <table class="table tabl tabl">

                    <thead class>
                        <tr>
                            <!-- <th scope="col">#</th> -->
                            <th scope="col">MAC Adddress</th>
                            <th scope="col">Name</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody id="known">
                        <!-- Devices loaded here -->
                    </tbody>
                </table>

            </div>
        </div>
        <div class="mt-5">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Name</span>
                </div>
                <input type="text" class="form-control" aria-label="name" id="name" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">BSSID</span>
                </div>
                <input type="text" class="form-control" aria-label="bssid" id="bssid" aria-describedby="basic-addon1">
            </div>
            <!-- <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">BTC Address</span>
                </div>
                <input type="text" class="form-control" aria-label="bssid" id="bssid" aria-describedby="basic-addon1">
            </div> -->
            <button type="button" class="btn btn-primary" onclick="javascript:addDevice();">Add New
                Device</button></td>
        </div>
        <p class="result"></p>
        <script src="known.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
            crossorigin="anonymous"></script>
        <script> $('#nav-known').addClass("bg-primary");</script>
</body>

</html>