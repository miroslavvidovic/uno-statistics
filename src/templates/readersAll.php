<?php $this->layout('template', ['title' => 'UNO prolasci']) ?>

<div class="row">
  <div class="col-sm-2"></div>
  <div class="col-sm-8">
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
      <td class="bg-primary"><?=$this->data['l1'][0]['']?></td>
      <td class="bg-primary"><?=$this->data['l2'][0]['']?></td>
      <td class="bg-primary"><?=$this->data['l3'][0]['']?></td>
      <td class="bg-primary"><?=$this->data['d1'][0]['']?></td>
      <td class="bg-primary"><?=$this->data['d2'][0]['']?></td>
      <td class="bg-primary"><?=$this->data['d3'][0]['']?></td>
      <td class="bg-danger"><?=$this->data['m1'][0]['']?></td>
      <td class="bg-success"><?=$this->data['v1'][0]['']?></td>
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
            data: [<?=$this->data['l1'][0]['']?>,<?=$this->data['l2'][0]['']?>,<?=$this->data['l3'][0]['']?>,<?=$this->data['d1'][0]['']?>,<?=$this->data['d2'][0]['']?>,<?=$this->data['d3'][0]['']?>,<?=$this->data['m1'][0]['']?>,<?=$this->data['v1'][0]['']?>],
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
        labels: ['L1', 'D1', 'L2', 'D2', 'L3', 'D3', 'M1', 'V1'],
        datasets: [{
            label: 'Broj kucanja po čitaču',
            data: [<?=$this->data['l1'][0]['']?>,<?=$this->data['l2'][0]['']?>,<?=$this->data['l3'][0]['']?>,<?=$this->data['d1'][0]['']?>,<?=$this->data['d2'][0]['']?>,<?=$this->data['d3'][0]['']?>,<?=$this->data['m1'][0]['']?>,<?=$this->data['v1'][0]['']?>],
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