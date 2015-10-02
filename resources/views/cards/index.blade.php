<div class="masonry-container">

	@foreach ($newsflow as $post)
		@if ($post->external_image)
			@include('cards.example2', ['post'=>$post])
		@else
			@include('cards.example4', ['post'=>$post])
		@endif
	@endforeach

</div>
