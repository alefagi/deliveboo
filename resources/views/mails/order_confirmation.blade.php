<h1>The order was successful</h1>

<h1>Order Summary</h1>
        <ul>
          
          @foreach ($cart as $item)
              <li>
               <h5>
                 {{$item['dish']['name']}}
              </h5>
              <span>Quantity: {{$item['quantity']}}</span>
              <p>Price: {{$item['dish']['price'] * $item['quantity'] }} €</p>
            </li>
          @endforeach
        </ul>
        <hr>
        {{-- <div id="total">
          <h4>Total: {{$total}}</h3>
        </div> --}}