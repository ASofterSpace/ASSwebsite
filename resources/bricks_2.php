@include(top.php)

@include(sectionstart.php)
	<h1>@content(bricks) 2</h1>

	<div class="content">
		@content(resources_bricks_2_intro)
	</div>
	
	@include(resource_disclaimer.php)
	
	@include(resource_howto.php)
	
@include(sectionend.php)

@include(sectionstart.php)
	<h2>@content(original)</h2>

	@include(resource_kind_original.php)
	
	<div class="content centerimg">
		<img src="/pics/textures/bricks_2.jpg" />
	</div>
@include(sectionend.php)

@include(bottom.php)