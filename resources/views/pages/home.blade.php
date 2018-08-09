@extends('layouts.app')

@section('content')

	<div id="parallax" class="animate fadeIn one">

		<section>
			<div class="header-space home">
			</div>
		</section>

		<section>
		    <div class="parallax-one">
		    	<div class="animate fadeInUp two">
			      	<h1 class="header-text">thatsKhuu</h1>
			        <h5 class="sub-text">Front End Developer | Photographer</h5>
		    	</div>
		    </div>
		</section>

		<section>
			<div class="block about">
				<h5 class="section-title about">About Me</h5>
				<p>Exploring creativity since 1990.</p>

				{{-- Far East (Vietnam) to far West (Washington) to somewhere in between (Florida) - Art (Far East), Tech (Far West, Presently somewhere in the middle, combining both words. --}}
				<p class="margin-top-10"></p>
			</div>
		</section>

		<section>
				<div class="parallax-two projects">
					<h2 class="section-title">Projects</h2>
				</div>
		</section>

		<section>
			<div class="block">
				<p>Projects</p>
				<p class="line-break margin-top-10"></p>
				<p class="margin-top-10"></p>
			</div>
		</section>

		<section>
			<div class="parallax-three photos">
				<h2 class="section-title">Photos</h2>
			</div>
		</section>

		<section>
			<div class="block">
				<p>Photos</p>
				<p class="line-break margin-top-10"></p>
			<p class="margin-top-10"></p>
			</div>
		</section>

		<section>
			<div class="parallax-four contact">
				<h2 class="section-title">Contact</h2>
			</div>
		</section>

		<section>
			<div class="block">
				<p>Contact</p>
				<p class="line-break margin-top-10"></p>
			<p class="margin-top-10"></p>
			</div>
		</section>
</div>

@endsection
