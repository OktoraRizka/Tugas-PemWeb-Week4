// Cek input Order
const usernameInput = document.getElementById('nama')
const emailInput = document.getElementById('email')
const password = document.getElementById('password')
const alamatInput = document.getElementById('alamat')
const tombolCek = document.getElementById('tombolCek');

const namaEr = document.getElementById("namaError")
const emailEr = document.getElementById("emailError")
const passEr = document.getElementById("passwordHPError")
const AlamatEr = document.getElementById("alamatError")

function validasiForm() {
    let isValid = true; 

    if (usernameInput.value === "") {
        usernameInput.style.borderColor = "#FF3737";
        namaEr.textContent = "Username masih kosong!";
        namaEr.style.color = "#FF3737";
        isValid = false;
    } else {
        usernameInput.style.borderColor = "#91D06C";
        namaEr.textContent = ".";
        namaEr.style.color = "transparent";
    }

    if (emailInput.value === "") {
        emailInput.style.borderColor = "#FF3737";
        emailEr.textContent = "Email masih kosong!";
        emailEr.style.color = "#FF3737";
        isValid = false;
    } else {
        emailInput.style.borderColor = "#91D06C";
        emailEr.textContent = ".";
        emailEr.style.color = "transparent";
    }

    if (password.value === "") {
        password.style.borderColor = "#FF3737";
        passEr.textContent = "Password masih kosong!";
        passEr.style.color = "#FF3737";
        isValid = false;
    } else {
        password.style.borderColor = "#91D06C";
        passEr.textContent = ".";
        passEr.style.color = "transparent";
    }

    if (alamatInput.value === "") {
        alamatInput.style.borderColor = "#FF3737";
        AlamatEr.textContent = "Alamat harus diisi!";
        AlamatEr.style.color = "#FF3737";
        isValid = false;
    } else {
        alamatInput.style.borderColor = "#91D06C";
        AlamatEr.textContent = ".";
        AlamatEr.style.color = "transparent";
    }

    return isValid; 
}

tombolCek.addEventListener('click', function(event) {
    const isFormValid = validasiForm();

    if (!isFormValid) {
        event.preventDefault(); 
    } else {
        console.log("Form valid, mengirim data...");
    }
});
    
