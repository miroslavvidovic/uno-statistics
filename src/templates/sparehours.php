<?php $this->layout('template', ['title' => 'UNO prolasci']) ?>

<div class="row">
  <div class="col-sm-2"></div>
  <div class="col-sm-8">
  </div>
</div>

<div class="row">
  <div class="col-sm-2"></div>
  <div class="col-sm-8">
    <table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">Platni broj</th>
      <th scope="col">Ime</th>
      <th scope="col">Prezime</th>
      <th scope="col">Naziv MJT</th>
      <th scope="col">Narađeni sati</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($this->data['List'] as $employee): ?>
    <tr>
      <td class="bg-success"><?=$this->e($employee['Platni_broj'])?></td>
      <td class=""><?=$this->e($employee['Ime'])?></td>
      <td class=""><?=$this->e($employee['Prezime'])?></td>
      <td class=""><?=$this->e($employee['Mjesto_troska'])?></td>
      <td class="bg-danger"><?=$this->e(number_format ($employee['Naradjeni_sati'],2))?></td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>
  </div>
</div>
