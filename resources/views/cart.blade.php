<meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
    <script type="text/javascript"
      src="https://app.sandbox.midtrans.com/snap/snap.js"
      data-client-key="SB-Mid-client-xPAxWEw2iC3DJWdI"></script>
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->

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
      @if ($keranjang->count())
      <table>
        <thead class="thead fs-poppins text-black bold-700 bg-very-light-gray">
          <tr>
            <td>Image</td>
            <td>Product</td>
            <td>Price</td>
            <td>Quantity</td>
            <td>Subtotal</td>
            <td>Action</td>
          </tr>
        </thead>
        <tbody>
          
          @foreach ($keranjang as $k)
            <tr>
              <td>
                <img src="image/p-4.png" alt="" style="height: 200px; ">
              </td>
              <td>{{ $k->product->type }}</td>
              <td>{{ currency_IDR($k->product->harga) }}</td>
              <td>{{ $k->jumlah }} pcs</td>
              <td>{{ currency_IDR($k->harga) }}</td>
              <td>
                <form action="/cart/{{ $k->id }}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="btn btn-danger border-0" onclick="return confirm('Apakah anda yakin?')" >Hapus</button>
                </form>
              </td>
            </tr>
          @endforeach
      </table>
      @else
      <h3 class="fs-poppins text-black text-center">Belum ada produk di keranjang</h3>
      @endif
    </tbody>
      
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
                <button class="fs-poppins text-white bold-800 fs-300 bg-success">Checkout</button>
                <form action="" id="submit_form" method="POST">
                  @csrf
                  <input type="hidden" name="json" id="json_callback">
              </form>
            </div>
        </div>  
    </section>

    <script type="text/javascript">
      // For example trigger on button clicked, or any time you need
      var payButton = document.getElementById('pay-button');
      payButton.addEventListener('click', function () {
        // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
        window.snap.pay('{{ $snap_token }}', {
          onSuccess: function(result){
            /* You may add your own implementation here */
            alert("payment success!"); console.log(result);
            send_response_to_form(result);
          },
          onPending: function(result){
            /* You may add your own implementation here */
            alert("wating your payment!"); console.log(result);
            send_response_to_form(result);
          },
          onError: function(result){
            /* You may add your own implementation here */
            alert("payment failed!"); console.log(result);
            send_response_to_form(result);
          },
          onClose: function(){
            /* You may add your own implementation here */
            alert('you closed the popup without finishing the payment');
          }
        })
      });

      function send_response_to_form(result){
        document.getElementById('json_callback').value = JSON.stringify(result);
        $('#submit_form').submit();
      }
    </script>
    
    @endsection