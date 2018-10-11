function loadData() {
  var xhttp = new XMLHttpRequest();
  console.log(xhttp);
  xhttp.onreadystatechange = function() {
    if (this.readyState === 4 && this.status === 200) {
      parsingJSON(this);
    }
  };
  xhttp.open(
    'GET',
    'http://aptech-php-laravel-crud.herokuapp.com/api/v1/users',
    true
  );
  xhttp.send();
}

function parsingJSON(json) {
  var data = JSON.parse(json.response);
  var users = data.users;
  users.forEach(function(user, index) {
    var para = document.createElement('p');
    var node = document.createTextNode(user.name);
    para.appendChild(node);
    var element = document.getElementById('demo');
    element.appendChild(para);
  });
}
