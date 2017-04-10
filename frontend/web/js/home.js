function home()
{
	this.baseUrl = '';
	
	this.initialScript = function()
	{
		HomeObj.carouselSlide();
        HomeObj.catalogSlide();
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

    this.catalogSlide = function()
    {
        $('.carousel[data-type="multi"] .item').each(function(){
            var next = $(this).next();
            if (!next.length) {
            next = $(this).siblings(':first');
            }
            next.children(':first-child').clone().appendTo($(this));
            
            for (var i=0;i<2;i++) {
            next=next.next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }
            
            next.children(':first-child').clone().appendTo($(this));
            }
        });
    }
	
}

var HomeObj = new home()