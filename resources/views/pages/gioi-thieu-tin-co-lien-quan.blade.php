<div class="related-news-wrap">
	<div class="related-news-title">
		Tin liên quan
	</div>
	<div class="related-news">
		<ul>
			@foreach($intro as $in)
            	<li>
            		<a href="gioithieu/{{$in->slug}}/{{$in->id}}">{{$in->name}}</a>
            	</li>
            @endforeach
			
		</ul>
	</div>
</div>