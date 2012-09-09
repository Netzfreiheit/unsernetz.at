<?php include('modules/header.php'); ?>

<?php include('modules/nav.php'); ?>

					<div id="nhome">
							<div class="argumentbox" id="argumentbox1">
								<h3>Innovation &amp Bildung</h3>
								<p>Ein freies Internet ist ein riesiger Standortvorteil und Innovations&shy;faktor.</p>
							</div>
							<div class="argumentbox" id="argumentbox2">
								<h3>Meinungsfreiheit</h3>
								<p>Unzensiertes und unreguliertes Internet garantiert Meinungs&shy;freiheit und gehört heute zu einer modernen Demokratie.</p>
							</div>
							<div class="argumentbox" id="argumentbox3">
								<h3>Chancengleichheit</h3>
								<p>Freies Internet garantiert Chancen&shy;gleichheit und Teilhabe in einer Gesellschaft. </p>
							</div>
					</div>
					<div class="welcome">
						<h2 class="cat" style="margin-top:-1em;">Alle Daten sind gleich zu behandeln</h2>
						<p>Der Grundgedanke des Internets ist die freie, unzensierte und gleichberechtigte Kommunikation.</p>
						<p style="font-weight:bold;">Netzneutralität garantiert die Freiheit des Internets, Innovationskraft, Meinungs&shy;freiheit und Chancengleichheit.</p>
					</div>
					
					<div class="weiterbutton">
					<a href="/netzneutralitaet">Weiter »</a>
					</div>
					
					<div class="machmit">
						<p>Trage dich jetzt bei der Netzneutralitäts&shy;mailingliste ein!</p>
		
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

<?php include('modules/footer.php'); ?>
