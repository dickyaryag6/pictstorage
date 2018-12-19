
<body>


      <div class="information">
          <table width="100%">
              <tr>
                  <td align="left" style="width: 40%;">
                      <!-- nama  -->
                      <pre>

      <br />
      Date: {{$book->date}}
      Identifier: {{$book->order_id}}
      Status: Paid
      </pre>


                  </td>
                  <td align="center">
                      <!-- <img src="images/navbar_logo.png" alt="Logo" width="64" class="logo"/> -->
                      <img src="images/navbar_logo.png" alt="" class="brand-image" style="background-color: #000">
                  </td>
                  <td align="right" style="width: 40%;">

                      <h3>PictStorage</h3>
                      <pre>
                          <!-- https://company.com -->
                          Dramaga Cantik Residence
                          S.08, Dramaga,
                          Bogor, Jawa Barat.
                      </pre>
                  </td>
              </tr>

          </table>
      </div>


<br/>

      <div class="invoice">
          <h3>Invoice specification</h3>
          <table width="100%">
              <thead>
              <tr>
                  <th>Description</th>
                  <!-- <th>Total</th> -->
              </tr>
              </thead>
              <tbody>
              <tr>
                  <td>jenis   :{{$book->order_type}}</td>
                  <td>Tanggal :{{$book->date}}, {{$book->jam}}</td>
                  @if ($book->order_type === 'wedding')
                    <td>Durasi: {{$book->durasi}} jam</td>
                    <td>Jumlah Orang: {{$book->jumlah_orang}}</td>
                    <td align="left"></td>
                  @endif
              </tr>
              </tbody>


              <tfoot>
              <tr>
                  <td colspan="1"></td>
                  <td align="left">Total</td>
                  @if ($book->order_type === 'wedding')
                    <td align="left" class="gray">IDR 7.000.000</td>
                  @elseif ($book->order_type === 'engagement')
                    <td align="left" class="gray">IDR 3.500.000</td>
                  @elseif ($book->order_type === 'photobooth')
                    <td align="left" class="gray">IDR 1.500.000</td>
                  @else
                    <td align="left" class="gray">IDR 2.000.000</td>
                  @endif
              </tr>
              </tfoot>
              <hr>
          </table>
      </div>

      <div class="information" style="position: absolute; bottom: 0;">
          <table width="100%">
              <tr>
                  <!-- <td align="left" style="width: 50%;">
                      &copy; {{ date('Y') }} {{ config('app.url') }} - All rights reserved.
                  </td> -->
                  <!-- <td align="right" style="width: 50%;">
                      Company Slogan
                  </td> -->
              </tr>

          </table>
      </div>
</div>


</body>
