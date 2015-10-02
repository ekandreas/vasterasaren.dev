            <div class="card-box col-md-4 col-sm-6">
            	<a href="{{ $post->external_link }}" target="_blank">
                <div class="card">                                            
                    <div class="content">
                        <h6 class="category">{{ $post->source }}</h6>
                        <h4 class="title">{{ $post->title->rendered }}</h4>
                        <?= date('Y-m-d H:i', strtotime( str_replace('T', ' ', $post->date) ) ); ?>
                        <p class="description">{{ html_entity_decode( $post->post_content ) }}</p>
                    </div>                                           
                </div> <!-- end card -->
                </a>
            </div>
