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

		<!-- <section>
				<div class="parallax-two projects">
					<h2 class="section-title">Projects</h2>
				</div>
		</section> -->

		<section class="projects hover-underline">
			<div class="block">
				<div class="container">
					<div class="section-title sliding-u-l-r">Projects</div>
				</div>
				<div class="section-underline"></div>
				<div class="container">
					<p class="content">COMING SOON</p>
					<!-- <p class="line-break margin-top-10"></p>
					<p class="margin-top-10"></p> -->
				</div>
			</div>
		</section>

		<!-- <section>
			<div class="parallax-three photos">
				<h2 class="section-title">Photos</h2>
			</div>
		</section> -->

		<section class="photos hover-underline">
			<div class="block">
				<div class="container">
					<div class="section-title sliding-u-l-r">Photography</div>
				</div>
				<div class="section-underline"></div>
				<!-- SVG wrapper -->
				<div class="container">
				  <div class="row">
				    <div class="col-12 col-md-6 col-lg-4">
						<div class="svg-wrapper">
						  	<a href="/photo1">
							  	<svg xmlns="http://www.w3.org/2000/svg">
							    	<rect class="outline"/>
							    		<img class="photo-preview" src="/img/photos.jpg"/>
							  	</svg>
							</a>
						</div>
				    </div>
				    <div class="col-12 col-md-6 col-lg-4">
					    <div class="svg-wrapper">
					    	<a href="#">
						  		<svg xmlns="http://www.w3.org/2000/svg">
						    	<rect class="outline"/>
						    	<img class="photo-preview" src="/img/photography/DSC_7535_Final.jpg"/>
								</svg>
							</a>
						</div>
				    </div>
				    <div class="col-12 col-md-6 col-lg-4">
				      	<div class="svg-wrapper">
				      		<a href="#">
						  		<svg xmlns="http://www.w3.org/2000/svg">
						    	<rect class="outline"/>
						    	<img class="photo-preview" src="/img/photography/NewYork.jpg"/>
								</svg>
							</a>
						</div>
				    </div>
				  </div>
				  <div class="row">
				    <div class="col-12 col-md-6 col-lg-4">
						<div class="svg-wrapper">
				      		<a href="#">
						  		<svg xmlns="http://www.w3.org/2000/svg">
						    	<rect class="outline"/>
						    	<img class="photo-preview" src="/img/photography/DSC_5364_FinalCopy.jpg"/>
								</svg>
							</a>
						</div>
				    </div>
				    <div class="col-12 col-md-6 col-lg-4">
					    <div class="svg-wrapper">
				      		<a href="#">
						  		<svg xmlns="http://www.w3.org/2000/svg">
						    	<rect class="outline"/>
						    	<img class="photo-preview" src="/img/photography/Jamaica.jpg"/>
								</svg>
							</a>
						</div>
				    </div>
				    <div class="col-12 col-md-6 col-lg-4">
				      	<div class="svg-wrapper">
				      		<a href="#">
						  		<svg xmlns="http://www.w3.org/2000/svg">
						    	<rect class="outline"/>
						    	<img class="photo-preview" src="/img/photography/DSC_6107_FinalCopy.jpg"/>
								</svg>
							</a>
						</div>
				    </div>
				  </div>

				  <div class="row">
				    <div class="col-12 col-md-6 col-lg-4">
						<div class="svg-wrapper">
				      		<a href="#">
						  		<svg xmlns="http://www.w3.org/2000/svg">
						    	<rect class="outline"/>
						    	<img class="photo-preview" src="/img/photography/DSC_5941_FinalCopy.jpg"/>
								</svg>
							</a>
						</div>
				    </div>
				    <div class="col-12 col-md-6 col-lg-4">
					    <div class="svg-wrapper">
				      		<a href="#">
						  		<svg xmlns="http://www.w3.org/2000/svg">
						    	<rect class="outline"/>
						    	<img class="photo-preview" src="/img/photography/IMG_1831_FinalCopy_2.jpg"/>
								</svg>
							</a>
						</div>
				    </div>
				    <div class="col-12 col-md-6 col-lg-4">
				      	<div class="svg-wrapper">
				      		<a href="#">
						  		<svg xmlns="http://www.w3.org/2000/svg">
						    	<rect class="outline"/>
						    	<img class="photo-preview" src="/img/photography/DSC_1679_FinalCopy.jpg"/>
								</svg>
							</a>
						</div>
				    </div>
				  </div>
				</div>
			</div>
		</section>

		<section class="instagram hover-underline">
			<div class="block">
				<div class="container">
					<div class="section-title sliding-u-l-r">Instagram Feed</div>
				</div>
				<div class="section-underline"></div>
				<div class="container">
					<div class="content">
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
							<a class="group" rel="group1" href="<?= $post->images->standard_resolution->url ?>"><img class="ig-img" src="<?= $post->images->thumbnail->url ?>"></a>
						<?php endforeach ?>
					</div>
				</div>
			</div>
		</section>

		<!-- Bio -->
		<section class="hover-underline">
			<div class="block about">
				<div class="container">
					<div class="section-title sliding-u-l-r">Bio</div>
				</div>
				<div class="section-underline"></div>
				<div class="container">
					<ul class="content">
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
			</div>
		</section>

		<!-- <section>
			<div class="parallax-four contact">
				<h2 class="section-title">Contact</h2>
			</div>
		</section> -->

		<section class="contact hover-underline">
			<div class="block">
				<div class="container">
					<div class="section-title sliding-u-l-r">Contact</div>
				</div>
				<div class="section-underline"></div>
				<div class="container">
					<div class="content">
						<ul class="list">
			                <li><a href="mailto:h.khuu01@gmail.com?Subject=Hello%20Han!" target="_top"><img class="social-logos" src="/img/gmail.svg" /></a></li>
			                <li><a href="https://linkedin.com/in/hankhuu" target="_blank"><img class="social-logos" src="/img/linkedin.svg" /></a></li>
			                <li><a href="https://github.com/hkhuu1011" target="_blank"><img class="social-logos" src="img/github.svg" /></a></li>
			                <li><a href="https://www.instagram.com/thatskhuu/?hl=en" target="_blank"><img class="social-logos" src="/img/instagram.svg" /></a></li>
		            	</ul>
					</div>
				</div>
			</div>
		</section>
</div>

@endsection
