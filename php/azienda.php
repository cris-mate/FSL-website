<?php include '../php/includes/header.php'; ?>

<h2 class="section-title mb-4">Azienda</h2>

<!-- Info Azienda -->
<div class="card card-hover mb-4">
  <div class="card-body">
    <h4 class="card-title mb-3">Studio Commercialista Federico Prignacca</h4>
    <p>
      Dal 5 giugno al 24 giugno 2023 ho svolto il mio percorso PCTO presso 
      lo Studio Commercialista Federico Prignacca, situato in Via Trieste, 77/F, 
      25018 Montichiari (BS). Lo studio è una ditta individuale specializzata in 
      consulenza fiscale, contabile e amministrativa per imprese e privati.
    </p>
    <div class="row g-3 mt-1">
      <div class="col-md-4">
        <div class="tech-stack-box p-3 rounded-3 h-100">
          <h6 class="fw-bold">Forma giuridica</h6>
          <p class="mb-0 small">Ditta individuale: libero professionista iscritto all'ODCEC</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="tech-stack-box p-3 rounded-3 h-100">
          <h6 class="fw-bold">Iscrizione all'Albo</h6>
          <p class="mb-0 small">Data d'iscrizione PDG: <strong>17/02/2017</strong></p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="tech-stack-box p-3 rounded-3 h-100">
          <h6 class="fw-bold">Sede</h6>
          <p class="mb-0 small">Via Trieste, 77/F, Montichiari (BS)</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Sede e Localizzazione -->
<div class="card card-hover mb-4">
  <div class="card-body">
    <h5 class="card-title mb-3">Sede dello studio</h5>
    <div class="row g-3">
      <div class="col-md-7">
        <img src="<?= BASE_URL ?>/img/vista_dalla_strada.jpg" 
             alt="Vista della sede dello studio da Via Trieste, Montichiari" 
             class="img-fluid rounded-3 w-100"
             style="object-fit: cover; max-height: 260px;">
        <p class="text-muted small mt-2 mb-0">Vista esterna dell'edificio in Via Trieste, Montichiari</p>
      </div>
      <div class="col-md-5">
        <img src="<?= BASE_URL ?>/img/posizione_mappa.jpg" 
             alt="Posizione dello studio su mappa di Montichiari" 
             class="img-fluid rounded-3 w-100"
             style="object-fit: cover; max-height: 260px;">
        <p class="text-muted small mt-2 mb-0">Localizzazione in centro a Montichiari (BS)</p>
      </div>
    </div>
  </div>
</div>

<!-- Navigazione tra le sezioni -->
<div class="d-flex justify-content-between mt-5">
  <a href="<?= BASE_URL ?>/index.php" class="btn btn-outline-dark">&larr; Home</a>
  <a href="<?= BASE_URL ?>/php/stage.php" class="btn btn-outline-dark">Prossima sezione &rarr;</a>
</div>

<?php include '../php/includes/footer.php'; ?>
