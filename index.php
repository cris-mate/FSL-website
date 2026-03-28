<?php include 'php/includes/header.php'; ?>

<!-- Hero Section -->
<section class="hero-section text-center py-5 mb-4 rounded-3">
  <h1 class="display-6 fw-bold">Percorsi per le Competenze Trasversali e l'Orientamento</h1>
  <p class="lead mt-3"><strong>Matei Manuela Natalis</strong> — Classe 5ª Sistemi Informativi Aziendali</p>
  <p class="lead mt-3">Istituto di Istruzione Superiore <strong>Don Milani</strong>, Montichiari (BS) — A.S. 2025/2026</p>
</section>

<!-- Descrizione del Progetto -->
<section class="mb-5">
  <h2 class="section-title mb-3">Il Progetto</h2>
  <p>
    Questo sito web documenta le mie esperienze nell'ambito dei <strong>Percorsi per le Competenze Trasversali e l'Orientamento</strong> (PCTO), 
    realizzato come progetto finale del percorso scolastico nell'indirizzo <strong>Sistemi Informativi Aziendali</strong> (SIA).
  </p>
  <p>
    L'obiettivo è documentare le esperienze di stage, le attività di orientamento e le 
    competenze acquisite durante il triennio, dimostrando al contempo le capacità tecniche 
    sviluppate nello sviluppo web full-stack.
  </p>
</section>

<!-- Struttura del Sito -->
<section class="mb-5">
  <h2 class="section-title mb-3">Struttura del Sito</h2>
  <div class="row g-4">

    <div class="col-md-6 col-lg-3">
      <div class="card h-100 card-hover">
        <div class="card-body text-center">
          <div class="card-icon mb-3">🏢</div>
          <h5 class="card-title">Azienda</h5>
          <p class="card-text">Presentazione delle aziende ospitanti e del contesto lavorativo in cui ho svolto lo stage.</p>
          <a href="php/azienda.php" class="btn btn-outline-warm btn-sm mt-auto">Scopri di più</a>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-3">
      <div class="card h-100 card-hover">
        <div class="card-body text-center">
          <div class="card-icon mb-3">💼</div>
          <h5 class="card-title">Stage</h5>
          <p class="card-text">Dettagli sulle attività svolte, competenze acquisite e riflessioni sull'esperienza lavorativa.</p>
          <a href="php/stage.php" class="btn btn-outline-warm btn-sm mt-auto">Scopri di più</a>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-3">
      <div class="card h-100 card-hover">
        <div class="card-body text-center">
          <div class="card-icon mb-3">🧭</div>
          <h5 class="card-title">Orientamento</h5>
          <p class="card-text">Esperienze di orientamento universitario e professionale che hanno guidato le mie scelte future.</p>
          <a href="php/orientamento.php" class="btn btn-outline-warm btn-sm mt-auto">Scopri di più</a>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-3">
      <div class="card h-100 card-hover">
        <div class="card-body text-center">
          <div class="card-icon mb-3">🗄️</div>
          <h5 class="card-title">Gestione DB</h5>
          <p class="card-text">Interfaccia CRUD per la gestione dei dati degli stage tramite database MySQL.</p>
          <a href="php/gestione.php" class="btn btn-outline-warm btn-sm mt-auto">Scopri di più</a>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- Collegamento con SIA -->
<section class="mb-5">
  <h2 class="section-title mb-3">Collegamento con il Percorso SIA</h2>
  <div class="row align-items-center">
    <div class="col-lg-8">
      <p>
        L'indirizzo <strong>Sistemi Informativi Aziendali</strong> forma figure professionali 
        capaci di progettare e gestire sistemi informatici a supporto dei processi aziendali. 
        Questo progetto mette in pratica le competenze chiave del percorso:
      </p>
      <div class="row mt-3">
        <div class="col-sm-6">
          <div class="skill-tag">Sviluppo Web (HTML, CSS, JS)</div>
          <div class="skill-tag">Programmazione PHP</div>
          <div class="skill-tag">Database MySQL</div>
        </div>
        <div class="col-sm-6">
          <div class="skill-tag">Architettura Client-Server</div>
          <div class="skill-tag">Operazioni CRUD</div>
          <div class="skill-tag">Responsive Design</div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 text-center mt-4 mt-lg-0">
      <div class="tech-stack-box p-4 rounded-3">
        <h6 class="fw-bold mb-3">Stack Tecnologico</h6>
        <span class="badge bg-warm me-1 mb-2">HTML5</span>
        <span class="badge bg-warm me-1 mb-2">CSS3</span>
        <span class="badge bg-warm me-1 mb-2">Bootstrap 5</span>
        <span class="badge bg-warm me-1 mb-2">JavaScript</span><br>
        <span class="badge bg-warm me-1 mb-2">PHP</span>
        <span class="badge bg-warm me-1 mb-2">MySQL</span>
      </div>
    </div>
  </div>
</section>

<?php include 'php/includes/footer.php'; ?>
