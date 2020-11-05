url = window.location.href;

kategori = url.substring(url.length-1);

var keyword = document.getElementById('keyword');
var minimal = document.getElementById('minimal');
var maksimal = document.getElementById('maksimal');

var container = document.getElementById('tempat-muncul');
hasil = url.localeCompare('http://localhost/utspemweb/index.php');

keyword.addEventListener('keyup', function() {
  var ajax = new XMLHttpRequest();

  ajax.onreadystatechange = function() {
    if (ajax.readyState == 4 && ajax.status == 200) {

      container.innerHTML = ajax.responseText;
    }
  }
  if (hasil == 0) {
    ajax.open('GET', 'ajax/sku_nama.php?keyword=' + keyword.value, true);
  }
  else{
    ajax.open('GET', 'ajax/sku_nama.php?keyword=' + keyword.value + '&kategori=' + kategori, true);
  }
  ajax.send();
});

minimal.addEventListener('keyup', function() {
  var ajax = new XMLHttpRequest();

  ajax.onreadystatechange = function() {
    if (ajax.readyState == 4 && ajax.status == 200) {

      container.innerHTML = ajax.responseText;
    }
  }
  if (hasil == 0) {
    ajax.open('GET', 'ajax/sku_nama.php?minimal=' + minimal.value, true);
  }
  else{
    ajax.open('GET', 'ajax/sku_nama.php?minimal=' + minimal.value + '&kategori=' + kategori, true);
  }
  ajax.send();
});

maksimal.addEventListener('keyup', function() {
  var ajax = new XMLHttpRequest();

  ajax.onreadystatechange = function() {
    if (ajax.readyState == 4 && ajax.status == 200) {

      container.innerHTML = ajax.responseText;
    }
  }
  if (hasil == 0) {
    ajax.open('GET', 'ajax/sku_nama.php?maksimal=' + maksimal.value, true);
  }
  else{
    ajax.open('GET', 'ajax/sku_nama.php?maksimal=' + maksimal.value + '&kategori=' + kategori, true);
  }
  ajax.send();
});
