<!--Holiday packages -->

<!--Homepage-->
@extends('./layouts/main')
@section('content')
    <div class="container">
        <h1>Holiday packages</h1>
        @foreach ($holidays as $holiday)
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{ $holiday->Location }}</h5>
              <h5>{{ $holiday->Country }}</h5>
              <p class="card-text">{{ $holiday->Description }}</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        @endforeach
    </div>
@endsection