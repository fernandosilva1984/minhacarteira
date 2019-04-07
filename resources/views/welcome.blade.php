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
    background-color: #ffffff;
    background: url(/img/plano_fundo.jpg) no-repeat center top fixed;
    min-height: 80vh;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-backgound-size: cover;
    background-size: cover;

}

#content h1 {
    opacity: 8.0;
}

#content p {
    opacity: 1.0;
}

footer {
    color: white;
}

footer .newsletter {
    background-color: #367fa9;
}

footer .newsletter .row {
    margin: 1em 0;
}

footer .address {
    background-color: #002346;
    padding: 0.5em;
    text-align: center;
}

footer .address img {
    height: 12em;
}

footer .address address {
    margin: 0.5em 0;
}

footer .copyright {
    background-color: #367fa9;
}

footer .copyright p {
    text-align: center;
    margin: 0.5em 0;
    font-weight: bold;
}

footer .aviso {

    background-color: #03182E;
}

footer .aviso p {

    font-size: 0.7em;
    text-align: center;
    margin: 0.5em 0;

}

.div_central {
    text-align: center;
}

.body {}
</style>
@stop

@section('body')
<div class="body">
    <div class="col-md-12">
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <span class="title"><img src="img/minhacarteira2.png" alt=""><b> Minha</b> Carteira</span>
                        <div class="box-tools pull-right">
                            <a href="{{ route('login') }}" class="btn btn-success"> <i
                                    class="fa fa-lock"></i>&nbsp;&nbsp;&nbsp;Entrar </a>&nbsp;&nbsp;&nbsp;
                        </div>
                        <div class="box-tools pull-right">
                            <a href="{{ route('register') }}" class="btn btn-danger"> <i
                                    class="fa fa-user-plus"></i>&nbsp;&nbsp;&nbsp;Cadastre-se </a>
                        </div>
                    </div>

                </div>
            </div>
        </header>
        <div id="content">
            @yield('content')
            <div class="row">
                <div class="col-md-6">
                    <h1>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;O que o <b>Minha</b> Carteira oferece?
                    </h1>
                    <P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;O <b>Minha</b> carteira foi criado com o intuido de
                        oferecer
                        uma
                        ferramenta para o gerenciamento de
                        sua(s) carteira(s) de investimentos, nas mais diversas formas (Ações, FII's, Renda Fixa e
                        etc),
                        de
                        forma fácil e totalmente intuitiva para que você possa tomar a melhor decisão de
                        investimento.
                    </p>
                    <h1>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ativos gerenciado no <b>Minha</b> Carteira
                    </h1>
                    <h3>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fundos de Investimento Imobiliário (FII)
                    </h3>
                    <p>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fundo de Investimento Imobiliário (FII) é o instrumento mais
                        eficiente para qualquer tipo de investidor que deseja ter acesso ao investimento em negócios de
                        base imobiliária, de maneira
                        fácil, rápida e com pouco recurso. Os FIIs são constituídos como “condomínios fechados”. São
                        divididos em cotas que, uma vez adquiridas, não podem ser resgatadas, assim como ações de
                        empresas, que
                        devem ser negociadas no ambiente da Bolsa ou Balcão Organizado, assim como exatamente são
                        negociadas
                        ações de empresas.
                    </p>
                    <h3>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Renda Fixa
                    </h3>
                    <p>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Renda fixa é um tipo de investimento onde as pessoas
                        conhecem ou podem prever a
                        rentabilidade, antes mesmo de realizar a operação. Diferente da renda variável, como a Bolsa de
                        Valores, onde a
                        rentabilidade não é garantida e é possível ter algum prejuízo.
                    </p>


                </div>
                <div class="col-md-6">
                    <h1>
                        <p>aqui pretendo colocar um RSS de informações financeiras e economicas
                    </h1>
                </div>
            </div>
        </div>
        <div>
            <footer>
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-12">
                            <p>Copyright ® {{ date ('Y') }} - Todos os Direitos Reservados</p>
                        </div>
                    </div>
                </div>
                <div class="aviso">
                    <div class="row">
                        <div class="col-md-12">
                            <p>AVISO: O <b>Minha</b> Carteira preza pela qualidade do conteúdo e verifica a veracidade
                                das
                                informações aqui publicadas, no entanto, que não faz qualquer tipo de recomendação de
                                investimento, deste modo, não se responsabilizando por perdas, danos (diretos, indiretos
                                e
                                incidentais), custos e lucros.</p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</div>
@stop