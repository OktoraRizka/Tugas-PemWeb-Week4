// Cek input Order
const usernameInput = document.getElementById('username')
const password = document.getElementById('password')
const tombolCek = document.getElementById('tombolCek');

const namaEr = document.getElementById("namaError")
const passEr = document.getElementById("passwordHPError")

function validasiForm(){        
    let isValid = true; 
    if(
        usernameInput.value == "" || password.value == ""
    ){
        if(usernameInput.value == ""){
            usernameInput.style.borderColor = "#FF3737"
            namaEr.textContent = "Username masih kosong!"
            namaEr.style.color = "#FF3737"
            namaEr.style.fontSize = "0.7rem"
            isValid = false;
        }else{
            usernameInput.style.borderColor = "#91D06C"
            namaEr.textContent = "."
            namaEr.style.color = "#FFFFFF"
        }

        if(password.value == ""){
            password.style.borderColor = "#FF3737"
            passEr.textContent = "Password masih kosong!"
            passEr.style.color = "#FF3737"
            passEr.style.fontSize = "0.7rem"
            isValid = false;
        }else{
            password.style.borderColor = "#91D06C",
            passEr.textContent = ".",
            passEr.style.color = "#FFFFFF"
        }

    }else{
        usernameInput.style.borderColor = "#91D06C"
        namaEr.textContent = "."
        namaEr.style.color = "#FFFFFF"
        
        password.style.borderColor = "#91D06C"
        passEr.textContent = "."
        passEr.style.color = "#FFFFFF"

        return isValid; 
           
        }
}

tombolCek.addEventListener('click', function(event) {
    const isFormValid = validasiForm();

    if (!isFormValid) {
        event.preventDefault(); 
    } else {
        console.log("Form valid, mengirim data...");
    }
});


document.addEventListener("keydown", function(e){
    switch (e.key){
        case 'Enter':
            validasiForm()
    }
})
    
