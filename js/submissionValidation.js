//Grace Zang 20065628
function checkInput(){
    var x = document.getElementById("SearchBox").value;
    if (x == "turkey"){
        window.location.href = "turkey.html";
    }else if(x == "cookie"){
        window.location.href = "cookie.html";
    }

$(window).keypress(function(e) {
    if (e.which === 13) {
        if (!checkInput()){
            event.preventDefault();	
            alert("Invalid Input");
        }
    }
});