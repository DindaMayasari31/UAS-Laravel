@section('layouts.main')

@section('container')
    <h2> Halaman About</h1>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img src="img/{{ $image  }}" alt="{{ $name  }}" width="200">
@endsection