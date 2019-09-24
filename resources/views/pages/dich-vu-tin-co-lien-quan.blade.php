<div class="related-news-wrap">
	<div class="related-news-title">
		Tin liên quan
	</div>
	<div class="related-news">
		<ul>
			@foreach($intro1 as $in)
            	<li>
            		<a href="dichvu/{{$in->slug}}/{{$in->id}}">{{$in->title}}</a>
            	</li>
            @endforeach
			
		</ul>
	</div>
</div>