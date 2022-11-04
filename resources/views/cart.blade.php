@extends('layouts.main')
@section('content')  
   <!-- ===================Shop Feature Section============================ -->

    <section class="shop-feature bg-gray grid">
      <div>
        <p class="fs-montserrat text-black">
          Home <span aria-hidden="true" class="margin">></span> Cart
        </p>
      </div>
      <h2 class="fs-poppins fs-300 bold-700">Cart</h2>
    </section>

    <!-- ===============================Cart Section=================== -->

    <section class="table">
      <table>
        <thead class="thead fs-poppins text-black bold-700 bg-very-light-gray">
          <tr>
            <td></td>
            <td></td>
            <td>Product</td>
            <td>Price</td>
            <td>Quantity</td>
            <td>Subtotal</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><i class="uil uil-times"></i></td>
            <td><i class="uil uil-user-circle"></i></td>
            <td>Beats</td>
            <td>$995.00</td>
            <td><input type="number" min="0" max="10" /></td>
            <td>$4975.00</td>
          </tr>
          <tr>
            <td><i class="uil uil-times"></i></td>
            <td><i class="uil uil-user-circle"></i></td>
            <td>Beats</td>
            <td>$995.00</td>
            <td><input type="number" min="0" max="10" /></td>
            <td>$4975.00</td>
          </tr>
          <tr>
            <td><i class="uil uil-times"></i></td>
            <td><i class="uil uil-user-circle"></i></td>
            <td>Beats</td>
            <td>$995.00</td>
            <td><input type="number" min="0" max="10" /></td>
            <td>$4975.00</td>
          </tr>
        </tbody>
      </table>

      <div class="copen-box flex">
        <div>
            <input class="copen-input fs-poppins text-black" type="text">
            <button class="cupen-btn fs-poppins bold-700 text-black">Apply coupen</button>
        </div>
        <div>
            <button class="cupen-btn fs-poppins bold-700 text-black">Update cart</button>
        </div>
    </div>
      
    </section>

    <section class="check-out grid">

        <div>

        </div>
        <div>
        <h3 class="fs-poppins fs-300 text-black bold-700">Cart totals</h3>

        <table>
            <thead class="thead fs-poppins text-black bold-700">
              <tr>
                <td class="bg-very-light-gray">Subtotal</td>
                <td>$4,975.00</td>
              </tr>
            </thead>
            <thead class="thead fs-poppins text-black bold-700">
              <tr>
                <td class="bg-very-light-gray">Total</td>
                <td class="bold-700">$4,975.00</td>
              </tr>
            </thead>
            <tbody>
            </table>
            <div class="grid">
                <button class="fs-poppins text-black bold-800 fs-300 bg-gray">Proceed to checkout</button>
            </div>
        </div>

    </section>
    @endsection