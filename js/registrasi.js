<title>Validasi Form</title>;

function validateForm() {
	// Validasi Nama
	var name = document.forms['myForm']['nama'].value;
	if (name == '') {
		alert('Isi nama terlebih dahulu!');
		return false;
	}

	// Validasi Email
	var email = document.forms['myForm']['email'].value;
	var emailRegex = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/;
	if (!email.match(emailRegex)) {
		alert('Masukkan alamat email yang valid!');
		return false;
	}

	// Validasi Nomor Telepon
	var phone = document.forms['myForm']['nohp'].value;
	var phoneRegex = /^\d{12}$/; // Angka 10 digit
	if (!phone.match(phoneRegex)) {
		alert('Masukkan nomor telepon dengan benar! Setidaknya 12 Digit');
		return false;
	}
	// Validasi Alamat
	var alamat = document.forms['myForm']['alamat'].value;
	if (alamat == '') {
		alert('Isi alamat terlebih dahulu!');
		return false;
	}
	// Validasi pass
	var pass = document.forms['myForm']['pass'].value;
	if (pass == '') {
		alert('Isi kata sandi terlebih dahulu!');
		return false;
	}

	
}
