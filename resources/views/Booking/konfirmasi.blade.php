@extends('layouts.app')

@section('content')
<body>
    <div class="container">
      <table>
        @foreach ($hasilforms as $hasilform)
        <tr>
          <th>
            <?php
            //echo $hasilforms['_token'];
            if ($hasilform !== $hasilforms['_token']) :
              echo $hasilform;
            endif;
            ?>
          </th><br>
        </tr>
        @endforeach
        <!-- <tr>
          <th>

        </th>
        </tr>
        <tr>
          <th></th>
        </tr> -->
      </table>
    <button type="button" name="button" onclick="javascript:location.href='book'">Ubah</button>
    <button type="button" name="button" onclick="javascript:location.href='pembayaran'">Konfirmasi</button>
  </div>
</body>
@endsection
