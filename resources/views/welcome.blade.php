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
            background:url(/img/plano_fundo.jpg) no-repeat center top fixed;
            min-height: 80vh;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-backgound-size: cover;
            background-size: cover;
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
        .body {
              
        }
    </style>
@stop

@section('body')
<div class="body">
<div class="col-md-12" >
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <span class="title"><i class="fas fa-chess-queen"></i><b> Minha</b> Carteira</span>
                    <div class="box-tools pull-right">
                        <a href="{{ route('login') }}" class="btn btn-success"> <i class="fas fa-lock"></i>&nbsp;&nbsp;&nbsp;Entrar </a>
                    </div>
                    <div class="box-tools pull-right">
                        <a href="{{ route('register') }}" class="btn btn-danger"> <i class="fas fa-lock"></i>&nbsp;&nbsp;&nbsp;Criar Conta </a>
                    </div>
                </div>
                
            </div>
        </div>
    </header>
    <div id="content">
        @yield('content')
</div>
<div>
    <footer>
        <div class="copyright">
            <div class="row">
                <div class="col-md-12">
                    <p>Copyright ® 2019 - Todos os Direitos Reservados</p>
                </div>
            </div>
        </div>
    </footer>
</div>
</div>
</div>
@stop
