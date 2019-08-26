@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      @php
          $collection = [
            'paket' => [
              'Paket 1' => ['Peti Mati', 'Kremasi'],
              'Paket 2' => ['Peti Mati', 'Kremasi'],
              'Paket 3' => ['Peti Mati', 'Kremasi'],
            ]
          ];
      @endphp


      @foreach ($collection as $key => $value)
        @foreach ($value as $v => $val)
          <div class="col-md-4">
            <div class="card">
              <img class="card-img-top img-fluid" src="https://picsum.photos/id/157/400/200">
              <div class="card-body">
                <h4 class="card-title">{{ $v }} </h4>
                <p class="card-text">
                  Harga : 2.000.000
                </p>
              </div>
              <ul class="list-group list-group-flush">
                  <li class="list-group-item">Item 1</li>
                  <li class="list-group-item">Item 1</li>
                  <li class="list-group-item">Item 1</li>
                  <li class="list-group-item">Item 1</li>
              </ul>
              <div class="card-footer">
                <button type="submit" class="btn btn-success btn-sm">Order</button>
              </div>
            </div>
          </div>
        @endforeach
      @endforeach
      
    </div>
</div>
@endsection