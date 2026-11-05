
$(function(){
   filterSelection("all")
});
function filterSelection(c) {

  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("link");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click ", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
	 $(".trigger").css("height", "0px");
  });
}


function openModal(n) {
	if (n==1){
		document.getElementById('myModal1').style.display = "block";
	}
	if (n==2){
		document.getElementById('myModal2').style.display = "block";
	}
	if (n==3){
		document.getElementById('myModal3').style.display = "block";
	}
	if (n==4){
		document.getElementById('myModal4').style.display = "block";
	}
}

function closeModal(n) {
	if (n==1){
		document.getElementById('myModal1').style.display = "none";
	}
	if (n==2){
		document.getElementById('myModal2').style.display = "none";
	}
	if (n==3){
		document.getElementById('myModal3').style.display = "none";
	}
	if (n==4){
		document.getElementById('myModal4').style.display = "none";
	}
}

var slideIndex = 1;
showSlides(l,slideIndex);

function plusSlides(l,n) {
  showSlides(l,slideIndex += n);
}

function currentSlide(l,n) {
  showSlides(l,slideIndex = n);
}

function showSlides(l,n) {
  var i;
  if (l==1){
		var slides = document.getElementsByClassName("sh-kerrisdale");
		var dots = document.getElementsByClassName("sh-kerrisdale-demo");
		var captionText = document.getElementById("sh-kerrisdale-caption");
	}
	if (l==2){
		var slides = document.getElementsByClassName("th-cambie");
		  var dots = document.getElementsByClassName("th-cambie-demo");
  var captionText = document.getElementById("th-cambie-caption");
	}
	if (l==3){
		var slides = document.getElementsByClassName("th-3road");
		var dots = document.getElementsByClassName("th-3road-demo");
		var captionText = document.getElementById("th-3road-caption");
	}
	if (l==4){
		var slides = document.getElementsByClassName("lra-pointgrey");
		var dots = document.getElementsByClassName("lra-pointgrey-demo");
		var captionText = document.getElementById("lra-pointgrey-caption");
	}

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
  captionText.innerHTML = dots[slideIndex-1].alt;
}




function initMap() {
    var uluru = {lat: 49.170754, lng: -123.153662};
    var map = new google.maps.Map(document.getElementById('map'), {
		zoom: 15,
        center: uluru
    });
    var marker = new google.maps.Marker({
        position: uluru,
        map: map
    });
}


$("#myModal").on("show", function () {
  $("body").addClass("modal-open");
}).on("hidden", function () {
  $("body").removeClass("modal-open")
});
