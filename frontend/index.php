
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "functions/header.php"?>
</head>
<body class="overflow-x-hidden">
   <!-- Navigation Bar -->
   <nav class="navbar navbar-expand-lg bg-success">
        <div class="container-fluid">
            
        <?php include "functions/navbar.php"?>

            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active text-success bg-light rounded-pill px-4 animate__animated animate__bounceIn" aria-current="page" href="index.php">
                    <b>
                        ROOM 322
                    </b>
                </a>
                </li>
                <li class="nav-item navbarOption">
                <a class="nav-link text-light px-4" href="room2.php">ROOM 323</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-light px-4" href="room3.php">ROOM324</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-light px-4" href="room4.php">ROOM 325</a>
                </li>
            </ul>
            </div>

        </div>
        </nav>

<!-- Trigger Warning -->
<div class="d-flex align-items-center justify-content-center">
<div class="container-fluid bg-danger text-white text-center d-flex align-items-center flex-column p-3 m-3 w-75 rounded animate__animated animate__shakeX">
    <h5 class="fw-bold">High Benzene Level Detected</h5>
    <h5 class="fw-bold">Room 322</h5>
 </div>
</div>

<!--Current Readings-->

<div class="row p-3">
    <div class="col-md-6">
        <h5 class="fw-bold">Current Status</h5>
        <i class="d-flex"><p class="me-1">AS OF </p> <p id="datetime"> </p></i>

        <script>
        // Get current date and time
        var now = new Date();
        var datetime = now.toLocaleString();
        document.getElementById("datetime").innerHTML = datetime;
        </script>

    </div>
    <div class="col-md-6 d-flex align-items-center justify-content-end">
        <h5 class="fw-bold">Room Current Temperature: 32 °C</h5>
    </div>
</div>

<div class="row m-2 d-flex align-items-center justify-content-center">
    <div class="col-md-4 text-center p-5 bg-warning border border-5 border-white">
        <p>Carbon Dioxide Level</p>
        <h2 class="mt-3 animate__animated animate__fadeIn"><b>1000 ppm</b></h2>
        <p class="mt-3 animate__fadeIn">Above Normal Level</p>
    </div>

    <div class="col-md-4  text-center text-white p-5 bg-success border border-5 border-white">
        <p>Ozone Level</p>
        <h2 class="mt-3 animate__animated animate__fadeIn"><b>0.5 ppm</b></h2>
        <p class="mt-3  animate__animated animate__fadeIn">Normal Level</p>
    </div>

    <div class="col-md-4 text-center text-white p-5 bg-danger border border-5 border-white">
        <p>Gas Concentration</p>
        <h2 class="mt-3 animate__animated animate__fadeIn"><b>500 ppm</b></h2>
        <p class="mt-3  animate__animated animate__fadeIn">High Benzene Level</p>

    </div>
</div>

<h5 class="ms-3"><b>Warning History</b></h5>

    <div class="m-3">
        <table class="table table-bordered table-responsive border border-5">
        <thead class="table-dark">
            <tr>
            <th scope="col">Date | Time</th>
            <th scope="col">Temperature</th>
            <th scope="col">CO2 Level</th>
            <th scope="col">Ozone Level</th>
            <th scope="col">Gas Level</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">4/22/2024 00:00</th>
            <td class="">32 °C</td>
            <td class="">1000ppm</td>
            <td class="">0.5ppm</td>
            <td class="bg-danger text-white">500ppm</td>
            </tr>

            <tr>
            <th scope="row">4/22/2024 00:03</th>
            <td class="">32 °C</td>
            <td class="">1000ppm</td>
            <td class="">0.5ppm</td>
            <td class="bg-danger text-white">500ppm</td>
            </tr>

            <tr>
            <th scope="row">4/22/2024 00:12</th>
            <td class="">32 °C</td>
            <td class="">1000ppm</td>
            <td class="">0.5ppm</td>
            <td class="bg-danger text-white">500ppm</td>
            </tr>
        </tbody>
        </table>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>