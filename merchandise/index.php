@include(top.php)

@include(sectionstart.php)
	<h1>@content(merch_presentations_headline)</h1>

	<div class="content">
		@content(merch_presentations_intro)
	</div>
	
	<a class="resource_preview" href="@content(merch_presentations_pptx_just_href)">
		<img src="/merchandise/ass_presentation_preview.png"></img>
		<div class="resource_preview_fadeout"></div>
	</a>

	<div class="content">
		@content(merch_presentations_pptx)
	</div>
	
	<div class="content">
		@content(merch_presentations_odp)
	</div>
@include(sectionend.php)

@include(sectionstart.php)
	<h1>@content(poster_gallery)</h1>

	<div class="content">
		@content(merchandise_poster_gallery_intro)
	</div>
	
	<div class="content">
		<a href="#poster_software">@content(merchandise_poster_gallery_headline_ass_software)</a>
	</div>
	
	<div class="content">
		<a href="#poster_mars">@content(merchandise_poster_gallery_headline_ass_mars)</a>
	</div>
	
	<div class="content">
		<a href="#poster_flipper_qnd">@content(merchandise_poster_gallery_headline_vrcade_flipperqnd)</a>
	</div>
@include(sectionend.php)

<a id="poster_software"></a>
@include(sectionstart.php)
	<h2>@content(merchandise_poster_gallery_headline_ass_software)</h2>
	
	<div class="content centerimg">
		<img src="/pics/poster_software.png" />
	</div>
@include(sectionend.php)

<a id="poster_mars"></a>
@include(sectionstart.php)
	<h2>@content(merchandise_poster_gallery_headline_ass_mars)</h2>
	
	<div class="content centerimg">
		<img src="/pics/poster_mars.png" />
	</div>
@include(sectionend.php)

<a id="poster_flipper_qnd"></a>
@include(sectionstart.php)
	<h2>@content(merchandise_poster_gallery_headline_vrcade_flipperqnd)</h2>
	
	<div class="content">
		@content(merchandise_poster_gallery_intro_vrcade_flipperqnd)
	</div>
	
	<div class="content centerimg">
		<img src="/pics/poster_flipper_qnd.png" />
	</div>
@include(sectionend.php)

@include(bottom.php)