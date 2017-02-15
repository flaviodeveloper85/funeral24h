 <?php


    //recover tb_login's id_login
    $id_login = $_SESSION['id_login'];

    $email = $_SESSION['email'];

    //pega id do anuncio
    $id_anuncio = $_GET['id'];
    

    include("includes/conn.php");

    $select_anuncio = "SELECT * from tb_anuncios where id_anuncio = '$id_anuncio'";
    $result = $conn->query($select_anuncio);
    $row = $result->fetch_assoc();
    $titulo_anuncio      = $row['titulo'];
    $descr_anuncio       = $row['descricao'];
    $telefone_anuncio    = $row['telefone'];
    $preco_anuncio       = $row['preco'];
    $images_anuncio      = $row['images'];
    $cep_anuncio         = $row['cep'];
    $uf_anuncio          = $row['uf'];
    $cidade_anuncio      = $row['cidade'];

    

 ?>
 <!DOCTYPE html>
<!-- Marcação de microdados adicionada pelo Assistente de marcação para dados estruturados do Google. -->
<!--[if IE 8]><html class="ie8"><![endif]--><!--[if IE 9]><html class="ie9"><![endif]--><!--[if !IE]><!-->
<html>
<!--<![endif]-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
	<title>Funeral 24H, <?php echo $titulo_anuncio; ?></title>
	<meta name="description" content="<?php echo $titulo_anuncio; ?>">
	<meta name="keywords" content="Serviço Funerário, Funerárias de todo o Brasil, Taxi Aéreo, Transporte Terrestre, Serviços 24h"/>
	<meta name="msvalidate.01" content="650A4BB7BF70760F0868F22EFFC18DBE" />
	<link rel="canonical" href="index.php" />
	
	<meta property="og:locale" content="pt_BR" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Funeral24h - Informações funeral, transporte" />
	<meta property="og:description" content="Informações funeral, transporte" />
	<meta property="og:url" content="http://funeral24h.com.br/index.html" />
	<meta property="og:site_name" content="Funeral 24 horas" />
	<meta property="og:image" content="http://funeral24h.com.br/agenciafuneraria/logo.jpg" />

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
		@import 'http://funeral24h.com.br/css/bootstrap.min.css';
		@import 'http://funeral24h.com.br/css/font-awesome.min.css';
		@import 'http://funeral24h.com.br/css/prettyPhoto.css';
		@import 'http://funeral24h.com.br/css/colpick.css';
		@import 'http://funeral24h.com.br/css/owl.carousel.css';
		@import 'http://funeral24h.com.br/css/revslider.css';
		@import 'http://funeral24h.com.br/css/style.css';
		@import 'http://funeral24h.com.br/css/responsive.css';
		
		.li-cemiterio{
			border: solid 1px #ccc;
			height: auto;
			margin-bottom: 10px;
			cursor: pointer;
			cursor: hand;
			padding: 10px 0px;			
		}
		
        fieldset {
            width:inherit;
            padding:0 10px !important;
        }
		
        legend {
            margin-bottom:15px;
			border: none;
        }
	</style>	
    <link rel="icon" type="image/png" href="images/icons/icon.png"/>
    <link rel="apple-touch-icon" sizes="57x57" href="images/icons/apple-icon-57x57.png"/>
    <link rel="apple-touch-icon" sizes="72x72" href="images/icons/apple-icon-72x72.png"/>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<script type="text/javascript" src="http://www.skypeassets.com/i/scom/js/skype-uri.js" style="padding: 0px; margin: 0px;"></script>
    <script>window.jQuery || document.write('<script src="http://funeral24h.com.br/js/jquery-1.11.1.min.js"><\/script>');</script>
    <script src="http://funeral24h.com.br/js/jquery.maskedinput.min.js" type="text/javascript"></script>
    <script>
       
    </script>
    <!--[if lt IE 9]><script src="http://funeral24h.com.br/js/html5shiv.js"></script>
    <script src="http://funeral24h.com.br/js/respond.min.js"></script><![endif]-->
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
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
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
                                            
                                            <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                            <span class=""> conectado: <strong><?php echo $_SESSION['email']; ?></strong></span>
                                                
                                                
                                                <span>

                                                
                                            </span>
                                            
                                        </a>
                                    </li>
                                    <li>
                                        <span>
                                        <?php if(isset($_SESSION['email'])) echo "<a href='sair.php'><i class='fa fa-undo' aria-hidden='true'></i> sair</a>"; ?>
                                        </span>
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
                                <span>Coroas de Flores - LIGUE: 11 2615-7248 - Faturamos para empresa, Boleto para 15 dias.</span> <a href="http://funeral24h.com.br/" title="funeral24h"><img src="http://funeral24h.com.br/images/logo.jpg" alt="Serviços Funerários"></a>
                            </h1>
                        </div>
                        <div class="col-md-9 col-sm-9 col-xs-12 header-inner-right">
                            <div class="header-inner-right-wrapper clearfix">
                                
                                <div class="header-box contact-phones pull-right clearfix">
                                    <span class="header-box-icon header-box-icon-confianca"></span>
                                    <ul>
                                        <li>Emitimos nota fiscal NFe</li>
                                        <li><img alt="Velório 24 hs - Serviço Funerário - LIGUE 11 xxxx-xxxx"  src="http://funeral24h.com.br/images/formas-de-pagamento2.png" style="height:58px;width:171px"></li>
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
                                            <li><a href="http://funeral24h.com.br/transportefunerario.html">TRANSPORTE FUNERÁRIO</a></li>
											<li><a href="http://funeral24h.com.br/servicosuteis.html">SERVIÇOS ÚLTEIS</a></li>
											<li><a href="http://funeral24h.com.br/anunciegratis.php">ANÚNCIE GRÁTIS</a></li>
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
                        <li><a href="http://funeral24h.com.br/agenciafuneraria.html">Classificados</a></li>
                        <li class="active"><?php echo $titulo_anuncio; ?></li>
                    </ul>
                </div>
            </div>					

            <div class="container">


                <div class="row">
			

					<div id="right_column" class="column col-xs-12 col-sm-3">
						<div id="div_menu"></div>
					</div>
					
					<div id="center_column" class="center_column col-xs-12 col-sm-9 form-group">
					
						<header class="content-title">
							<h2 class="title"><?php echo $titulo_anuncio; ?></h2>
						</header>

						<ul class="nav nav-tabs" role="tablist">
							<li class="active"><a data-toggle="tab" href="#detail" >Detalhes</a></li>
							<li><a data-toggle="tab" href="#photo">Fotos</a></li>
						</ul>

						<div class="tab-content"  style="padding-top: 20px;">

							<div id="detail" class="tab-pane active">

                                <fieldset>
                                    <legend>Detalhes</legend>

                                    <p><strong>Descrição:</strong> <?php echo $descr_anuncio; ?></p>
                                    <p><strong>Telefone:</strong> <?php echo $telefone_anuncio; ?></p>
                                    <p><strong>Cidade:</strong> <?php echo $cidade_anuncio; ?></p>
                                    <p><strong>CEP:</strong> <?php echo $cep_anuncio; ?></p>
                                    <p><strong>Cidade:</strong> <?php echo $cidade_anuncio; ?></p>
                                    <p><strong>Estado:</strong> <?php echo $uf_anuncio; ?></p>
                                    <p><strong>Preço:</strong> <?php echo $preco_anuncio; ?></p>
                                    

                                </fieldset>                                

							</div>
						  
							<div id="photo" class="tab-pane fade">

                                <fieldset>
                                    <legend>Fotos</legend>
                                </fieldset>
                                <img src="<?php echo $images_anuncio; ?>" style="width:300px; height:300">                                    
							</div>
					  
						</div>

						<div id="div_form" style="margin-top:100px"></div>
						
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
                                                <img src="http://funeral24h.com.br/images/testimonials/anna.jpg" alt="Entrega Imediata" width="75" height="75">
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
                                                <img src="http://funeral24h.com.br/images/testimonials/jake.jpg" alt="Floricultura Online" width="75" height="75">
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
                                                    <img class="img-responsive" src="http://funeral24h.com.br/images/blog/post1-small.jpg" alt="Floricultura online" width="270" heigth="120"/>
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
                                                    <img class="img-responsive" src="http://funeral24h.com.br/images/blog/post2-small.jpg" alt="Floricultura online" width="270" heigth="120"/>
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
                                                <figure class="latest-posts-media-container"><img class="img-responsive" src="http://funeral24h.com.br/images/blog/post3-small.jpg" alt="Floricultura online" width="270" heigth="120"/></figure>
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
                                        <li><a href="http://funeral24h.com.br/coroadeflores.html"><img src="http://funeral24h.com.br/images/banner1.jpg" alt="Banner 1" width="270" heigth="400"/></a></li>
                                        <li><a href="http://funeral24h.com.br/coroadeflores.html"><img src="http://funeral24h.com.br/images/banner2.jpg" alt="Banner 2" width="270" heigth="400"/></a></li>
                                        <li><a href="http://funeral24h.com.br/coroadeflores.html"><img src="http://funeral24h.com.br/images/banner3.jpg" alt="Banner 3" width="270" heigth="400"/></a></li>
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
								<li><a href="http://funeral24h.com.br/transportefunerario.html">Transporte Funerário</a></li>
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
                                <li><a href="http://funeral24h.com.br/agenciafuneraria/AC/agenciafuneraria-acre.html">Acre</a></li>
                                <li><a href="http://funeral24h.com.br/agenciafuneraria/AL/agenciafuneraria-alagoas.html">Alagoas</a></li>
                                <li><a href="http://funeral24h.com.br/agenciafuneraria/AP/agenciafuneraria-amapa.html">Amapá</a></li>
                                <li><a href="http://funeral24h.com.br/agenciafuneraria/AM/agenciafuneraria-amazonas.html">Amazonas</a></li>
                                <li><a href="http://funeral24h.com.br/agenciafuneraria/BA/agenciafuneraria-bahia.html">Bahia</a></li>
                                <li><a href="http://funeral24h.com.br/agenciafuneraria/CE/agenciafuneraria-ceara.html">Ceará</a></li>
                                <li><a href="http://funeral24h.com.br/agenciafuneraria/DF/agenciafuneraria-distritofederal.html">Distrito Federal</a></li>
                                <li><a href="http://funeral24h.com.br/agenciafuneraria/ES/agenciafuneraria-espiritosanto.html">Espirito Santo</a></li>
                                <li><a href="http://funeral24h.com.br/agenciafuneraria/GO/agenciafuneraria-goias.html">Goiás</a></li>
                            </div>    
                            <div style="float:left; width:150px; position:absolute; left:300px">    
                                <li><a href="http://funeral24h.com.br/agenciafuneraria/MA/agenciafuneraria-maranhao.html">Maranhão</a></li>
                                <li><a href="http://funeral24h.com.br/agenciafuneraria/MT/agenciafuneraria-matogrosso.html">Mato Grosso</a></li>
                                <li><a href="http://funeral24h.com.br/agenciafuneraria/MS/agenciafuneraria-matogrossodosul.html">Mato Grosso do Sul</a></li>
                                <li><a href="http://funeral24h.com.br/agenciafuneraria/MG/agenciafuneraria-minasgerais.html">Minas Gerais</a></li>
                                <li><a href="http://funeral24h.com.br/agenciafuneraria/PA/agenciafuneraria-para.html">Pará</a></li>
                                <li><a href="http://funeral24h.com.br/agenciafuneraria/PB/agenciafuneraria-paraiba.html">Paraíba</a></li>
                                <li><a href="http://funeral24h.com.br/agenciafuneraria/PR/agenciafuneraria-parana.html">Paraná</a></li>
                                <li><a href="http://funeral24h.com.br/agenciafuneraria/PE/agenciafuneraria-pernambuco.html">Pernambuco</a></li>
                                <li><a href="http://funeral24h.com.br/agenciafuneraria/PI/agenciafuneraria-piaui.html">Piauí</a></li>

                            </div> 
                            <div style="float:left; width:150px; position:absolute; left:600px">   
                                <li><a href="http://funeral24h.com.br/agenciafuneraria/RJ/agenciafuneraria-riodejaneiro.html">Rio de Janeiro</a></li>
                                <li><a href="http://funeral24h.com.br/agenciafuneraria/RN/agenciafuneraria-riograndedonorte.html">Rio Grande do Norte</a></li>
                                <li><a href="http://funeral24h.com.br/agenciafuneraria/RS/agenciafuneraria-riograndedosul.html">Rio Grande do Sul</a></li>
                                <li><a href="http://funeral24h.com.br/agenciafuneraria/RO/agenciafuneraria-rondonia.html">Rondônia</a></li>
                                <li><a href="http://funeral24h.com.br/agenciafuneraria/RR/agenciafuneraria-roraima.html">Roraima</a></li>
                                <li><a href="http://funeral24h.com.br/agenciafuneraria/SC/agenciafuneraria-santacatarina.html">Santa Catarina</a></li>
                                <li><a href="http://funeral24h.com.br/agenciafuneraria/SP/agenciafuneraria-saopaulo.html">São Paulo</a></li>
                                <li><a href="http://funeral24h.com.br/agenciafuneraria/SE/agenciafuneraria-sergipe.html">Sergipe</a></li>
                                <li><a href="http://funeral24h.com.br/agenciafuneraria/TO/agenciafuneraria-tocantins.html">Tocantins</a></li>
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
    <script src="http://funeral24h.com.br/js/bootstrap.min.js"></script>
    <script src="http://funeral24h.com.br/js/smoothscroll.js"></script>
    <script src="http://funeral24h.com.br/js/jquery.debouncedresize.js"></script>
    <script src="http://funeral24h.com.br/js/retina.min.js"></script>
    <script src="http://funeral24h.com.br/js/jquery.placeholder.js"></script>
    <script src="http://funeral24h.com.br/js/jquery.hoverIntent.min.js"></script>
    <script src="http://funeral24h.com.br/js/twitter/jquery.tweet.min.js"></script>
    <script src="http://funeral24h.com.br/js/jquery.flexslider-min.js"></script>
    <script src="http://funeral24h.com.br/js/owl.carousel.min.js"></script>
    <script src="http://funeral24h.com.br/js/jflickrfeed.min.js"></script>
    <script src="http://funeral24h.com.br/js/jquery.prettyPhoto.js"></script>
    <script src="http://funeral24h.com.br/js/jquery.themepunch.tools.min.js"></script>
    <script src="http://funeral24h.com.br/js/jquery.themepunch.revolution.min.js"></script>
    <script src="http://funeral24h.com.br/js/colpick.js"></script>
    <script src="http://funeral24h.com.br/js/main.js"></script>
    <script>$(function () { jQuery("#slider-rev").revolution({ delay: 5e3, startwidth: 870, startheight: 520, onHoverStop: "true", hideThumbs: 250, navigationHAlign: "center", navigationVAlign: "bottom", navigationHOffset: 0, navigationVOffset: 15, soloArrowLeftHalign: "left", soloArrowLeftValign: "center", soloArrowLeftHOffset: 0, soloArrowLeftVOffset: 0, soloArrowRightHalign: "right", soloArrowRightValign: "center", soloArrowRightHOffset: 0, soloArrowRightVOffset: 0, touchenabled: "on", stopAtSlide: -1, stopAfterLoops: -1, dottedOverlay: "none", fullWidth: "on", spinned: "spinner4", shadow: 0, hideTimerBar: "on" }); var o = function () { var o = $(window).width(); if (767 >= o && $("#slider-rev-container").length) { var e = $("#slider-rev").height(); console.log(e), $(".slider-position").css("padding-top", e), $(".main-content").css("position", "static") } else $(".slider-position").css("padding-top", 0), $(".main-content").css("position", "relative") }; o(), $.event.special.debouncedresize ? $(window).on("debouncedresize", function () { o() }) : $(window).on("resize", function () { o() }) });$(document).ready(function(){ f_carregarAjaxList("div_menu|list-funerarias|div_footer|div_form"); });</script>
	<script>
		$('#filtrar').bind('input', function(){
			var str = $(this).val();
			str = str.replace(/[-\/\\^$*+?.()|[\]{}]/g, '\\$&');
			var str = new RegExp(str, 'i'); // lower case
			
			$(".search").show();
			$(".search").filter(function(){ return !$(this).text().match(str) }).hide();
		});	


	</script>
</body>
</html>