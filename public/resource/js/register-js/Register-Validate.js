
var global = true;

$(document).ready(function () {
    $("form").submit(function (e) {
        e.preventDefault();

        // Menghapus pesan error sebelumnya
        $("small[id^='error-message']").text("");
        var isvalid = true;
        // Validasi Nama Depan
        var namaDepan = $("#namadepan").val();
        if (namaDepan === "") {
            isvalid = false;
            $("#error-message-namadepan").text("Nama Depan harus diisi");
            $("#namadepan").css("border-bottom", "red 1px solid");
        } else if (!/^[a-zA-Z\s]+$/.test(namaDepan)) {
            isvalid = false;
            $("#error-message-namadepan").text("Nama Depan hanya boleh berisi huruf");
            $("#namadepan").css("border-bottom", "red 1px solid");
        } else {

            $("#namadepan").css("border-bottom", "green 1px solid");
        }

        // Validasi Nama Belakang
        var namaBelakang = $("#namabelakang").val();
        if (namaBelakang === "") {
            isvalid = false;
            $("#error-message-namabelakang").text("Nama Belakang harus diisi");
            $("#namabelakang").css("border-bottom", "red 1px solid");
        } else if (!/^[a-zA-Z]+$/.test(namaBelakang)) {
            isvalid = false;
            $("#error-message-namabelakang").text("Nama Belakang hanya boleh berisi huruf");
            $("#namabelakang").css("border-bottom", "red 1px solid");
        }
        else {

            $("#namabelakang").css("border-bottom", "green 1px solid");
        }

        // Validasi Email
        var email = $("#email").val();
        if (email === "") {
            isvalid = false;
            $("#error-message-email").text("Email harus diisi");
            $("#email").css("border-bottom", "red 1px solid");
        } else if (!/^[\w.-]+@[a-zA-Z_-]+?\.[a-zA-Z]{2,3}$/.test(email)) {
            isvalid = false;
            $("#error-message-email").text("Format Email tidak valid");
            $("#email").css("border-bottom", "red 1px solid");
        } else {

            $("#email").css("border-bottom", "green 1px solid");
        }

        // Validasi Phone Number
        var phoneNumber = $("#phone-number").val();
        if (phoneNumber === "") {
            isvalid = false;
            $("#error-message-phone-number").text("No Telepon harus diisi");
            $("#phone-number").css("border-bottom", "red 1px solid");
        } else if (!/^0\d{11,14}$/.test(phoneNumber)) {
            isvalid = false;
            $("#error-message-phone-number").text("No Telepon tidak valid");
            $("#phone-number").css("border-bottom", "red 1px solid");
        } else {
            console.log("phone number sudah benar");
            $("#phone-number").css("border-bottom", "green 1px solid");
            console.log("benar");
        }


        // Validasi DOB
        var dob = new Date($("#DOB").val());
        var today = new Date();
        var minDOB = new Date();
        minDOB.setFullYear(minDOB.getFullYear() - 17);

        if (isNaN(dob.getTime())) {
            isvalid = false;
            $("#error-message-dob").text("Tanggal Lahir harus diisi");
            $("#DOB").css("border-bottom", "red 1px solid");
        } else if (dob > today || dob > minDOB) {
            console.log(minDOB);
            isvalid = false;
            $("#error-message-dob").text("Umur harus minimal 17 tahun");
            $("#DOB").css("border-bottom", "red 1px solid");
        } else if (dob >= today) {
            isvalid = false;
            $("#error-message-dob").text("Tanggal Lahir harus sebelum hari ini");
            $("#DOB").css("border-bottom", "red 1px solid");
        } else {

            $("#DOB").css("border-bottom", "green 1px solid");
        }


        // Validasi Password
        var password = $("#password").val();
        if (password === "") {
            isvalid = false;
            $("#error-message-password").text("Kata Sandi harus diisi");
            $("#password").css("border-bottom", "red 1px solid");
        } else if (!/(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}/.test(password)) {
            $("#error-message-password").text("Kata Sandi tidak memenuhi syarat");
            $("#password").css("border-bottom", "red 1px solid");
        } else {

            $("#password").css("border-bottom", "green 1px solid");
        }

        // Validasi Konfirmasi Password
        var confirmPassword = $("#password-confirm").val();
        if (confirmPassword === "") {
            isvalid = false;
            $("#error-message-password-confirm").text("Konfirmasi Kata Sandi harus diisi");
            $("#password-confirm").css("border-bottom", "red 1px solid");
        } else if (confirmPassword !== password) {
            isvalid = false;
            $("#error-message-password-confirm").text("Konfirmasi Kata Sandi tidak cocok");
            $("#password-confirm").css("border-bottom", "red 1px solid");
        } else {

            $("#password-confirm").css("border-bottom", "green 1px solid");
        }

        // Jika tidak ada error, submit form
        if (isvalid == true) {
            $("form").attr("action", "/register-page1-user-confirm");
            $("form").attr("method", "POST");
            $("form").unbind("submit").submit();
        } else {
            global = isvalid;
            return;
        }
    });

    // Menghapus border merah saat input berubah
    // $("input").on("input", function () {
    //     $(this).css("border-bottom", "green 1px solid");
    // });
});

console.log(global);

