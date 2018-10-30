<html>
  <?php
  echo '<link rel="stylesheet" type="text/css" href='  . root . dt . css .  'menu.css>';
  ?>

<div class=panel-menu>
<nav class="dropdownmenu">
  <ul>
    <li><a href="/">Home</a></li>
    <li><a href="/historia">Historia</a></li>
    
    <li><a href="/jugadores">Jugadores</a></li>
    <li><a href="/partidos">Partidos</a></li>
    <?php
    if ($_SESSION["logged"]==true){
     $avatar= $_SESSION["avatar"].'"';
    
     
     
          echo "<li><a><img class='panel-menu--tamanyo-imagen' src="  . root . dt . imagenes . trim($avatar)."</img></a></li>";
          echo "<li><a href='/preferencias'>Preferencias</a></li>";
          echo "<li><a href='/desconectar'>Deconectar</a></li>";

    }else{
        echo "<li><a href='/login'>Login</a></li>";
        echo "<li><a href='/registro'>Registrarse</a></li>";
  }

    
      ?>
       <li><div></div></li>
  </ul>
</nav>
</div>
 <html>