@extends('layouts.app')

@section('content')
<body>
  <div>

      @foreach($hasilforms as $hasilform)
        <?php echo $hasilform; ?>
        <br>
      @endforeach


  </div>
</body>
@endsection
