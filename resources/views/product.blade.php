@extends('layouts.main')
@section('content')
    <!-- ==================Single Product-============================= -->
    <section class="single-product grid">
      <div>
        <img src="/image/product-img.jpg" alt="" />
      </div>
      <div class="product-info grid">
        <h1 class="fs-poppins fs-400 blod-900">Beats</h1>
        <div class="star-icon flex">
          <div>
            <i class="uil text-red uil-star"></i>
            <i class="uil text-red uil-star"></i>
            <i class="uil text-red uil-star"></i>
            <i class="uil text-red uil-star"></i>
            <i class="uil uil-star"></i>
          </div>
          <div>
            <p class="fs-montserrat fs-100">(1 customer review)</p>
          </div>
        </div>

        <div class="price">
          <p class="bold-700 fs-poppins fs-300">$ 995.00</p>
        </div>

        <div>
          <p class="fs-montserrat lineheight">
            There are many variations passages of Lorem Ipsum available, but the
            majority have suffered alteration words some form by injected or
            randomized which don’t even slightly believable. If you are going to
            use a passage of Lorem Ipsum, you need to be sure there isn’t
            anything
          </p>
        </div>

        <div class="product-add-cart flex">
          <input type="number" min="0" max="10" class="bg-gray fs-poppins" />
          <button
            class="product-btn large-btn bg-red text-white fs-poppins fs-50"
          >
            Add to cart
          </button>
        </div>

        <div>
          <p class="fs-montserrat text-red">
            <span class="text-black">Category: </span>Headphone
          </p>
        </div>
      </div>
    </section>

    <!-- ==================Single Product-============================= -->

    <!-- ==============Product Description====================== -->

    <section class="product-description grid">
      <div class="product-taps flex">
        <a id="dis-tab" class="fs-poppins fs-200 text-black bold-700 active-tab"
          >Description</a
        >
        <a
          id="rev-tab"
          class="fs-poppins fs-200 text-black bold-700 tabs-light-text"
          >Reviews(1)</a
        >
      </div>

      <div class="description grid" data-tab="false">
        <h3 class="text-black fs-poppins fs-300">Description</h3>
        <p class="fs-montserrat lineheight">
          There are many variations passages of Lorem Ipsum available, but the
          majority have suffered alteration words some form by injectedor
          randomized which don’t even slightly believable. If you are going to
          use a passage of Lorem Ipsum, you need to be sure there isn’t anything
          embarrassing hidden in the middle of text. All the Lorem Ipsum
          generators on the Internet tend to repeat predefined chunks as
          necessary, making this the first true generator on the Internet. It
          uses a dictionary of over 200 Latin words, combined with a handful of
          model sentence structures, to generate Lorem Ipsum which looks
          reasonable. The generated Lorem Ipsum is therefore always free from
          repetition, injected humour, or non-characteristic words etc.
        </p>
      </div>

      <article class="reviews-container" data-tab="false">
        <div class="reviews">
          <p class="text-black fs-poppins fs-200 bold-700">
            1 review for Rockey Mountain
          </p>
        </div>
        <div id="post-reviews">
          <div
            id="display-reviews"
            class="display-reviews bg-very-light-gray flex"
          >
            <div>
              <i class="uil text-black uil-user-circle"></i>
            </div>
            <div>
              <div class="connent-box">
                <i class="uil text-red uil-star"></i>
                <i class="uil text-red uil-star"></i>
                <i class="uil text-red uil-star"></i>
                <i class="uil text-red uil-star"></i>
                <i class="uil uil-star"></i>
                <p class="fs-poppins fs-200">
                  <span class="bold-700">Paul </span>- October 7, 2019
                </p>
                <p class="fs-poppins fs-200">Hello</p>
              </div>
              <div class="flex likes-icon">
                <i class="uil bg-gray uil-thumbs-up"></i>
                <i class="uil bg-gray uil-thumbs-down"></i>
                <span id="count-like" class="bg-white fs-poppins">0</span>
              </div>
            </div>
          </div>
        </div>

        <div class="grid">
          <div class="reviews">
            <p class="text-black fs-poppins fs-200">Add a review</p>
          </div>

          <div class="give-reviews flex">
            <div>
              <p class="text-black fs-poppins fs-200 bold-700">Your rating *</p>
            </div>
            <div>
              <i class="uil uil-star"></i>
              <i class="uil uil-star"></i>
              <i class="uil uil-star"></i>
              <i class="uil uil-star"></i>
              <i class="uil uil-star"></i>
            </div>
          </div>
          <div class="message grid">
            <p class="fs-montserrat">Your review</p>
            <textarea
              type="text"
              rows="10"
              class="bg-very-light-gray fs-montserrat"
            ></textarea>
          </div>
        </div>
        <div class="review-btn flex">
          <button
            id="add-connent"
            class="large-btn bg-red text-white fs-poppins fs-50"
          >
            Submit
          </button>
        </div>
      </article>
    </section>

    <!-- ==============Product Description====================== -->

    <!-- ============Related Product Section===================== -->

    <!-- =================Related Product Section ================================ -->
    <section class="best-product container">
      <h2 class="letter-spacing bold-800 fs-poppins">Related products</h2>
    </section>

    <!-- ============Related Product Section===================== -->

    <!-- ===========================Heading======================== -->
    <section class="best-Seller related-product">
      <div class="product grid">
        <img src="/image/p-2.jpg" alt="" />
        <p class="fs-poppins bold-500">White EliteBook Tablet 810</p>
        <p class="fs-poppins bold-500">$995.00</p>

        <!-- ---------------------------- -->
        <div class="product-details grid bg-red">
          <i class="text-white uil uil-shopping-cart-alt"></i>
          <i class="text-white uil uil-heart-alt"></i>
        </div>
        <!-- ===================================== -->
      </div>
      <div class="product grid">
        <img src="/image/p-3.jpg" alt="" />
        <p class="fs-poppins bold-500">White EliteBook Tablet 810</p>
        <p class="fs-poppins bold-500">$995.00</p>

        <!-- ---------------------------- -->
        <div class="product-details grid bg-red">
          <i class="text-white uil uil-shopping-cart-alt"></i>
          <i class="text-white uil uil-heart-alt"></i>
        </div>
        <!-- ===================================== -->
      </div>
      <div class="product grid">
        <img src="/image/p-4.jpg" alt="" />
        <p class="fs-poppins bold-500">Game Console Controller Cable</p>
        <p class="fs-poppins bold-500">$995.00</p>

        <!-- ---------------------------- -->
        <div class="product-details grid bg-red">
          <i class="text-white uil uil-shopping-cart-alt"></i>
          <i class="text-white uil uil-heart-alt"></i>
        </div>
        <!-- ===================================== -->
      </div>
      <div class="product grid">
        <img src="/image/p-5.jpg" alt="" />
        <p class="fs-poppins bold-500">Rocky Mountain</p>
        <p class="fs-poppins bold-500">$995.00</p>

        <!-- ---------------------------- -->
        <div class="product-details grid bg-red">
          <i class="text-white uil uil-shopping-cart-alt"></i>
          <i class="text-white uil uil-heart-alt"></i>
        </div>
        <!-- ===================================== -->
      </div>
      <div class="product grid">
        <img src="/image/p9.jpg" alt="" />
        <p class="fs-poppins bold-500">White EliteBook Tablet 810</p>
        <p class="fs-poppins bold-500">$995.00</p>

        <!-- ---------------------------- -->
        <div class="product-details grid bg-red">
          <i class="text-white uil uil-shopping-cart-alt"></i>
          <i class="text-white uil uil-heart-alt"></i>
        </div>
        <!-- ===================================== -->
      </div>
      <div class="product grid">
        <img src="/image/p-7.jpg" alt="" />
        <p class="fs-poppins bold-500">Wireless Audio System Multiroom 360</p>
        <p class="fs-poppins bold-500">$995.00</p>

        <!-- ---------------------------- -->
        <div class="product-details grid bg-red">
          <i class="text-white uil uil-shopping-cart-alt"></i>
          <i class="text-white uil uil-heart-alt"></i>
        </div>
        <!-- ===================================== -->
      </div>
      <div class="product grid">
        <img src="/image/p8.png" alt="" />
        <p class="fs-poppins bold-500">Wireless Audio System Multiroom 360</p>
        <p class="fs-poppins bold-500">$995.00</p>

        <!-- ---------------------------- -->
        <div class="product-details grid bg-red">
          <i class="text-white uil uil-shopping-cart-alt"></i>
          <i class="text-white uil uil-heart-alt"></i>
        </div>
        <!-- ===================================== -->
      </div>
      <div class="product grid">
        <img src="/image/p9.jpg" alt="" />
        <p class="fs-poppins bold-500">Smartwatch 2.0 LTE Wifi</p>
        <p class="fs-poppins bold-500">$995.00</p>

        <!-- ---------------------------- -->
        <div class="product-details grid bg-red">
          <i class="text-white uil uil-shopping-cart-alt"></i>
          <i class="text-white uil uil-heart-alt"></i>
        </div>
        <!-- ===================================== -->
      </div>
    </section>

    @endsection