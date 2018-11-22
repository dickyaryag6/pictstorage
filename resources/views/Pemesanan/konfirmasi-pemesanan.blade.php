@extends('layouts.app')

@section('content')
<body>
    <div class="container">
      <table>
        <tr>
          <th><?php echo "Order Type : ".$hasilforms["order_type"]; ?></th>
        </tr>
        <tr>
          <th><?php echo "Date : ".$hasilforms["date"]; ?></th>
        </tr>
        <tr>
          <th><?php echo "Location : ".$hasilforms["location"]; ?></th>
        </tr>
      </table>
    <button type="button" name="button" onclick="javascript:location.href='book-a-shoot'">Ubah</button>  
    <button type="button" name="button" onclick="javascript:location.href='pemesanan-berhasil'">Konfirmasi</button>
  </div>
</body>
@endsection
