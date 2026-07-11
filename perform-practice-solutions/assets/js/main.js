/**
 * Main theme interactions.
 */
(function () {
  'use strict';

  var header = document.getElementById('site-header');
  var toggle = document.getElementById('nav-toggle');
  var nav = document.getElementById('primary-navigation');
  var backdrop = document.getElementById('nav-backdrop');

  function setNavOpen(isOpen) {
    if (!nav || !toggle) return;
    nav.classList.toggle('is-open', isOpen);
    toggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
    document.body.style.overflow = isOpen ? 'hidden' : '';
    if (backdrop) {
      backdrop.hidden = !isOpen;
      backdrop.classList.toggle('is-visible', isOpen);
    }
  }

  if (toggle) {
    toggle.addEventListener('click', function () {
      setNavOpen(!nav.classList.contains('is-open'));
    });
  }

  if (backdrop) {
    backdrop.addEventListener('click', function () {
      setNavOpen(false);
    });
  }

  window.addEventListener('scroll', function () {
    if (!header) return;
    header.classList.toggle('is-scrolled', window.scrollY > 12);
  }, { passive: true });

  // Mobile submenu toggles
  document.querySelectorAll('.menu-item-has-children > a').forEach(function (link) {
    link.addEventListener('click', function (event) {
      if (window.matchMedia('(max-width: 991.98px)').matches) {
        var parent = link.parentElement;
        if (parent && parent.classList.contains('menu-item-has-children')) {
          event.preventDefault();
          parent.classList.toggle('is-open');
        }
      }
    });
  });

  // Close mobile nav on link click (non-parent)
  if (nav) {
    nav.querySelectorAll('a').forEach(function (link) {
      link.addEventListener('click', function () {
        if (window.matchMedia('(max-width: 991.98px)').matches) {
          var parent = link.parentElement;
          if (!parent || !parent.classList.contains('menu-item-has-children')) {
            setNavOpen(false);
          }
        }
      });
    });
  }

  // FAQ accordion
  document.querySelectorAll('.faq-item__question').forEach(function (button) {
    button.addEventListener('click', function () {
      var item = button.closest('.faq-item');
      var isOpen = item.classList.contains('is-open');
      document.querySelectorAll('.faq-item.is-open').forEach(function (openItem) {
        openItem.classList.remove('is-open');
        var q = openItem.querySelector('.faq-item__question');
        if (q) q.setAttribute('aria-expanded', 'false');
      });
      if (!isOpen) {
        item.classList.add('is-open');
        button.setAttribute('aria-expanded', 'true');
      }
    });
  });

  // Reveal on scroll
  var revealEls = document.querySelectorAll('.pps-reveal');
  if ('IntersectionObserver' in window) {
    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

    revealEls.forEach(function (el) {
      observer.observe(el);
    });
  } else {
    revealEls.forEach(function (el) {
      el.classList.add('is-visible');
    });
  }

  // Contact form AJAX
  var form = document.getElementById('pps-contact-form');
  var messageEl = document.getElementById('pps-form-message');

  if (form && typeof ppsAjax !== 'undefined') {
    form.addEventListener('submit', function (event) {
      event.preventDefault();

      var formData = new FormData(form);
      formData.append('action', 'pps_contact_form');
      formData.append('nonce', ppsAjax.nonce);

      if (messageEl) {
        messageEl.className = 'form-message';
        messageEl.textContent = '';
      }

      var submitBtn = form.querySelector('[type="submit"]');
      if (submitBtn) submitBtn.disabled = true;

      fetch(ppsAjax.ajaxUrl, {
        method: 'POST',
        body: formData,
        credentials: 'same-origin'
      })
        .then(function (response) { return response.json(); })
        .then(function (data) {
          if (!messageEl) return;
          messageEl.textContent = (data.data && data.data.message) ? data.data.message : 'Done.';
          messageEl.className = 'form-message ' + (data.success ? 'is-success' : 'is-error');
          if (data.success) form.reset();
        })
        .catch(function () {
          if (!messageEl) return;
          messageEl.textContent = 'Something went wrong. Please try again.';
          messageEl.className = 'form-message is-error';
        })
        .finally(function () {
          if (submitBtn) submitBtn.disabled = false;
        });
    });
  }

  // Back to top
  var backTop = document.getElementById('pps-back-top');
  if (backTop) {
    window.addEventListener('scroll', function () {
      backTop.classList.toggle('is-visible', window.scrollY > 500);
    }, { passive: true });

    backTop.addEventListener('click', function () {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }
})();
