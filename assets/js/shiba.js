function shiba(){
    var kactane = $('#sayi').val();
    let url = `https://dog.ceo/api/breeds/image/random/`+kactane;

    fetch(url)
        .then(response => response.json())
        .then(responseJson => displayResults(responseJson))
        .catch(error => alert('Hata! Lütfen tekrar deneyiniz.'));
}
function displayResults(responseJson) {
    console.log(responseJson);
    let arrayOfImg = responseJson.message;
    let display = getImages(arrayOfImg);
    $('#foto-cerceve').html(display);
}
function getImages(arrayOfImg){
    let valueToReturn = '';
    for (let i = 0; i < arrayOfImg.length; i++){
        valueToReturn += `<img width="100%" src="${arrayOfImg[i]}" class="results-img">`;
    }
    console.log('valueToReturn is'+valueToReturn);
    return valueToReturn;
}