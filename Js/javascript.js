// Cek input User

const usernameInput = document.getElementById('nama')
const emailInput = document.getElementById('email')
const password = document.getElementById('password')
const alamatInput = document.getElementById('alamat')
const tombolCek = document.getElementById('tombolCek');

const namaEr = document.getElementById("namaError")
const emailEr = document.getElementById("emailError")
const passEr = document.getElementById("passwordHPError")
const AlamatEr = document.getElementById("alamatError")

function validasiForm(){        
    if(
        usernameInput.value == "" || emailInput.value == "" || 
        password.value == "" || alamatInput.value == ""
    ){
        if(usernameInput.value == ""){
            usernameInput.style.borderColor = "#FF3737"
            namaEr.textContent = "Nama masih kosong!"
            namaEr.style.color = "#FF3737"
            namaEr.style.fontSize = "0.7rem"
        }else{
            usernameInput.style.borderColor = "#91D06C"
            namaEr.textContent = "."
            namaEr.style.color = "#FFFFFF"
        }

        if(emailInput.value == ""){
            emailInput.style.borderColor = "#FF3737"
            emailEr.textContent = "Email masih kosong!"
            emailEr.style.color = "#FF3737"
            emailEr.style.fontSize = "0.7rem"
        }else{
            emailInput.style.borderColor = "#91D06C"
            emailEr.textContent = "."
            emailEr.style.color = "#FFFFFF"
        }

        if(password.value == ""){
            password.style.borderColor = "#FF3737"
            passEr.textContent = "Password masih kosong!"
            passEr.style.color = "#FF3737"
            passEr.style.fontSize = "0.7rem"
        }else{
            password.style.borderColor = "#91D06C",
            passEr.textContent = ".",
            passEr.style.color = "#FFFFFF"
        }

        if(alamatInput.value == ""){
            alamatInput.style.borderColor = "#FF3737"
            AlamatEr.textContent = "Alamat nama yang valid!"
            AlamatEr.style.color = "#FF3737"
            AlamatEr.style.fontSize = "0.7rem"
        }else{
             alamatInput.style.borderColor = "#91D06C"
            AlamatEr.textContent = "."
            AlamatEr.style.color = "#FFFFFF"
        }
    }else{
        usernameInput.style.borderColor = "#91D06C"
        namaEr.textContent = "."
        namaEr.style.color = "#FFFFFF"
        
        emailInput.style.borderColor = "#91D06C"
        emailEr.textContent = "."
        emailEr.style.color = "#FFFFFF"

        
        password.style.borderColor = "#91D06C"
        passEr.textContent = "."
        passEr.style.color = "#FFFFFF"

        
        alamatInput.style.borderColor = "#91D06C"
        AlamatEr.textContent = "."
        AlamatEr.style.color = "#FFFFFF"     
        
        alert(`
        Username: ${usernameInput.value} \n
        Email: ${emailInput.value} \n
        Alamat: ${alamatInput.value}`)
           
        }
}

tombolCek.addEventListener('click', function(event) {
    event.preventDefault(); 
    validasiForm()
        
        
});


document.addEventListener("keydown", function(e){
    switch (e.key){
        case 'Enter':
            validasiForm()
    }
})
    