

if(document.URL.includes("index.php")){
    document.getElementById("header_p").innerHTML = "Home";
}
if(document.URL.includes("recepten.php")){
    document.getElementById("header_p").innerHTML = "Recepten";
}
if(document.URL.includes("quiz.php")){
    document.getElementById("header_p").innerHTML = "Quiz";
}
if(document.URL.includes("bmicalc.php")){
    document.getElementById("header_p").innerHTML = "BMI Calculator";
}
if(document.URL.includes("overige.php")){
    document.getElementById("header_p").innerHTML = "Overige Informatie";
}
if(document.URL.includes("vega.php")){
    document.getElementById("header_p").innerHTML = "Vegatarische Recepten";
}
if(document.URL.includes("vlees.php")){
    document.getElementById("header_p").innerHTML = "Vlees Recepten";
}
if(document.URL.includes("kinderen.php")){
    document.getElementById("header_p").innerHTML = "Recepten voor Kinderen";
}
if(document.URL.includes("vis.php")){
    document.getElementById("header_p").innerHTML = "Vis Recepten";
}

if($(window).width() < 900){
    document.getElementById("header_p").style.fontSize = "120%";
} else {
    document.getElementById("header_p").style.fontSize = "200%";
}
