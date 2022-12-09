@extends('layouts.main')
@section('content')

<div class="container">
    <div class="box">
        <img src="assets/rdj.jpeg" alt="">
    </div>
    <div class="About">
        <ul>
            <h1>Profile</h1>
        </ul>
        <ul>
            <h3>Name</h3>
            <li>{{ $user->name }}</li>
        </ul>
        <ul>
            <h3>Username</h3>
            <li>{{ $user->username }}</li>
        </ul>
        <ul>
            <h3>Email</h3>
            <li>{{ $user->email }}</li>
        </ul>
        <ul>
            <h3>Alamat</h3>
            <li>{{ $user->email }}</li>
        </ul>
        <ul>
            <h3>Phone</h3>
            <li>{{ $user->phone }}</li>
        </ul>
    </div>
</div>

    <!-- ================map===================== -->
    {{-- <div>
      <div class="map">
        <h4 class="fs-poppins fs-200 text-red">
          Google Maps API Key Is Messing
        </h4>
        <p class="fs-montserrat fs-100">
          In order to use google maps on your website, you have to create an
          api key and insert it in customizer "Google Maps API Key" field.
        </p>
      </div>
    </div> --}}
  </section>

  <!-- ===========Support Section==================== -->

  {{-- <section class="suport-container grid">
    <div class="support-info grid">
      <div class="suport-img grid">
        <img src="/image/sup-1.svg" alt="" />
      </div>
      <div>
        <p class="fs-100">
          <span class="fs-200 fs-poppins bold-700">Email:</span
          > info@yourdomain.com
        </p>
        <p class="fs-poppins fs-100">info@samplemail.com</p>
      </div>
    </div>
    <div class="support-info grid">
      <div class="suport-img grid">
        <img src="/image/sup-2.svg" alt="" />
      </div>
      <div>
        <p class="fs-100">
          <span class="fs-200 fs-poppins bold-700">Phone:</span
          > +99 (0) 101 0000 888
        </p>
        <p class="fs-poppins fs-100">+99 (0) 101 0000 888</p>
      </div>
    </div>
    <div class="support-info grid">
      <div class="suport-img grid">
        <img src="/image/sup-3.svg" alt="" />
      </div>
      <div>
        <p class="fs-100">
          <span class="fs-200 fs-poppins bold-700">Address:</span
          > Patricia C. 4401 Waldeck
        </p>
        <p class="fs-poppins fs-100">Street Grapevine Nashville, Tx 76051</p>
      </div>
    </div>
  </section> --}}

  <!-- ===================Contact Us======================== -->

@endsection