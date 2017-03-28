function home()
{
	this.baseUrl = '';
	
	this.initialScript = function()
	{
		HomeObj.carouselSlide();
	}

	this.carouselSlide = function()
	{
		 var percent = 0, bar = $('.transition-timer-carousel-progress-bar'), crsl = $('#mySlider');
          function progressBarCarousel() {
            bar.css({width:percent+'%'});
           percent = percent +0.5;
            if (percent>100) {
                percent=0;
                crsl.carousel('next');
            }      
          }
          crsl.carousel({
              interval: false,
              pause: true
          }).on('slid.bs.carousel', function () {});var barInterval = setInterval(progressBarCarousel, 30);
          crsl.hover(
              function(){
                  clearInterval(barInterval);
              },
              function(){
                  barInterval = setInterval(progressBarCarousel, 30);
              })
	}
	
}

var HomeObj = new home()