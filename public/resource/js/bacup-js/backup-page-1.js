$(document).ready(function() {
    $('small').hide();
    $('form').submit(function() {

      var input = $('#email-telephone').val();

      var isvalid = true;
      // Validasi Email
      if (input.includes('@')) {
        var emailParts = input.split('@');
        if (emailParts.length !== 2 || emailParts[1] !== 'gmail.com' || /[|+=_\-)(\\/"'><~`#$%^&*! ]/.test(emailParts[0])) {
          isvalid = false;
          $('small').text('Format email tidak valid').css('color','red').show();
        }else{
            errorMessage.hide();
        }
      }
      // Validasi Nomor Telepon
      else {
        if (!/^\d{11,15}$/.test(input)) {
          isvalid = false;
          $('small').text('Format nomor telepon tidak valid').css('color','red').show();


        }else{
            $('small').hide();
        }
      }

      // Jika validasi berhasil, submit form
      if(isvalid){
        window.location.href = '/dashboard';
      }
    });
  });
