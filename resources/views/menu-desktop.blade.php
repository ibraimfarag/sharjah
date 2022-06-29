<div class="v-content nav-section desk">
	<div class="">
		<ul class="nav">
			@inject('pageService', 'App\Services\PageService')

			@foreach($pageService->getPages() as $page)
				@if($page['page']->slug!="triennial-2019")
					<li>
						<a href="{{ url($page['page']->link) }}" class="mainlink"><span class="ar">{{ $page['page']->name_ar }}</span><br/>{{ $page['page']->name }}</a>
						@if(count($page['children']))<ul class="sub english-nav">@endif

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

						@if(count($page['children']))</ul>@endif
					</li>
				@endif

{{--				@if($page['page']->slug=="programs")--}}
{{--					<li>--}}
{{--						<a href="{{ url('/research') }}" class="mainlink"><span class="ar">أبحاث</span><br/>Research</a>--}}
{{--					</li>--}}
{{--				@endif--}}
			@endforeach
			<li>
				<a target="_blank" href="https://rfgen.net/" class="mainlink"><span class="ar">ترينالي 2019</span><br/>Triennial 2019</a>
			</li>
		</ul>
	</div>
</div>