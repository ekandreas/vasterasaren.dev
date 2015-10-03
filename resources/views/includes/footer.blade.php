    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/hipster-cards.js"></script>
	
	<!--  Just for demo	 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/3.3.1/masonry.pkgd.min.js"></script>
    
	<script>
    	
    	$().ready(function(){
        	
        	var $container = $('.masonry-container');

            doc_width = $(document).width();
            
            if (doc_width >= 768){
                $container.masonry({
                    itemSelector        : '.card-box',
                    columnWidth         : '.card-box',
                    transitionDuration  : 0
                });   
            } else {
                $('.mas-container').removeClass('mas-container').addClass('row');
            }            

    	});

        $(window).scroll(function () { 
            if ( $(window).scrollTop <= 30 ) {
                window.location.reload();
            }
        });
        

        /* Track outbound links in Google Analytics */
        (function($) {

          "use strict";

          // current page host
          var baseURI = window.location.host;

          // click event on body
          $("body").on("click", function(e) {

            // abandon if link already aborted or analytics is not available
            if (e.isDefaultPrevented() || typeof ga !== "function") return;

            // abandon if no active link or link within domain
            var link = $(e.target).closest("a");
            if (link.length != 1 || baseURI == link[0].host) return;

            // cancel event and record outbound link
            e.preventDefault();
            var href = link[0].href;
            ga('send', {
              'hitType': 'event',
              'eventCategory': 'outbound',
              'eventAction': 'link',
              'eventLabel': href,
              'hitCallback': loadPage
            });

            // redirect after one second if recording takes too long
            setTimeout(loadPage, 1000);

            // redirect to outbound page
            function loadPage() {
                window.open( href, '_blank' );
            }

          });

        })(jQuery); // pass another library here if required

	</script>
