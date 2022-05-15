function emailIsValid (email) {
    return /\S+@\S+\.\S+/.test(email)
}
function validate(){
    if ($('input[name="name"]').val() == ""){
        alert("İsim alanı boş!");
        return false;
    }
    if ($('input[name="email"]').val() == ""){
        alert("Mail alanı boş!");
        return false;
    }
    if ($('textarea[name="message"]').val() == ""){
        alert("Mesaj alanı boş!");
        return false;
    }
    if ($('input[name="date"]').val() == ""){
        alert("Tarih alanı boş!");
        return false;
    }
    if ($("input[name='gender']:checked").val() == ""){
        alert("Cinsiyet alanı boş!");
        return false;
    }
    if(!(emailIsValid($('input[name="email"]').val()))){
        alert("Mail adresinizi kontrol edin!");
        return false;
    }
}