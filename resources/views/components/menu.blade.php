<div class="menu-bloco">
        <div class="responsive-bar">
            <div class="logo">
                <a href="/"><img src="/img/logo.jpeg" alt="logo" /></a>
            </div>
            <div class="menu">
                <h4><i class="fas fa-bars"></i></h4>
            </div>
        </div>
        <nav>
            <div class="logo">
                <a href="/"><img src="/img/logo_ecoplac_branco.png" id="logo_branco" alt="logo" /></a>
                <a href="/"><img src="/img/logo_menu.png" hidden id="logo" alt="logo" /></a>
            </div>
            <ul>
                <li>
                    <div class="dropdown">
                        <a class="dropbtn">Produtos</a>
                        <div class="dropdown-content">
                            <a href="{{route('produtos')}}">Todos os Produtos</a>
                            <a href="{{route('madeirite')}}">Madeirites</a>
                            <a href="{{route('compensados')}}">Compensados</a>
                            <a href="{{route('madeiras-serradas')}}">Madeiras Serradas</a>
                            <a href="{{route('ecowall')}}">Painel Ecowall</a>

                        </div>
                    </div>
                </li>
                <li>
                    <div class="dropdown">
                        <a class="dropbtn">Segmentos</a>
                        <div class="dropdown-content">
                        <a href="{{route('segmentos')}}">Todos os Segmentos</a>
                            <a href="{{route('s.ccvil')}}">Construção Civil</a>
                            <a href="{{route('s.feiras-eventos')}}">Feiras/Eventos/Stands</a>
                            <a href="{{route('s.embalagens')}}">Embalagens</a>
                            <a href="{{route('s.moveleiro')}}">Moveleiros</a>
                            <a href="{{route('s.pallets')}}">Pallets</a>
                            <a href="{{route('s.ind_auto')}}">Indústria Automotiva</a>
                        </div>
                </li>
                <!--<li><a href="#">Blog</a></li>-->
                <li><a href="{{route('sobre')}}">Sobre a Ecoplac</a></li>
                <li><a href="{{route('contato')}}">Contato</a></li>
            </ul>
        </nav>
    </div>
     <a href="https://api.whatsapp.com/send?phone=5542998410088&text=Olá%21%20Vim%20pelo%20seu%20site."
        target="_blank"class="btn-whatsapp-pulse btn-whatsapp-pulse-border">
	<i class="fab fa-whatsapp"></i>
</a>
    