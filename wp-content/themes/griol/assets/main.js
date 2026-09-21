document.addEventListener('DOMContentLoaded', function () {
  var hamburger = document.getElementById('hamburger');
  var mobileNav = document.getElementById('mobile-nav');
  var iconMenu  = document.getElementById('icon-menu');
  var iconClose = document.getElementById('icon-close');

  if (hamburger) {
    hamburger.addEventListener('click', function () {
      var open = mobileNav.classList.toggle('open');
      iconMenu.style.display  = open ? 'none'  : 'block';
      iconClose.style.display = open ? 'block' : 'none';
    });
  }

  var servicesToggle = document.getElementById('mobile-services-toggle');
  var servicesList   = document.getElementById('mobile-services-list');

  if (servicesToggle) {
    servicesToggle.addEventListener('click', function () {
      servicesList.classList.toggle('open');
    });
  }

  // ── Blog Category Filter ──
  var catBtns   = document.querySelectorAll('.bl-cat-btn');
  var blogGrid  = document.getElementById('blog-grid');
  var noResults = document.getElementById('bl-no-results');

  catBtns.forEach(function(btn) {
    btn.addEventListener('click', function() {
      catBtns.forEach(function(b) { b.classList.remove('active'); });
      btn.classList.add('active');
      var cat = btn.dataset.cat;
      var cards = blogGrid ? blogGrid.querySelectorAll('.bl-card') : [];
      var visible = 0;
      cards.forEach(function(card) {
        var show = cat === 'all' || card.dataset.cat === cat;
        card.style.display = show ? '' : 'none';
        if (show) visible++;
      });
      if (noResults) noResults.style.display = visible === 0 ? 'block' : 'none';
    });
  });

  // ── FAQ Accordion ──
  document.querySelectorAll('.gbf-acc-trigger').forEach(function (btn) {
    btn.addEventListener('click', function () {
      var item   = btn.closest('.gbf-acc-item');
      var isOpen = item.classList.contains('is-open');

      // Close all
      document.querySelectorAll('.gbf-acc-item').forEach(function (o) {
        o.classList.remove('is-open');
        o.querySelector('.gbf-acc-trigger').setAttribute('aria-expanded', 'false');
      });

      // Open clicked one if it was closed
      if (!isOpen) {
        item.classList.add('is-open');
        btn.setAttribute('aria-expanded', 'true');
      }
    });
  });

  // ── Load More Blog Posts ──
  var loadMoreBtn  = document.getElementById('load-more-btn');
  var blogGrid     = document.getElementById('blog-grid');
  var blogSpinner  = document.getElementById('blog-spinner');

  if (loadMoreBtn && blogGrid) {
    loadMoreBtn.addEventListener('click', function () {
      var currentPage = parseInt(loadMoreBtn.dataset.page);
      var maxPages    = parseInt(loadMoreBtn.dataset.max);
      var nonce       = loadMoreBtn.dataset.nonce;
      var nextPage    = currentPage + 1;

      loadMoreBtn.style.display = 'none';
      blogSpinner.style.display = 'flex';

      var formData = new FormData();
      formData.append('action', 'griol_load_more');
      formData.append('nonce',  nonce);
      formData.append('page',   nextPage);

      fetch(griolAjax.url, { method: 'POST', body: formData })
        .then(function (res) { return res.json(); })
        .then(function (data) {
          blogSpinner.style.display = 'none';
          if (data.success && data.data.html) {
            var tmp = document.createElement('div');
            tmp.innerHTML = data.data.html;
            var newCards = Array.from(tmp.querySelectorAll('.bl-card'));
            newCards.forEach(function (card) {
              card.style.opacity = '0';
              card.style.transform = 'translateY(16px)';
              blogGrid.appendChild(card);
              requestAnimationFrame(function () {
                card.style.transition = 'opacity .4s ease, transform .4s ease';
                card.style.opacity    = '1';
                card.style.transform  = 'translateY(0)';
              });
            });
            loadMoreBtn.dataset.page = nextPage;
            if (nextPage >= data.data.maxPages) {
              loadMoreBtn.style.display = 'none';
            } else {
              loadMoreBtn.style.display = 'inline-flex';
            }
          }
        })
        .catch(function () {
          blogSpinner.style.display = 'none';
          loadMoreBtn.style.display = 'inline-flex';
        });
    });
  }
});
