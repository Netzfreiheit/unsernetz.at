<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/header.php'); ?>

    <link rel='stylesheet' href='libs/jquery-jvectormap-1.1.css' type='text/css' media='screen' />
    <script type='text/javascript' src='libs/jquery-1.8.2.min.js' ></script>
    <script type='text/javascript' src='libs/jquery-jvectormap-1.1.min.js' ></script>
    <script type='text/javascript' src='libs/jquery-jvectormap-europe-mill-en.js ' ></script>


    <script type='text/javascript'>
      $(function () {
        var data = {"GB":1,"FR":1,"DK":2,"MT":2,"RO":2,"SE":2,"IE":2,"PL":2,"DE":2,"IT":3,"AT":3,"PT":3,"ES":1,"GR":5,"CY":5,"SK":5,"SI":5,"CZ":5,"HU":5,"BG":5,"NL":6,"BE":6,"LU":6,"FI":7,"EE":7,"LV":7,"LT":7}
          , colors = {
              '1': '#FF0000'
            , '2': 'yellow'
            , '3': 'yellow'
            , '4': 'yellow'
            , '5': 'orange'
            , '6': '#00CC00'
            , '7': 'olive'
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
          
          , onLabelShow: function(e, el, code) {
            el.html(el.html()+' (GDP - '+data[code]+')');
          }
        });
      });
    </script>

    <div id="spoiler" class="inset">
      <p style="font-weight:bold;">Der Grundgedanke des Internets ist die freie, unzensierte und gleichberechtigte Kommunikation.</p>
      <p>Netzneutralit&auml;t garantiert die Freiheit des Internets, Innovationskraft, Meinungsfreiheit und Chancengleichheit.</p>
    </div>

    <div class="inset">
    <h3>Gesetzte zur Netzneutralit&auml;t in Europa</h3>

 
    <div id='map' style='width:683px; height: 600px;'></div>

    <h4>Legende</h4>
    <ul>
      <li>rote L&auml;nder besitzen gesetzliche Regelungen gegen Netzneutralit&auml;t. Meist sind das Sperren von Internet-Anschl&uuml;ssen aufgrund von Urheberrechtsverletzungen.</li>
      <li>gr&uuml;ne L&auml;nder besitzen Gesetzte zum Schutz der Netzneutralit&auml;t. Das Belgische Gesetz gilt allerdings nur f&uuml;r den Wallonischen Teil des Landes.</li>
      <li>gelbe L&auml;ndern haben einen Diskurs &uuml;ber das Thema Netzneutralit&auml;t. Diese Diskussion hat in Teilen auch schon zu einem laufenden Gesetzgebungsprozess gef&uuml;hrt, der jedoch noch nicht abgeschlossen ist</li>
      <li>orangene L&auml;nder haben weder Gesetze noch einen Diskurs oder ein Gesetzgebungsprozess</li>
      <li>olivgr&uuml;ne L&auml;ndern sehen das Thema Netzneutralit&auml;t als Überregulierung und sehen von einer gestzlichen Regelung ab. In diesen L&auml;ndern gibt es allerdings auch einen sehr guten Netzausbau und lebendigen Wettbewerb zwischen vielen Internet Service Providern.</li>
    </ul>

    <p>Quelle: Tassilo Pellegrini und Jan Krone. 2012. <a href="http://www.fhstp.ac.at/forschung/institute_bereiche/institutfuermedienwirtschaft/aktuelles/news/12/aktuelle-neuerscheinung-netzneutralitaet-und-netzbewirtschaftung">Netzneutralit&auml;t und Netzbewirtschaftung: Multimedia in Telekommunikationsnetzwerken</a>. Nomos Verlagsges.Mbh + Co."Netzneutralit&auml;t und Netzbewirtschaftung"</a>. 2012. von Prof. (FH) Mag. Dr. Tassilo Pellegrini u. Prof. (FH) Dr. Jan Krone. Aktualisierung aus dem <a href="https://unsernetz.at/files/Steckbrief_Netzneutralitaet_Pellegrini.pdf">Steckbrief: Netzneutralit&auml;t</a></p>
</html>
