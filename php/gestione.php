<?php
include '../php/includes/db.php';
include '../php/includes/header.php';

// Messaggi di feedback
$messaggio = '';
$tipo_messaggio = '';

// DELETE
if (isset($_GET['elimina'])) {
    $id = (int) $_GET['elimina'];
    $stmt = $pdo->prepare("DELETE FROM stage WHERE id = ?");
    $stmt->execute([$id]);
    $messaggio = 'Esperienza eliminata con successo.';
    $tipo_messaggio = 'success';
}

// INSERT
if (isset($_POST['inserisci'])) {
    $stmt = $pdo->prepare("INSERT INTO stage (azienda, ruolo, data_inizio, data_fine, descrizione) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([
        $_POST['azienda'],
        $_POST['ruolo'],
        $_POST['data_inizio'] ?: null,
        $_POST['data_fine'] ?: null,
        $_POST['descrizione']
    ]);
    $messaggio = 'Esperienza inserita con successo.';
    $tipo_messaggio = 'success';
}

// UPDATE
if (isset($_POST['aggiorna'])) {
    $stmt = $pdo->prepare("UPDATE stage SET azienda = ?, ruolo = ?, data_inizio = ?, data_fine = ?, descrizione = ? WHERE id = ?");
    $stmt->execute([
        $_POST['azienda'],
        $_POST['ruolo'],
        $_POST['data_inizio'] ?: null,
        $_POST['data_fine'] ?: null,
        $_POST['descrizione'],
        (int) $_POST['id']
    ]);
    $messaggio = 'Esperienza aggiornata con successo.';
    $tipo_messaggio = 'success';
}

// Carica dati per modifica
$modifica = null;
if (isset($_GET['modifica'])) {
    $id = (int) $_GET['modifica'];
    $stmt = $pdo->prepare("SELECT * FROM stage WHERE id = ?");
    $stmt->execute([$id]);
    $modifica = $stmt->fetch(PDO::FETCH_ASSOC);
}

// SELECT
$stmt = $pdo->query("SELECT * FROM stage ORDER BY data_inizio DESC");
$esperienze = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<h2 class="section-title mb-4">Gestione Database</h2>

<?php if ($messaggio): ?>
  <div class="alert alert-<?= $tipo_messaggio ?> alert-dismissible fade show" role="alert">
    <?= htmlspecialchars($messaggio) ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  </div>
<?php endif; ?>

<!-- Introduzione -->
<div class="card card-hover mb-4">
  <div class="card-body">
    <h4 class="card-title mb-3">🗄️ Operazioni CRUD</h4>
    <p>
      Questa sezione permette di gestire i dati delle esperienze di stage
      tramite un'interfaccia collegata al database MySQL. È possibile inserire
      nuove esperienze, visualizzare quelle esistenti, modificarle o eliminarle.
    </p>
  </div>
</div>

<!-- Form Inserimento / Modifica -->
<div class="card card-hover mb-4">
  <div class="card-body">
    <h5 class="card-title mb-3">
      <?= $modifica ? 'Modifica esperienza' : 'Inserisci nuova esperienza' ?>
    </h5>
    <form method="POST" action="gestione.php">
      <?php if ($modifica): ?>
        <input type="hidden" name="id" value="<?= $modifica['id'] ?>">
      <?php endif; ?>

      <div class="row g-3">
        <div class="col-md-6">
          <label for="azienda" class="form-label">Azienda</label>
          <input type="text" class="form-control" id="azienda" name="azienda"
                 value="<?= htmlspecialchars($modifica['azienda'] ?? '') ?>" required>
        </div>
        <div class="col-md-6">
          <label for="ruolo" class="form-label">Ruolo</label>
          <input type="text" class="form-control" id="ruolo" name="ruolo"
                 value="<?= htmlspecialchars($modifica['ruolo'] ?? '') ?>" required>
        </div>
        <div class="col-md-6">
          <label for="data_inizio" class="form-label">Data inizio</label>
          <input type="date" class="form-control" id="data_inizio" name="data_inizio"
                 value="<?= htmlspecialchars($modifica['data_inizio'] ?? '') ?>">
        </div>
        <div class="col-md-6">
          <label for="data_fine" class="form-label">Data fine</label>
          <input type="date" class="form-control" id="data_fine" name="data_fine"
                 value="<?= htmlspecialchars($modifica['data_fine'] ?? '') ?>">
        </div>
        <div class="col-12">
          <label for="descrizione" class="form-label">Descrizione</label>
          <textarea class="form-control" id="descrizione" name="descrizione"
                    rows="3"><?= htmlspecialchars($modifica['descrizione'] ?? '') ?></textarea>
        </div>
        <div class="col-12">
          <?php if ($modifica): ?>
            <button type="submit" name="aggiorna" class="btn btn-dark">Aggiorna</button>
            <a href="gestione.php" class="btn btn-outline-secondary ms-2">Annulla</a>
          <?php else: ?>
            <button type="submit" name="inserisci" class="btn btn-dark">Inserisci</button>
          <?php endif; ?>
        </div>
      </div>
    </form>
  </div>
</div>

<!-- Elenco Esperienze -->
<div class="card card-hover mb-4">
  <div class="card-body">
    <h5 class="card-title mb-3">Elenco esperienze registrate</h5>

    <?php if (count($esperienze) > 0): ?>
      <div class="table-responsive">
        <table class="table table-striped table-hover align-middle">
          <thead class="table-dark">
            <tr>
              <th>Azienda</th>
              <th>Ruolo</th>
              <th>Inizio</th>
              <th>Fine</th>
              <th>Descrizione</th>
              <th>Azioni</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($esperienze as $row): ?>
              <tr>
                <td><?= htmlspecialchars($row['azienda']) ?></td>
                <td><?= htmlspecialchars($row['ruolo']) ?></td>
                <td><?= $row['data_inizio'] ? date('d/m/Y', strtotime($row['data_inizio'])) : '—' ?></td>
                <td><?= $row['data_fine'] ? date('d/m/Y', strtotime($row['data_fine'])) : '—' ?></td>
                <td><?= htmlspecialchars($row['descrizione'] ?? '') ?></td>
                <td class="text-nowrap">
                  <a href="gestione.php?modifica=<?= $row['id'] ?>" class="btn btn-sm btn-outline-dark">Modifica</a>
                  <a href="gestione.php?elimina=<?= $row['id'] ?>"
                     class="btn btn-sm btn-outline-danger"
                     onclick="return confirm('Sei sicura di voler eliminare questa esperienza?')">Elimina</a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    <?php else: ?>
      <p class="text-muted mb-0">Nessuna esperienza registrata. Usa il modulo sopra per aggiungerne una.</p>
    <?php endif; ?>
  </div>
</div>

<!-- Navigazione tra le sezioni -->
<div class="d-flex justify-content-between mt-5">
  <a href="/MateiManuelaNatalis_FSL/php/orientamento.php" class="btn btn-outline-dark">&larr; Orientamento</a>
  <a href="/MateiManuelaNatalis_FSL/index.php" class="btn btn-outline-dark">Home &rarr;</a>
</div>

<?php include '../php/includes/footer.php'; ?>
