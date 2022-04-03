window.onload = function(){
    var checkInDateButton = document.getElementById('checkInDate')
    var checkOutDateButton = document.getElementById('checkOut')
    var checkInDateButtonValue = checkInDateButton.value
    var checkOutDateButtonValue = checkOutDateButton.value
    var searchButton = document.getElementById('kereses')
    if(checkInDateButtonValue === '' && checkOutDateButtonValue === ''){
        document.getElementById('kereses').disabled = true;
        document.getElementById('kereses').style.backgroundColor = "red";
        document.getElementById("kereses").innerHTML = "ADJA MEG A DÁTUMOKAT";
    }
    checkInDateButton.addEventListener('change', showSearch)
    checkOutDateButton.addEventListener('change', showSearch)
}


 function showSearch(){
    var checkInDateButton = document.getElementById('checkInDate')
    var checkOutDateButton = document.getElementById('checkOut')
    if(checkInDateButton.value !== '' && checkOutDateButton.value !== ''){
        document.getElementById('kereses').disabled = false;
        document.getElementById("kereses").innerHTML = "Keresés";
        document.getElementById('kereses').style.backgroundColor = "#1cc3b2";
    }
 }