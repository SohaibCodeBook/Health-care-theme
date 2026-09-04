/**
 * AI agent profile page — light motion helpers + onboarding stepper.
 */
(function () {
  'use strict';

  var root = document.querySelector('.ai-agent-page');
  if (!root) return;

  var reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  // Staggered reveal polish
  if (!reduce && 'IntersectionObserver' in window) {
    var cards = root.querySelectorAll('.pps-reveal');
    var observer = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (!entry.isIntersecting) return;
          entry.target.classList.add('is-visible');
          observer.unobserve(entry.target);
        });
      },
      { threshold: 0.12, rootMargin: '0px 0px -36px 0px' }
    );

    cards.forEach(function (el) {
      if (!el.classList.contains('is-visible')) {
        observer.observe(el);
      }
    });
  }

  // Soft parallax on hero portrait (desktop only)
  if (!reduce && window.matchMedia('(min-width: 992px)').matches) {
    var portrait = root.querySelector('.ai-agent-portrait');
    var visual = root.querySelector('.ai-agent-hero__visual');
    if (portrait && visual) {
      visual.addEventListener(
        'mousemove',
        function (event) {
          var rect = visual.getBoundingClientRect();
          var x = (event.clientX - rect.left) / rect.width - 0.5;
          var y = (event.clientY - rect.top) / rect.height - 0.5;
          portrait.style.transform =
            'translate3d(' + (x * 10) + 'px, ' + (y * 8) + 'px, 0)';
        },
        { passive: true }
      );

      visual.addEventListener('mouseleave', function () {
        portrait.style.transform = '';
      });
    }
  }

  // Onboarding: phone + step animation (Sintra-style)
  var onboard = root.querySelector('.ai-agent-onboard');
  if (!onboard) return;

  var steps = Array.prototype.slice.call(
    onboard.querySelectorAll('.ai-agent-onboard__step')
  );
  var panes = Array.prototype.slice.call(
    onboard.querySelectorAll('.ai-agent-phone__pane')
  );

  if (!steps.length || !panes.length) return;

  var current = 0;
  var autoTimer = null;
  var autoPaused = false;

  function setStep(index, fromUser) {
    if (index < 0 || index >= steps.length) return;
    current = index;

    steps.forEach(function (step, i) {
      var active = i === index;
      step.classList.toggle('is-active', active);
      step.setAttribute('aria-selected', active ? 'true' : 'false');
    });

    panes.forEach(function (pane, i) {
      pane.classList.toggle('is-active', i === index);
    });

    if (fromUser) {
      pauseAuto();
    }
  }

  steps.forEach(function (step) {
    step.addEventListener('click', function () {
      var idx = parseInt(step.getAttribute('data-step'), 10);
      if (!isNaN(idx)) setStep(idx, true);
    });
  });

  function pauseAuto() {
    autoPaused = true;
    if (autoTimer) {
      clearInterval(autoTimer);
      autoTimer = null;
    }
  }

  function startAuto() {
    if (reduce || autoPaused || steps.length < 2) return;
    if (autoTimer) clearInterval(autoTimer);
    autoTimer = setInterval(function () {
      setStep((current + 1) % steps.length, false);
    }, 4200);
  }

  // Auto-advance while section is in view
  if (!reduce && 'IntersectionObserver' in window) {
    var sectionObserver = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            startAuto();
          } else if (autoTimer) {
            clearInterval(autoTimer);
            autoTimer = null;
          }
        });
      },
      { threshold: 0.35 }
    );
    sectionObserver.observe(onboard);
  } else if (!reduce) {
    startAuto();
  }

  // Pause auto when user focuses the step list
  var stepList = onboard.querySelector('.ai-agent-onboard__steps');
  if (stepList) {
    stepList.addEventListener('mouseenter', pauseAuto);
    stepList.addEventListener('focusin', pauseAuto);
  }
})();
