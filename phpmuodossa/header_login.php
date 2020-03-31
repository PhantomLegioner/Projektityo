<!-- Tämä on osana headeria mutta tätä ei tarvita joka sivulla. Aloitus sivulla (index.php) löytyy mutta haku sivulla nyt ei varmaan kirjautumis juttuja tarvita. -->
<nav class="navbar navbar-expand-sm  navbar-dark" style="background-color:#C1727B">

  <form class="form-inline" action="/action_page.php">
    <input class="form-control mr-sm-2" type="text" placeholder="Search">
    <button class="btn btn-success" type="submit">Etsi</button>
  </form>
   <form class="form-inline" action="/action_page.php">
    <label for="email">Email:</label>
    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    <label for="pwd">Salasana:</label>
    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    <div class="form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember">Muista Minut
      </label>
    </div>
    <button type="submit" class="btn btn-success">OK</button>
  </form>
  <!-- "Rekisteröitymis"-painike -->
  <a href="signup.php">Rekiströidy<a/>
  <form action="logout.php" method="post">
    <button type="submit" name="logout-submit">Kirjaudu ulos</button> <!-- Kirjaudu ulos -->
  </form>
</nav>
