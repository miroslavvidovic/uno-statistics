<?php $this->layout('template', ['title' => 'UNO']) ?>

<div class="card-deck">
  <?php if ($this->data['unoserver'] == 0): ?>
  <div class="card text-white bg-danger mb-3 border-dark" style="max-width: 18rem;">
  <?php else: ?>
  <div class="card text-white bg-success mb-3 border-dark" style="max-width: 18rem;">
  <?php endif ?>
    <div class="card-header">UNO Server</div>
    <div class="card-body">
        <h5 class="card-title">Aplikativni server</h5>
        <p class="card-text"></p>
    </div>
  </div>
  <?php if ($this->data['192.168.15.151'] == 0): ?>
  <div class="card text-white bg-danger mb-3 border-dark" style="max-width: 18rem;">
  <?php else: ?>
  <div class="card text-white bg-success mb-3 border-dark" style="max-width: 18rem;">
  <?php endif ?>
    <div class="card-header">UNO Baza</div>
    <div class="card-body">
        <h5 class="card-title">Server baze podataka</h5>
        <p class="card-text"></p>
    </div>
  </div>
  <?php if ($this->data['uno1'] == 0): ?>
  <div class="card text-white bg-danger mb-3 border-dark" style="max-width: 18rem;">
  <?php else: ?>
  <div class="card text-white bg-success mb-3 border-dark" style="max-width: 18rem;">
  <?php endif ?>
    <div class="card-header">UNO 1</div>
    <div class="card-body">
        <h5 class="card-title">Glavna kapija L</h5>
        <p class="card-text"></p>
    </div>
  </div>

  <?php if ($this->data['uno2'] == 0): ?>
  <div class="card text-white bg-danger mb-3 border-dark" style="max-width: 18rem;">
  <?php else: ?>
  <div class="card text-white bg-success mb-3 border-dark" style="max-width: 18rem;">
  <?php endif ?>
    <div class="card-header">UNO 2</div>
    <div class="card-body">
        <h5 class="card-title">Glavna kapija D</h5>
    </div>
  </div>
</div>

<div class="card-deck">
  <?php if ($this->data['uno3'] == 0): ?>
  <div class="card text-white bg-danger mb-3 border-dark" style="max-width: 18rem;">
  <?php else: ?>
  <div class="card text-white bg-success mb-3 border-dark" style="max-width: 18rem;">
  <?php endif ?>
    <div class="card-header">UNO 3</div>
    <div class="card-body">
        <h5 class="card-title">Upravna zgrada</h5>
        <p class="card-text"></p>
    </div>
  </div>
  <?php if ($this->data['uno4'] == 0): ?>
  <div class="card text-white bg-danger mb-3 border-dark" style="max-width: 18rem;">
  <?php else: ?>
  <div class="card text-white bg-success mb-3 border-dark" style="max-width: 18rem;">
  <?php endif ?>
    <div class="card-header">UNO 4</div>
    <div class="card-body">
        <h5 class="card-title">Centralni restoran</h5>
        <p class="card-text"></p>
    </div>
  </div>
  <?php if ($this->data['uno5'] == 0): ?>
  <div class="card text-white bg-danger mb-3 border-dark" style="max-width: 18rem;">
  <?php else: ?>
  <div class="card text-white bg-success mb-3 border-dark" style="max-width: 18rem;">
  <?php endif ?>
    <div class="card-header">UNO 5</div>
    <div class="card-body">
        <h5 class="card-title">Bitovaja</h5>
        <p class="card-text"></p>
    </div>
  </div>

  <?php if ($this->data['uno6'] == 0): ?>
  <div class="card text-white bg-danger mb-3 border-dark" style="max-width: 18rem;">
  <?php else: ?>
  <div class="card text-white bg-success mb-3 border-dark" style="max-width: 18rem;">
  <?php endif ?>
    <div class="card-header">UNO 6</div>
    <div class="card-body">
        <h5 class="card-title">Glavna kapija - portiri</h5>
        <p class="card-text"></p>
    </div>
  </div>
</div>