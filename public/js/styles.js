function cek_data(){
    if(document.getElementById('email').value == ''){
        alert("Harap masukkan email yang valid");
        document.getElementById("email").focus();
        return false;
    }
}