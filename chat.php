<?php 
    session_start();
    if(!isset($_SESSION["session_username"])) {
      header("Location: index.php");
    }
?>
<?php include("includes/header.php"); ?>
    <ul class="menu">
      <li><a class="active" href="">Chat</a></li>
      <li><a href="options.php">Options</a></li>
      <li id="hi"><a>Welcome, <span><?php echo $_SESSION['session_username'];?>! </span></a>
        <ul class="submenu">
          <li><a href="#">choto</a></li>
          <li><a href="#">choto</a></li>
          <li><a href="logout.php">Out</a></li>
        </ul>
      </li>
    </ul>
    <div class="col-xs-3"></div>
      <div class="col-xs-6">
      <div class="inp">
        <p class="Smenuc">
          
        </p>
        <input id="textM" type="text" size="63" />
        <input id="enterM" name="submitmsg" type="submit" value="Send" />
      </div>
      </div>
  </body>
</html>
