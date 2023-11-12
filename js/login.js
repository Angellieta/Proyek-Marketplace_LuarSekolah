function validateForm() {
	
	var email = document.forms['loginForm']['email'].value;
	var emailRegex = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/;
	if (!email.match(emailRegex)) {
		alert('Masukkan alamat email yang valid!');
		return false;
	}

	var pass = document.forms['loginForm']['password'].value;
	if (pass == '') {
		alert('Isi kata sandi terlebih dahulu!');
		return false;
	}

	
}
