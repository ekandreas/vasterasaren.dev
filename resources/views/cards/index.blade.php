<div class="masonry-container">

	@foreach ($newsflow as $key => $post)
		@if ($post->external_image)
			@include('cards.example2', ['post'=>$post])
		@else
			@include('cards.example4', ['post'=>$post])
		@endif

		@if ($key==1)
			@include('cards.hilfe')
		@endif

	@endforeach

</div>
