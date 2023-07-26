
function toggleMenu() {
  let element = document.querySelector('.hlinks-mobile');
  element.classList.toggle("active");
}

var slideIndex = 1;

showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  slideIndex = n
  showSlides(slideIndex);
}


function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("aboutUsSlide");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {
    slideIndex = 1
  }
  if (n < 1) {
    slideIndex = slides.length
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace("active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}

var vw = Math.max(document.documentElement.clientWidth || 0, window.innerWidth || 0);
console.log("viewport width:" + vw);


/*  Ultra Responsive Demo 

//Increase # of columns by 1 every 576 units. Always at least 2 columns.
var columns = Math.round(vw / 576);
if(columns < 2) columns = 2;
updateGridColors(columns)
*/

if(vw <= 768) {
  updateGridColors(2);
}
else {
  updateGridColors(4);
}
function updateGridColors(columns) {

  var gridItems = document.getElementsByClassName("ministryGridItem");
  
  /*
  if(vw <= 1000) {

    var n = 0;
    for(var i = 0; i < gridItems.length; i++) {
      console.log("i: " + i + " n: " + n);

      if(n % 2 == 0) {
        gridItems[i].className = gridItems[i].className.replace("pink", "purp");
      }
      else {
        gridItems[i].className = gridItems[i].className.replace("purp", "pink");
      }
      if((i + 1) % 2 == 0) {
        n++;
      }

      n++;
    }
  }
  else {
    */
    var n = 0;

    console.log("columns: " + columns);
    for(var i = 0; i < gridItems.length; i++) {

      console.log("i: " + i + " n: " + n);
      if(n % 2 == 0) {
        gridItems[i].className = gridItems[i].className.replace("pink", "purp");
      }
      else {
        gridItems[i].className = gridItems[i].className.replace("purp", "pink");
      }
      if((i + 1) % columns == 0) {
        n++;
      }


      n++;
    }
  }

  //Debouncer (Eliminates lag from constant resizing.)
  const debounce = (func, wait, immediate, ...args) => {
    var timeout;
    return () => {
        const context = this;
        const later = function() {
            timeout = null;
            if (!immediate) func.apply(context, args);
        };
        const callNow = immediate && !timeout;
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
        if (callNow) func.apply(context, args);
    };
};
//Debounce value: 200ms
window.addEventListener('resize', debounce(() => {
  var newVw = Math.max(document.documentElement.clientWidth || 0, window.innerWidth || 0);
  //increasing
  if(newVw > vw) {
    if(newVw > 768) {
      updateGridColors(4);
    }
  }
  //decreasing
  else {
    if(newVw < 768) {
      updateGridColors(2);
    }
  }
  vw = newVw;
},
100, false), false);