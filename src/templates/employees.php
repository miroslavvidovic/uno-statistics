<?php $this->layout('template', ['title' => 'UNO prolasci']) ?>

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
      <th scope="row">Broj evidentiranih radnika</th>
      <td class="bg-primary"><?=$this->data['Employees'][0]['']?></td>
    </tr>
  </tbody>
</table>
  </div>
</div>

<div class="row">
  <div class="col-sm-2"></div>
  <div class="col-sm-8">
    <table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">Platni broj</th>
      <th scope="col">Ime i prezime</th>
      <th scope="col">MJT</th>
      <th scope="col">Naziv MJT</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($this->data['List'] as $employee): ?>
    <tr>
      <td class="bg-success"><?=$this->e($employee['EMPLOYEEID'])?></td>
      <td class="bg-primary"><?=$this->e($employee['EMPNAME'])?></td>
      <td class=""><?=$this->e($employee['DIMENSION'])?></td>
      <td class=""><?=$this->e($employee['DIMNAME'])?></td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>
  </div>
</div>