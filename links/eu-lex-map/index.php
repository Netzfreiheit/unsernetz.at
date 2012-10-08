<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/header.php'); ?>

    <link rel='stylesheet' href='libs/jquery-jvectormap-1.1.css' type='text/css' media='screen' />
    <script type='text/javascript' src='libs/jquery-1.8.2.min.js' ></script>
    <script type='text/javascript' src='libs/jquery-jvectormap-1.1.min.js' ></script>
    <script type='text/javascript' src='libs/jquery-jvectormap-europe-mill-en.js ' ></script>
    <script type='text/javascript' src='libs/iso_3166_country_names_de.js ' ></script>


    <script type='text/javascript'>
      $(function () {
        var data = {"GB":1,"FR":1,"DK":2,"MT":2,"RO":2,"SE":2,"IE":2,"PL":2,"DE":2,"IT":3,"AT":3,"PT":3,"ES":1,"GR":5,"CY":5,"SK":5,"SI":5,"CZ":5,"HU":5,"BG":5,"NL":6,"BE":6,"LU":6,"FI":7,"EE":7,"LV":7,"LT":7}
          , colors = {
              '1': '#ee0000'
            , '2': 'yellow'
            , '3': 'yellow'
            , '4': 'yellow'
            , '5': 'orange'
            , '6': '#00CC00'
            , '7': 'olive'
          }
          , messages = {
              '1': 'Cluster 1: Gesetze gegen Netzneutralit&auml;t'
            , '2': 'Cluster 2a: keine Gesetze, aber &ouml;ffentlicher Diskurs'
            , '3': 'Cluster 2b: keine Gesetze, aber &ouml;ffentlicher Diskurs'
            , '4': 'Cluster 2c: keine Gesetze, aber &ouml;ffentlicher Diskurs'
            , '5': 'Cluster 2d: Weder Gesetze noch Diskurs'
            , '6': 'Cluster 3: Gesetze f&uuml;r Netzneutralit&auml;t'
            , '7': 'Cluster 4: Verweigern Regelung. Guter Netzausbau und lebendiger Providermarkt'
          }
        ;

        $('#map').vectorMap(
        {
            map: 'europe_mill_en'
          , series: {
            regions: [{
                values: data
              
              , scale: colors
              , normalizeFunction: 'polynomial'
            }]
          }
          
          , onRegionLabelShow: function(e, el, code) {
            if (data[code]) {
              el.html(window['iso'].iso_3166_country_names_de[code] + ' ' + messages[data[code]]);
              $('.jvectormap-label').css('zIndex', 999);
            } else {
              $('.jvectormap-label').css('zIndex', -1);
            }
          }
        });

      });
    </script>

    <div id="spoiler" class="inset">
      <p style="font-weight:bold;">Der Grundgedanke des Internets ist die freie, unzensierte und gleichberechtigte Kommunikation.</p>
      <p>Netzneutralit&auml;t garantiert die Freiheit des Internets, Innovationskraft, Meinungsfreiheit und Chancengleichheit.</p>
    </div>

    <div class="inset">
    <h3>Gesetze zur Netzneutralit&auml;t in Europa</h3>

 
    <div id='map' style='width:683px; height: 600px;'></div>

    <h4>Legende</h4>
	<style type="text/css">
		.legende {list-style-type:none; margin:0; padding:0; width: 48%; margin-right: 2%; display: inline-block; vertical-align:top;}
		.legende li { margin-bottom: 0.6em;}
	</style>
    <ul class="legende">
      <li><span style="display:inline-block; width:12px; height:12px; background-color: #ee0000;"></span> rote L&auml;nder besitzen gesetzliche Regelungen gegen Netzneutralit&auml;t. Meist sind das Sperren von Internet-Anschl&uuml;ssen aufgrund von Urheberrechtsverletzungen.</li>
      <li><span style="display:inline-block; width:12px; height:12px; background-color: #00CC00;"></span> gr&uuml;ne L&auml;nder besitzen Gesetze zum Schutz der Netzneutralit&auml;t. Das Belgische Gesetz gilt allerdings nur f&uuml;r den Wallonischen Teil des Landes.</li>
      <li><span style="display:inline-block; width:12px; height:12px; background-color: yellow;"></span> gelbe L&auml;nder haben einen Diskurs &uuml;ber das Thema Netzneutralit&auml;t. Diese Diskussion hat in Teilen auch schon zu einem laufenden Gesetzgebungsprozess gef&uuml;hrt, der jedoch noch nicht abgeschlossen ist.</li>
    </ul><ul class="legende">
      <li><span style="display:inline-block; width:12px; height:12px; background-color: orange;"></span> orangene L&auml;nder haben weder Gesetze noch einen Diskurs oder ein Gesetzgebungsprozess.</li>
      <li><span style="display:inline-block; width:12px; height:12px; background-color: olive;"></span> olivgr&uuml;ne L&auml;nder sehen das Thema Netzneutralit&auml;t als Überregulierung und sehen von einer gestzlichen Regelung ab. In diesen L&auml;ndern gibt es allerdings auch einen sehr guten Netzausbau und lebendigen Wettbewerb zwischen vielen Internet Service Providern.</li>
    </ul>

    <p style="font-size:0.8em; opacity:0.8;">Quelle: Tassilo Pellegrini und Jan Krone. 2012. <a href="http://www.fhstp.ac.at/forschung/institute_bereiche/institutfuermedienwirtschaft/aktuelles/news/12/aktuelle-neuerscheinung-netzneutralitaet-und-netzbewirtschaftung">Netzneutralit&auml;t und Netzbewirtschaftung: Multimedia in Telekommunikationsnetzwerken</a>. <br />Nomos Verlagsges.Mbh + Co."Netzneutralit&auml;t und Netzbewirtschaftung"</a>. 2012. von Prof. (FH) Mag. Dr. Tassilo Pellegrini u. Prof. (FH) Dr. Jan Krone. Aktualisierung aus dem <a href="https://unsernetz.at/files/Steckbrief_Netzneutralitaet_Pellegrini.pdf">Steckbrief: Netzneutralit&auml;t</a> von Tassilo Pellegrini</p>
	</div>

<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/footer.php'); ?>
