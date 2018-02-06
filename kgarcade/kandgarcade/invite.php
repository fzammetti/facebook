<?

  $api_key = "xxx";
  $secret = "xxx";

  $app_name = "K&G Arcade";
  $app_url = "kandgarcade";
  $app_image = "http://www.omnytex.com/facebook/kandgarcade/applogo.gif";
  $invite_href = "kandgarcade//invite.php";

  require_once("client/facebook.php");

  $facebook = new Facebook($api_key, $secret);

  $facebook->require_frame();

  $user = $facebook->require_login();

  if (isset($_POST["ids"])) {
    echo "<center>Thank you for inviting ".sizeof($_POST["ids"]).
      " of your friends on <b><a href=\"http://apps.facebook.com/".
      $app_url."/\">".$app_name."</a></b>.<br><br>\n";
    echo "<h2><a href=\"http://apps.facebook.com/".$app_url.
      "/\">Click here to return to ".$app_name."</a>.</h2></center>";
  } else {
    // Retrieve array of friends who've already authorized the app.
    $fql = 'SELECT uid FROM user WHERE uid IN (SELECT uid2 FROM friend WHERE uid1='.$user.') AND is_app_user = 1';
    $_friends = $facebook->api_client->fql_query($fql);
    $friends = array();
    if (is_array($_friends) && count($_friends)) {
      foreach ($_friends as $friend) {
        $friends[] = $friend['uid'];
      }
    }
    $friends = implode(',', $friends);

    $content = "<fb:name uid=\"".$user."\" firstnameonly=\"true\" shownetwork=\"false\"/> has started using <a href=\"http://apps.facebook.com/".$app_url."/\">".$app_name."</a> and thought it's <u>so cool even you should try it out</u>!\n". "<fb:req-choice url=\"".$facebook->get_add_url()."\" label=\"Put ".$app_name." on your profile\"/>";
?>

    <fb:request-form action="/<? echo $invite_href; ?>" method="post" type="<? echo $app_name; ?>" content="<? echo htmlentities($content); ?>" image="<? echo $app_image; ?>">
      <fb:multi-friend-selector actiontext="Here are your friends who aren't playing <? echo $app_name; ?> yet.  Invite a few now!" exclude_ids="<? echo $friends; ?>" />
    </fb:request-form>

<?
  }
?>