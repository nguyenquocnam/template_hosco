!function(i){"use strict";i(".testimonial-slider").slick({infinite:!0,autoplay:!0,arrows:!1,dots:!1,slidesToShow:1,slidesToScroll:1,asNavFor:".testimonial-slider-nav"}),i(".testimonial-slider-nav").slick({arrows:!1,dots:!1,focusOnSelect:!0,centerMode:!0,centerPadding:"22px",slidesToShow:3,asNavFor:".testimonial-slider"}),i(".testimonial .slider-nav").css({position:"relative",height:"160px"});var o=i(".portfolio-container").isotope({itemSelector:".portfolio-item",layoutMode:"fitRows"});i("#portfolio-flters li").on("click",function(){i("#portfolio-flters li").removeClass("filter-active"),i(this).addClass("filter-active"),o.isotope({filter:i(this).data("filter")})})}(jQuery);