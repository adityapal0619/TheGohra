<script>
  function toggleSubMenu() {
    const subMenu = document.getElementById("subMenu");
    subMenu.classList.toggle("hidden");
  }

  function toggleMobileMenu() {
    const mobileMenu = document.getElementById("mobileMenu");
    mobileMenu.classList.toggle("hidden");
  }

  // Optional: Hide on outside click
  document.addEventListener('click', function(e) {
    const isSubMenu = e.target.closest('#subMenu');
    const isButton = e.target.closest('button');
    if (!isSubMenu && !isButton) {
      document.getElementById("subMenu").classList.add('hidden');
    }
  });
</script>