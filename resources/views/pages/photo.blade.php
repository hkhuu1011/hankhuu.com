@extends('layouts.app')

@section('content')

<div id="parallax" class="animate fadeIn one">
	<section>
		<div class="header-space home">
		</div>
	</section>
	<section class="photos hover-underline">
		<div class="block">
			<div class="container">
				<div class="section-title sliding-u-l-r">More Photos</div>
			</div>
			<div class="section-underline"></div>
			<div class="container">
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
</div>
@endsection