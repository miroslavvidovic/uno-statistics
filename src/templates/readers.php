        
<?php $this->layout('template', ['title' => 'UNO']) ?>
        <!-- Page Content  -->

            <h2>Prikaz prolazaka po čitačima</h2>
            <div class="line"></div>
            
            <canvas id="myChart" width="400" height="150"></canvas>
    </div>
<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['L1', 'D1', 'L2', 'D2', 'L3', 'D3', 'M1', 'V1'],
        datasets: [{
            label: 'Broj kucanja po čitaču',
            data: [12, 19, 3, 5, 20, 3,10,5],
            backgroundColor: [
                'rgba(54, 162, 235, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 51, 51, 0.2)',
                'rgba(75, 192, 2, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
            ],
            borderWidth: 1
        }]
    },
    options: {
        yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }],
        legend: {
            display: true,
        }
    }
});
</script>