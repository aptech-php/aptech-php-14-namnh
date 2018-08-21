function anHien() {
  var div = document.getElementById('js-div');
  // div.className.includes('d-none')
  console.log(div.classList);
  if (div.classList.contains('d-none')) {
    div.classList.remove('d-none');
    div.classList.add('d-block');
  } else {
    div.classList.remove('d-block');
    div.classList.add('d-none');
  }
}
