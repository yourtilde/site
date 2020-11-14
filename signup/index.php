<!DOCTYPE HTML>
<html>

<head>
  <title>YourTilde - Sign up!</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine&amp;v1" />
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" />
  <link rel="stylesheet" type="text/css" href="../style/style.css" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <img src="../images/yourtildelogo.png" alt="YourTilde" width="140" height="140">
        <div class="slogan"></div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="current" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="../index.php">Home</a></li>
          <li><a href="../faq.php">Faq</a></li>
          <li><a href="../othertildes.php">Other Tildes</a></li>
          <li class="current"><a href="../signup/">Sign Up</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div id="content_wide">
        <!-- insert the page content here -->
        <h1>Sign up</h1>
	<div class="form_settings">
		<div class="form_settings">

			<div class="form_settings">

<p>we're excited you're here! let's get you signed up!</p>
<p>fill out this form and we'll get back to you with account info</p>

<table>
	<tr>
		<td>
			<form method="post">
			    <?php include 'signup-handler.php'; ?>

			    <div>
				    <p>your desired username (numbers and lowercase letters only, no spaces)</p>
				    <input class="form-control" name="username" value="<?=$_REQUEST["username"] ?? ""?>" type="text" required>
			    </div>

			    <div>
				<p>email to contact you with account info</p>
				<input class="form-control" name="email" value="<?=$_REQUEST["email"] ?? ""?>" type="text" required>
			    </div>

			    <div>
				<p>what interests you about YourTilde? we want to make sure you're a real human being :)</p>
				<textarea required class="form-control" name="interest" id="" cols="40" rows="7"><?=$_REQUEST["interest"] ?? ""?></textarea>
			    </div>

			    <div>
				<p>SSH public key</p>
				<textarea required class="form-control" name="sshkey" id="" cols="40" rows="10"><?=$_REQUEST["sshkey"] ?? ""?></textarea>
				<p>if you don't have a key, don't worry! <a href="https://wiki.yourtilde.com/doku.php?id=ssh_primer">check out our guide to ssh keys</a> and make sure that you only put your pubkey here</p>
			    </div>

			    <p>
				<em>signing up implies that you agree to abide by <a href="/code-of-conduct.php">our code of conduct</a></em>
				<br>
				no drama. be respectful. have fun. we're all trying, and we're all in this together :)
			    </p>

			    <button class="submit" type="submit">submit</button>

			</form>
		</td>
	</tr>
</table>

      </div>
    </div>
    <div id="footer">
      <a href="https://tilde.zone/@yourtilde">Mastodon</a> | <a href="https://tildegit.org/yourtilde/site">Source</a> | <a href="https://wiki.yourtilde.com">Wiki</a> | <a href="https://yourtilde.com:6699">ZNC</a> | <a href="https://paste.yourtilde.com">Paste</a> | <a href="https://webmail.yourtilde.com">Webmail</a>
        <br><a href="http://www.html5webtemplates.co.uk">design from HTML5webtemplates.co.uk</a></p>
    </div>
  </div>
</body>
</html>
