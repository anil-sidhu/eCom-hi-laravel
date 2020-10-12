@extends('master')
@section('content')

<div class="custom-product">
        
          <div class="col-sm-3">
              <a href="#">Filter</a>
          </div>
          <div class="col-sm-4">
            <div class="trending-wrapper">
                <h1>Result</h1>
                <div class="">
                  @foreach ($products as $item)
                  <div class="search-item">
                    <a href="detail/{{$item['id']}}">
                  <img class="trending-img" src="{{$item['gallery']}}">
                    <div class="">
                    <h3>{{$item['name']}}</h3>
                    <h5>{{$item['description']}}</h5>
                    </div>
                  </a>
                  </div>  
                  @endforeach
                </div>
              </div>
          </div>
</div>
@endsection