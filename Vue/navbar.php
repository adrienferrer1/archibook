 <?php
include '../Modele/dependencies.php';



 ?>


  <nav class="blue darken-3">
    <div class="nav-wrapper" >
      <a href="accueil.php" class="brand-logo" style="margin-left: 2%;">ARCHIBOOK</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="accueil.php">Accueil</a></li>
        <li><a href="profile.php">Mon Profil</a></li>
        <li><a href="login_form.php">Déconnexion</a></li>
      </ul>
    </div>
  </nav>


  <script type="text/javascript">
      document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.sidenav').sidenav();
  });


  </script>