
// header behavior
document.addEventListener('DOMContentLoaded', function() {
  // Only run dropdown toggle behavior on mobile/tablet
  var dropdownParents = document.querySelectorAll('.nav-menu .menu-item-has-children > a');

  dropdownParents.forEach(function(link) {
    link.addEventListener('click', function(e) {
      if (window.matchMedia('(max-width: 1023px)').matches) {
        e.preventDefault();
        e.stopPropagation();
        link.parentElement.classList.toggle('is-open-mobile');
      }
    });
  });

  // When hamburger is closed, collapse all open submenus
  var checkbox = document.getElementById('nav-toggle-checkbox');
  if (checkbox) {
    checkbox.addEventListener('change', function() {
      if (!checkbox.checked) {
        document.querySelectorAll('.menu-item-has-children.is-open-mobile').forEach(function(li) {
          li.classList.remove('is-open-mobile');
        });
      }
    });
  }
});

// postcard podcast modal behavior
document.addEventListener("DOMContentLoaded", function() {

    const modal = document.getElementById("podcastModal");
    const iframe = document.getElementById("podcastIframe");
    const closeBtn = document.querySelector(".podcast-close");
    const skeleton = document.querySelector(".skeleton-loader");

    iframe.addEventListener("load", function() {
        skeleton.style.display = "none";
        iframe.style.display = "block";
    });

    document.querySelectorAll(".open-podcast").forEach(btn => {
        btn.addEventListener("click", function() {
            const src = this.getAttribute("data-src");

            // Reset: show skeleton, hide iframe
            skeleton.style.display = "block";
            iframe.style.display = "none";
            iframe.src = src;
            modal.style.display = "flex";
        });
    });

    closeBtn.onclick = function() {
        modal.style.display = "none";
        iframe.src = "";
    };

    window.onclick = function(e) {
        if (e.target === modal) {
            modal.style.display = "none";
            iframe.src = "";
        }
    };

});