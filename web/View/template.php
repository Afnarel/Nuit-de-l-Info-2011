<!DOCTYPE html>
<html>
<head>
	<title><?php echo htmlspecialchars(CNavigation::getTitle()); ?> - WebDiskettes</title>
<?php foreach (CHead::$css as $css)
{
	echo "\t<link href=\"$ROOT_PATH/Css/$css.css\" media=\"screen\" rel=\"Stylesheet\" type=\"text/css\" />\n";
}
foreach (CHead::$js as $js)
{
	echo "\t<script type=\"text/javascript\" src=\"$ROOT_PATH/Js/$js.js\"></script>\n";
}
?>
</head>
<body>
<?php

if (!defined('NO_HEADER_BAR')) {

	/*$url_redaction = CNavigation::generateUrlToApp('Redaction',null,null);
	$url_logout = CNavigation::generateUrlToApp('Session','logout',null);*/

	$title = htmlspecialchars(CNavigation::getBodyTitle());

	$url_root = CNavigation::generateUrlToApp(null);
	$url_urls = CNavigation::generateUrlToApp('Archive', 'urls');
	$url_show = CNavigation::generateUrlToApp('Dashboard', 'show');
	$url_user = CNavigation::generateUrlToApp('User');
	echo <<<END
<div class="topbar">
	<div class="topbar-inner">
		<nav class="container">
			<h3><a href="$url_root">Super application de la mort qui tue</a></h3>
			<ul class="nav">
				<li class="active"><a href="$url_root">Home</a></li>
				<li><a href="$url_show">Ajouter un cadeau <em>(de merde)</em></a></li>
				<li><a href="$url_urls">List</a></li>
				<li><a href="#">Link</a></li>
			</ul>
			<!--<form action="#">
				<input type="text" placeholder="Search">
			</form>-->
			<ul class="nav secondary-nav">
				<li><a href="$url_user">Lorie</a></li>
			</ul>
		</nav>
	</div>
</div>
END;
}

if (DEBUG) {
	showGroaw();
}
?>
<div class="container">
<?php
echo $PAGE_CONTENT;
?>
</div>
</body>
</html>
