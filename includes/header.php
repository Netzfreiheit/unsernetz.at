<?php
	function getTitle () {
		try {
			if (strpos($_SERVER["REQUEST_URI"], 'netzneutralitaet')) {
				return "Definition | Unser Netz";
			} else if (strpos($_SERVER["REQUEST_URI"], 'argumente')) {
				return "Argumente | Unser Netz";
			} else if (strpos($_SERVER["REQUEST_URI"], 'dokumente')) {
				return "Dokumente | Unser Netz";
			} else if (strpos($_SERVER["REQUEST_URI"], 'eu-lex-map')) {
				return "Gesetze zur Netzneutralität in Europa | Unser Netz";
			} else if (strpos($_SERVER["REQUEST_URI"], 'berec-eu-violations')) {
				return "Statistik zur Verletzung von Netzneutralität | Unser Netz";
			} else if (strpos($_SERVER["REQUEST_URI"], 'links')) {
				return "Ressourcen | Unser Netz";
			} else if (strpos($_SERVER["REQUEST_URI"], 'kontakt')) {
				return "Kontakt | Unser Netz";
			} else {
				return "Unser Netz - Netzneutralit&auml;t";	
			}
		} catch (Exception $e) {
			return "Unser Netz - Netzneutralit&auml;t";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" charset="utf-8">
	<meta charset="UTF-8">
	<title><?php echo getTitle() ?></title>
	<meta name="description" content="Für die gesetzliche Verankerung der Netzneutralität in Österreich">
  <meta name="author" content="Initiative für Netzfreiheit">
  <meta name="keywords" content="Netzneutralität, unsernetz, echtesnetz, drosselkom, Hannes Ametsreiter, Neelie Kroes, Gleichberechtigung, Teilhabe, Transparenz, ISP, RTR, ISPA, IFNF, Netzfreiheit, Neutralität, Österreich, Internetneutralität, Plattformneutralität, Neutralitätsdebatte">
  <meta name="date" content="20013-07-30T03:05:07+02:00">
  <link rel="icon" type="image/png" href="/favicon.ico" />
	<link rel="stylesheet" href="/css/style.css" type="text/css" media="screen" />
	<script type="text/javascript" src="/js/jquery-1.8.2.min.js"></script>
	<script type="text/javascript" src="/js/teasers.js"></script>

		<!-- Piwik --> 
	 <script type="text/javascript">
	 var pkBaseURL = "https://piwik.netzfreiheit.org/";
	 document.write(unescape("%3Cscript src='" + pkBaseURL + "piwik.js' type='text/javascript'%3E%3C/script%3E"));
	 </script><script type="text/javascript">
	 try {
	 var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", 4);
	 piwikTracker.trackPageView();
	 piwikTracker.enableLinkTracking();
	 } catch( err ) {}
	 </script><noscript><p><img src="https://piwik.netzfreiheit.org/piwik.php?idsite=4" style="border:0" alt="" /></p></noscript>
	 <!-- End Piwik Tracking Code -->	

</head>

<body>
<div id="bg_top"></div>
<div id="wrapper">

	<div id="header-wrapper">
		<div id="header" class="inset">
			<div class="left">
				<div id="logo"><a href="/"><img src="/images/unsernetz-logo.png" alt="Unser Netz!" /></a></div>
			</div>
			<div class="right">
				<div id="slogan"><h2>F&uuml;r die gesetzliche Verankerung der Netzneutralit&auml;t in &Ouml;sterreich</h2></div>
				<div id="topnav">
					<ul>
						<li><a href="/">Home</a></li>
						<li><a href="/netzneutralitaet/">Definition</a></li>
						<li><a href="/argumente">Argumente</a></li>
						<li><a href="/dokumente">Dokumente</a></li>
						<li><a href="/links">Ressourcen</a></li>
						<li><a href="/kontakt">Kontakt</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="clear"></div>
	</div>

	<div id="content-wrapper">
