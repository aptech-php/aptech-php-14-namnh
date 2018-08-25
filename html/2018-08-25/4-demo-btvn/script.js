function loadData() {
  var request = new XMLHttpRequest();

  request.onreadystatechange = function() {
    if (request.readyState === 4 && request.status === 200) {
      // console.log(typeof request.response);
      var data = JSON.parse(request.response);
      renderData(data);
    }
  };
  request.open('GET', 'data.json', true);
  request.send();
}

function renderData(data) {
  var users = data.users;

  users.forEach(function(user, index) {
    var para = document.createElement('p');
    var node = document.createTextNode(user.name);
    para.appendChild(node);

    var element = document.getElementById('div1');
    element.appendChild(para);
  });
}
