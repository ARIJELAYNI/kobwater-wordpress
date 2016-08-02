<?php
/**
 * T
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package kobwater
 */

get_header(); ?>

	<body id="home" class="homepage">

    <header id="header">
        <nav id="main-menu" class="navbar navbar-default navbar-fixed-top" role="banner">
            <div class="row">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo"></a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="container">			
					<div class="collapse navbar-collapse navbar-right">
						<ul class="nav navbar-nav">
							<li class="scroll active"><a href="#home">Accueil</a></li>
							<li class="scroll"><a href="#features">Activités</a></li>
							<li class="scroll"><a href="#services">Services</a></li>
							<li class="scroll"><a href="#portfolio">Nos Matériaux</a></li>
							<li class="scroll"><a href="#about">Pourquoi Nous ?</a></li>
							<li class="scroll"><a href="#marques">Nos Marques</a></li>
							<li class="scroll"><a href="#blog">Solutions</a></li> 
							<li class="scroll"><a href="#get-in-touch">Contact</a></li>                        
						</ul>
					</div>
				</div><!--/.container-->
			</div>
		</nav><!--/nav-->
    </header><!--/header-->

   <section id="main-slider">
	   <div class="container">
			<div class="owl-carousel">
				<div class="item">
					<div class="slider-inner">
						<img src="images/slider/bg1.jpg" style="width:100%;height:initial;">
					</div>
				</div><!--/.item-->
				 <div class="item">
					<div class="slider-inner">
						<img src="images/slider/bg2.jpg" style="width:100%;height:initial;">
					</div>
				</div><!--/.item-->
				<div class="item">
					<div class="slider-inner">
						<img src="images/slider/bg3.jpg" style="width:100%;height:initial;">
					</div>
				</div><!--/.item-->
				<div class="item">
					<div class="slider-inner">
						<img src="images/slider/bg4.jpg" style="width:100%;height:initial;">
					</div>
				</div><!--/.item-->
				<div class="item">
					<div class="slider-inner">
						<img src="images/slider/bg5.jpg" style="width:100%;height:initial;">
					</div>
				</div><!--/.item-->
				<div class="item">
					<div class="slider-inner">
						<img src="images/slider/bg6.jpg" style="width:100%;height:initial;">
					</div>
				</div><!--/.item-->
			</div><!--/.owl-carousel-->
		</div>	
	</section><!--/#main-slider-->
    
    <section id="cta" class="wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <h2>KOB water treatment and more- Le prix attractif, l'efficacité du service clients</h2>
                    <p>KOB water treatment and more est un groupe d’ingénieurs et de techniciens avec une expérience de 15 ans dans le domaine de traitement d’eau, met à votre disposition un service de conseil de diagnostic et de l’accompagnement dans la résolution de vos problèmes d’eau !

                    </p>
                </div>
                <div class="col-sm-3 text-right">
                    <a class="btn btn-primary btn-lg" href="#get-in-touch">Contactez nous!</a>
                </div>
            </div>
        </div>
    </section><!--/#cta-->

    <section id="features">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">ACTIVITES</h2>
                <p class="text-center wow fadeInDown">UNE EXPERTISE UNIQUE DANS LE DOMAINE DU TRAITEMENT DE L'EAU <br>  UNE ÉQUIPE QUI VOUS AVEZ CONFIANCE</p>
            </div>
            
                <div class="col-sm-6">
                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                           <img src="images/icon3/5.PNG">
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Adoucissement </h4>
                            <p>L'adoucissement de l'eau est un procédé de traitement destiné à réduire la dureté de l'eau (due à la présence des sels alcalino-terreux: carbonates, sulfates et chlorures de calcium et de magnésium). Cette opération entre parfois dans le cadre de l'épuration physicochimique de l'eau où elle peut accompagner d’autres modalités de traitement de l'eau (filtration, désinfection, dénitratation, dénitrification, traitement des pesticides).  </p>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                           <img src="images/icon3/6.PNG">
                        </div>

                        <div class="media-body">
                            <h4 class="media-heading">Filtrations</h4>
                            <p>Le système de filtration vise à séparer l'eau des particules solides en la faisant passer travers d'un milieu poreux, ce qui ne laisse passer que les liquides et les particules solides plus fines que les trous du filtre.</p>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                           <img src="images/icon3/7.PNG">
                        </div>

                        <div class="media-body">
                            <h4 class="media-heading">Osmose Inverse</h4>
                            <p>L’osmose inverse est un système de purification de l'eau contenant des matières en solution par un système de filtrage très fin qui ne laisse passer que les molécules d'eau.</p>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                           <img src="images/icon3/8.PNG">
                        </div>

                        <div class="media-body">
                            <h4 class="media-heading">Produit De Conditionnement</h4>
                            <p>KOB water traitement and more propose des produits de conditionnement développés pour protéger les chaudières et les circuits eau / vapeur contre les risques de corrosion ou d’entartrage.
</p>
                        </div>
                    </div>
                </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                           <img src="images/icon3/1.PNG">
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Station D'épuration </h4>
                            <p>Une station d'épuration permet de traiter les eaux usées qu'elles soient d'origines industrielles ou qu'elles proviennent des activités quotidiennes de l'homme. Le but est de collecter les eaux usées, puis de les épurer par traitement, avant de pouvoir les rejeter dans le milieu naturel sans risquer de polluer notre environnement.</p>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                           <img src="images/icon3/3.PNG">
                        </div>

                        <div class="media-body">
                            <h4 class="media-heading">Traitement Physico-Chimique</h4>
                            <p>Le principe de base consiste à utiliser des réactifs chimiques pour séparer  physiquement les polluants de l'eau à l'aide de différentes techniques, telles que les filtres à bande, les filtres à poche ou les filtres-presse.</p>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                           <img src="images/icon3/2.PNG">
                        </div>

                        <div class="media-body">
                            <h4 class="media-heading">Traitement Biologique</h4>
                            <p>Le traitement secondaire correspond au traitement biologique d’une eau et fait appel à une grande variété de micro-organismes, principalement des bactéries. Ces micro-organismes convertissent la matière organique biodégradable contenue dans l’eau usée en produits simples et en biomasse additionnelle.</p>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                           <img src="images/icon3/4.PNG">
                        </div>

                        <div class="media-body">
                            <h4 class="media-heading">Electrocoagulation</h4>
                            <p>Le procédé d’électrocoagulation « SOLVIN® » est une technique de traitement des eaux usées basée sur la dissolution d’anodes sacrificielles de Fer ou d’Aluminium.L’électrocoagulation est une version électrochimique de la coagulation chimique.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div/>
        </div>
    </section>

 <section id="meet-team">
        <div class="container">
        <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Exemple des Activités</h2>
                <p class="text-center wow fadeInDown">Economisez vos dépenses et bénéficiez des réductions importantes et des offres qui ne se ratent pas</p>
            </div>
          <div class="row">
              <div class="col-sm-6 col-md-3">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                        <div class="team-img">
                            <img class="img-responsive" src="images/team/01.jpg" alt="">
                        </div>
                           
                            <a class="preview1" href="images/team/01.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        <div class="team-info">
                            <h3>Filtration</h3>
                        </div>
                        <p></p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
                        <div class="team-img">
                            <img class="img-responsive" src="images/team/02.jpg" alt="">
                        </div>
                           
                            <a class="preview2" href="images/team/02.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        <div class="team-info">
                            <h3>Osmose Inverse</h3>
                        </div>
                        <p></p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="200ms">
                        <div class="team-img">
                            <img class="img-responsive" src="images/team/03.jpg" alt="">
                        </div>
                       
                            <a class="preview3" href="images/team/03.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        <div class="team-info">
                            <h3>Adoussicement</h3>
                        </div>
                        <p></p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                        <div class="team-img">
                            <img class="img-responsive" src="images/team/04.jpg" alt="">
                        </div>
                        
                            <a class="preview4" href="images/team/04.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        <div class="team-info">
                            <h3>Station D'épuration</h3>
                        </div>
                        <p></p>
                    </div>
                </div>
            </div>

            
 <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                        <div class="team-img">
                            <img class="img-responsive" src="images/team/05.jpg" alt="">
                        </div>
                       
                            <a class="preview5" href="images/team/05.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>

                        <div class="team-info">
                            <h3>Produit de conditionnement</h3>
                        </div>
                        <p></p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
                        <div class="team-img">
                            <img class="img-responsive" src="images/team/06.jpg" alt="">
                        </div>
                        
                            <a class="preview6" href="images/team/06.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>

                        <div class="team-info">
                            <h3>Traitement Physico-Chimique</h3>
                        </div>
                        <p></p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="200ms">
                        <div class="team-img">
                            <img class="img-responsive" src="images/team/07.jpg" alt="">
                        </div>
                        
                            <a class="preview7" href="images/team/07.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>

                        <div class="team-info">
                            <h3>Traitement Biologique</h3>
                        </div>
                        <p></p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                        <div class="team-img">
                            <img class="img-responsive" src="images/team/08.jpg" alt="">
                        </div>
                        
                            <a class="preview8" href="images/team/08.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>

                        <div class="team-info1">
                            <h3>Electrocoagulation</h3>
                        </div>
                        <p></p>
                    </div>
                </div>
            </div>
              
                           
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <section id="cta2">
        <div class="container">
            <div class="text-center">
                <h2 class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms"><span>KOB</span> <span>WATER </span>TREATMENT AND MORE</h2>
                <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">Notre équipe se tient derrière chaque traitement que nous ferons <br /></p>
                <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms"><a class="btn btn-primary btn-lg" href="#get-in-touch">Contactez nous</a></p>
            </div>
        </div>
    </section>

    <section id="services" >
        <div class="container">

            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Services</h2>
                <p class="text-center wow fadeInDown"> 
Notre objectif est d'avoir votre entière satisfaction<br> voilà pourquoi nous vous offrons la garantie de protection la plus complète et abordables.</p>
            </div>

            <div class="row">
                <div class="features">
                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
                        <div class="media service-box">
                            <div class="pull-left">
                             <img src="images/icon/1.png">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Problématique</h4>
                                <p>Chez KOB WATER TREATMENT AND MORE, Nous effectuerons, gratuitement, pour vous : La vérification de la pression aux codes constructeurs.</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                 <img src="images/icon/2.png">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Solutions</h4>
                                <p>Faire un traitement n'est jamais très agréable. Nous disposons de la rapidité nécessaire pour réparer et monter vos filtres.</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <img src="images/icon/3.png">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Gestion de traitement de l'eau</h4>
                                <p>Chez KOB WATER TREATMENT AND MORE, nous vous proposons systématiquement le contrôle du parallélisme, 
qui est compris dans le prix d'achat.
</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->
                
                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                 <img src="images/icon/4.png">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Paramètres à ...</h4>
                                <p>Les magasins KOB WATER TREATMENT AND MORE, vous proposent les plus grandes marques de filtres à prix « pas cher » toute l'année.</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                 <img src="images/icon/5.png">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Rapidité de réactivité sur terrain</h4>
                                <p>Votre planning est serré ? Avec un rendez-vous, vous êtes sûr d'être prioritaire et pris à l'heure convenue.</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="500ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                 <img src="images/icon/6.png">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Garantie</h4>
                                <p>L'équilibrage réalisé dans les règles de l'art vous garantira un confort sans vibration.</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->
                </div>
            </div><!--/.row-->    
        </div><!--/.container-->
    </section><!--/#services-->

    <section id="portfolio">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">NOS MATERIAUX</h2>
                <p class="text-center wow fadeInDown">Nos spécialistes de l'entretien vous proposent leurs services et leurs conseils <br> pour choisir la meilleure qualité des filtres d'eau.</p>
            </div>

            <div class="text-center">
                <ul class="portfolio-filter">
                    <li><a class="active" href="#" data-filter="*">Tout</a></li>
                    <li><a href="#" data-filter=".creative">Adoucissement</a></li>
                    <li><a href="#" data-filter=".corporate">Osmose Inverse</a></li>
                    <li><a href="#" data-filter=".portfolio">Filtres</a></li>
                </ul><!--/#portfolio-filter-->
            </div>

            <div class="portfolio-items">
                <div class="portfolio-item creative">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/01.jpg" alt="">
                        <div class="portfolio-info">
                            <h3></h3>
                           
                            <a class="preview" href="images/portfolio/01.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item corporate">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/02.jpg" alt="">
                        <div class="portfolio-info">
                            <h3></h3>
                            
                            <a class="preview" href="images/portfolio/02.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item portfolio">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/09.jpg" alt="">
                        <div class="portfolio-info">
                            <h3></h3>
                            
                            <a class="preview" href="images/portfolio/09.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item creative">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/03.jpg" alt="">
                        <div class="portfolio-info">
                            <h3></h3>
                           
                            <a class="preview" href="images/portfolio/03.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item corporate">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/04.jpg" alt="">
                        <div class="portfolio-info">
                            <h3></h3>
                           
                            <a class="preview" href="images/portfolio/04.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item portfolio">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/10.jpg" alt="">
                        <div class="portfolio-info">
                            <h3></h3>
                           
                            <a class="preview" href="images/portfolio/10.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item creative">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/05.jpg" alt="">
                        <div class="portfolio-info">
                            <h3></h3>
                            
                            <a class="preview" href="images/portfolio/05.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item corporate">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/06.jpg" alt="">
                        <div class="portfolio-info">
                            <h3></h3>
                          
                            <a class="preview" href="images/portfolio/06.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->
                <div class="portfolio-item portfolio">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/11.jpg" alt="">
                        <div class="portfolio-info">
                            <h3></h3>
                            
                            <a class="preview" href="images/portfolio/11.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->
                <div class="portfolio-item creative">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/07.jpg" alt="">
                        <div class="portfolio-info">
                            <h3></h3>
                            
                            <a class="preview" href="images/portfolio/07.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->
                <div class="portfolio-item corporate">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/08.jpg" alt="">
                        <div class="portfolio-info">
                            <h3></h3>
                            
                            <a class="preview" href="images/portfolio/08.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->
                <div class="portfolio-item portfolio">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/12.jpg" alt="">
                        <div class="portfolio-info">
                            <h3></h3>
                            
                            <a class="preview" href="images/portfolio/12.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->
            </div>
        </div><!--/.container-->
    </section><!--/#portfolio-->

    <section id="about">
        <div class="container">

            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Pourquoi choisir KOB water traitement and more </h2>
                <p class="text-center wow fadeInDown">Parce que l’eau est un élément essentiel à la santé de l’homme, KOB WATER TREATMENT AND MORE s’est donné une mission. Celle de simplifier l’accès à l’eau pure. Simplement pure, car ce mot résume tout. Partout à travers le monde, dans un monde en mutation. Pour cela nous sommes dans l’action et chacun d’entre nous au sein de KOB WATER TREATMENT AND MORE a en lui cette idée de permettre au monde de consommer une eau pure.</p>
            </div>

            <div class="row">
                <div class="col-sm-6 wow fadeInLeft">
                    <h3 class="column-title">KOB WATER TREATMENT AND MORE</h3>
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <img src="images/video/1.jpg">
                    </div>
                </div>

                <div class="col-sm-6 wow fadeInRight">
                    <h3 class="column-title">Des solutions simples et efficaces</h3>
                    <p>Pendant de nombreuses années, Nos clients nous ont fait confiance pour offrir des réponses claires et services haut de gamme. KOB WATER TREATMENT AND MORE propose une vaste gamme de traitement d'eau, soutenu par une des meilleures garanties de services dans l'entreprise. </p>

                    <p>Ne sais pas quand la raison de votre véhicule pour les services de maintenance de routine ? Goutte à, et nous allons le chercher pour vous !</p>

                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="nostyle">
                                <li><i class="fa fa-check-square"></i> N°1 de la satisfaction client</li>
                                <li><i class="fa fa-check-square"></i> Disponible et à l’écoute</li>
                            </ul>
                        </div>

                        <div class="col-sm-6">
                            <ul class="nostyle">
                                <li><i class="fa fa-check-square"></i> Expérience parfaite</li>
                                <li><i class="fa fa-check-square"></i> Très bonne prestation</li>
                            </ul>
                        </div>
                    </div>

                    <a class="btn btn-primary" href="#get-in-touch">Contactez nous</a>

                </div>
            </div>
        </div>
    </section><!--/#about-->

    <section id="work-process">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">KOB WATER TREATMENT AND MORE</h2>
                <p class="text-center wow fadeInDown">Fort de notre expérience <br>
                dans le domaine.</p>
            </div>

            <div class="row text-center">
                <div class="col-md-2 col-md-4 col-xs-6">
                  <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
                        <div class="i">
                            <img src="images/icon2/1.png">
                        </div>
                       <p>Textile</p>
                    </div>
                </div>
                <div class="col-md-2 col-md-4 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="200ms">
                       <div>
                            <img src="images/icon2/2.png">
                        </div>
                       <p>Traitement Surface</p>

                       </div>
                </div>
                <div class="col-md-2 col-md-4 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                       <div class="i1">
                            <img src="images/icon2/3.png">
                        </div>
                        <p>Agroalimentaire</p>

                         </div>
                </div>
                <div class="col-md-2 col-md-4 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="400ms">
                        <div>
                            <img src="images/icon2/4.png">
                        </div>
                         <p>Pharmaceutique</p>

                         </div>
                </div>
            </div>
    </section><!--/#work-process-->

    <section id="meet-team">
        <div class="container">
            


            

            <div class="row">
                <div class="col-sm-4">
                    <h3 class="column-title">Nos compétences</h3>
                    <strong>Performant</strong>
                    <div class="progress">
                      <div class="progress-bar progress-bar-primary" role="progressbar" data-width="100">100%</div>
                    </div>
                    <strong>Rapide</strong>
                    <div class="progress">
                        <div class="progress-bar progress-bar-primary" role="progressbar" data-width="100">100%</div>
                    </div>
                    <strong>Expérience parfaite</strong>
                    <div class="progress">
                        <div class="progress-bar progress-bar-primary" role="progressbar" data-width="100">100%</div>
                    </div>
                    <strong>Délais respecte</strong>
                    <div class="progress">
                        <div class="progress-bar progress-bar-primary" role="progressbar" data-width="100">100%</div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <h3 class="column-title">Nos atouts</h3>
                    <div role="tabpanel">
                        <ul class="nav main-tab nav-justified" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#tab1" role="tab" data-toggle="tab" aria-controls="tab1" aria-expanded="true">Excellent</a>
                            </li>
                            <li role="presentation">
                                <a href="#tab2" role="tab" data-toggle="tab" aria-controls="tab2" aria-expanded="false">Rapide</a>
                            </li>
                            <li role="presentation">
                                <a href="#tab3" role="tab" data-toggle="tab" aria-controls="tab3" aria-expanded="false">Réactif</a>
                            </li>
                            <li role="presentation">
                                <a href="#tab4" role="tab" data-toggle="tab" aria-controls="tab4" aria-expanded="false">Impeccable </a>
                            </li>
                        </ul>
                        <div id="tab-content" class="tab-content">
                            <div role="tabpanel" class="tab-pane fade active in" id="tab1" aria-labelledby="tab1">
                                <p>Disponible et à l’écoute.</p>
                             
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab2" aria-labelledby="tab2">
                                <p>Simple, bon service</p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab3" aria-labelledby="tab3">
                                <p>Montage éclair, efficace</p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab4" aria-labelledby="tab3">
                                <p>Bon rapport Qualité / Prix</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <h3 class="column-title">
                    Témoignage</h3>
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Mohamed Ali Azaiez
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                   Marchandise conforme à la commande. Livraison super rapide, j'ai été étonné par la rapidité du service.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Wajdi Beji
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                   Tout s'est passé pour le mieux de la commande à la livraison, y compris le montage.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Yasmine Sakhri
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">
                                    Marchandise conforme à la commande. Livraison super rapide, j'ai été étonné de recevoir mes deux pneus trois jours plus tard.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section><!--/#meet-team-->

    <section id="animated-number">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">KOB WATER TREATMENT AND MORE</h2>
                
          </div>

            <div class="row text-center"></div>
        </div>
    </section><!--/#animated-number-->

   <!--/#pricing--><br>
   <section id="marques">
        <div class="container">
           <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Nos Marques</h2>
                <p class="text-center wow fadeInDown">Quelle que soit la marque que vous choisissez, nous avons ce qu'il vous faut</p>
            </div>
        </div>
    </section>
   

    <section id="testimonial">
        <div class="container">
        </div>
    </section><!--/#testimonial-->

    <section id="blog">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">SOLUTIONS</h2>
                
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="blog-post blog-media wow fadeInRight" data-wow-duration="300ms" data-wow-delay="100ms">
                        <article class="media clearfix">
                            <div class="entry-thumbnail pull-left">
                                <img class="img-responsive" src="images/blog/01.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <header class="entry-header">
                                    <div class="entry-date"></div>
                                    <h2 class="entry-title">KOB WATER TREATMENT AND MORE</h2>
                                </header>

                                <div class="entry-content">
                                    <P>Découvrer nos promotions sur le traitement d'eau.</P>
                                    <a class="btn btn-primary" href="#get-in-touch">Contactez nous</a>
                                </div>

                               
                            </div>
                        </article>
                    </div>
                    <div class="blog-post blog-media wow fadeInRight" data-wow-duration="300ms" data-wow-delay="200ms">
                        <article class="media clearfix">
                            <div class="entry-thumbnail pull-left">
                                <img class="img-responsive" src="images/blog/02.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <header class="entry-header">
                                    <div class="entry-date"></div>
                                    <h2 class="entry-title">KOB WATER TREATMENT AND MORE</h2>
                                </header>

                                <div class="entry-content">
                                    <P>Découvrer nos promotions sur le traitement d'eau.</P>
                                    <a class="btn btn-primary" href="#get-in-touch">Contactez nous</a>
                                </div>

                              
                            </div>
                        </article>
                    </div>
                </div><!--/.col-sm-6-->
                <div class="col-sm-6">
                    <div class="blog-post blog-media wow fadeInRight" data-wow-duration="300ms" data-wow-delay="100ms">
                        <article class="media clearfix">
                            <div class="entry-thumbnail pull-left">
                                <img class="img-responsive" src="images/blog/03.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <header class="entry-header">
                                    <div class="entry-date"></div>
                                    <h2 class="entry-title">KOB WATER TREATMENT AND MORE</h2>
                                </header>

                                <div class="entry-content">
                                    <P>Découvrer nos promotions sur le traitement d'eau.</P>
                                    <a class="btn btn-primary" href="#get-in-touch">Contactez nous</a>
                                </div>

                               
                            </div>
                        </article>
                    </div>
                    <div class="blog-post blog-media wow fadeInRight" data-wow-duration="300ms" data-wow-delay="200ms">
                        <article class="media clearfix">
                            <div class="entry-thumbnail pull-left">
                                <img class="img-responsive" src="images/blog/04.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <header class="entry-header">
                                    <div class="entry-date"></div>
                                    <h2 class="entry-title">KOB WATER TREATMENT AND MORE</h2>
                                </header>

                                <div class="entry-content">
                                    <P>Découvrer nos promotions sur le traitement d'eau.</P>
                                    <a class="btn btn-primary" href="#get-in-touch">Contactez nous</a>
                                </div>

                              
                            </div>
                        </article>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="get-in-touch">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Contactez nous</h2>
                <p class="text-center wow fadeInDown">ET MAINTENANT, CONTACTEZ-NOUS C’EST LE MOMENT DE TRAVAILLER ENSEMBLE ! </p>
            </div>
        </div>
    </section><!--/#get-in-touch-->
    

 <script src="js/jquery.js"></script>
 <script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyAPNjfxaJ13-QgXBJnckKEVdnBtwXkeK8Y'></script>
     
   <section id="contact">
   <div style="overflow:hidden">
	   <div style='overflow:hidden;height:600px;width:100%;'>
		   <div id='gmap_canvas' style='height:600px;width:100%;'></div>
		   <div>
			   <small>
					<a href="http://embedgooglemaps.com"></a>
			   </small>
		   </div>
		   <div>
				<small><a href="http://youtubeembedcode.com"></a></small>
		   </div>
		   <style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
	   </div>
   </div>   

</section>
        <div class="container-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-8">
                        <div class="contact-form">
                            <h3>Nous rejoindre</h3>

                            <address>
                              <strong>Atelier & Magasin
</strong><br>
                              Avenue de la liberté 4050 Sahloul 2 <br>
                              Sousse Tunisie<br>
                              <abbr title="Phone">P:</abbr> 00216-73-820-596
                            </address>

               <form id="main-contact-form" name="contact-form" method="post" action="mailer.php">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Nom" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="subject" class="form-control" placeholder="Objet" required>
                                </div>
                                <div class="form-group">
                                    <textarea name="message" class="form-control" rows="8" placeholder="Message" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">VALIDER</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php

get_footer(); ?>
