@extends('layouts.guest')

@section('content')
    <div class="container">
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
@endsection

@section('script')
    <script src="https://js.braintreegateway.com/web/dropin/1.32.0/js/dropin.min.js"></script>
    <script>
        var form = document.querySelector('#payment-form');
        var client_token = "{{$token}}";

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
              form.submit();
            });
          });
        });
    </script>
@endsection