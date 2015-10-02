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
	</script>
