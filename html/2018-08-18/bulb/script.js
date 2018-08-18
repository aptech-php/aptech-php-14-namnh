function batTat() {
  var img = document.getElementById('js-img');
  console.log(img.src.includes('pic_bulboff.gif'));

  if (img.src.includes('pic_bulboff.gif')) {
    console.log('first if');
    img.src = 'pic_bulbon.gif';
  } else if (img.src === 'http://127.0.0.1:5500/pic_bulbon.gif') {
    console.log('second if');
    img.src = 'pic_bulboff.gif';
  }
}
