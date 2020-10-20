@extends('master')
@section('content')

<div class="custom-product">
          <div class="col-sm-10">
            <div class="trending-wrapper">
                <h2>My Order</h2>
                <div class="">
                  @foreach ($orders as $item)
                  <div class="row search-item cart-list-devider">
                    <div class="col-sm-3">
                        <a href="detail/{{$item->id}}">
                            <img class="trending-img" src="{{$item->gallery}}">
                            </a>
                    </div>
                    <div class="col-sm-3">  
                              <div class="">
                              <h4>Address {{$item->address}}</h4>
                              <h5>Delivery : {{$item->status}}</h5>
                              <h5>Payment  : {{$item->payment_method}}</h5>
                              </div>  
                    </div>
                    <div class="col-sm-3">
                        {{-- <a href="/removecart/{{$item->order_id}}" class="btn btn-warning" >Remove From Cart</a>       --}}
                    </div>
                  </div>  
                  @endforeach
                </div>
              </div>
          </div>
</div>
@endsection