<?php
/*
 * Created on 25.02.2017
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>
<!DOCTYPE html>
<html lang="de">
<head>
<style type="text/css">
aside {
	float: left;
	width: 20%;
	border-style: dotted;
}

article {
	/*float: left;*/
	width: 80%;
	border-style: dotted;
}

body {
	border-style: dotted;
}

header {
	border-style: dotted;
}

footer {
	border-style: dotted;
}
}
</style>
</head>
<body>
	<header> Header NAVIGATION o.ä. </header>
	<section>
		<aside>
			<?php
          include("sidebar.php");
        ?>
		</aside>
		<article>
			<div id="chk_form">
				<form method="post" id="formular"
					action="<?php $_SERVER['PHP_SELF'] ?>">
					<fieldset>
						<input type="radio" class="radio" name="radio_mw" value="weiblich">weiblich</input>
						<input type="radio" class="radio" name="radio_mw" value="männlich" />männlich</input>
						<label>Vorname:</label> <br> <input type="text" id="txt_box"></input>
						<br> <label>Nachname:</label> <br> <input type="text"
							id="txt_box"></input> <br>
					</fieldset>
				</form>
			</div>
		</article>
	</section>
	<footer> FOOTER </footer>
</body>
</html>
