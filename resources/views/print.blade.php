<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="{{ asset('app.css') }}">
    </head>
<body onload="window.print();">

<div class="receipt">
    <div class="center">
        <strong>TOKO MAJU JAYA</strong><br>
        Jl. Merdeka No. 123
    </div>

    <div class="line"></div>

    <table>
        <tr>
            <td>Produk A</td>
            <td align="right">10.000</td>
        </tr>
        <tr>
            <td>Produk B</td>
            <td align="right">15.000</td>
        </tr>
    </table>

    <div class="line"></div>

    <table class="total">
        <tr>
            <td>Total</td>
            <td align="right">25.000</td>
        </tr>
    </table>

    <div class="center">
        Terima kasih atas kunjungan Anda!
    </div>
</div>

</body>
</html>