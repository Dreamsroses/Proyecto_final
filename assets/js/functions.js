$(document).ready(function() {

// Sección Contacto, forma
  var form = $('#form'),
      email = $('#email'),
      subject = $('#subject'),
      message = $('#message'),
      info = $('#info'),
      submit = $("#submit");
  
  form.on('input', '#email, #subject, #message', function() {
    $(this).css('border-color', '');
    info.html('').slideUp();
  });
  
  submit.on('click', function(e) {
    e.preventDefault();
    if(validate()) {
      $.ajax({
        type: "POST",
        url: "mailer.php",
        data: form.serialize(),
        dataType: "json"
      }).done(function(data) {
        if(data.success) {
          email.val('');
          subject.val('');
          message.val('');
          info.html('Message sent!').css('color', 'green').slideDown();
        } else {
          info.html('Could not send mail! Sorry!').css('color', 'red').slideDown();
        }
      });
    }
  });
  
  function validate() {
    var valid = true;
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    
    if(!regex.test(email.val())) {
      email.css('border-color', 'red');
      valid = false;
    }
    if($.trim(subject.val()) === "") {
      subject.css('border-color', 'red');
      valid = false;
    }
    if($.trim(message.val()) === "") {
      message.css('border-color', 'red');
      valid = false;
    }
    
    return valid;
  }

// Mouseover en Header "Diseñamos tu Negocio"

    $("h2").mouseover(function(){
        $("h2").css("background-color", "orange");
    });
    $("h2").mouseout(function(){
        $("h2").css("background-color", "lightgray");
    });
// Zoom in Imagen

// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}

});
