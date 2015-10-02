            <div class="card-box col-md-4 col-sm-6">
            	<a href="{{ $post->external_link }}" target="_blank">
                	<div class="card card-with-border card-just-text" data-background="color" data-color="black" >
                    	<div class="content">
                        	<h4 class="title">{{ $post->title->rendered }}</h4>
                        	<p class="description">- {{ $post->source }}</p>
                    	</div>
                	</div> <!-- end card -->
                </a>
            </div>           
