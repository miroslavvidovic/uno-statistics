<?php $this->layout('template', ['title' => 'UNO restorani']) ?>

<div class="row">
  <div class="col-sm-2"></div> 
  <div class="col-sm-8">
    <table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">Čitač</th>
      <th scope="col">RB</th>
      <th scope="col">RC</th>
      <th scope="col">RS</th>
      <th scope="col">RT</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Broj kucanja</th>
      <td class="bg-danger"><?php echo $this->data['rb'][0][''] ?></td>
      <td class="bg-primary"><?php echo $this->data['rc'][0][''] ?></td>
      <td class="bg-info">0</td>
      <td class="bg-warning">0</td>
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
        labels: ['RB', 'RC', 'RS', 'RT'],
        datasets: [{
            label: 'Broj kucanja po čitaču',
            data: [<?= $this->data['rb'][0]['']?>,<?= $this->data['rc'][0]['']?>,0,0],
            backgroundColor: [
                'rgba(220, 53, 69)',
                'rgba(0, 123, 255)',
                'rgba(23, 162, 184)',
                'rgba(255, 193, 7)',
            ],
            borderColor: [
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
        labels: ['RB', 'RC', 'RS','RT'],
        datasets: [{
            label: 'Broj kucanja po čitaču',
            data: [<?=$this->data['rb'][0]['']?>,<?=$this->data['rc'][0]['']?>,0,0],
            backgroundColor: [
                'rgba(220, 53, 69)',
                'rgba(0, 123, 255)',
                'rgba(23, 162, 184)',
                'rgba(255, 193, 7)',
            ],
            borderColor: [
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