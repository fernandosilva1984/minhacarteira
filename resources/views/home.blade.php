@extends('adminlte::master')

@section('adminlte_css')
    @yield('css')
    <link rel="stylesheet" href="{{ asset('vendor/select2-4.0.5/dist/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{ asset('vendor/DataTables/datatables.min.css')}} ">
    <link rel="stylesheet" href="{{ asset('vendor/icheck-1.0.2/skins/all.css')}} ">
    <style>
        header {
            background-color: #367fa9;
            color: white;
        }
        header .title {
            font-size: 2em;
        }
        header .phone {
            font-size: 1.3em;
        }
        header .row {
            margin-bottom: 1em;
            margin-top: 1em;
        } 
        #content {
            background-color: #fff;
            min-height: 80vh;
        }
        footer {
            color: white;
        }
        footer .newsletter {
            background-color: #367fa9;
        }
        footer .newsletter .row{
            margin: 1em 0;
        }
        footer .address {
            background-color: #002346;
            padding: 0.5em;
            text-align: center;
        }
        footer .address img{
            height: 12em;
        }
        footer .address address{
            margin: 0.5em 0;
        }
        footer .copyright {
            background-color: #367fa9;
        }
        footer .copyright p{
            text-align: center;
            margin: 0.5em 0;
            font-weight: bold;
        }

        .div_central {
	        text-align: center;
        }
    </style>
@stop

@section('body')
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <span class="title"><i class="fas fa-chess-queen"></i> Gestor de Investimentos</span>
                    <div class="box-tools pull-right">
                        <a href="{{ route('login') }}" class="btn btn-danger"> <i class="fas fa-lock"></i>&nbsp;&nbsp;&nbsp;Área restrita </a>
                    </div>
                </div>
                
            </div>
        </div>
    </header>
    <div id="content">
        @yield('content')

   

<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="https://br.tradingview.com" rel="noopener" target="_blank"><span class="blue-text">Cotações</span></a> por TradingView</div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-tickers.js" async>
  {
  "symbols": [
    {
      "title": "S&P 500",
      "proName": "INDEX:SPX"
    },
    {
      "title": "Nasdaq 1000",
      "proName": "INDEX:IUXX"
    },
    {
      "title": "EUR/USD",
      "proName": "FX_IDC:EURUSD"
    },
    {
      "title": "BTC/USD",
      "proName": "BITFINEX:BTCUSD"
    },
    {
      "description": "USD/BRL",
      "proName": "FX_IDC:USDBRL"
    }
  ],
  "locale": "br"
}
  </script>
</div>
<!-- TradingView Widget END -->

			
			
				



 <!--TradingView Widget END -->
<!-- TradingView Widget BEGIN 
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="https://br.tradingview.com/symbols/FX_IDC-USDBRL/" rel="noopener" target="_blank"><span class="blue-text">USDBRL Preços</span></a> por TradingView</div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
  {
  "symbol": "FX_IDC:USDBRL",
  "width": 350,
  "height": 220,
  "locale": "br",
  "dateRange": "1y",
  "colorTheme": "light",
  "trendLineColor": "#37a6ef",
  "underLineColor": "#e3f2fd",
  "isTransparent": false,
  "autosize": false,
  "largeChartUrl": ""
}
  </script>
</div>
 TradingView Widget END -->
<!-- TradingView Widget BEGIN 
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/bovespa/widgetembed/?symbol=BMFBOVESPA:BBPO11" rel="noopener" target="_blank"><span class="blue-text">BBPO11 Cotações</span></a> por TradingView</div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
  {
  "symbol": "BMFBOVESPA:BBPO11",
  "width": 350,
  "height": 220,
  "locale": "br",
  "dateRange": "1y",
  "colorTheme": "light",
  "trendLineColor": "#37a6ef",
  "underLineColor": "#e3f2fd",
  "isTransparent": false,
  "autosize": false,
  "largeChartUrl": ""
}
  </script>
</div>
 TradingView Widget BEGIN 
<div class="tradingview-widget-container">
  <div id="tradingview_4ca09"></div>
  <div class="tradingview-widget-copyright"><a href="https://s.tradingview.com/bovespa/widgetembed/?symbol=IFIX&interval=1&hidesidetoolbar=1&hidetoptoolbar=1&toolbarbg=f1f3f6&widgetbarwidth=200&hideideas=0&theme=White&style=3&timezone=exchange&locale=br#" rel="noopener" target="_blank"><span class="blue-text">BBPO11 gráfico</span></a> por TradingView</div>
  <script type="text/javascript" src="https://s.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.widget(
  {
  "width": 350,
  "height": 250,
  "symbol": "BMFBOVESPA:IFIX",
  "interval": "D",
  "timezone": "Etc/UTC",
  "theme": "Light",
  "style": "1",
  "locale": "br",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "hide_top_toolbar": true,
  "hide_legend": true,
  "save_image": false,
  "container_id": "tradingview_4ca09"
}
  );
  </script>
</div>
 TradingView Widget END -->
<!-- TradingView Widget END -->

<div class="row">
<div class="col-md-12">
    <div>
        <div class="div_central">
            <span class="div_central">IFIX</span>
        </div>
        <div>
            <IFRAME src="https://s.tradingview.com/bovespa/widgetembed/?symbol=IFIX&interval=1&hidesidetoolbar=1&hidetoptoolbar=1&toolbarbg=f1f3f6&widgetbarwidth=200&hideideas=0&theme=White&style=3&timezone=exchange&locale=br#" name=Destaques width=350 marginwidth="0" height=200 marginheight="0" align="top" scrolling=no frameBorder=0 hspace="0" vspace="0" allowtransparency="true"></IFRAME>
        </div>
    </div>
    <div>
        <div class="div_central" >
            <span class="div_central">BBPO11</span>
        </div>
            <IFRAME src="https://s.tradingview.com/bovespa/widgetembed/?symbol=BBPO11&interval=1&hidesidetoolbar=1&hidetoptoolbar=1&toolbarbg=f1f3f6&widgetbarwidth=200&hideideas=0&theme=White&style=3&timezone=exchange&locale=br#" name=Destaques width=350 marginwidth="0" height=200 marginheight="0" align="top" scrolling=no frameBorder=0 hspace="0" vspace="0" allowtransparency="true"></IFRAME>
        </div>
    </div>
</div>
    </div>
    <footer>
       
      
        <div class="copyright">
            <div class="row">
                <div class="col-md-12">
                    <p>Copyright ® 2019 - Todos os Direitos Reservados</p>
                </div>
            </div>
        </div>
    </footer>
@stop
