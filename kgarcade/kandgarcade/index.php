<?

  $api_key = "xxx";
  $secret = "xxx";

  require_once("client/facebook.php");

  $facebook = new Facebook($api_key, $secret);

  $facebook->require_frame();

  $user = $facebook->require_login();

?>

<fb:dashboard>
  <fb:action
    href="http://apps.facebook.com/kandgarcade//invite.php">
    Invite your friends
  </fb:action>
</fb:dashboard>
<br>
<fb:iframe width="100%" height="400" frameborder="0"
  src="http://www.omnytex.com/facebook/kandgarcade/main.php" />
