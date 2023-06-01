
$(document).ready(function() {
  $('small').hide();
  // Menggunakan metode submit() untuk form
  $('form').submit(function(event) {
    event.preventDefault(); // Menghentikan pengiriman form

    // Mendapatkan nilai input
    var namadepan = $('#namadepan').val();
    var namabelakang = $('#namabelakang').val();
    var email = $('#email').val();
    var phoneNumber = $('#phone-number').val();
    var password = $('#password').val();
    var passwordConfirm = $('#password-confirm').val();

    // Mengatur status validasi
    var isValid = true;

    // Validasi Nama Depan
    if (namadepan === '') {
      isValid = false;
      $('#error-message-namadepan').text('Nama Depan harus diisi').css('color', 'red');
    } else {
      $('#error-message-namadepan').text('').css('color', 'red');
    }

    // Validasi Nama Belakang
    if (namabelakang === '') {
      isValid = false;
      $('#error-message-namabelekang').text('Nama Belakang harus diisi').css('color', 'red');
    } else {
      $('#error-message-namabelekang').text('');
    }

    // Validasi Email
    if (email === '') {
      isValid = false;
      $('#error-message-email').text('Email harus diisi').css('color', 'red');
    } else if (!email.endsWith('@gmail.com')) {
      isValid = false;
      $('#error-message-email').text('Email harus berakhiran dengan @gmail.com').css('color', 'red');
    } else if (email.indexOf('@') !== email.lastIndexOf('@')) {
      isValid = false;
      $('#error-message-email').text('Email hanya boleh memiliki satu karakter @').css('color', 'red');
    } else if (email.startsWith('@') || email.indexOf('@') === 0) {
      isValid = false;
      $('#error-message-email').text('Email tidak boleh diawali dengan simbol @').css('color', 'red');
    } else {
      $('#error-message-email').text('');
    }

    var tool = new RegExp(/^0\d+$/);
    console.log(phoneNumber);
    if (phoneNumber === '') {
      isValid = false;
      $('#error-message-phone-number').text('Nomor Telepon harus diisi').css('color', 'red');
    } else if (phoneNumber.length > 12 || phoneNumber < 7) {
      isValid = false;
      $('#error-message-phone-number').text('Nomor Telepon harus terdiri dari 12 angka').css('color', 'red');
    }else if (!tool.test(phoneNumber)){
        isValid = false;

        $('#error-message-phone-number').text('Invalid Nomor Telepone').css('color', 'red');
    } else {
      $('#error-message-phone-number').text('');
    }



    // Validasi Kata Sandi
    if (password === '') {
      isValid = false;
      $('#error-message-password').text('Kata Sandi harus diisi').css('color', 'red');
    } else {
      $('#error-message-password').text('');
    }

    // Validasi Konfirmasi Kata Sandi
    if (passwordConfirm === '') {
      isValid = false;
      $('#error-message-password-confirm').text('Konfirmasi Kata Sandi harus diisi').css('color', 'red');
    } else if(passwordConfirm !== password){
        isValid = false;

        $('#error-message-password-confirm').text('Konfirmasi Kata Sandi tidak sesuai dengan Kata Sandi').css('color', 'red');

    }else {
      $('#error-message-password-confirm').text('');
    }
    // console.log("Nama Depana : ", namadepan);
    // console.log("Nama Belakang : ", namabelakang);
    // console.email("Email : ",email);
    // console.log("Nomor ponsel : ", phoneNumber);
    // console.log("Password : ", password);
    // console.log("Confirm Password : ", passwordConfirm);
    // Mengalihkan halaman jika semua validasi berhasil
    if (isValid) {
      window.location.href = '/register2';
    }else{
        $('small').show();
    }

  });


});

