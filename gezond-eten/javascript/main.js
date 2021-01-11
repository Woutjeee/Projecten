var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}

function validate() {
    var gewicht = document.forms['bmiForm']['gewicht'].value;
    var lengte = document.forms['bmiForm']['lengte'].value;
    var leeftijd = document.forms['bmiForm']['leeftijd'].value;

    if(isNaN(gewicht)){
        alert("U heeft niks, of geen nummer ingevuld in de textbox genaamd gewicht.");
        return false;
    } 
    if(isNaN(lengte)){
        alert("U heeft niks, of geen nummer ingevuld in de textbox genaamd lengte.");
        return false;
    }
    if(isNaN(leeftijd)){
        alert("U heeft niks, of geen nummer ingevuld in de textbox genaamd leeftijd.");
        return false;
    }
    else if(leeftijd <= 2 || leeftijd >= 70){
        document.getElementById("bmi_nodig").style.display = "inline"
        return false;
    }
    else {
        document.getElementById("gewichtInput").innerHTML = gewicht;
        document.getElementById("lengteInput").innerHTML = lengte;
        document.getElementById("leeftijdInput").innerHTML = leeftijd;
        return true;
    }

}

function checkQuiz() {
    var q1 = document.getElementById("correct-1").checked;
    var q2 = document.getElementById("correct-2").checked;
    var q3 = document.getElementById("correct-3").checked;
    var q4 = document.getElementById("correct-4").checked;
    

    if(q1 == true){
        document.getElementById("c1").innerHTML = "U had dit goed."
        document.getElementById("groen-q1").style.color = "green";
    } else {
        document.getElementById("c1").innerHTML = "U had dit niet goed, want meestal als je wakker word is het ongeveer 10 uur geleden dat je iets heb gegeten en je lichaam heeft dan weer energie nodig.";
        document.getElementById("groen-q1").style.color = "green";
    }

    if(q2 == true){
        document.getElementById("c2").innerHTML = "U had dit goed.";
        document.getElementById("groen-q2").style.color = "green";
    } else {
        document.getElementById("c2").innerHTML = "U had dit niet goed, want alleen een broodje toasten maakt het niet minder gezond."
        document.getElementById("groen-q2").style.color = "green";
    }

    if(q3 == true){
      document.getElementById("c3").innerHTML = "U had dit goed.";
      document.getElementById("groen-q3").style.color = "green";
    } else {
      document.getElementById("c3").innerHTML = "U had dit niet goed, want van de zon bouw je vitamine d op.";
      document.getElementById("groen-q3").style.color = "green";
    }

    if(q4 == true){
      document.getElementById("c4").innerHTML = "U had dit goed.";
      document.getElementById("groen-q4").style.color = "green";
    } else {
      document.getElementById("c4").innerHTML = "U had dit niet goed, Het gemidellde kopjes koffie is 4 maar het ligt aan de persoon hoe die op de cafienë reageerd.";
      document.getElementById("groen-q4").style.color = "green";
    }
}