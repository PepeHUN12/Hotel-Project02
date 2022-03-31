window.onload = function(){
    var checkInDateButton = document.getElementById('checkInDate')
    var checkOutDateButton = document.getElementById('checkOut')
    var checkInDateButtonValue = checkInDateButton.value
    var checkOutDateButtonValue = checkOutDateButton.value
    var searchButton = document.getElementById('kereses')
    if(checkInDateButtonValue === '' && checkOutDateButtonValue === ''){
        searchButton.style.visibility = 'hidden'
    }
    checkInDateButton.addEventListener('change', showSearch)
    checkOutDateButton.addEventListener('change', showSearch)
}


 function showSearch(){
    var checkInDateButton = document.getElementById('checkInDate')
    var checkOutDateButton = document.getElementById('checkOut')
    if(checkInDateButton.value !== '' && checkOutDateButton.value !== ''){
        document.getElementById('kereses').style.visibility = 'visible'
    }
 }


