// === Form Validation ===

document.addEventListener('DOMContentLoaded', function () {

  // --- Auto-dismiss alerts after 4 seconds ---
  const alerts = document.querySelectorAll('.alert-dismissible');
  alerts.forEach(function (alert) {
    setTimeout(function () {
      const closeBtn = alert.querySelector('.btn-close');
      if (closeBtn) closeBtn.click();
    }, 4000);
  });

  // --- Character counter for description ---
  const descrizione = document.getElementById('descrizione');
  if (descrizione) {
    const maxChars = 500;
    const counter = document.createElement('small');
    counter.classList.add('text-muted', 'd-block', 'mt-1');
    counter.textContent = '0 / ' + maxChars + ' caratteri';
    descrizione.parentNode.appendChild(counter);

    descrizione.addEventListener('input', function () {
      const len = descrizione.value.length;
      counter.textContent = len + ' / ' + maxChars + ' caratteri';

      if (len > maxChars) {
        counter.classList.remove('text-muted');
        counter.classList.add('text-danger');
      } else {
        counter.classList.remove('text-danger');
        counter.classList.add('text-muted');
      }
    });
  }

  // --- Form validation ---
  const form = document.querySelector('form[method="POST"]');
  if (!form) return;

  form.addEventListener('submit', function (e) {
    clearErrors();

    const azienda = document.getElementById('azienda');
    const ruolo = document.getElementById('ruolo');
    const dataInizio = document.getElementById('data_inizio');
    const dataFine = document.getElementById('data_fine');
    let hasErrors = false;

    // Validate azienda
    if (!azienda.value.trim()) {
      showError(azienda, 'Il campo Azienda è obbligatorio.');
      hasErrors = true;
    } else if (azienda.value.trim().length < 2) {
      showError(azienda, 'Il nome dell\'azienda deve avere almeno 2 caratteri.');
      hasErrors = true;
    }

    // Validate ruolo
    if (!ruolo.value.trim()) {
      showError(ruolo, 'Il campo Ruolo è obbligatorio.');
      hasErrors = true;
    } else if (ruolo.value.trim().length < 2) {
      showError(ruolo, 'Il ruolo deve avere almeno 2 caratteri.');
      hasErrors = true;
    }

    // Validate date logic
    if (dataInizio.value && dataFine.value) {
      if (new Date(dataFine.value) < new Date(dataInizio.value)) {
        showError(dataFine, 'La data di fine non può essere precedente alla data di inizio.');
        hasErrors = true;
      }
    }

    // Validate description length
    if (descrizione && descrizione.value.length > 500) {
      showError(descrizione, 'La descrizione non può superare i 500 caratteri.');
      hasErrors = true;
    }

    if (hasErrors) {
      e.preventDefault();
    }
  });

  // --- Helper: show inline error below a field ---
  function showError(field, message) {
    field.classList.add('is-invalid');

    const error = document.createElement('div');
    error.classList.add('invalid-feedback');
    error.textContent = message;
    field.parentNode.appendChild(error);
  }

  // --- Helper: clear all previous errors ---
  function clearErrors() {
    const invalids = form.querySelectorAll('.is-invalid');
    invalids.forEach(function (field) {
      field.classList.remove('is-invalid');
    });

    const messages = form.querySelectorAll('.invalid-feedback');
    messages.forEach(function (msg) {
      msg.remove();
    });
  }

});
