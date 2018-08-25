function loadData() {
  var xhttp = new XMLHttpRequest();
  console.log(xhttp);
  xhttp.onreadystatechange = function() {
    if (this.readyState === 4 && this.status === 200) {
      parsingXML(this);
    }
  };
  xhttp.open('GET', 'info.xml?t=' + Math.random(), true);
  xhttp.send();
}

function parsingXML(xml) {
  var i;
  var xmlDoc = xml.responseXML;
  var table = '<tr><th>Artist</th><th>Title</th></tr>';
  var x = xmlDoc.getElementsByTagName('CD');
  console.log(x);
  for (i = 0; i < x.length; i++) {
    table +=
      '<tr><td>' +
      x[i].getElementsByTagName('ARTIST')[0].childNodes[0].nodeValue +
      '</td><td>' +
      x[i].getElementsByTagName('TITLE')[0].childNodes[0].nodeValue +
      '</td></tr>';
  }
  document.getElementById('demo').innerHTML = table;
}
