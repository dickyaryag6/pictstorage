<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Invoice - #123</title>

    <style type="text/css">
        @page {
            margin: 0px;
        }
        body {
            margin: 0px;
        }
        * {
            font-family: Verdana, Arial, sans-serif;
        }
        a {
            color: #fff;
            text-decoration: none;
        }
        table {
            font-size: x-small;
        }
        tfoot tr td {
            font-weight: bold;
            font-size: x-small;
        }
        .invoice table {
            margin: 15px;
        }
        .invoice h3 {
            margin-left: 15px;
        }
        .information {
            background-color: #60A7A6;
            color: #FFF;
        }
        .information .logo {
            margin: 5px;
        }
        .information table {
            padding: 10px;
        }
    </style>

</head>
<body>

<div class="information">
    <table width="100%">
        <tr>
            <td align="left" style="width: 40%;">
                <h3>{{$book->nama}}</h3>
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
            <td>Tanggal :{{$book->date}}, [[$book->jam]]</td>
            <td align="left"></td>
        </tr>
        </tbody>


        <tfoot>
          <hr>
        <tr>
            <td colspan="1"></td>
            <td align="left">Total</td>\
            @if ({$book->order_type === 'wedding'})
              <td align="left" class="gray">IDR 7.000.000</td>
            @if ({$book->order_type === 'engagement'})
              <td align="left" class="gray">IDR 3.500.000</td>
            @if ({$book->order_type === 'photobooth'})
              <td align="left" class="gray">IDR 1.500.000</td>
            @else
              <td align="left" class="gray">IDR 2.000.000</td>
        </tr>
        </tfoot>
    </table>
</div>

<div class="information" style="position: absolute; bottom: 0;">
    <table width="100%">
        <tr>
            <td align="left" style="width: 50%;">
                &copy; {{ date('Y') }} {{ config('app.url') }} - All rights reserved.
            </td>
            <td align="right" style="width: 50%;">
                Company Slogan
            </td>
        </tr>

    </table>
</div>
</body>
</html>
