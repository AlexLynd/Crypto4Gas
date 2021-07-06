<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/ac0bb12408.js" crossorigin="anonymous"></script>
    <!-- remove duplicate jquery -->
    <title>Crypto4Gas</title>
</head>

<body onload="javascript:setInterval(updateTables, 500);">
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
                        Fuel Point 1
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Fuel Point 1</a></li>
                        <!-- <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li> -->
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
    <script src="index.js"></script>

    <div style="margin-left: 230px;" class="p-5">
        <!-- <h3>Known Devices</h3> -->
        <div class="row">
            <!-- main dashboard -->
            <div class="col-3 p-3">
                <h4>Total</h4>
                <div class="card p-4">
                    <center>
                        <span class="h2"><i class="fas fa-wifi"></i> <p id="dev-total">&nbsp;0</p></span>
                    </center>
                </div>
            </div>
            <div class="col-3 p-3">
                <h4>Networks</h4>
                <div class="card p-4">
                    <center>
                        <span class="h2"><i class="fas fa-network-wired">&nbsp;</i><p id="dev-nets">&nbsp;0</p></span>
                    </center>
                </div>
            </div>
            <div class="col-3 p-3">
                <h4>Clients</h4>
                <div class="card p-4">
                    <center>
                        <span class="h2"><i class="fas fa-mobile-alt"></i> <p id="dev-clients">&nbsp;0</p></span>
                    </center>
                </div>
            </div>
            <div class="col-3 p-3">
                <h4>Known</h4>
                <div class="card p-4">
                    <center>
                        <span class="h2"><i class="fas fa-user-friends"></i><p id="dev-known">&nbsp;0</p></span>
                    </center>
                </div>
            </div>


            <div class="col-12 p-3">
                <h4>WiFi Devices</h4>
                <div class="card p-4">
                    <div class="dropdown" style="margin-bottom: 1rem;">
                        <button class="btn btn-outline-primary dropdown-toggle btn-sm" type="button"
                            id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Sort By: All
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">Client Devices</a></li>
                            <li><a class="dropdown-item" href="#">Networks</a></li>
                        </ul>
                    </div>
                    <div class="table-responsive">
                        <table class="table tabl tabl">

                            <thead class>
                                <tr>
                                    <th scope="col">BSSID</th>
                                    <th scope="col">Manufacturer</th>
                                    <th scope="col">ESSID</th>
                                    <th scope="col">Channel</th>
                                    <th scope="col">RSSI</th>
                                    <!-- <th scope="col">Associated</th> -->

                                </tr>
                            </thead>
                            <tbody id="networks">
                                
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
           
        <script> $('#nav-dash').addClass("bg-primary"); </script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
            crossorigin="anonymous"></script>
            <script src="index.js"></script>
</body>

</html>