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
    const clickedToggle = e.target;
    const targetPanel = clickedToggle.nextElementSibling;
    const isCurrentlyExpanded =
      targetPanel.parentElement.dataset.expanded === 'true';

    panels.forEach(function (panel) {
      panel.parentElement.dataset.expanded = 'false';
      panel.dataset.ariaHidden = 'true';
    });

    if (!isCurrentlyExpanded) {
      targetPanel.parentElement.dataset.expanded = 'true';
      targetPanel.dataset.ariaHidden = 'false';
    }
  }
})();
