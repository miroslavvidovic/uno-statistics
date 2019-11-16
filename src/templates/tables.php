<?php $this->layout('template', ['title' => 'UNO']) ?>

<?php
$data = 1000;
?>

<div class="row">
  <div class="col-sm-6">
    <table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">Čitač</th>
      <th scope="col">L1</th>
      <th scope="col">D1</th>
      <th scope="col">L2</th>
      <th scope="col">D2</th>
      <th scope="col">L3</th>
      <th scope="col">D3</th>
      <th scope="col">M1</th>
      <th scope="col">V1</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Broj kucanja</th>
      <td class="bg-primary"><?=$this->e($data)?></td>
      <td class="bg-primary">100</td>
      <td class="bg-primary">50</td>
      <td class="bg-primary">Otto</td>
      <td class="bg-primary">@mdo</td>
      <td class="bg-primary">Otto</td>
      <td class="bg-danger">@mdo</td>
      <td class="bg-success">Otto</td>
    </tr>
  </tbody>
</table>
  </div>
  <div class="col-sm-6">
    <table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">Čitač</th>
      <th scope="col">RB</th>
      <th scope="col">RC</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Broj kucanja</th>
      <td class="bg-info"><?=$this->e($data)?></td>
      <td class="bg-warning">100</td>
   </tr>
  </tbody>
</table>
  </div>
</div>


<div class="row">
  <div class="col-sm-6">
    <canvas id="myChart" style="background-color: #343A40;"> </canvas>
  </div>
  <div class="col-sm-6">
    <canvas id="myChart2" style="background-color: #343A40;"> </canvas>
  </div>
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
                'rgba(0, 123, 255)',
                'rgba(0, 123, 255)',
                'rgba(0, 123, 255)',
                'rgba(0, 123, 255)',
                'rgba(0, 123, 255)',
                'rgba(0, 123, 255)',
                'rgba(220, 53, 69)',
                'rgba(40, 167, 69)'
            ],
            borderColor: [
                'rgba(255, 255,255)',
                'rgba(255, 255,255)',
                'rgba(255, 255,255)',
                'rgba(255, 255,255)',
                'rgba(255, 255,255)',
                'rgba(255, 255,255)',
                'rgba(255, 255,255)',
                'rgba(255, 255,255)',
            ],
            borderWidth: 2
        }]
    },
options: {
        legend: {
             labels: {
                  fontColor: '#FFFFFF'
                 }
              },
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true,
                    fontColor: '#FFFFFF'
                },
            }],
          xAxes: [{
                ticks: {
                    fontColor: '#FFFFFF'
                },
            }]
        } 

    }
});


var ctx = document.getElementById('myChart2').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['RB', 'RC'],
        datasets: [{
            label: 'Broj kucanja po čitaču',
            data: [12, 19],
            backgroundColor: [
                'rgba(23, 162, 184)',
                'rgba(255, 193, 7)',
            ],
            borderColor: [
                'rgba(255, 255,255)',
                'rgba(255, 255,255)',
            ],
            borderWidth: 2
        }]
    },
    options: {
        legend: {
             labels: {
                  fontColor: '#FFFFFF'
                 }
              },
    }     
    // options: {
    //     yAxes: [{
    //             ticks: {
    //                 beginAtZero: true,
    //             }
    //         }],
    //     legend: {
    //         display: true,
    //     }
    // }
});
</script>