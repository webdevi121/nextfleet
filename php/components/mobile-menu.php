<?php
// Define the active menu from parent page (default is empty)
if (!isset($active)) {
    $active = '';
}
?>

<!-- Sticky Bottom Mobile Menu -->
<nav class="navbar fixed-bottom navbar-dark bg-black border-top d-md-none">
  <div class="container-fluid p-0">
    <div class="d-flex justify-content-around w-100">
      
      <!-- Home -->
      <a href="mydrive.html" class="menu-link px-3 <?php echo ($active === 'home') ? 'active' : ''; ?>">
        <i class="fa fa-home fs-5"></i>
        <small>Home</small>
      </a>

      <!-- Key Contacts -->
      <a href="key-contacts.html" class="menu-link px-3 <?php echo ($active === 'key-contacts') ? 'active' : ''; ?>">
        <i class="fa fa-address-book fs-5"></i>
        <small>Key Contacts</small>
      </a>

      <!-- Guide -->
      <a href="guide.html" class="menu-link px-3 <?php echo ($active === 'guide') ? 'active' : ''; ?>">
        <i class="fa fa-book fs-5"></i>
        <small>Guide</small>
      </a>

      <!-- Locator -->
      <a href="locator.html" class="menu-link px-3 <?php echo ($active === 'locator') ? 'active' : ''; ?>">
        <i class="fa fa-map-marker-alt fs-5"></i>
        <small>Locator</small>
      </a>

    </div>
  </div>
</nav>

<style>
.menu-link {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  color: white;
  text-decoration: none;
  padding-top: 8px;
  padding-bottom: 8px;
}
.menu-link.active {
  background-color: white;
  color: black;
  border-radius: 8px;
}
.menu-link i {
  margin-bottom: 2px;
}
</style>
