/**
 * AI agent profile page — light motion helpers.
 */
(function () {
  'use strict';

  var root = document.querySelector('.ai-agent-page');
  if (!root) return;

  // Respect reduced motion
  var reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  // Staggered reveal polish: ensure delay vars apply after visibility
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
      // Avoid double-observe conflicts if already handled by main.js
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
})();
