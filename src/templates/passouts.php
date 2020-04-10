<?php $this->layout('template', ['title' => 'UNO']) ?>

<!-- <?php var_dump($this->data); ?> -->
<?php var_dump($this->data['daily']); ?>

<div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
    <table class="table table-bordered table-dark">
        <thead>
            <tr>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">Ukupan broj izlaznica</th>
                <td class="bg-primary"><?=$this->data['total'][0]['']?></td>
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
        // TODO: Move all the dates to the top and correctly calculate the names of the previous 3 months
        labels: ['<?=$this->e(date("M", time()-date("j")*24*60*60*10));?>', '<?=$this->e(date("M", time()-date("j")*24*60*60*5));?>', '<?=$this->e(date("M", time()-date("j")*24*60*60));?>', '<?=$this->e(date('M'));?>'],
        datasets: [{
            label: 'Broj izlaznica za mjesec',
            data: [<?=$this->data['monthly'][0]['']?>,<?=$this->data['monthly'][1]['']?>,<?=$this->data['monthly'][2]['']?>,<?=$this->data['monthly'][3]['']?>],
            backgroundColor: [
                'rgba(0, 123, 255)',
                'rgba(0, 123, 255)',
                'rgba(0, 123, 255)',
                'rgba(0, 123, 255)',
                'rgba(0, 123, 255)',
                'rgba(0, 123, 255)',
                'rgba(220, 53, 69)',
                'rgba(40, 167, 69)',
                'rgba(255, 193, 7)'
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
                'rgba(255, 255,255)'
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
    type: 'bar',
    data: {
        // labels: ['<?=$this->e($this->data['daily'][0]['DATEOUT'])?>'],
        labels: ['<?=$this->e($this->data['daily'][0]['DATEOUT'])?>','<?=$this->e($this->data['daily'][1]['DATEOUT'])?>','<?=$this->e($this->data['daily'][2]['DATEOUT'])?>','<?=$this->e($this->data['daily'][3]['DATEOUT'])?>','<?=$this->e($this->data['daily'][4]['DATEOUT'])?>'],
        datasets: [{
            label: 'Broj izlaznica po danima',
            data: [<?=$this->e($this->data['daily'][0][''])?>,<?=$this->e($this->data['daily'][1][''])?>,<?=$this->e($this->data['daily'][2][''])?>,<?=$this->e($this->data['daily'][3][''])?>,<?=$this->e($this->data['daily'][4][''])?>],
            backgroundColor: [
                'rgba(0, 123, 255)',
                'rgba(0, 123, 255)',
                'rgba(0, 123, 255)',
                'rgba(0, 123, 255)',
                'rgba(0, 123, 255)',
                'rgba(0, 123, 255)',
                'rgba(220, 53, 69)',
                'rgba(40, 167, 69)',
                'rgba(255, 193, 7)'
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
                'rgba(255, 255,255)'
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

</script>