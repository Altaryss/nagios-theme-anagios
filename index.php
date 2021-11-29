<?php
// Allow specifying main window URL for permalinks, etc.
$url = 'main.php';

if ("no" == "yes" && isset($_GET['corewindow'])) {

	// The default window url may have been overridden with a permalink...
	// Parse the URL and remove permalink option from base.
	$a = parse_url($_GET['corewindow']);

	// Build the base url.
	$url = htmlentities($a['path']).'?';
	$url = (isset($a['host'])) ? $a['scheme'].'://'.$a['host'].$url : '/'.$url;

	$query = isset($a['query']) ? $a['query'] : '';
	$pairs = explode('&', $query);
	foreach ($pairs as $pair) {
		$v = explode('=', $pair);
		if (is_array($v)) {
			$key = urlencode($v[0]);
			$val = urlencode(isset($v[1]) ? $v[1] : '');
			$url .= "&$key=$val";
		}
	}
	if (preg_match("/^http:\/\/|^https:\/\/|^\//", $url) != 1)
		$url = "main.php";
}

$this_year = '2020';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">

<html>
<head>
	<meta name="ROBOTS" content="NOINDEX, NOFOLLOW">
	<title>Nagios: <?php echo $_SERVER['SERVER_NAME']; ?></title>
	<link rel="shortcut icon" href="images/favicon.ico" type="image/ico">

	<script LANGUAGE="javascript">
		var n = Math.round(Math.random() * 10000000000);
		document.cookie = "NagFormId=" + n.toString(16);
	</script>
	<style>
		body{margin:0;padding:0}.container{display:flex;flex-direction:row;width:100vw;height:100vh}.col{display:flex;height:100%;min-height:-webkit-fill-available;min-height:-moz-available}.col.sidebar{float:left;width:100%;max-width:275px}.col.page{width:100%;max-width:-webkit-fill-available;max-width:-moz-available}.col.page iframe{width:-webkit-fill-available;width:-moz-available}iframe{border:none;min-height:100%;height:-webkit-fill-available;height:-moz-available}
	</style>
</head>
<body>
	<div class="container">
		<div class="col sidebar">
			<iframe src="side.php" name="side"></iframe>
		</div>
		<div class="col page">
			<iframe src="<?php echo $url; ?>" name="main"></iframe>
		</div>
	</div>
</body>
</html>