(function () {
  const group = document.querySelectorAll('[data-accordion-group]');
  const toggles = document.querySelectorAll('[data-accordion-toggle]');
  const panels = document.querySelectorAll('[data-accordion-panel]');

  group.forEach(function (e) {
    e.dataset.expanded = false;
  });

  toggles.forEach(function (e) {
    e.addEventListener('click', toggleAccordion);
  });

  panels.forEach(function (e) {
    e.dataset.ariaHidden = true;
  });

  function toggleAccordion(e) {
    panels.forEach(function (panel) {
      if (panel.previousElementSibling === e.target) {
        panel.parentElement.dataset.expanded = 'true';
        panel.dataset.ariaHidden = 'false';
      } else {
        panel.parentElement.dataset.expanded = 'false';
        panel.dataset.ariaHidden = 'true';
      }
    });
  }
})();
