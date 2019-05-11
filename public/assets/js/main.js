	
  // Add Active Class In Slider First Element
    $('#slider .carousel-item:first-child').addClass('active');

  // Add Active Class In FAQ First Element
    $('#faqs .collapse:first-child').addClass('show');
    $('#faqs .btn-link:first-child').removeClass('collapsed');

  // Event Date Picker Script
	$('#datepicker').datepicker({
        uiLibrary: 'bootstrap4'
    });
	// Event Date Picker Script


	// Stuffs Carousel Script
	$(document).ready(function() {
        $('.owl-carousel').owlCarousel({
          loop: true,
          margin: 10,
          loop: false,
          margin: 20,
          nav: true,
          dots: false,
          responsiveClass: true,
          responsive: {
            0: {
              items: 1
            },
            600: {
              items: 2
            },
            800: {
              items: 3
            },
            1000: {
              items: 4
            },
            1200: {
              items: 5
            }
          }
        })
    });
    // Stuffs Carousel Script


  /*====================================
  //  Equal Height Divs
  ======================================*/ 
  // Select and loop the container element of the elements you want to equalise
  $('.container').each(function(){
    
    // Cache the highest
    var highestBox = 0;
    
    // Select and loop the elements you want to equalise
    $('', this).each(function(){
      
      // If this box is higher than the cached highest then store it
      if($(this).height() > highestBox) {
        highestBox = $(this).height(); 
      }
    
    });
          
    // Set the height of all those children to whichever was highest 
    $('', this).height(highestBox);
                        
  });