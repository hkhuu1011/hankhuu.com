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
        <h5 class="sub-text">Front End Developer | Photographer | Creator </h5>
      </div>
    </div>
  </section>

  <!-- <section>
        <div class="parallax-two projects">
          <h2 class="section-title">Projects</h2>
        </div>
  </section> -->

  {{-- Projects Section --}}
  @include ('partials.projects')

  <!-- <section>
      <div class="parallax-three photos">
          <h2 class="section-title">Photos</h2>
      </div>
  </section> -->

  {{-- Photography Section --}}
  @include ('partials.photography')

  <!-- @ INCLUDE PARTIALS.IG_FEED WHEN READY -->

  <!-- Bio -->
  @include ('partials.bio')

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
