document.addEventListener("DOMContentLoaded", function() {
  const hamburger = document.getElementById("menuToggle");
  const nav = document.querySelector(".landing-nav");

  hamburger.addEventListener("click", function() {
    hamburger.classList.toggle("active");
    nav.classList.toggle("active");
  });
});
  // Get elements
  const tabMenu = document.querySelector('.tab__menu');
  const tabs = document.querySelectorAll('.tab');
  const tabBtns = document.querySelectorAll('.tab__btn');

  // --- Draggable horizontal scroll for tab menu ---
  let isDragging = false;
  let startX;
  let scrollLeft;

  tabMenu.addEventListener('mousedown', (e) => {
    isDragging = true;
    startX = e.pageX - tabMenu.offsetLeft;
    scrollLeft = tabMenu.scrollLeft;
    tabMenu.classList.add('dragging');
  });

  tabMenu.addEventListener('mouseleave', () => {
    isDragging = false;
    tabMenu.classList.remove('dragging');
  });

  tabMenu.addEventListener('mouseup', () => {
    isDragging = false;
    tabMenu.classList.remove('dragging');
  });

  tabMenu.addEventListener('mousemove', (e) => {
    if (!isDragging) return;
    e.preventDefault();
    const x = e.pageX - tabMenu.offsetLeft;
    const walk = (x - startX);
    tabMenu.scrollLeft = scrollLeft - walk;
  });

  // --- Tab switching logic ---
  const switchTab = (index) => {
    tabBtns.forEach((btn) => btn.classList.remove('active'));
    tabs.forEach((tab) => tab.classList.remove('active'));

    tabBtns[index].classList.add('active');
    tabs[index].classList.add('active');
  };

  tabBtns.forEach((btn, index) => {
    btn.addEventListener('click', () => switchTab(index));
  });