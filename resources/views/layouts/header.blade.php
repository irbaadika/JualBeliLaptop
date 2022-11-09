<header class="primary-header container flex">
  <div class="header-inner-one flex">
    <div class="logo">
      <img src="image/logo.png" alt="" />
    </div>
    <button
      class="mobile-close-btn"
      data-visible="false"
      aria-controls="primary-navigation"
    >
      <i class="uil uil-times-circle"></i>
    </button>
    <nav>
      <ul id="primary-navigation" data-visible="false" class="primary-navigation flex" >
        <li>
          <a class="active fs-100 fs-montserrat bold-500" href="/"
            >Home</a
          >
        </li>
        <li>
          <a class="fs-100 fs-montserrat bold-500" href="/shop"
            >Shop</a
          >
        </li>
        <li>
          <a class="fs-100 fs-montserrat bold-500" href="/about"
            >About Us</a
          >
        </li>
        <li>
          <a class="fs-100 fs-montserrat bold-500" href="/contactus"
            >Contact Us</a
          >
        </li>
        
      </ul>
    </nav>
  </div>

  <div class="header-login flex">
    <nav>
      <ul id="primary-navigation" data-visible="false" class="primary-navigation flex" >
        
        <li>
          <img src="image/search.png" alt="search">
        </li>
        <li>
          <a class="fs-100 fs-montserrat bold-500" href="/cart"
            ><img src="image/cart.png" alt="cart"></a
          >
        </li>
        <li>
          <a class="fs-100 fs-montserrat bold-500" href="/login"
            >Login</a>
        </li>
        {{-- <li>
          <i id="cart-box" aria-controls="cart-icon" class="uil uil-shopping-bag" ></i>
          <!-- =================1111111111================== -->
          <div id="cart-icon" data-visible="false" class="cart-icon">
            <div class="shopping flex">
              <p>Shopping Basket</p>
              <i id="cross-btn" class="uil uil-times"></i>
            </div>
            <div class="cart bold-800 flex">
              <i class="uil uil-shopping-cart-alt"></i>
              <p>Cart Is Empty</p>

              <!-- ================================================== -->

              <!-- ================================================== -->
          </div>
        </li> --}}
      </ul>
    </nav>
    {{-- <a href="/login">
    <p class="fs-100 fs-montserrat bold-500">login</p></a>
    
    <i class="uil uil-search"></i>
    <i
      id="cart-box"
      aria-controls="cart-icon"
      class="uil uil-shopping-bag"
    ></i> --}}

    
    </div>
  </div>
  <div class="mobile-open-btn"><i class="uil uil-align-right"></i></div>
</header>