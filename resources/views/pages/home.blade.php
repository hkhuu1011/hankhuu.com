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
			      	<h1 class="header-text">Han Khuu</h1>
			        <h5 class="sub-text">Front End Developer | Photographer</h5>
		    	</div>
		    </div>
		</section>

		<section>
			<div class="block about">
				<div class="section-title">Bio</div>
				<ul class="about-content">
					<li>
						<p>Born in Vietnam, raised in Seattle and currently living somewhere in-between in Orlando.</p>
					</li>
					<li>
						<p>Earned my Bachelors in Studio Art, continued education in programming and</p>
					</li>
					<li>
						<p>currently working somewhere in-between as a front-end developer.</p>
					</li>
					<li>
						<p class="custom-text">East meets West.</p>
					</li>
					<li>
						<p class="custom-text">Creativity meets Code.</p>
					</li>
				</ul>
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
				<!-- SVG wrapper -->
				<div class="svg-wrapper">
				  <svg height="320" width="320" xmlns="http://www.w3.org/2000/svg">
				    <rect class="shape" height="320" width="320" />

						<div class="text">Photos</div>

					</svg>
				</div>
				<!-- <p>Photos</p> -->
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
				<?php
					// Supply a user id and an access token
					$userid = "30758156";
					$accessToken = "30758156.70679d8.954c4b9f252d4deb877bbb76621026a2";

					// Gets our data
					function fetchData($url){
					     $ch = curl_init();
					     curl_setopt($ch, CURLOPT_URL, $url);
					     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
					     curl_setopt($ch, CURLOPT_TIMEOUT, 20);
					     $result = curl_exec($ch);
					     curl_close($ch);
					     return $result;
					}

					// Pulls and parses data.
					$result = fetchData("https://api.instagram.com/v1/users/{$userid}/media/recent/?access_token={$accessToken}&count=5");
					$result = json_decode($result);
				?>

				<?php foreach ($result->data as $post): ?>
					<!-- Renders images. @Options (thumbnail,low_resoulution, high_resolution) -->
					<a class="group" rel="group1" href="<?= $post->images->standard_resolution->url ?>"><img src="<?= $post->images->thumbnail->url ?>"></a>
				<?php endforeach ?>

				<!-- <p class="line-break margin-top-10"></p> -->
			<p class="margin-top-10"></p>
			</div>
		</section>
</div>

@endsection
