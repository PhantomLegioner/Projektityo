<!-- Tämä on osana headeria mutta tätä ei tarvita joka sivulla. Aloitus sivulla (index.php) löytyy mutta haku sivulla nyt ei varmaan kirjautumis juttuja tarvita. -->
<nav class="navbar navbar-expand-sm  navbar-dark" style="background-color:#C1727B">

  <?php
     if(isset($_SESSION['email'])){
       echo '<p>Olet kirjautunut sisään!</p><form action="includes/logout.inc.php" method="post">
        <button type="submit" name="logout-submit">Kirjaudu ulos</button> <a href="profiili.php">Profiili</a> <!-- Kirjaudu ulos -->
      </form>'.$_SESSION['email'];
   }else{
     echo '<label>Et ole kirjautunut sisään.</label> <!-- SIGN IN formi. -->
     <form class="form-inline" action="signin.php" method="post">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      <label for="pwd">Salasana:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
      <button type="submit" class="btn btn-success" name="signin_submit">KIRJAUDU SISÄÄN</button>
    </form>';
   }
  ?>
  </form>
</nav>
