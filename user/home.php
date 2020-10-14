<?php SESSION_start();
if(!isset($_SESSION['user']))
    header("Location: http://localhost:80/Project");
else
{
    if (!isset($_SESSION['canary'])) {
    session_regenerate_id(true);
    $_SESSION['canary'] = time();
}
// Regenerate session ID every five minutes:
if ($_SESSION['canary'] < time() - 300) {
    session_regenerate_id(true);
    $_SESSION['canary'] = time();
}
    require ('php_classes/user.php');
    $user =  unserialize($_SESSION['user']);
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>CyperPunks</title>
        <link rel="stylesheet" href="../css/home.css">
        <link rel="stylesheet" href="../css/fixit.css">
        
        <style>
        p {
        padding: 25px;
        </style>
    </head>

    <body>
        <div class="parallelogram" id="one"></div>
<div class="parallelogram" id="two"></div>
<div class="parallelogram" id="three"></div>
<div class="parallelogram" id="four"></div>
<div class="parallelogram" id="five"></div>
<div class="parallelogram" id="six"></div>

         <div id="head">
            <div id="header-inner">	
                <div id="logo">
                    <p>CyberPunks</p>
                </div>
                <div id="top-nav">
                    <ul>
                        <li><a href="home.php">Home</a></li>
                        <li><a href="inbox.php">Messages</a></li>
                        <li><a href="profile.php">Profile</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </div>
                <div class="clr"></div>
            </div>
        </div>

        <div id="container">
            <div style="float:left;width:294px; height: 291px" class="movit">
                
<svg viewBox="0 0 600 300">
  <!-- Symbol-->
  <symbol id="s-text">
    <text text-anchor="middle" x="50%" y="20%" dy=".35em">Cyper</text>
    <text text-anchor="middle" x="50%" y="70%" dy=".35em">punks</text>
  </symbol>
  <!-- Duplicate symbols-->
  <use class="text" xlink:href="#s-text"></use>
  <use class="text" xlink:href="#s-text"></use>
  <use class="text" xlink:href="#s-text"></use>
  <use class="text" xlink:href="#s-text"></use>
  <use class="text" xlink:href="#s-text"></use>
</svg>
            </div>
            <p> &nbsp;&nbsp;&nbsp; Welcome&nbsp;:&nbsp;&nbsp; <?php echo $user->__get('Name'); ?>
            <br><br>&nbsp;&nbsp;&nbsp; Our site provide a secured and encrypted messaging system.<br><br>&nbsp;&nbsp;&nbsp; Have Fun ^_^ :).</p>
            <div class="clr"></div>
        </div>
        <script  src="index.js"></script>
<div style="position:fixed;bottom:15px;left:25px"><a href="terms.html" style="text-decoration:none;color:black">CyperPunks Terms & Policies ©</a> </div>
    </body>

</html>