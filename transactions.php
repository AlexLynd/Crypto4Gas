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

<body>
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
                        Transactions (Fuel Point 1)
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Transactions (Fuel Point 1)</a></li>
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
            <div class="dropdown" style="margin-bottom: 1rem;">
                <button class="btn btn-outline-primary dropdown-toggle btn-sm" type="button" id="dropdownMenuButton1"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Sort By: All
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">All</a></li>
                    <li><a class="dropdown-item" href="#">Time</a></li>
                    <li><a class="dropdown-item" href="#">Address</a></li>
                </ul>
            </div>

            <div class="table-responsive">
                <table class="table tabl tabl">

                    <thead class>
                        <tr>
                            <th scope="col">Time</th>
                            <th scope="col">Amount</th>
                            <th scope="col">From BTC Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>3:15</td>
                            <td>$420</td>
                            <td>0x34587237849647</td>
                        </tr>
                        <tr>
                            <td>3:00</td>
                            <td>$696</td>
                            <td>0x37458273562345</td>
                        </tr>
                        <tr>
                            <td>3:00</td>
                            <td>$420</td>
                            <td>0x83475387456837</td>
                        </tr>
                        <tr>
                            <td>2:00</td>
                            <td>$696</td>
                            <td>0x73845683624899</td>
                        </tr>
                        <tr>
                            <td>1:00</td>
                            <td>$420</td>
                            <td>0x87465378992304</td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>

        <p class="mt-4">This is a mockup page.</p>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
            crossorigin="anonymous"></script>

        <script> $('#nav-trans').addClass("bg-primary");</script>
</body>

</html>