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
          <p class="mb-0 small">Data d'iscrizione PDG: 17/02/2017</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="tech-stack-box p-3 rounded-3 h-100">
          <h6 class="fw-bold">Sede</h6>
          <p class="mb-0 small">Via Trieste, 77/F, 25018 Montichiari (BS)</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Contesto Settoriale -->
<div class="card card-hover mb-4">
  <div class="card-body">
    <h5 class="card-title mb-4">Contesto Settoriale</h5>
    <p>
      In Italia, lo studio commercialista è uno studio professionale che offre 
      consulenza fiscale, contabile e amministrativa a imprese e privati. Il commercialista 
      è un libero professionista iscritto all'Ordine dei Dottori Commercialisti e degli 
      Esperti Contabili (ODCEC), l'albo professionale che ne regola l'esercizio.
    </p>
    <p>
      Esistono due figure distinte all'interno di questa professione:
    </p>
    <div class="row g-3 mt-1">
      <div class="col-md-6">
        <div class="tech-stack-box p-3 rounded-3 h-100">
          <h6 class="fw-bold">Dottore Commercialista</h6>
          <p class="mb-0 small">
            Laureato in Economia o Giurisprudenza, abilitato dopo un tirocinio triennale 
            e il superamento dell'esame di Stato. Può svolgere attività di revisione legale, 
            consulenza societaria e rappresentanza fiscale.
          </p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="tech-stack-box p-3 rounded-3 h-100">
          <h6 class="fw-bold">Esperto Contabile</h6>
          <p class="mb-0 small">
            Figura con diploma o laurea triennale, iscritta nella sezione B dell'albo. 
            Si occupa principalmente di contabilità ordinaria, dichiarazioni fiscali 
            e adempimenti amministrativi per piccole imprese e professionisti.
          </p>
        </div>
      </div>
    </div>
    <p class="mt-3 mb-0">
      Queste figure professionali si avvalgono spesso di software gestionali specializzati 
      (come TeamSystem o Zucchetti) per gestire la contabilità dei clienti, elaborare 
      le buste paga e produrre le dichiarazioni fiscali nei tempi previsti dalla normativa italiana.
    </p>
  </div>
</div>

<!-- Servizi e Clienti -->
<div class="card card-hover mb-4">
  <div class="card-body">
    <h5 class="card-title mb-4">Servizi e Clienti</h5>
    <p>
      Lo studio fornisce servizi di gestione della contabilità ordinaria e semplificata,
      elaborazione dichiarazioni dei redditi, consulenza fiscale, gestione buste paga
      e assistenza alle imprese nelle pratiche amministrative. I clienti principali sono piccole e medie imprese, liberi professionisti
      e privati cittadini.
    </p>
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
  <a href="<?= BASE_URL ?>/index.php" class="btn btn-outline-warm">&larr; Home</a>
  <a href="<?= BASE_URL ?>/php/stage.php" class="btn btn-outline-warm">Prossima sezione &rarr;</a>
</div>

<?php include '../php/includes/footer.php'; ?>
