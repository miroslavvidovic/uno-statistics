<?php
$date = date("d.m.Y. - h:i:s ");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
    <title><?=$this->e($title)?></title>

</head>
<body>
    <div class="wrapper">
        <!-- Sidebar  -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3>UNO Monitoring</h3>
                </div>
                <ul class="list-unstyled components">
                <li>
                    <a href="/readersall">Prolasci ukupno</a>
                </li>
                <li>
                    <a href="/readersYesterday">Prolasci juče</a>
                </li>
                <li>
                    <a href="/readers">Prolasci danas</a>
                </li>
                <li>
                    <a href="/restaurants">Restorani</a>
                </li>
                <li>
                    <a href="/computers">Računari</a>
                </li>
            </ul>
        </nav>


        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-danger">
                        <i class="fas fa-align-left"></i>
                        <span>Prikaz opcija</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <h3><?=$this->e($date)?></h3>
                </div>
            </nav>

   <?=$this->section('content')?> 

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script srt="node_modules/chart.js/dist/Chart.bundle.min.js"></script>
<script src="js/sidebar.js"></script>
</body>
</html>