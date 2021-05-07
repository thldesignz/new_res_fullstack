let slides = $('.sliding-system a.slide').lenght;
let maxSlides;
let moveTotal;
let currentSlide = 0;

$(window).resize(function(){
    currentSlide = 0;
    $('.sliding-system').css('transform', 'translate3d(-0%, 0, 0');
})

function desktopSlider(){
    if(a.matches){
      maxSlides = Math.ceil((slides * 20)/100);
      moveTotal = 100;

      //right button

      $('.right-btn').on('click', () => {
          console.log('clicked right button!')
          if(currentSlide < maxSlides){
              currentSlide += 100;
              $('.sliding-system').css('transform', `translate3d(-${currentSlide}%, 0,0)`);
          }
      });

      //left button
      $('.left-btn').on('click', () => {
          console.log('clicked left button!')
          if(currentSlide != 0){
              currentSlide -= 100;
              $('.sliding-system').css('transform', `translate3d(-${currentSlide}%, 0,0)`);
          }
      });

    }
}

var a = window.matchMedia("(min-width: 998px)")
desktopSlider(a);
a.addEventListener(desktopSlider);
