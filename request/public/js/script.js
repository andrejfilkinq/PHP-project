window.onload = function () {
    document.querySelector('#shop_ip').onclick = function () {
        ajaxGet('/work');



    }
}

function ajaxGet(url) {
    var request = new XMLHttpRequest();

    request.onreadystatechange = function () {
        if (request.readyState == 4 && request.status == 200) {
            document.querySelector('#myip').innerHTML = request.responseText;
       
        }

    }

    request.open('GET', url);
    request.send();
}