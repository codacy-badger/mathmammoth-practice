<style>
  .nav-item.dropdown:hover .dropdown-menu {
    display: block;
  }
</style>
<nav class="navbar navbar-expand-md navbar-dark bg-primary mb-3">
  <a class="navbar-brand" href="https://www.mathmammoth.com"><img src="favicon.ico" alt="MM icon" style="width: 40px; height: 40px" class="rounded mr-2">Math Mammoth</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link<?php echo $page == 'home' ? ' active' : ''; ?>" href="index.php">Practice Center</a>
      </li>
      <li class="nav-item">
        <a class="nav-link<?php echo $page == 'multiplication' ? ' active' : ''; ?>" href="multiplication.php">Multiplication</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle<?php echo $page == 'division' || $page == 'division-remainders' ? ' active' : ''; ?>" href="javascript:void(0);">Division</a>
        <div class="dropdown-menu" style="margin-top: -1px">
          <a href="division.php" class="dropdown-item<?php echo $page == 'division' ? ' active' : ''; ?>">Normal</a>
          <a href="division-remainder.php" class="dropdown-item<?php echo $page == 'division-remainders' ? ' active' : ''; ?>">With Remainders</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link<?php echo $page == 'findfactors' ? ' active' : ''; ?>" href="factorfind.php">Find Factors</a>
      </li>
    </ul>
  </div>
</nav>
