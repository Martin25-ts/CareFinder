$(document).ready(function() {

    $('form').submit(function() {
      $('small').hide();

      var email = $('input[type="text"]').val();
      var password = $('input[type="password"]').val();
      var isvalid = true;
      // Validasi email
      if (email === '') {
        isvalid = false;
        $('error-message-email').text('Email tidak boleh kosong').css('color', 'red').css('padding-left', '34px').show();
      } else if (!isValidEmail(email)) {
        isvalid = false;
        $('error-message-email').text('Email tidak valid').css('color', 'red').css('padding-left', '34px').show();
      } else {
        $('error-message-email').hide();
        // Lakukan tindakan setelah email valid
      }

      // Validasi password
      if (password === '') {
        isvalid = false;
        $('error-message-password').text('Password tidak boleh kosong').css('color', 'red').css('padding-left', '34px').show();
      } else {
        $('error-message-password').hide();
        // Lakukan tindakan setelah password valid
      }
      if (isvalid) {
        window.location.href = '/login-confirm';
      }
    });

    function isValidEmail(email) {
      var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      return emailRegex.test(email) && email.endsWith('@gmail.com') && !email.startsWith('@');
    }


  });









