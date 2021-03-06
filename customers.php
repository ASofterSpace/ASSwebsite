@include(top.php)

@include(sectionstart.php)
	<h1>@content(customers)</h1>

	<div class="content">
		@content(customers_intro)
	</div>
@include(sectionend.php)

<a id="sve"></a>
@include(sectionstart.php)
	<h2>@content(customers_sve_headline)</h2>

	<div class="content">
		@content(customers_sve_intro)
	</div>
	<div class="content">
		<div class="testimonial">@content(customers_sve_testimonial)</div>
		<div class="byName">Jan Kolmas</div>
		<div class="byTitle">@content(co-founder) & COO</div>
	</div>
@include(sectionend.php)

<a id="esa"></a>
@include(sectionstart.php)
	<h2>@content(customers_esa_headline)</h2>

	<div class="content">
		@content(customers_esa_intro)
	</div>
@include(sectionend.php)

{{-- TODO :: add recoded --}}

{{-- TODO :: add this once we actually have performed some more work with openMCT
<a id="nasa"></a>
@include(sectionstart.php)
	<h2>NASA</h2>

	<div class="content">
		NASA is, well, NASA!
	</div>
@include(sectionend.php)
--}}

<a id="skyhook"></a>
@include(sectionstart.php)
	<h2>Skyhook</h2>

	<div class="content">
		@content(customers_skyhook_intro)
	</div>
@include(sectionend.php)

<a id="right"></a>
@include(sectionstart.php)
	<h2>right. based on science</h2>

	<div class="content">
		@content(customers_right_intro)
	</div>
@include(sectionend.php)

@include(bottom.php)
