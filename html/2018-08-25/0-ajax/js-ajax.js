function loadData() {
  var xhttp = new XMLHttpRequest();
  console.log(xhttp);
  xhttp.onreadystatechange = function() {
    if (this.readyState === 4 && this.status === 200) {
      console.log(xhttp);
      var data = this.responseText;
      var heading = document.getElementById('js-heading');
      heading.innerHTML = data;
    }
  };
  xhttp.open('GET', 'info.txt', true);
  xhttp.send();
}
