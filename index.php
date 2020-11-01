<!DOCTYPE HTML>
<html>

<head>
  <title>YourTilde - Home</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine&amp;v1" />
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <img src="images/yourtildelogo.png" alt="YourTilde" width="140" height="140">
        <div class="slogan"></div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="current" in the li tag for the selected page - to highlight which page you're on -->
          <li class="current"><a href="index.php">Home</a></li>
          <li><a href="faq.php">Faq</a></li>
          <li><a href="othertildes.php">Other Tildes</a></li>
          <li><a href="signup/">Sign Up</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div id="sidebar_container">
        <img class="paperclip" src="style/paperclip.png" alt="paperclip" />
        <div class="sidebar">
        <!-- insert your sidebar items here -->
        <h3>Latest News</h3>
        <h4>Ok back in action!</h4>
        <h5>1st November 2020</h5>
        <p>YourTilde is back and lots of great things planned.   Your accounts are as they were.  Everything should be functioning as expected.   Let us know if there is any issues in the #YourTilde  channel on IRC.</p>
        </div>
        <img class="paperclip" src="style/paperclip.png" alt="paperclip" />
        <div class="sidebar">
          <h3>Mailing List</h3>
          <p>If you would like to join our mailing list, please enter your email address and click 'Subscribe'.</p>
          <form method="post" action="https://lists.tildeverse.org/postorius/lists/yourtilde.lists.tildeverse.org/anonymous_subscribe" id="subscribe">

	<input type="hidden" name="csrfmiddlewaretoken" value="1XZDawRwy0l7ueB45pzNiXIUYAa7HLKofdmU1aysaJPMaMpwjajgDRBHC3XF0Ujl">

            <p style="padding: 0 0 9px 0;"><input class="form_control" required id="id_email" type="text" name="email_address" value="your email address" onclick="javascript: document.forms['subscribe'].email_address.value=''" /></p>
		<p><input type="text" name="display_name" class="form-control" value="Your name (optional)" id="id_display_name"></p>
            <p><input class="subscribe" name="subscribe" type="submit" value="Subscribe" /></p>
          </form>
        </div>
      </div>
      <div id="content">
        <!-- insert the page content here -->
        <h1>Welcome to YourTilde.com!</h1>
        <p>YourTilde.com offers services that are basically a social network inside SSH. There is chat, email, forums, games, and lots more. <b>Come try us out!   Sign up <a href="signup/">here</a></p>

<h2>Current Users</h2>
<p>
<ul class="user-list">

<?php foreach (glob("/home/*") as $user) {
	$user = basename($user); ?>
	<li><a href="/~<?=$user?>/" target="_blank">~<?=$user?></a></li>
<?php } ?>

</ul>
</p>
      </div>
    </div>
    <div id="footer">
      <a href="https://tilde.zone/@yourtilde">Mastodon</a> | <a href="https://tildegit.org/yourtilde/site">Source</a>
        <br><a href="http://www.html5webtemplates.co.uk">design from HTML5webtemplates.co.uk</a></p>
    </div>
  </div>
</body>
</html>
