
$(document).ready(function(){
  $('#progress-1').on('mouseover', function() {
    $(this).html('60%');
  });
  $('#progress-1').on('mouseout', function() {
    $(this).html('Pemrograman');
  });
  $('#progress-2').on('mouseover', function() {
    $(this).html('70%');
  });
  $('#progress-2').on('mouseout', function() {
    $(this).html('Bahasa Inggris');
  });
  $('#progress-3').on('mouseover', function() {
    $(this).html('90%');
  });
  $('#progress-3').on('mouseout', function() {
    $(this).html('Office');
  });
  $('#progress-4').on('mouseover', function() {
    $(this).html('80%');
  });
  $('#progress-4').on('mouseout', function() {
    $(this).html('Fotografi');
  });
  view();
});

$('form.tambah-pendidikan').on('submit', function() {
  // console.log('test');
  var form = $(this),
    url = form.attr('action'),
    method = form.attr('method'),
    data = {};

  form.find('[name]').each(function(index, value) {
    var that = $(this),
      name = that.attr('name'),
      value = that.val();

    data[name] = value;
    // console.log(value);
  });

  $.ajax({
    url: url,
    type: method,
    data: data,
    success: function(response) {
      $('#peringatan').html(response);
      view();
      // console.log(response);
    }
  });
  return false;
});

function view() {
  $.ajax({
    type: "POST",
    url: "tampil-edu.php",
    success: function(data){
      $("#data-edu").html(data);
    }
  });
}

function hapus(id){
  $.ajax({
    type: "POST",
    url: "hapus.php",
    data: "id=" + id,
    success: function(data){
      view();
    }
  })
}
