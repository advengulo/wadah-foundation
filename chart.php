<?php include 'header.php' ;?>
<div class="row justify-content-center">
<div class="col-md-6 col-lg-7">
    <!-- Bar Chart -->
    <div class="card shadow mb-4">
        <div class="card-header mb-4">
            <div class="m-0 font-weight-bold text-primary">Chart Bar</div>
        </div>
        <div class="card-body">
            <div class="chart-area">
                <canvas id="myBarChart"></canvas>
            </div>
        </div>
    </div>

    <!-- Pie Chart -->
    <div class="card shadow mb-4">
        <div class="card-header mb-4">
            <div class="m-0 font-weight-bold text-primary">Chart Pie</div>
        </div>
        <div class="card-body">
            <div class="chart-area">
                <canvas id="myPieChart"></canvas>
            </div>
        </div>
    </div>
</div>
</div>
<?php include 'footer.php' ;?>