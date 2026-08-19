/**
 * Our Team page — member detail modal.
 */
(function () {
  'use strict';

  var modal = document.getElementById('team-member-modal');
  if (!modal) return;

  var dataEl = document.getElementById('pps-team-modal-data');
  var members = {};
  if (dataEl && dataEl.textContent) {
    try {
      members = JSON.parse(dataEl.textContent);
    } catch (error) {
      members = {};
    }
  }

  var dialog = modal.querySelector('.team-modal__dialog');
  var closeButtons = modal.querySelectorAll('[data-team-modal-close]');
  var openButtons = document.querySelectorAll('[data-team-member]');
  var photoWrap = modal.querySelector('.team-modal__photo');
  var photoEl = modal.querySelector('.team-modal__photo img');
  var nameEl = modal.querySelector('.team-modal__name');
  var roleEl = modal.querySelector('.team-modal__role');
  var bioEl = modal.querySelector('.team-modal__bio');
  var contactEl = modal.querySelector('.team-modal__contact');
  var lastFocus = null;

  function setText(el, value) {
    if (!el) return;
    var text = value || '';
    el.textContent = text;
    el.hidden = text === '';
  }

  function openModal(memberId) {
    var member = members[String(memberId)] || members[memberId];
    if (!member) return;

    lastFocus = document.activeElement;

    if (photoEl) {
      photoEl.src = member.image || '';
      photoEl.alt = member.name || '';
    }
    if (photoWrap) {
      photoWrap.hidden = !member.image;
    }

    setText(nameEl, member.name);
    setText(roleEl, member.title);

    if (bioEl) {
      bioEl.innerHTML = '';
      (member.paragraphs || []).forEach(function (paragraph) {
        var p = document.createElement('p');
        p.textContent = paragraph;
        bioEl.appendChild(p);
      });
    }

    if (contactEl) {
      contactEl.innerHTML = '';
      if (member.phone) {
        var phoneItem = document.createElement('li');
        var phoneIcon = document.createElement('i');
        phoneIcon.className = 'fa-solid fa-phone';
        phoneIcon.setAttribute('aria-hidden', 'true');
        var phoneLink = document.createElement('a');
        phoneLink.href = 'tel:' + member.phone.replace(/[^0-9+]/g, '');
        phoneLink.textContent = member.phone;
        phoneItem.appendChild(phoneIcon);
        phoneItem.appendChild(phoneLink);
        contactEl.appendChild(phoneItem);
      }
      if (member.email) {
        var emailItem = document.createElement('li');
        var emailIcon = document.createElement('i');
        emailIcon.className = 'fa-solid fa-envelope';
        emailIcon.setAttribute('aria-hidden', 'true');
        var emailLink = document.createElement('a');
        emailLink.href = 'mailto:' + member.email;
        emailLink.textContent = member.email;
        emailItem.appendChild(emailIcon);
        emailItem.appendChild(emailLink);
        contactEl.appendChild(emailItem);
      }
      contactEl.hidden = contactEl.children.length === 0;
    }

    modal.hidden = false;
    modal.setAttribute('aria-hidden', 'false');
    document.body.classList.add('team-modal-open');

    var closeBtn = modal.querySelector('.team-modal__close');
    if (closeBtn) closeBtn.focus();
  }

  function closeModal() {
    modal.hidden = true;
    modal.setAttribute('aria-hidden', 'true');
    document.body.classList.remove('team-modal-open');
    if (lastFocus && typeof lastFocus.focus === 'function') {
      lastFocus.focus();
    }
  }

  openButtons.forEach(function (button) {
    button.addEventListener('click', function () {
      openModal(button.getAttribute('data-team-member'));
    });
  });

  closeButtons.forEach(function (button) {
    button.addEventListener('click', closeModal);
  });

  modal.addEventListener('click', function (event) {
    if (event.target === modal.querySelector('.team-modal__backdrop')) {
      closeModal();
    }
  });

  document.addEventListener('keydown', function (event) {
    if (modal.hidden) return;

    if (event.key === 'Escape') {
      event.preventDefault();
      closeModal();
      return;
    }

    if (event.key === 'Tab' && dialog) {
      var focusable = dialog.querySelectorAll(
        'button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])'
      );
      if (!focusable.length) return;

      var first = focusable[0];
      var last = focusable[focusable.length - 1];

      if (event.shiftKey && document.activeElement === first) {
        event.preventDefault();
        last.focus();
      } else if (!event.shiftKey && document.activeElement === last) {
        event.preventDefault();
        first.focus();
      }
    }
  });
})();
