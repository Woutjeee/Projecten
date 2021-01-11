document.getElementById("mobile-click").onclick = function(){
    var dropDwn = document.getElementById("menu");
    if(dropDwn.style.display === "none"){
        dropDwn.style.display = "block";
    } else {
        dropDwn.style.display = "none";
    }
}