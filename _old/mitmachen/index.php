<?php include('../modules/header.php'); ?>
<?php include('../modules/nav.php'); ?>

<h2 class="cat">Setze dich für Netzneutralität in Österreich ein!</h2>

<div class="mitmachen">
						<p>Trage dich jetzt bei der Netzneutralität-Mailingliste ein!</p>
		
						<script type="text/javascript">
						<!-- input-text-delete  -->

						function clickclear(thisfield, defaulttext) {
							if (thisfield.value == defaulttext) {
									thisfield.value = "";
							}
						}
						function clickrecall(thisfield, defaulttext) {
							if (thisfield.value == "") {
								thisfield.value = defaulttext;
							}
						}

						</script>
						<form action="https://lists.netzaktivismus.at/subscribe/netneutrality/" method="post"><input name="email" value="Deine E-Mail Adresse" type="text" onclick="clickclear(this, 'Deine E-Mail Adresse')" onblur="clickrecall(this,'Deine E-Mail Adresse')"> <input name="email-button" value="Abonnieren" type="Submit"></form>
</div>
			
<?php include('../modules/footer.php'); ?>
