var teasers = [ 
  'Gleiches Internet für Alle! #Netzneutralität http://unsernetz.at'
  , 'Österreich muss Netzneutral bleiben! http://unsernetz.at #Netzneutralität'
  , 'Für eine gesetzliche Absicherung der #Netzneutralität!  http://unsernetz.at'
  , 'Was Sie schon immer über #Netzneutralität wissen wollten, aber bisher nicht zu fragen wagten http://unsernetz.at'
  , 'Warum ist ein neutrales Netz jetzt und für die Zukunft so wichtig? http://unsernetz.at erklärts in unter 60 Sekunden'
  , 'Du willst Dir schnell eine fundierte Meinung zu #Netzneutralität bilden? http://unsernetz.at'
  , 'Ob es notwendig ist #Netzneutralität per Gesetz sicherzustellen oder nicht sagt euch das Licht: http://unsernetz.at'
];

$(function () {
  var r = Math.round((new Date()).valueOf()%teasers.length)
      , t = teasers[r]
      , h = (t || '').replace(/#netzneutralität/i,'<a href="https://twitter.com/search?q=%23Netzneutralität">#Netzneutralit&auml;t</a>').replace(/http:\/\/unsernetz.at/i, '<a href="http://unsernetz.at">unsernetz.at</a>')
  ;
  console.log('teasertext', r, t, h);
  $('#teaserbox').html(h);
  $('#teasertweet').attr('href', 'https://twitter.com/intent/tweet?source=webclient&text=' + encodeURIComponent(t) + '');
});