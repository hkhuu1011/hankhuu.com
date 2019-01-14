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

  {{-- Contact Section --}}
  @include ('partials.contact')
</div>

@endsection
