<?php

/* include the PHP Facebook Client Library to help
  with the API calls and make life easy */
require_once("client/facebook.php");

/* initialize the facebook API with your application API Key
  and Secret */
$facebook = new Facebook("xxx",
  "xxx");

/* require the user to be logged into Facebook before
  using the application. If they are not logged in they
  will first be directed to a Facebook login page and then
  back to the application's page. require_login() returns
  the user's unique ID which we will store in fb_user */
$fb_user = $facebook->require_login();

?>

<html>

  <head>

    <title>K&G Arcade</title>

    <link rel="StyleSheet" href="css/styles.css" type="text/css" />

    <script src="js/jscript.dom.js"></script>
    <script src="js/jscript.math.js"></script>
    <script src="js/gameFuncs.js"></script>
    <script src="js/consoleFuncs.js"></script>
    <script src="js/keyHandlers.js"></script>
    <script src="js/globals.js"></script>
    <script src="js/GameState.js"></script>
    <script src="js/MiniGame.js"></script>
    <script src="js/Title.js"></script>
    <script src="js/GameSelection.js"></script>
    <script src="js/main.js"></script>
    <script src="cosmicSquirrel/CosmicSquirrel.js"></script>
    <script src="deathtrap/deathtrap.js"></script>
    <script src="refluxive/refluxive.js"></script>

  </head>

  <body onLoad="init();" class="cssPage">

    <!-- The div the title screen is contained in. -->
    <div id="divTitle" class="cssTitleGameSelection">
      <table border="0" cellpadding="0" cellspacing="0" width="98%"
        height="100%" align="center">
        <tr>
          <td align="center" valign="middle">
            <img src="img/title.gif" />
            <br /><br />
            The JavaScript Version, v1.0
            <br /><br />
            Ported from the original PocketPC version, presented by:
            <br /><br />
            <img src="img/logoOmnytex.gif" /><img src="img/logoCrackhead.gif" />
            <br /><br />
            Press Any Key To Play
          </td>
        </tr>
      </table>
    </div>

    <!-- The div the game selection screen is contained in. -->
    <div id="divGameSelection" class="cssTitleGameSelection">
      <table border="0" cellpadding="0" cellspacing="0" width="98%"
        height="100%" align="center">
        <tr>
          <td align="center" valign="middle">
            Press the LEFT and RIGHT arrow keys to cycle through the
            available games, then press SPACE to play the one you want.
            Once playing a game, press the ENTER key to return here.
            <br /><br /><br />
            <img src="img/ssCosmicSquirrel.gif" id="ssCosmicSquirrel"
              style="display:none;" />
            <img src="img/ssDeathtrap.gif" id="ssDeathtrap"
              style="display:none;" />
            <img src="img/ssRefluxive.gif" id="ssRefluxive"
              style="display:none;" />
            <br />
            <div id="mgsDesc"></div>
            <br /><br />
            To check out the full PocketPC version of K&G Arcade,
            visit the <a href="http://www.omnytex.com">Omnytex Technologies</a>
            web site.
          </td>
        </tr>
      </table>
    </div>

    <!-- The div the game is contained in. -->
    <div id="divMiniGame" class="cssMiniGame">

      <div id="divGameArea" class="cssGameArea">
      </div>

      <div id="divStatusArea" class="cssStatusArea">
        Score: 0
      </div>

      <!-- Game frame -->
      <img src="img/gameFrame.gif" id="imgGameFrame"
        class="cssConsoleImage" />

      <!-- Console left, middle and right -->
      <img src="img/consoleLeft.gif" id="imgConsoleLeft"
        class="cssConsoleImage" />
      <img src="img/consoleMiddle.gif" id="imgConsoleMiddle"
        class="cssConsoleImage" />
      <img src="img/consoleRight.gif" id="imgConsoleRight"
        class="cssConsoleImage" />

      <!-- Left hand images -->
      <img src="img/leftHandNormal.gif" id="imgLeftHandNormal"
        class="cssConsoleImage" />
      <img src="img/leftHandUp.gif" id="imgLeftHandUp"
        class="cssConsoleImage" />
      <img src="img/leftHandDown.gif" id="imgLeftHandDown"
        class="cssConsoleImage" />
      <img src="img/leftHandLeft.gif" id="imgLeftHandLeft"
        class="cssConsoleImage" />
      <img src="img/leftHandRight.gif" id="imgLeftHandRight"
        class="cssConsoleImage" />
      <img src="img/leftHandDL.gif" id="imgLeftHandDL"
        class="cssConsoleImage" />
      <img src="img/leftHandDR.gif" id="imgLeftHandDR"
        class="cssConsoleImage" />
      <img src="img/leftHandUL.gif" id="imgLeftHandUL"
        class="cssConsoleImage" />
      <img src="img/leftHandUR.gif" id="imgLeftHandUR"
        class="cssConsoleImage" />

      <!-- Right hand images -->
      <img src="img/rightHandUp.gif" id="imgRightHandUp"
        class="cssConsoleImage" />
      <img src="img/rightHandDown.gif" id="imgRightHandDown"
        class="cssConsoleImage" />

      <!-- Console light images -->
      <img src="img/gameFrameLeftLight1.gif" id="imgGameFrameLeftLight1"
        class="cssConsoleImage" />
      <img src="img/gameFrameLeftLight2.gif" id="imgGameFrameLeftLight2"
        class="cssConsoleImage" />
      <img src="img/gameFrameLeftLight3.gif" id="imgGameFrameLeftLight3"
        class="cssConsoleImage" />
      <img src="img/gameFrameLeftLight4.gif" id="imgGameFrameLeftLight4"
        class="cssConsoleImage" />
      <img src="img/gameFrameLeftLight5.gif" id="imgGameFrameLeftLight5"
        class="cssConsoleImage" />
      <img src="img/gameFrameRightLight1.gif" id="imgGameFrameRightLight1"
        class="cssConsoleImage" />
      <img src="img/gameFrameRightLight2.gif" id="imgGameFrameRightLight2"
        class="cssConsoleImage" />
      <img src="img/gameFrameRightLight3.gif" id="imgGameFrameRightLight3"
        class="cssConsoleImage" />
      <img src="img/gameFrameRightLight4.gif" id="imgGameFrameRightLight4"
        class="cssConsoleImage" />
      <img src="img/gameFrameRightLight5.gif" id="imgGameFrameRightLight5"
        class="cssConsoleImage" />

    </div>

  </body>

</html>
