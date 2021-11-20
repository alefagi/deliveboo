@extends('layouts.guest')

@section('content')


  <section id="payment-section">
    <div id="loader-container" class="d-none">
      <h2 class="text-center">Payment in progress</h2>
      <div id="loader" class="loading-spinner m-auto"></div>
    </div>
      <div id="payment-container" class="container">
        @if (session('success_message'))
            <div class="alert alert-success">
                {{ session('success_message') }}
            </div>
        @endif
        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="post" id="payment-form" action="{{ route('buy.store', ['total' => $total]) }}">
            @csrf
            <section>
                <h1>Il tuo totale è: {{$total}}</h1>
                <div class="bt-drop-in-wrapper">
                    <div id="bt-dropin"></div>
                </div>
            </section>
            <input id="nonce" name="payment_method_nonce" type="hidden" />
            <button class="button" type="submit"><span>Test Transaction</span></button>
        </form>
      </div>
  </section>
@endsection

@section('script')
    <script src="https://js.braintreegateway.com/web/dropin/1.32.0/js/dropin.min.js"></script>
    <script src="{{asset('js/paymment.js')}}"></script>

    <script>
        var form = document.querySelector('#payment-form');
        var client_token = "{{$token}}";

        loaderElement = document.getElementById('loader-container');
        paymentContainerElement= document.getElementById('payment-container');

        let isLoading = false;

        braintree.dropin.create({
          authorization: client_token,
          selector: '#bt-dropin',
          paypal: {
            flow: 'vault'
          }
        }, function (createErr, instance) {
          if (createErr) {
            console.log('Create Error', createErr);
            return;
          }
          form.addEventListener('submit', function (event) {
            event.preventDefault();

            instance.requestPaymentMethod(function (err, payload) {
              if (err) {
                console.log('Request Payment Method Error', err);
                return;
              }

              // Add the nonce to the form and submit
              document.querySelector('#nonce').value = payload.nonce;
              loaderElement.classList.remove('d-none');
              paymentContainerElement.classList.add('d-none')
              form.submit();
            });
          });
        });
    </script>
@endsection