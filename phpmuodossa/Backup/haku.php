<?php
	require "header.php";
?>
<main>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-6" style="background-color:#C1727B;">
  <form action="/action_page.php">
    <select name="cars" class="custom-select mb-3">
      <option selected>Ravitsemuspalvelut</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
    </select>
  </form>
</div>
    <div class="col-sm-6" style="background-color:#C1727B;"> <form action="/action_page.php">
    <select name="cars" class="custom-select mb-3">
      <option selected>Terapeutit</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
    </select>
  </form>
  </div>
</div>
  </div>
  
<div class="jumbotron text-center" style="margin-bottom:0">
</div>
</main>
<?php
	require "footer.php";
?>
