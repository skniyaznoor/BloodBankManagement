<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Bank Management System</title>
</head>
<link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link href="bootstrap.min.css" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
    />
<body>
<?php
    include_once "Navbar.php";
    require_once "DataBaseConnect.php";
    $qry = "SELECT bloodgrp FROM bloodbankinformation";    
    $res = $conn->query($qry);

    $data = [];

    while ($row = $res->fetch_assoc()) {
    $data[] = $row['bloodgrp'];
}
?>
<div class="m-5"></div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<div class="d-flex justify-content-center">
    <div class="m-5">
        <img src="./Elements/Images/giphy.gif" alt="blood donation" width="400">
    </div>
    <div class="m-5">
        <canvas id="bloodGroupChart" width="600" height="300"></canvas>
    </div>
</div>
<script>
var data = <?php echo json_encode($data); ?>;
var bloodGroupCount = {};

data.forEach(function(bloodGroup) {
    bloodGroupCount[bloodGroup] = (bloodGroupCount[bloodGroup] || 0) + 1;
});

var labels = Object.keys(bloodGroupCount);
var counts = Object.values(bloodGroupCount);

var ctx = document.getElementById('bloodGroupChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: labels,
        datasets: [{
            label: 'Blood Group Distribution',
            data: counts,
            backgroundColor: 'rgba(255, 0, 0, 0.2)',
            borderColor: 'rgba(255, 0, 0, 1)',
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true,
                ticks: {
                    stepSize: 1 
                }
            }
        }
    }
});
</script>
<?php
    include_once "Footer.php";
?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
</html>