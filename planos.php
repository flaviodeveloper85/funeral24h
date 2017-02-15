<?php 

    session_start();     
    
    if(!isset($_SESSION['email']) && !isset($_SESSION['pass'])){
        echo "<script>location.href='http://funeral24h.com.br/login.html'</script>";
        session_destroy();
    }

    //recover tb_login's id_login
    $id_login = $_SESSION['id_login'];


    include("includes/conn.php");

    // check whether initial date greater than $expira_anuncio variable
    $catch_date_init = "select id_anuncio,dt_end from tb_anuncios where id_login = '$id_login'";
    $anuncio = $conn->query($catch_date_init);
    $row = $anuncio->fetch_assoc();
    $id_anuncio     = $row['id_anuncio']; 
    $dt_end_anuncio = strtotime($row['dt_end']); 
    
    $date_now = strtotime(date("Y:m:d H:i:s"));

    //session que verifica condiçao do anuncio
      



?>
<!DOCTYPE html>
<!-- Marcação de microdados adicionada pelo Assistente de marcação para dados estruturados do Google. -->
<!--[if IE 8]><html class="ie8"><![endif]--><!--[if IE 9]><html class="ie9"><![endif]--><!--[if !IE]><!-->
<html>
<!--<![endif]-->
<head>
    <meta charset="utf-8"/><meta http-equiv="content-language" content="pt-br, en-US, es" />
    
	<title>Funeral24h, LIGUE: 11 xxxx-xxxx</title>
	<meta name="description" content="COROAS DE FLORES 40% DESC. (11) 2615-7248">
	<meta name="keywords" content="Floricultura, coroa de flores, homenagem funebre, vila alpina, arrajos, decoração de casamento"/>
	<meta name="msvalidate.01" content="650A4BB7BF70760F0868F22EFFC18DBE" />
	<link rel="canonical" href="index.php" />
	
	<meta property="og:locale" content="pt_BR" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Funeral24h - Informações funeral, transporte, urnas" />
	<meta property="og:description" content="Informações funeral, transporte, urnas" />
	<meta property="og:url" content="http://funeral24h.com.br/index.html" />
	<meta property="og:site_name" content="Funeral 24 horas" />
	<meta property="og:image" content="http://funeral24h.com.br/images/logo.jpg" />

	<meta name="siteinfo" content="/robots.txt" />
	<meta name="revisit-after" content="1 day" />
	<meta name="robots" content="index,follow" />
	<meta name="googlebot" content="index,follow" />
	<meta name="distribution" content="Global" />
	<meta name="author" content="elcio lima dos santos" />
	<meta name="copyright" content="www.funeral24h.com.br" />
	<meta http-equiv="imagetoolbar" content="no" />
	<meta name="MSSmartTagsPreventParsing" content="true" />
	
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <link href="//fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic%7CPT+Gudea:400,700,400italic%7CPT+Oswald:400,700,300" rel="stylesheet" id="googlefont"/>
    <style id="custom-style">
		@import 'css/bootstrap.min.css';
		@import 'css/font-awesome.min.css';
		@import 'css/prettyPhoto.css';
		@import 'css/colpick.css';
		@import 'css/owl.carousel.css';
		@import 'css/revslider.css';
		@import 'css/style.css';
		@import 'css/responsive.css';
	</style>	
    <link rel="icon" type="image/png" href="images/icons/icon.png"/>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="apple-touch-icon" sizes="57x57" href="images/icons/apple-icon-57x57.png"/>
    <link rel="apple-touch-icon" sizes="72x72" href="images/icons/apple-icon-72x72.png"/>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
	<script type="text/javascript" src="http://www.skypeassets.com/i/scom/js/skype-uri.js" style="padding: 0px; margin: 0px;"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.1.min.js"><\/script>');</script>
    <!--[if lt IE 9]><script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script><![endif]-->
    <style id="custom-style">
    </style>

	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-78634394-1', 'auto');
		ga('send', 'pageview');
    </script>
</head>
<body>

        <div id="wrapper">
        <header id="header" class="header6">
            <div id="header-top">
                <div class="container">

                    <div class="row">
                        <div class="col-md-12">
                        
                            <div class="header-top-left">
                            </div>
                            
                            <div class="header-top-right">

                                <ul id="top-links" class="clearfix">

                                    
                                    <li>
                                        <a href="painel.php#meusanuncios">
                                        <i class="fa fa-cog fa-spin fa-1x fa-fw"></i>
                                        <span class="hide-for-xs"> Painel Administrativo</span>
                                       </a>
                                    </li>
                                    <li>
                                        <a href="whatsapp://send?text=http://funeral24h.com.br/" data-action="share/whatsapp/share" title="Share via Whatsapp">
                                           <?php echo "<strong><i class='fa fa-check-square-o' aria-hidden='true'></i> conectado:</strong> ". $_SESSION['email']; ?>
                                        </a>
                                    </li>
                                    <li>
                                        <span style="float:right; right:30px; color:#fff"> <a href="sair.php"><i class='fa fa-undo' aria-hidden='true'></i> sair</a></span>
                                    </li>
                                </ul>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <div id="inner-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-12 logo-container">
                            <h1 class="logo clearfix">
                                <span>Coroas de Flores - LIGUE: 11 2615-7248 - Faturamos para empresa, Boleto para 15 dias.</span> <a href="http://funeral24h.com.br/" title="funeral24h"><img src="images/logo.jpg" alt="Serviços Funerários"></a>
                            </h1>
                        </div>
                        <div class="col-md-9 col-sm-9 col-xs-12 header-inner-right">
                            <div class="header-inner-right-wrapper clearfix">
                                
                                <div class="header-box contact-phones pull-right clearfix">
                                    <span class="header-box-icon header-box-icon-confianca"></span>
                                    <ul>
                                        <li>Emitimos nota fiscal NFe</li>
                                        <li><img alt="Velório 24 hs - Serviço Funerário - LIGUE 11 xxxx-xxxx"  src="images/formas-de-pagamento2.png" style="height:58px;width:171px"></li>
                                    </ul>
                                </div>
                                

                                <div class="header-box contact-phones pull-right clearfix" style="padding-top:22px;">
                                    <span class="header-box-icon header-box-icon-earphones"></span>
                                    <!-- 
                                    <ul class="pull-left">
                                        <li style="margin-top:10px;font-size:14px;">Televendas 24h:</li>
                                        <li style="line-height:22px;font-size:22px;color:#000;"><span style="font-size:16px;">11</span> 4106-6772</li>
                                        <li style="line-height:22px;font-size:22px;"><span style="font-size:16px;">11</span> xxxx-xxxx</li> 
                                        <li style="line-height:22px;font-size:22px;color:#000;"><span style="font-size:16px;">11</span> xxxx-xxxx</li>
                                    </ul>
                                    -->
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div id="main-nav-container">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 clearfix">

                                <nav id="main-nav">
                                    <div id="responsive-nav">
                                        <div id="responsive-nav-button">Menu<span id="responsive-nav-button-icon"></span></div>
                                        <div class="responsive-telphone">(11) xxxx-xxxx</div>
                                    </div>
                                    <div class="menu-table">

                                        <ul class="menu clearfix">
                                            <li><a href="http://funeral24h.com.br/agenciafuneraria.html">AGÊNCIA FUNERÁRIA</a></li>
                                            <li><a href="http://funeral24h.com.br/coroadeflores.html">COROA DE FLORES</a></li>
                                            <li><a href="http://funeral24h.com.br/classificados.html">classificados</a></li>
											<li><a href="http://funeral24h.com.br/servicosuteis.html">SERVIÇOS ÚLTEIS</a></li>
											<li><a href="http://funeral24h.com.br/anunciegratis.php">ANÚNCIE GRÁTIS</a></li>
                                            <li><a href="http://funeral24h.com.br/login.html">FAZER LOGIN</a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
            
        <section id="content">

            <div id="breadcrumb-container">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="http://funeral24h.com.br/">Home</a></li>
                        <li class="active">Planos</li>
                        
                    </ul>
                </div>
            </div>					

            <div class="container">

                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12 col-sm-8 col-xs-12 main-content">

                                <div class="category-item-container">
                                    <div class="row">
                                    <header class="content-title">        
                                        <h2 class="title">Escolha seu Plano</h2>
                                    </header>    
                                        <div>
                                            
                                            <div class="cell-plan" style="border:none">
                                                <ul>
                                                    <li style="text-align:center; line-height:60px;height:70px;"></li>
                                                    <li class="item-description1">Anúncio no site por 2 meses</li>
                                                    <li class="item-description1">Estatistica do anúncio</li>
                                                    <li class="item-description1">Duração: Topo</li>
                                                    <li class="item-description1">Duração: Galeria</li>
                                                    <li>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="cell-plan cell-2">
                                                <ul class="planos">
                                                    <li style="text-align:center; line-height:60px">Anúncio <strong>Grátis</strong></li>
                                                    <li class="item-li item-yes"></li>
                                                    <li class="item-li item-yes"></li>
                                                    <li class="item-li item-no"></li>
                                                    <li class="item-li item-no"></li>
                                                    <li style="height:53px"><p style="font-size:23px;text-align:center;font-weight:bold">Grátis</p></li>
                                                    <li style="text-align:center;"><a href="#" class="btn btn-default btn-lg" role="button"  <?php if(isset($_SESSION['expired'])) echo "disabled"; ?> onclick="javascript:history.back(-1)">Continuar Grátis</a></li>
                                                </ul>
                                            </div>
                                            <div class="cell-plan cell-2">
                                                <ul class="planos">
                                                    <li style="text-align:center; line-height:60px">Anúncio <strong>Bronze</strong></li>
                                                    <li class="item-li item-yes"></li>
                                                    <li class="item-li item-yes"></li>
                                                    <li class="item-li"><p><strong>Topo único</strong></p></li>
                                                    <li class="item-li item-no"></li>
                                                    <li style="vertical-align:middle"><p style="font-size:22px;text-align:center;font-weight:bold"><strong style="font-size:30px">27</strong>,99</p></li>
                                                    <li style="text-align:center;"><a href="#" class="btn btn-success btn-lg" role="button" >Comprar</a></li>
                                                </ul>
                                            </div>
                                            <div class="cell-plan cell-2">
                                                <ul class="planos">
                                                    <li style="text-align:center; line-height:60px">Anúncio <strong>Prata</strong></li>
                                                    <li class="item-li item-yes"></li>
                                                    <li class="item-li item-yes"></li>
                                                    <li class="item-li"><p><strong>Topo diário</strong></p></li>
                                                    <li class="item-li"><p><strong>7 dias</strong></p></li>
                                                    <li><p style="font-size:22px;text-align:center;font-weight:bold"><strong style="font-size:30px">39</strong>,99</p></li>
                                                    <li style="text-align:center"><a href="#" class="btn btn-success btn-lg" role="button" >Comprar</a></li>
                                                </ul>
                                            </div>
                                            <div class="cell-plan cell-2">
                                                <ul class="planos">
                                                    <li style="text-align:center; line-height:60px">Anúncio <strong>Ouro</strong></li>
                                                    <li class="item-li item-yes"></li>
                                                    <li class="item-li item-yes"></li>
                                                    <li class="item-li"><p><strong>Topo semanal</strong></p></li>
                                                    <li class="item-li"><p><strong>30 dias</strong></p></li>
                                                    <li style="vertical-align:middle"><p style="font-size:22px;text-align:center;font-weight:bold"><strong style="font-size:30px">50</strong>,49</p></li>
                                                    <li style="text-align:center"><a href="#" class="btn btn-success btn-lg" role="button" >Comprar</a></li>
                                                </ul>
                                            </div>



                                        </div>
									    
                                    </div>
                                </div>


								<div style="clear:all">
									<p>&nbsp;<p>
									<p>&nbsp;<p>
								</div>
								
							</div>
                        </div>

                    </div>
                </div>

            </div>
        </section>


        <section id="content">
            <div class="container">
                <div class="row">


                    <div class="col-md-3 col-sm-4 col-xs-12 sidebar">
                        <div class="widget">

                            <div class="widget subscribe">
                                <span><h3>SEJA O PRIMEIRO A CONHECER</h3>
                                <p>Cadastre seu e-mail e receba nossas promoções, novidades e muito mais.</p>
                                <form action="#" id="subscribe-form">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="subscribe-email" placeholder="Cadastre seu e-mail"/>
                                    </div>
                                    <input type="submit" value="Cadastrar" class="btn btn-custom"/>
                                </span></form>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12 sidebar">
                        <div class="widget">

                            <div class="widget testimonials">
                                <h3>Testemunhos</h3>
                                <div class="testimonials-slider flexslider sidebarslider">
                                    <ul class="testimonials-list clearfix">
                                        <li>
                                            <div class="testimonial-details">
                                                <header>Eu recomendo!</header>
                                                Fui super bem atendida, não tive problema nenhum..
                                            </div>
                                            <figure class="clearfix">
                                                <img src="images/testimonials/anna.jpg" alt="Entrega Imediata" width="75" height="75">
                                                <figcaption>
                                                    <a href="#">Ana Falconi</a>
                                                    <span>06.08.2015</span>
                                                </figcaption>
                                            </figure>
                                        </li>
                                        <li>
                                            <div class="testimonial-details">
                                                <header>Excêlente Atendimento!</header>
                                                Meus parabéns, minha encomenda chegou perfeita
                                            </div>
                                            <figure class="clearfix">
                                                <img src="images/testimonials/jake.jpg" alt="Floricultura Online" width="75" height="75">
                                                <figcaption>
                                                    <a href="#">Glaúcio Barbosa</a>
                                                    <span>17.05.2015</span>
                                                </figcaption>
                                            </figure>
                                        </li>
                                    </ul>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12 sidebar">
                        <div class="widget">


                            <div class="widget latest-posts">
                                <h3>POSTS RECENTES</h3>
                                <div class="latest-posts-slider flexslider sidebarslider">
                                    <ul class="latest-posts-list clearfix">
                                        <li>
                                            <a href="single.html">
                                                <figure class="latest-posts-media-container">
                                                    <img class="img-responsive" src="images/blog/post1-small.jpg" alt="Floricultura online" width="270" heigth="120"/>
                                                </figure>
                                            </a>
                                            <h4><a href="single.html">Envie coroa de Flores no dia dos finados</a></h4>
                                            <p>
                                                Realizamos entregas de coroa de flores nos cemitérios de São Paulo no dia de Finados.
                                            </p>
                                            <div class="latest-posts-meta-container clearfix">
                                                <div class="pull-left"><a href="#">Leia Mais...</a></div>
                                                <div class="pull-right">12.05.2013</div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="single.html">
                                                <figure class="latest-posts-media-container">
                                                    <img class="img-responsive" src="images/blog/post2-small.jpg" alt="Floricultura online" width="270" heigth="120"/>
                                                </figure>
                                            </a>
                                            <h4><a href="single.html">Homenagem Póstuma com até 50% desc</a></h4>
                                            <p>* Desconto progressivo: ganhe até 50% de desconto na compra de 2 ou mais condolências.</p>

                                            <div class="latest-posts-meta-container clearfix">
                                                <div class="pull-left">
                                                    <a href="#">Leia Mais...</a>
                                                </div>
                                                <div class="pull-right">10.05.2013</div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="single.html">
                                                <figure class="latest-posts-media-container"><img class="img-responsive" src="images/blog/post3-small.jpg" alt="Floricultura online" width="270" heigth="120"/></figure>
                                            </a>

                                            <h4><a href="#">Condolências com até -50% desc</a></h4>

                                            <p>* Desconto progressivo: ganhe até 50% de desconto na compra de 2 ou mais condolências.</p>

                                            <div class="latest-posts-meta-container clearfix">
                                                <div class="pull-left"><a href="#">Leia Mais...</a></div>
                                                <div class="pull-right">01.09.2015</div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12 sidebar">

                        <div class="widget">

                            <div class="widget banner-slider-container">
                                <div class="banner-slider flexslider">
                                    <ul class="banner-slider-list clearfix">
                                        <li><a href="http://funeral24h.com.br/coroadeflores.html"><img src="images/banner1.jpg" alt="Banner 1" width="270" heigth="400"/></a></li>
                                        <li><a href="http://funeral24h.com.br/coroadeflores.html"><img src="images/banner2.jpg" alt="Banner 2" width="270" heigth="400"/></a></li>
                                        <li><a href="http://funeral24h.com.br/coroadeflores.html"><img src="images/banner3.jpg" alt="Banner 3" width="270" heigth="400"/></a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>
				
            </div>
        </section>

        <footer id="footer">

            <div id="twitterfeed-container">
                <div class="container">
                    <div class="row">
                        <div class="twitterfeed col-md-12">
                            <p class="loading">As coroas de flores têm o objetivo simbolico de "coroar" a pessoa falecida, é uma forma de homenageá-la por ter cumprido sua missão, assim como enfeitar o velório.</p>
                        </div>
                    </div>
                </div>
            </div>


            <div id="inner-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-4 col-xs-12 widget">
                            <h3>Mapa do Site</h3>
                            <ul class="links">
								<li><a href="http://funeral24h.com.br/agenciafuneraria.html">Agência Funerária</a></li>
								<li><a href="http://funeral24h.com.br/coroadeflores.html">Coroa de Flores</a></li>
								<li><a href="http://funeral24h.com.br/classificados.html">classificados</a></li>
								<li><a href="http://funeral24h.com.br/login.html">FAZER LOGIN</a></li>
								<li><a href="http://funeral24h.com.br/contato.html">Contato</a></li>
                            </ul>
							
							<h3>Precisa de Coroa?</h3>
                            <ul class="links">
								<li><a href="coroa-de-flores.html">Coroa de Flores</a></li>
								<li><a href="sugestoes-de-frase.html">Sugestões de Frases</a></li>
								<li><a href="formas-de-pagamento.html">Formas de Pagamento</a></li>
								<li><a href="duvidas-frequentes.html">Dúvidas Frequentes</a></li>
                            </ul>
                        </div>
						
						<div class="col-md-3 col-sm-4 col-xs-12 widget">
                            <h3>Endereços Funerárias</h3>
                            <ul class="links">
                            <div style="float:left; width:150px;">    
                                <li><a href="http://funeral24h.com.br/agenciafuneraria/AC/acre.html">Acre</a></li>
                                <li><a href="http://funeral24h.com.br/agenciafuneraria/AL/alagoas.html">Alagoas</a></li>
                                <li><a href="http://funeral24h.com.br/agenciafuneraria/AP/amapa.html">Amapá</a></li>
                                <li><a href="http://funeral24h.com.br/agenciafuneraria/AM/amazonas.html">Amazonas</a></li>
                                <li><a href="http://funeral24h.com.br/agenciafuneraria/BA/bahia.html">Bahia</a></li>
                                <li><a href="http://funeral24h.com.br/agenciafuneraria/CE/ceara.html">Ceará</a></li>
                                <li><a href="http://funeral24h.com.br/agenciafuneraria/DF/distritofederal.html">Distrito Federal</a></li>
                                <li><a href="http://funeral24h.com.br/agenciafuneraria/ES/espiritosanto.html">Espirito Santo</a></li>
                                <li><a href="http://funeral24h.com.br/agenciafuneraria/GO/goias.html">Goiás</a></li>
                            </div>    
                            <div style="float:left; width:150px; position:absolute; left:300px">    
                                <li><a href="http://funeral24h.com.br/agenciafuneraria/MA/maranhao.html">Maranhão</a></li>
                                <li><a href="http://funeral24h.com.br/agenciafuneraria/MT/matogrosso.html">Mato Grosso</a></li>
                                <li><a href="http://funeral24h.com.br/agenciafuneraria/MS/matogrossodosul.html">Mato Grosso do Sul</a></li>
                                <li><a href="http://funeral24h.com.br/agenciafuneraria/MG/minasgerais.html">Minas Gerais</a></li>
                                <li><a href="http://funeral24h.com.br/agenciafuneraria/PA/para.html">Pará</a></li>
                                <li><a href="http://funeral24h.com.br/agenciafuneraria/PB/paraiba.html">Paraíba</a></li>
                                <li><a href="http://funeral24h.com.br/agenciafuneraria/PR/parana.html">Paraná</a></li>
                                <li><a href="http://funeral24h.com.br/agenciafuneraria/PE/pernambuco.html">Pernambuco</a></li>
                                <li><a href="http://funeral24h.com.br/agenciafuneraria/PI/piaui.html">Piauí</a></li>

                            </div> 
                            <div style="float:left; width:150px; position:absolute; left:600px">   
                                <li><a href="http://funeral24h.com.br/agenciafuneraria/RJ/riodejaneiro.html">Rio de Janeiro</a></li>
                                <li><a href="http://funeral24h.com.br/agenciafuneraria/RN/riograndedonorte.html">Rio Grande do Norte</a></li>
                                <li><a href="http://funeral24h.com.br/agenciafuneraria/RS/riograndedosul.html">Rio Grande do Sul</a></li>
                                <li><a href="http://funeral24h.com.br/agenciafuneraria/RO/rondonia.html">Rondônia</a></li>
                                <li><a href="http://funeral24h.com.br/agenciafuneraria/RR/roraima.html">Roraima</a></li>
                                <li><a href="http://funeral24h.com.br/agenciafuneraria/SC/santacatarina.html">Santa Catarina</a></li>
                                <li><a href="http://funeral24h.com.br/agenciafuneraria/SP/saopaulo.html">São Paulo</a></li>
                                <li><a href="http://funeral24h.com.br/agenciafuneraria/SE/sergipe.html">Sergipe</a></li>
                                <li><a href="http://funeral24h.com.br/agenciafuneraria/TO/tocantins.html">Tocantins</a></li>
                            </div>    
                            </ul>
                        </div>
						
                        <div class="clearfix visible-sm"></div>
                    </div>

                </div>

            </div>


            <div id="footer-bottom">

                <div class="container">
                    <div class="row">
                        <div class="col-md-7 col-sm-7 col-xs-12 footer-social-links-container">

                            <ul class="social-links clearfix">
                                <li><a href="https://www.facebook.com/funeral24h" target="_blank" class="social-icon icon-facebook"></a></li>
                                <li><a href="https://plus.google.com/+funeral24hBrCoroaDeFlores/videos" target="_blank" class="social-icon icon-twitter"></a></li>
                                <li><a href="#" class="social-icon icon-rss"></a></li>
                                <li><a href="#" class="social-icon icon-delicious"></a></li>
                                <li><a href="#" class="social-icon icon-linkedin"></a></li>
                                <li><a href="#" class="social-icon icon-flickr"></a></li>
                                <li><a href="#" class="social-icon icon-skype"></a></li>
                                <li><a href="http://funeral24h.com.br/contato.html" target="_blank" class="social-icon icon-email"></a></li>
                            </ul>

                        </div>
						

                        <div class="col-md-5 col-sm-5 col-xs-12 footer-text-container">
                            <p>© 2016 Velório 24 horas | CNPJ: 15.371.501/0001-51.</p>
							<p>Todos os direitos reservados.</p>
                        </div>
                    </div>
                </div>
            </div>

        </footer>

    </div><a href="#" id="scroll-top" title="Scroll to Top"><i class="fa fa-angle-up"></i></a>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/jquery.debouncedresize.js"></script>
    <script src="js/retina.min.js"></script>
    <script src="js/jquery.placeholder.js"></script>
    <script src="js/jquery.hoverIntent.min.js"></script>
    <script src="js/twitter/jquery.tweet.min.js"></script>
    <script src="js/jquery.flexslider-min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jflickrfeed.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.themepunch.tools.min.js"></script>
    <script src="js/jquery.themepunch.revolution.min.js"></script>
    <script src="js/colpick.js"></script>
    <script src="js/main.js"></script>
    <script>$(function () { jQuery("#slider-rev").revolution({ delay: 5e3, startwidth: 870, startheight: 520, onHoverStop: "true", hideThumbs: 250, navigationHAlign: "center", navigationVAlign: "bottom", navigationHOffset: 0, navigationVOffset: 15, soloArrowLeftHalign: "left", soloArrowLeftValign: "center", soloArrowLeftHOffset: 0, soloArrowLeftVOffset: 0, soloArrowRightHalign: "right", soloArrowRightValign: "center", soloArrowRightHOffset: 0, soloArrowRightVOffset: 0, touchenabled: "on", stopAtSlide: -1, stopAfterLoops: -1, dottedOverlay: "none", fullWidth: "on", spinned: "spinner4", shadow: 0, hideTimerBar: "on" }); var o = function () { var o = $(window).width(); if (767 >= o && $("#slider-rev-container").length) { var e = $("#slider-rev").height(); console.log(e), $(".slider-position").css("padding-top", e), $(".main-content").css("position", "static") } else $(".slider-position").css("padding-top", 0), $(".main-content").css("position", "relative") }; o(), $.event.special.debouncedresize ? $(window).on("debouncedresize", function () { o() }) : $(window).on("resize", function () { o() }) });$(document).ready(function(){ f_carregarAjax2("div_footer","tudo","index"); });

        </script>
</body>
</html>