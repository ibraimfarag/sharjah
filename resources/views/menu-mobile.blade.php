<div class="mobile clearfix">
<ul>
	@inject('pageService', 'App\Services\PageService')
	@foreach($pageService->getPages() as $page)
		@if($page['page']->slug!="triennial-2019")
		<li>
			<a href="#" alt="{{ url($page['page']->link) }}">
				<span class="cat"><span class="ar">{{ $page['page']->name_ar }}</span><br/>{{ $page['page']->name }}</span>
			</a>
			<ul>
				@foreach($page['children'] as $child)

					@if($child->slug!='research')
						<li><a href="{{ url($child->link) }}"><span class="ar">{{ $child->name_ar }}</span><br/>{{ $child->name }}</a></li>
					@endif

					@if($child->slug=='archive')
						<?php $research = $pageService->getPageBySlug('research'); ?>
						@if($research->active==1)
							<li><a href="{{ url('pages/research') }}"><span class="ar">أبحاث</span><br/>Research</a></li>
						@else
							<li><a href="{{ url('research') }}"><span class="ar">أبحاث</span><br/>Research</a></li>
						@endif
					@endif
				@endforeach
			</ul>
		</li>
{{--		@if($page['page']->slug=="programs")--}}
{{--			<li>--}}
{{--				<a href="#" alt="{{ url('/research') }}">--}}
{{--					<span class="cat"><span class="ar">أبحاث</span><br/>Research</span>--}}
{{--				</a>--}}
{{--			</li>--}}
{{--		@endif--}}
		@endif
	@endforeach
	<li>
		<a target="_blank" href="https://rfgen.net/" alt="https://rfgen.net/">
			<span class="cat"><span class="ar">ترينالي 2019</span><br/>Triennial 2019</span>
		</a>
	</li>
</ul>
<div class="menu-mobile-back"><a href="#" id="mobile-menu-back"><span class="ar">رجوع</span><br/>BACK</a></div></div>