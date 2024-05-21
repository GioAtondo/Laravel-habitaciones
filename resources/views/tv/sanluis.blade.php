<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="{{ asset('admin_assets/img/araiza_logo.svg') }}" rel="icon">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <title>Hotel Araiza | San Luis</title>
</head>

<body>
<div class="container" style="margin:30px;">
    <div class="imagen">
        <image src="{{ asset('admin_assets/img/araiza_logo.svg')}}" width="100" height="100"></image>
    </div>
    <div class="izquierda">
        <div class="centrado">
            <p style="margin-bottom:10px;">Entrada</p>
            <p>Check In:</p>
            <p>3:00 PM</p>
        </div>
    </div>
    <div class="centro">
        <div class="centrado">
            <p style="margin-bottom:10px;">Salida</p>
            <p>Check Out:</p>
            <p>1:00 PM</p>
        </div>
    </div>
    <div class="derecha">
        <div class="centrado">
            <p>Dolar: </p>
            @foreach($cambio as $c)
            <p>{{ $c->dolar }} M.N.</p>
            @endforeach
        </div>
    </div>
    <div class="widget">
        <div class="fecha">
            <p>{{ ucfirst(\Carbon\Carbon::now()->locale('es')->isoFormat('dddd D [de] MMMM [del] YYYY')) }}</p>

        </div>
        <div class="reloj" id="live-time"></div>
    </div>
    </div>
    <div class="container">
    
        <div class="table-responsive-vertical">
            <table class="table table-striped table-mc-red">
                <thead>
                    <tr>
                        <th style="text-align: left;">HABITACIONES <br> <a>TARIFA RACK</a></th>
                        <th>MXN</th>
                        <th>USD</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($hab as $h)     
                    <tr>
                        <td style="text-align: left;"><b>{{ $h->Tipo }}</b></td>
                        @foreach($cambio as $c)
                        <td><b>$ {{ number_format($h->precio * $c->dolar,2, '.', ',') }}</b></td>
                        @endforeach
                        <td><b>$ {{ $h->precio }}</b></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="footer">
        <div class="letra">
            Todos los precios incluyen impuestos. / Taxes are includeded in all the prices.
            <br>
            Aviso de Privacidad en www.araizahoteles.com
            <br>
            All Rights Reserved
        </div>
    </div>
</body>

</html>

<script>
    function updateLiveTime() {
        // Define the route URL manually
        var routeUrl = "{{ route('getCurrentTime') }}";

        fetch(routeUrl)
            .then(response => response.json())
            .then(data => {
                document.getElementById('live-time').textContent = data.time;
            })
            .catch(error => {
                console.error('Error fetching current time:', error);
            });
    }

    // Update the live time every second
    setInterval(updateLiveTime, 1000);

    // Initial update
    updateLiveTime();
</script>






<style>
html, body {
    font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
    font-weight: bold;
    font-size: 75%;
    height: 100%;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background: #004969;
}

.container {
    margin: 20px auto;
    max-width: 2000px;
    padding-bottom: 60px; 
}

.table {
    width: 100%;
    max-width: 100%;
    margin-bottom: 2rem;
    background-color: #004969;
    border-collapse: collapse;
    border-bottom: 3px solid #023b53;
}

.table>thead>tr, .table>tbody>tr, .table>tfoot>tr {
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
}

.table>thead>tr>th, .table>tbody>tr>th, .table>tfoot>tr>th, .table>thead>tr>td, .table>tbody>tr>td, .table>tfoot>tr>td {
    color: white;
    font-size: 2rem;
    padding: 1.6rem;
    vertical-align: top;
    border-top: 0;
    text-align: center;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
}




.table>thead>tr>th {
    font-weight: bold;
    color: white;
    vertical-align: bottom;
    background-color: #023b53;
}

.table>caption+thead>tr:first-child>th, .table>colgroup+thead>tr:first-child>th, .table>thead:first-child>tr:first-child>th, .table>caption+thead>tr:first-child>td, .table>colgroup+thead>tr:first-child>td, .table>thead:first-child>tr:first-child>td {
    border-top: 0;
}

.table>tbody+tbody {
    border-bottom: 3px solid #023b53;
}

.table .table {
    background: #004969;
    border-top: 3px solid #023b53;
    border-bottom: 3px solid #023b53;
    
}

.table .no-border {
    border-top: 3px solid rgba(0, 0, 0, 0.12);
    border-bottom: 3px solid rgba(0, 0, 0, 0.12);
}

.table-condensed>thead>tr>th, .table-condensed>tbody>tr>th, .table-condensed>tfoot>tr>th, .table-condensed>thead>tr>td, .table-condensed>tbody>tr>td, .table-condensed>tfoot>tr>td {
    border-top: 3px solid rgba(0, 0, 0, 0.12);
    border-bottom: 3px solid rgba(0, 0, 0, 0.12);
}

.table-bordered>thead>tr>th, .table-bordered>thead>tr>td {
    border-bottom-width: 2px;
    border-top: 3px solid rgba(0, 0, 0, 0.12);
    border-bottom: 3px solid rgba(0, 0, 0, 0.12);
}

.table-striped>tbody>tr:nth-child(odd)>td, .table-striped>tbody>tr:nth-child(odd)>th {
    background-color: #f5f5f5;
    border-top: 3px solid #023b53;
    border-bottom: 3px solid #023b53;
}

.table-hover>tbody>tr:hover>td, .table-hover>tbody>tr:hover>th {
    background-color: rgba(0, 0, 0, 0.12);
    border-top: 3px solid #023b53;
    border-bottom: 3px solid #023b53;
}

@media screen and (max-width: 768px) {
    .table-responsive-vetical>.table {
        margin-bottom: 0;
        background-color: transparent;
    }
    .table-responsive-vetical>.table>thead, .table-responsive-vetical>.table>tfoot {
        display: none;
    }
    .table-responsive-vetical>.table>tbody {
        display: block;
    }
    .table-responsive-vetical>.table>tbody>tr {
        display: block;
        border: 1px solid #e0e0e0;
        border-radius: 2px;
        margin-bottom: 1.6rem;
    }
    .table-responsive-vetical>.table>tbody>tr>td {
        background-color: #fff;
        vertical-align: middle;
        text-align: right;
    }
    .table-responsive-vetical>.table>tbody>tr>td[data-title]::before {
        content: attr(data-title);
        float: left;
        font-size: inherit;
        font-weight: 400;
        color: #757575;
    }
    .table-responsive-vetical>.table-bordered {
        border: 0;
    }
    .table-responsive-vetical>.table-bordered>tbody>tr>td {
        border: 0;
        border-bottom: 1px solid #e0e0e0;
    }
    .table-responsive-vetical>.table-bordered>tbody>tr>td:last-child {
        border-bottom: 0;
    }
    .table-responsive-vetical>.table-bordered>tbody>tr>td, .table-responsive-vetical>.table-bordered>tbody>tr:nth-child(odd) {
        background-color: #fff;
    }
    .table-responsive-vetical>.table-bordered>tbody>tr>td:nth-child(odd) {
        background-color: #f5f5f5;
    }
    .table-responsive-vetical>.table-hover>tbody>tr:hover>td, .table-responsive-vetical>.table-hover>tbody>tr:hover {
        background-color: #fff;
    }
    .table-responsive-vetical>.table-hover>tbody>tr>td:hover {
        background-color: rgba(0, 0, 0, 0.12);
    }
}

.table-striped.table-mc-red>tbody>tr:nth-child(odd)>td, .table-striped.table-mc-red>tbody>tr:nth-child(odd)>th {
    background-color: #004969;
}

.table-striped.table-mc-red>tbody>tr:hover>td, .table-striped.table-mc-red>tbody>tr:hover>th {
    background-color: #004969;
}

.widget {
    width: 20%;
    height: 20%;
    top: 4%;
    position: fixed;
    bottom: 0;
    right: 0;
    text-align: right;
    margin: 5px;
    padding: 1px;
}

.widget p {
    display: inline-block;
    line-height: 1em;
}

.fecha {
    font-family: arial;
    text-align: center;
    font-size: 1.5rem;
    color: white;
    margin-bottom: 5px;
    background: #004969;
    padding: 5px;
    width: 100%;
}

.reloj {
    font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
    width: 100%;
    padding: 5px;
    font-size: 2.3rem;
    color: white;
    text-align: center;
    background: #004969;
    margin-bottom: 5px;
}

.reloj .cajaSegundos {
    display: inline-block;
}

.reloj .ampm,
.reloj .segundos {
    display: block;
    font-size: 1.5rem;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.letra {
    font-size: 1.5em;
    color: white;
}

.footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    text-align: center;
    background: #004969;
    padding: 10px 0;
    color: white;
}

.imagen {
    margin-left: 90px;
    padding: 1px;
}

.centrado {
    color: white;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 1.8em;
    background: #004969;
}

p {
    font-size: 1.3em;
}

.centro {
    width: 10%;
    height: 10%;
    top: 7%;
    position: fixed;
    bottom: 0;
    right: 44.5%;
    left: 44.5%;
    text-align: center;
    align-items: center;
    margin: 1px;
    padding: 1px;
}

.izquierda {
    width: 10%;
    height: 10%;
    top: 7%;
    position: fixed;
    bottom: 0;
    right: 24.5%;
    left: 24.5%;
    text-align: center;
    align-items: left;
    margin: 1px;
    padding: 1px;
}

.derecha {
    width: 10%;
    height: 10%;
    top: 7%;
    position: fixed;
    bottom: 0;
    right: 64.5%;
    left: 64.5%;
    text-align: center;
    align-items: right;
    margin: 1px;
    padding: 1px;
}
a {
    font-size: 0.8em;
}
</style>
