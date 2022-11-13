@extends('layouts.main')
@section('content')

   <!-- ===================Shop Feature Section============================ -->

   <section class="shop-feature bg-gray grid">
    <div>
      <p class="fs-montserrat text-black">
        Home <span aria-hidden="true" class="margin">></span> Be a Seller
      </p>
    </div>
    <h2 class="fs-poppins fs-300 bold-700">Be a Seller</h2>
  </section>

  <!-- ===================Be a Seller======================== -->

  <section class="contact-us grid">
    <div class="contact-info">
      <div>
        <h1 class="fs-poppins text-red fs-200">Be a Seller</h1>
        <h3 class="fs-poppins text-black fs-400">Get In ouch</h3>
        <p class="fs-montserrat fs-100">
          When, while lovely valley teems with vapour around meand meridian
          the upper impenetrable .
        </p>
      </div>
      <form action="#" class="contact-form grid">
        <div class="grid">
          <input
            class="bg-gray text-black fs-poppins"
            type="text"
            placeholder="Your E-mail"
          />
        </div>
        <div class="grid">
          <input
            class="bg-gray text-black fs-poppins"
            type="text"
            placeholder="Phone number"
          />
        </div>
        <div>
          <textarea
            class="bg-gray text-black fs-poppins"
            rows="10"
            placeholder="Your Message Here"
          >
          </textarea>
        </div>

        <div class="contact-btn">
          <button class="large-btn bg-red text-white fs-poppins fs-50">
            Submit
          </button>
        </div>
      </form>
    </div>

    <!-- ================map===================== -->
    <div>
      <div class="map">
        <h4 class="fs-poppins fs-200 text-red">
          Google Maps API Key Is Messing
        </h4>
        <p class="fs-montserrat fs-100">
          In order to use google maps on your website, you have to create an
          api key and insert it in customizer "Google Maps API Key" field.
        </p>
      </div>
    </div>
  </section>

  <!-- ===========Support Section==================== -->

  <section class="suport-container grid">
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
  </section>

  <!-- ===================Contact Us======================== -->

@endsection