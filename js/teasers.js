var teasers = [
  [
    '&Ouml;sterreich muss Netzneutral bleiben! <a href="http://unsernetz.at">unsernetz.at</a> <a href="https://twitter.com/search?q=%23Netzneutralität">#netzneutralit&auml;t</a>'
    , 'Österreich muss Netzneutral bleiben! http://unsernetz.at #netzneutralität'
  ],
  [
    'Gleiches Internet f&uuml;r Alle! <a href="https://twitter.com/search?q=%23Netzneutralität">#netzneutralit&auml;t</a> <a href="http://unsernetz.at">unsernetz.at</a>'
    , 'Gleiches Internet für Alle! #netzneutralität http://unsernetz.at'
  ],
  [
    'F&uuml;r eine gesetzliche Absicherung der <a href="https://twitter.com/search?q=%23Netzneutralität">#netzneutralit&auml;t</a>! <a href="http://unsernetz.at">unsernetz.at</a>'
    , 'Für eine gesetzliche Absicherung der #Netzneutralität!  http://unsernetz.at'
  ]
];

$(function () {
  var t = teasers[Math.round((new Date()).valueOf()%teasers.length)];
  $('#teaserbox').html(t[0]);
  $('#teasertweet').attr('href', 'https://twitter.com/intent/tweet?source=webclient&text=' + encodeURIComponent(t[1]) + '');
});