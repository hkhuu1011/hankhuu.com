@extends('layouts.app')

@section('content')

<div id="parallax" class="animate fadeIn one">

  <section>
    <div class="header-space home"></div>
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

          <a href="/#" download="resume_han_khuu" class="btn btn-default btn-margin" role="button">Download Resume</a>
        </div>
    </div>
  </section>

  <!-- <section>
      <div class="parallax-three photos">
          <h2 class="section-title">Photos</h2>
      </div>
  </section> -->

  <section class="photography hover-underline">
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
              <!-- <svg xmlns="http://www.w3.org/2000/svg"> -->
                <!-- <rect class="outline"/> -->
                  {{-- Adriana's Gallery --}}
                  <div id="lightgallery">
                    <a href="/img/photography/DSC_6107_FinalCopy.jpg">
                      <img class="photo-preview" src="/img/photography/DSC_6107_FinalCopy.jpg" />
                    </a>
                    <a href="/img/photography/DSC_6054_FinalCopy.jpg">
                      <img style="display: none;" class="photo-preview" src="/img/photography/DSC_6054_FinalCopy.jpg" />
                    </a>
                    <a href="/img/photography/DSC_6097_FinalCopy.jpg">
                      <img style="display: none;" class="photo-preview" src="/img/photography/DSC_6097_FinalCopy.jpg" />
                    </a>
                    <a href="/img/photography/DSC_6048_FinalCopy.jpg">
                      <img style="display: none;" class="photo-preview" src="/img/photography/DSC_6048_FinalCopy.jpg" />
                    </a>
                    <a href="/img/photography/DSC_6119_FinalCopy.jpg">
                      <img style="display: none;" class="photo-preview" src="/img/photography/DSC_6119_FinalCopy.jpg" />
                    </a>
                    <a href="/img/photography/DSC_6149_FinalCopy.jpg">
                      <img style="display: none;" class="photo-preview" src="/img/photography/DSC_6149_FinalCopy.jpg" />
                    </a>
                    <a href="/img/photography/DSC_6165_FinalCopy.jpg">
                      <img style="display: none;" class="photo-preview" src="/img/photography/DSC_6165_FinalCopy.jpg" />
                    </a>
                  </div>
              <!-- </svg> -->
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4">
            <div class="svg-wrapper">
              <!-- <svg xmlns="http://www.w3.org/2000/svg"> -->
                <!-- <rect class="outline"/> -->
                  {{-- New York Gallery --}}
                  <div id="lightgallery2">
                    <a href="/img/photography/NewYork.jpg">
                      <img class="photo-preview" src="/img/photography/NewYork.jpg" />
                    </a>
                    <a href="/img/photography/NewYork2.jpg">
                      <img style="display: none;" class="photo-preview" src="/img/photography/NewYork2.jpg" />
                    </a>
                    <a href="/img/photography/NewYork3.jpg">
                      <img style="display: none;" class="photo-preview" src="/img/photography/NewYork3.jpg" />
                    </a>
                    <a href="/img/photography/NewYork4.jpg">
                      <img style="display: none;" class="photo-preview" src="/img/photography/NewYork4.jpg" />
                    </a>
                    <a href="/img/photography/NewYork5.jpg">
                      <img style="display: none;" class="photo-preview" src="/img/photography/NewYork5.jpg" />
                    </a>
                    <a href="/img/photography/NewYork6.jpg">
                      <img style="display: none;" class="photo-preview" src="/img/photography/NewYork6.jpg" />
                    </a>
                    <a href="/img/photography/NewYork7.jpg">
                      <img style="display: none;" class="photo-preview" src="/img/photography/NewYork7.jpg" />
                    </a>
                    <a href="/img/photography/NewYork8.jpg">
                      <img style="display: none;" class="photo-preview" src="/img/photography/NewYork8.jpg" />
                    </a>
                    <a href="/img/photography/NewYork9.jpg">
                      <img style="display: none;" class="photo-preview" src="/img/photography/NewYork9.jpg" />
                    </a>
                    <a href="/img/photography/NewYork10.jpg">
                      <img style="display: none;" class="photo-preview" src="/img/photography/NewYork10.jpg" />
                    </a>
                    <a href="/img/photography/NewYork11.jpg">
                      <img style="display: none;" class="photo-preview" src="/img/photography/NewYork11.jpg" />
                    </a>
                  </div>
              <!-- </svg> -->
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4">
            <div class="svg-wrapper">
              <!-- <svg xmlns="http://www.w3.org/2000/svg"> -->
                <!-- <rect class="outline"/> -->
                  {{-- Sammatha's Gallery --}}
                  <div id="lightgallery3">
                    <a href="/img/photography/DSC_7535_Final.jpg">
                      <img class="photo-preview" src="/img/photography/DSC_7535_Final.jpg" />
                    </a>
                    <a href="/img/photography/DSC_7526_Final.jpg">
                      <img style="display: none;" class="photo-preview" src="/img/photography/DSC_7526_Final.jpg" />
                    </a>
                    <a href="/img/photography/DSC_7544_Final.jpg">
                      <img style="display: none;" class="photo-preview" src="/img/photography/DSC_7544_Final.jpg" />
                    </a>
                    <a href="/img/photography/DSC_7606_Final.jpg">
                      <img style="display: none;" class="photo-preview" src="/img/photography/DSC_7606_Final.jpg" />
                    </a>
                    <a href="/img/photography/DSC_7608_Final.jpg">
                      <img style="display: none;" class="photo-preview" src="/img/photography/DSC_7608_Final.jpg" />
                    </a>
                  </div>
              <!-- </svg> -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <!-- <div class="right"><a href="/photos/more">More photos</a></div> -->
      <small class="right" style="color:#ccc">(More coming soon)</small>
    </div>
  </section>

  <!-- @ INCLUDE PARTIALS.IG_FEED WHEN READY -->

  <!-- Bio -->
  <section class="hover-underline">
    <div class="block about">
      <div class="container">
        <div class="section-title sliding-u-l-r">Bio</div>
      </div>
      <div class="section-underline"></div>
      <div class="container">
        <div class="content bio-paragraph">
          Born in Vietnam, raised in Seattle and currently living somewhere in-between in Orlando.
          <br>
          Earned my Bachelors in Studio Art, continued education in programming and currently working as a front-end developer.
        </div>
          <p class="custom-text">East meets West.</p>
          <p class="custom-text">Creativity meets Code.</p>
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
