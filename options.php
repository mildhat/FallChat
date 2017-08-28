<?php 
    session_start();
    if(!isset($_SESSION["session_username"])) {
    	header("Location: index.php");
    }
?>
<?php include("includes/header.php"); ?>
      <ul class="menu">
      <li><a href="chat.php">Chat</a></li>
      <li><a class="active" href="">Options</a></li>
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
   	   <p class="Smenu">
       </p>
      </div>
</body>
</html>
