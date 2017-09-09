<?php get_header(); ?>

<section class="space-default no-pad-top featured">
	<div class="container">
		<div id="demo"></div>
		<ul class="breadcrumb">
			<li><p>Você está em: </p></li>
			<li><a href="<?php echo home_url(); ?>">Início</a></li>
			<li><a style="color: #333;" href="<?php the_permalink(); ?>"><i class="fa fa-angle-right" aria-hidden="true"></i> Crie seu site</a></li>
		</ul>
		<h2 class=" title-descr tab-bottom font-poppins">Crie o modelo do seu site</h2>
		<form class="form" method="post">

			<!-- <div class="mg-bottom  form">
				<p>Você gostaria de ter um domínio personalizado, por exemplo, www.nataliaesergio.com.br?</p>
				<p>Ele custará R$40 por ano, mediante a disponibilidade no <a href="https://registro.br/" target="_blank">https://registro.br/</a></p>
				<p>Caso contrário, o endereço do seu site será www.enfimcasei.com.br/nataliaesergio, sem nenhuma taxa.</p>
				<div class="input-group">
					<label class="label" for="domain">Sim, gostaria de um domínio personalizado.</label>
					<input type="checkbox" class="checkbox" id="domain" name="domain">
				</div>
			</div> -->

			<div class="mg-bottom ">
				<p>Escolha o modelo do seu site. As imagens e textos você poderá trocar depois quando ele estiver pronto.</p>

				<div class="owl-carousel slidersingle components mg-bottom">
					<section class="main auto-h apresentation overlay no-bg-mobile">
						<input type="radio" class="hidden" name="header" value="1">
						<img class="img-mobile" src="<?php echo get_template_directory_uri(); ?>/img/mobile/header1.jpg">
						<header class="default transparent hidden-mobile">
				 			<div class="container">
				 				<h1 class="logo"></h1>
				 				<div class="nav">
				 					<button class="hamburger hamburger--collapse" type="button">
				 					  <span class="hamburger-box">
				 					    <span class="hamburger-inner"></span>
				 					  </span>
				 					</button>
				 					<div class="clearfix"></div>
				 					<nav class="nav-content">
				 						<ul class="nav-list">
				 							<li><a href="#">Início</a></li>
				 							<li><a href="#">Local</a></li>
				 							<li><a href="#">RSVP</a></li>
				 							<li><a href="#">Contato</a></li>
				 						</ul>
				 					</nav>
				 				</div>
				 			</div>
				 		</header>
						<div class="container hidden-mobile">
							<div class="descr">
								<h2 class="font-petit a-center lines names">Natália <span class="break font-petit">&</span> Sérgio</h2>
								<h3 class="font-petit date a-center">06 de Janeiro de 2018, São Paulo</h3>
							</div>
							<div class="down a-center">
								<i class="fa fa-angle-down" aria-hidden="true"></i>
							</div>
						</div>
						
					</section>

					<section class="main auto-h apresentation overlay no-bg-mobile bg-number-2">
						<input type="radio" class="hidden" name="header" value="2">
						<img class="img-mobile" src="<?php echo get_template_directory_uri(); ?>/img/mobile/header2.jpg">
						<header class="default transparent centered bottom hidden-mobile">
				 			<div class="container ">
				 				<h1 class="logo"></h1>
				 				<div class="nav">
				 					<button class="hamburger hamburger--collapse" type="button">
				 					  <span class="hamburger-box">
				 					    <span class="hamburger-inner"></span>
				 					  </span>
				 					</button>
				 					<div class="clearfix"></div>
				 					<nav class="nav-content">
				 						<ul class="nav-list">
				 							<li><a href="#">Início</a></li>
				 							<li><a href="#">Local</a></li>
				 							<li><a href="#">RSVP</a></li>
				 							<li><a href="#">Contato</a></li>
				 						</ul>
				 					</nav>
				 				</div>
				 			</div>
				 		</header>
						<div class="container hidden-mobile">
							<div class="descr">
								<p class="style_font top-title a-center">Bem vindo a celebração do casamento de...</p>
								<h2 class="names a-center">Natália <i class="break fa fa-heart-o" aria-hidden="true"></i> Sérgio</h2>
							</div>
						</div>
						
					</section>

					<section class="main auto-h apresentation overlay no-bg-mobile bg-number-3">
						<input type="radio" class="hidden" name="header" value="3">
						<img class="img-mobile" src="<?php echo get_template_directory_uri(); ?>/img/mobile/header3.jpg">
						<header class="default transparent hidden-mobile">
				 			<div class="container">
				 				<h1 class="logo"></h1>
				 				<div class="nav">
				 					<button class="hamburger hamburger--collapse" type="button">
				 					  <span class="hamburger-box">
				 					    <span class="hamburger-inner"></span>
				 					  </span>
				 					</button>
				 					<div class="clearfix"></div>
				 					<nav class="nav-content">
				 						<ul class="nav-list">
				 							<li><a href="#">Início</a></li>
				 							<li><a href="#">Local</a></li>
				 							<li><a href="#">RSVP</a></li>
				 							<li><a href="#">Contato</a></li>
				 						</ul>
				 					</nav>
				 				</div>
				 			</div>
				 		</header>
						<div class="container hidden-mobile">
							<div class="descr">
								<p class="a-center names style_font">Natália</p>
								<p class="a-center names style_font">&</p>
								<p class="a-center names style_font">Sérgio</p>
							</div>
							<div class="down a-center">
								<i class="fa fa-angle-down" aria-hidden="true"></i>
							</div>
						</div>
						
					</section>


					<section class="main auto-h apresentation overlay no-bg-mobile bg-number-4">
						<input type="radio" class="hidden" name="header" value="4">
						<img class="img-mobile" src="<?php echo get_template_directory_uri(); ?>/img/mobile/header4.jpg">
						<header class="default transparent vertical  hidden-mobile">
				 			<div class="container">
				 				<div class="nav">
				 					<button class="hamburger hamburger--collapse" type="button">
				 					  <span class="hamburger-box">
				 					    <span class="hamburger-inner"></span>
				 					  </span>
				 					</button>
				 					<div class="clearfix"></div>
				 					<nav class="nav-content">
				 						<ul class="nav-list">
				 							<li class="a-right"><a href="#">Início</a></li>
				 							<li class="a-right"><a href="#">Local</a></li>
				 							<li class="a-right"><a href="#">RSVP</a></li>
				 							<li class="a-right"><a href="#">Contato</a></li>
				 						</ul>
				 					</nav>
				 				</div>
				 			</div>
				 		</header>
						<div class="container hidden-mobile">
							<div class="descr">
								<h2 class="names rotate a-left style_font">Bem Vindo</br> ao nosso</br>casamento...</h2>
							</div>
							<div class="down a-center">
								<i class="fa fa-angle-down" aria-hidden="true"></i>
							</div>
						</div>

					</section>
				</div>
				<h2 class="component-title">Os noivos</h2>
				<div class="owl-carousel slidersingle components couple">	
					<div class="space-default">
						<input type="radio" class="hidden" name="casal" value="1">
						<img class="img-mobile" src="<?php echo get_template_directory_uri(); ?>/img/mobile/noivos1.jpg">
						<div class="column">
							<div class="sm-12-12 hidden-mobile">
								<!-- <h2 class="a-center font-dancing section-title">Os Noivos</h2> -->
								<div class="couple-item">
									<div class="couple-img circle-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/couple/2.jpg')">
										<img class="hidden" src="<?php echo get_template_directory_uri(); ?>/img/couple/2.jpg" alt="">
									</div>
									<div class="a-center space-title">
										<p class="font-dancing couple-name">Natália & Sérgio</p>
									</div>
								</div>
							</div>
							<div class="sm-6-12  hidden-mobile">
								<div class="couple-item">
									<h2>Nossa História</h2>
									<p class="font-montserrrat">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat porro vel ut, obcaecati repellendus dolorem possimus eveniet aperiam sint, distinctio quis provident asperiores velit nisi ratione maiores exercitationem inventore sunt.</p>
									<p class="font-montserrrat">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit tempora molestias adipisci obcaecati necessitatibus, et, odit amet aliquid magni harum totam repellendus dolore quia, autem ab, laudantium dicta blanditiis perferendis!</p>
								</div>
							</div>
							<div class="sm-6-12 hidden-mobile ">
								<div class="couple-item">
									<h2>O pedido</h2>
									<p class="font-montserrrat">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat deserunt accusantium ea, commodi, ut maiores dolores sint excepturi pariatur vel numquam voluptates veniam? Ipsam eius dolor magnam, maxime neque nesciunt?</p>
									<p class="font-montserrrat">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero distinctio, a ab modi similique ullam, animi quam cumque fugiat consectetur ut odit totam, recusandae expedita corrupti! Nam animi, distinctio sint.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="space-default">
						<input type="radio" class="hidden" name="casal" value="2">
						<img class="img-mobile" src="<?php echo get_template_directory_uri(); ?>/img/mobile/noivos2.jpg">
						<!-- <h2 class="a-center  hidden-mobile font-dancing section-title">Os Noivos</h2> -->
						<div class="column hidden-mobile">
							<div class="sm-6-12 ">
								<div class="couple-item">
									<div class="couple-img circle-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/couple/bride.jpg')">
										<img class="hidden" src="<?php echo get_template_directory_uri(); ?>/img/couple/bride.jpg" alt="">
									</div>
									<p class="font-montserrrat font-dancing couple-name a-center space-title">Natália</p>
									<p class="font-montserrrat a-center max-width">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat porro vel ut, obcaecati repellendus dolorem possimus eveniet aperiam sint, distinctio quis provident asperiores velit nisi ratione maiores exercitationem inventore sunt.</p>
								</div>
							</div>
							<div class="sm-6-12 ">
								<div class="couple-item">
									<div class="couple-img circle-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/couple/groom.jpg')">
										<img class="hidden" src="<?php echo get_template_directory_uri(); ?>/img/couple/groom.jpg" alt="">
									</div>
									<p class="font-montserrrat font-dancing couple-name a-center space-title">Sérgio</p>
									<p class="font-montserrrat a-center max-width">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat porro vel ut, obcaecati repellendus dolorem possimus eveniet aperiam sint, distinctio quis provident asperiores velit nisi ratione maiores exercitationem inventore sunt.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="couple-item space-default single-col">
						<input type="radio" class="hidden" name="casal" value="3">
						<img class="img-mobile" src="<?php echo get_template_directory_uri(); ?>/img/mobile/noivos3.jpg">
						<!-- <h2 class="a-center hidden-mobile font-dancing section-title">Os Noivos</h2> -->
						<div class="couple-img circle-img  hidden-mobile  " style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/couple/1.jpg')">
							<img class="hidden" src="<?php echo get_template_directory_uri(); ?>/img/couple/bride.jpg" alt="">
						</div>
						<div class="hidden-mobile">
							<p class="font-dancing couple-name a-center space-title">Natália & Sérgio</p>
							<div class=" ">
								<p class="font-montserrrat a-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat porro vel ut, obcaecati repellendus dolorem possimus eveniet aperiam sint, distinctio quis provident asperiores velit nisi ratione maiores exercitationem inventore sunt.</p>
								<p class="font-montserrrat a-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione deserunt aliquid exercitationem, ab dolores quo at modi quis. Nesciunt nisi dolores et ad doloremque molestiae, provident necessitatibus minus tempora dolore.</p>
							</div>
						</div>
					</div>
					<div class="couple space-default under-other single-col">
						<input type="radio" class="hidden" name="casal" value="4">
						<img class="img-mobile" src="<?php echo get_template_directory_uri(); ?>/img/mobile/noivos4.jpg">
						<!-- <h2 class="a-center hidden-mobile font-dancing section-title">Os Noivos</h2> -->
						<div class="couple-item img-holder hidden-mobile">
							<div class="   couple-img circle-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/couple/bride_1.jpg')">
								<img class="hidden" src="<?php echo get_template_directory_uri(); ?>/img/couple/bride.jpg" alt="">
							</div>
							<div class="   couple-img circle-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/couple/groom_1.jpg')">
								<img class="hidden" src="<?php echo get_template_directory_uri(); ?>/img/couple/groom.jpg" alt="">
							</div>
						</div>
						<div class="a-center hidden-mobile  space-title">
							<p class="font-dancing couple-name">Natália & Sérgio</p>
						</div>
						<div class="couple-item a-center hidden-mobile ">
							<p class="font-montserrrat">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat deserunt accusantium ea, commodi, ut maiores dolores sint excepturi pariatur vel numquam voluptates veniam? Ipsam eius dolor magnam, maxime neque nesciunt?</p>
							<p class="font-montserrrat">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero distinctio, a ab modi similique ullam, animi quam cumque fugiat consectetur ut odit totam, recusandae expedita corrupti! Nam animi, distinctio sint.</p>
						</div>
					</div>
				</div>

				<h2 class="component-title">Locais</h2>
				<div class="space-bottom">
					<div class="owl-carousel slidersingle components">
						<section class="space-default local with-img no-bg-mobile">
							<input type="radio" class="hidden" name="local" value="4">
							<img class="img-mobile" src="<?php echo get_template_directory_uri(); ?>/img/mobile/local1.jpg">
							<div class="container max-width-content hidden-mobile">
								<div class="column">
									<div class="sm-6-12">
										<div class="local-item a-center">
											<div class="local-img bg-cover" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/local/wedding.jpg')">
												<img class="hidden" src="<?php echo get_template_directory_uri(); ?>/img/local/party.jpg">
											</div>
											<div class="local-content">
												<h2 >Cerimônia</h2>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
												<p class="local-featured open-sans">Sábado, 6 de janeiro de 2018</p>
												<p class="local-featured open-sans">Av Alberto Byington, #178</p>
											</div>
										</div>
									</div>
									<div class="sm-6-12">
										<div class="local-item a-center">
											<div class="local-img bg-cover" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/local/party.jpg')">
												<img class="hidden" src="<?php echo get_template_directory_uri(); ?>/img/local/party.jpg">
											</div>
											<div class="local-content">
												<h2 >Festa</h2>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
												<p class="local-featured open-sans">Sábado, 6 de janeiro de 2018</p>
												<p class="local-featured open-sans">Av Alberto Byington, #178</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
						<section class="space-default local with-title">
							<input type="radio" class="hidden" name="local" value="3">
							<img class="img-mobile" src="<?php echo get_template_directory_uri(); ?>/img/mobile/local2.jpg">
							<div class="container hidden-mobile max-widt-content">
								<!-- <h2 class="font-dacing a-center mg-bottom">O Casamento</h2> -->
								<div class="column">
									<div class="sm-6-12 border-right">
										<div class="local-item a-center">
											<h2 >Cerimônia</h2>
											<p>6 de janeiro de 2018, ás 20h</p>
											<p>Av Alberto Byington, #178</p>
										</div>
										<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7312.976294812386!2d-46.66058329394004!3d-23.58682003096726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59f1069d11d1%3A0xcb936109af9ce541!2sParque+Ibirapuera!5e0!3m2!1spt-BR!2sbr!4v1494531597526" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
									</div>
									<div class="sm-6-12">
										<div class="local-item a-center">
											<h2 >Festa</h2>
											<p class="local-featured open-sans">6 de janeiro de 2018, ás 23h</p>
											<p class="local-featured open-sans">Av Alberto Byington, #178</p>
										</div>
										<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.145903743023!2d-46.656441185020775!3d-23.563202767545324!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59c8da0aa315%3A0xd59f9431f2c9776a!2sAv.+Paulista%2C+S%C3%A3o+Paulo+-+SP!5e0!3m2!1spt-BR!2sbr!4v1494531673158"  height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
									</div>
								</div>
							</div>
						</section>
						<section class="space-defult local">
							<input type="radio" class="hidden" name="local" value="1">
							<img class="img-mobile" src="<?php echo get_template_directory_uri(); ?>/img/mobile/local3.jpg">
							<div class="containe hidden-mobile max-width-content ">
								<!-- <h2 class="a-center section-title">Eventos</h2> -->
								<div class="column">
									<div class="sm-6-12">
										<div class="local-item a-center bordered">
											<h2 class="font-dancin">Cerimônia</h2>

											<svg class="mg-20-bottom" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" width="50">
												<path style="fill:#E5BC53;" d="M354.079,487.362c-87.078,0-157.921-70.843-157.921-157.921S267,171.521,354.079,171.521
												S512,242.363,512,329.441S441.158,487.362,354.079,487.362z M354.079,204.912c-68.665,0-124.53,55.864-124.53,124.528
												c0,68.666,55.864,124.53,124.53,124.53s124.53-55.864,124.53-124.53C478.609,260.776,422.745,204.912,354.079,204.912z"/>
												<path style="fill:#F6C958;" d="M157.921,487.362C70.842,487.362,0,416.519,0,329.441s70.842-157.92,157.921-157.92
												s157.921,70.842,157.921,157.92S244.999,487.362,157.921,487.362z M157.921,204.912c-68.666,0-124.53,55.864-124.53,124.528
												c0,68.666,55.864,124.53,124.53,124.53s124.53-55.864,124.53-124.53C282.45,260.776,226.586,204.912,157.921,204.912z"/>
												<path style="fill:#D02D7F;" d="M286.737,24.638c-13.195,0-24.691,7.728-30.737,19.162c-6.046-11.434-17.54-19.162-30.737-19.162
												c-23.159,0-38.504,16.823-38.504,37.574c0,20.75,11.698,33.309,38.504,52.246C248.686,131.009,256,142.621,256,142.621
												s7.315-11.612,30.737-28.161c26.804-18.938,38.502-31.496,38.502-52.246C325.239,41.461,309.896,24.638,286.737,24.638z"/>
												<path style="fill:#C42C78;" d="M286.737,24.638c-13.195,0-24.691,7.728-30.737,19.162c0,19.899,0,98.82,0,98.82
												s7.315-11.612,30.737-28.161c26.804-18.938,38.502-31.496,38.502-52.246C325.239,41.461,309.896,24.638,286.737,24.638z"/>
												</svg>
											<div class="local-details">
												<p class="date"><i class="fa fa-clock-o" aria-hidden="true"></i> 06/01/2018, 20h00</p>
												<p class="address"><i class="fa fa-map-marker" aria-hidden="true"></i> Av Paulista, #188, São Paulo/SP</p>
												<!-- <a href="#" class="btn btn-theme mg-20-top">Ver local</a> -->
											</div>
										</div>
									</div>
									<div class="sm-6-12">
										<div class="local-item a-center bordered">
											<h2 class="font-dancin">Festa</h2>
												<svg class="mg-20-bottom" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" width="50">
													<rect x="186.268" y="8.348" style="fill:#F5F6F6;" width="139.453" height="122.669"/>
													<rect x="256" y="8.348" style="fill:#E5E5E5;" width="69.732" height="122.669"/>
													<path style="fill:#FC9FD8;" d="M290.862,86.598c-13.874,0-21.682-5.334-26.85-8.863c-3.601-2.46-4.458-3.045-8.016-3.045
														c-3.556,0-4.412,0.584-8.012,3.044c-5.168,3.529-12.976,8.864-26.85,8.864s-21.682-5.334-26.85-8.864
														c-3.6-2.46-4.456-3.044-8.012-3.044V41.298c13.874,0,21.681,5.334,26.848,8.863c3.601,2.46,4.457,3.044,8.014,3.044
														s4.413-0.584,8.014-3.044c5.167-3.529,12.974-8.863,26.848-8.863c13.875,0,21.683,5.334,26.851,8.863
														c3.601,2.46,4.457,3.044,8.015,3.044s4.415-0.584,8.016-3.045c5.168-3.529,12.976-8.863,26.85-8.863v33.391
														c-3.558,0-4.414,0.584-8.015,3.044C312.546,81.263,304.737,86.598,290.862,86.598z"/>
													<path style="fill:#EC96CB;" d="M290.862,86.598c-13.874,0-21.682-5.334-26.85-8.863c-3.601-2.46-4.458-3.045-8.016-3.045
														c0-10.742,0-24.842,0-33.391c13.875,0,21.683,5.334,26.851,8.863c3.601,2.46,4.457,3.044,8.015,3.044s4.415-0.584,8.016-3.045
														c5.168-3.529,12.976-8.863,26.85-8.863v33.391c-3.558,0-4.414,0.584-8.015,3.044C312.546,81.263,304.737,86.598,290.862,86.598z"/>
													<rect x="119.808" y="119.552" style="fill:#E5E5E5;" width="272.373" height="152.732"/>
													<rect x="256.178" y="119.552" style="fill:#CECFD0;" width="136.014" height="152.732"/>
													<path style="fill:#EC96CB;" d="M358.137,208.623c-13.772,0-21.49-5.397-26.595-8.969c-3.479-2.433-4.203-2.94-7.457-2.94
														c-3.252,0-3.976,0.506-7.454,2.94c-5.106,3.572-12.822,8.969-26.594,8.969s-21.487-5.397-26.594-8.969
														c-3.478-2.433-4.202-2.94-7.455-2.94c-3.251,0-3.975,0.506-7.453,2.94c-5.106,3.572-12.822,8.969-26.594,8.969
														c-13.771,0-21.487-5.397-26.593-8.969c-3.478-2.433-4.202-2.94-7.454-2.94c-3.25,0-3.972,0.506-7.45,2.938
														c-5.106,3.572-12.821,8.97-26.593,8.97c-13.771,0-21.486-5.398-26.592-8.97c-3.477-2.433-4.2-2.938-7.45-2.938v-33.391
														c13.771,0,21.486,5.398,26.592,8.97c3.477,2.433,4.2,2.938,7.45,2.938c3.251,0,3.974-0.506,7.451-2.938
														c5.106-3.572,12.821-8.97,26.592-8.97c13.772,0,21.488,5.397,26.594,8.969c3.478,2.433,4.202,2.94,7.453,2.94
														c3.252,0,3.976-0.506,7.454-2.94c5.106-3.572,12.822-8.969,26.593-8.969c13.772,0,21.488,5.397,26.595,8.969
														c3.478,2.433,4.202,2.94,7.454,2.94c3.252,0,3.976-0.506,7.454-2.94c5.106-3.572,12.822-8.969,26.594-8.969
														s21.49,5.397,26.595,8.969c3.479,2.433,4.203,2.94,7.457,2.94c3.255,0,3.978-0.506,7.457-2.94
														c5.106-3.572,12.823-8.969,26.595-8.969v33.391c-3.255,0-3.978,0.506-7.457,2.94C379.626,203.226,371.909,208.623,358.137,208.623z"
														/>
													<path style="fill:#DD8CBF;" d="M255.988,196.715c3.253,0,3.977,0.506,7.455,2.94c5.107,3.571,12.822,8.969,26.594,8.969
														s21.488-5.397,26.594-8.969c3.478-2.433,4.202-2.94,7.454-2.94c3.255,0,3.978,0.506,7.457,2.94
														c5.106,3.572,12.823,8.969,26.595,8.969c13.772,0,21.49-5.397,26.595-8.969c3.479-2.433,4.203-2.94,7.457-2.94v-33.391
														c-13.772,0-21.49,5.397-26.595,8.969c-3.479,2.433-4.203,2.94-7.457,2.94c-3.255,0-3.978-0.506-7.457-2.94
														c-5.106-3.572-12.823-8.969-26.595-8.969s-21.488,5.397-26.594,8.969c-3.478,2.433-4.202,2.94-7.454,2.94
														c-3.252,0-3.976-0.506-7.454-2.94c-5.107-3.572-12.823-8.969-26.595-8.969L255.988,196.715L255.988,196.715z"/>
													<rect x="239.304" y="399.482" style="fill:#B8B9BD;" width="33.391" height="87.474"/>
													<rect x="53.35" y="252.394" style="fill:#F5F6F6;" width="405.293" height="147.089"/>
													<rect x="256.178" y="252.394" style="fill:#E5E5E5;" width="202.474" height="147.089"/>
													<path style="fill:#FC9FD8;" d="M458.648,348.591c-13.738,0-21.423-5.419-26.507-9.006c-3.408-2.403-4.116-2.903-7.264-2.903
														c-3.148,0-3.858,0.5-7.264,2.903c-5.084,3.586-12.771,9.006-26.508,9.006s-21.423-5.419-26.508-9.006
														c-3.408-2.403-4.116-2.903-7.265-2.903c-3.147,0-3.856,0.5-7.26,2.902c-5.084,3.586-12.77,9.006-26.506,9.006
														c-13.738,0-21.423-5.419-26.508-9.006c-3.406-2.402-4.115-2.902-7.261-2.902c-3.148,0-3.857,0.5-7.264,2.903
														c-5.084,3.586-12.77,9.006-26.507,9.006c-13.737,0-21.424-5.419-26.508-9.005c-3.409-2.403-4.117-2.903-7.267-2.903
														s-3.859,0.5-7.267,2.903c-5.084,3.586-12.771,9.005-26.508,9.005c-13.739,0-21.424-5.419-26.509-9.005
														c-3.409-2.403-4.118-2.903-7.268-2.903c-3.15,0-3.859,0.5-7.267,2.903c-5.084,3.586-12.771,9.005-26.508,9.005
														c-13.739,0-21.425-5.419-26.512-9.005c-3.409-2.404-4.118-2.904-7.269-2.904c-3.152,0-3.862,0.5-7.27,2.904
														c-5.085,3.586-12.772,9.005-26.51,9.005v-33.391c3.151,0,3.861-0.5,7.269-2.904c5.087-3.586,12.773-9.005,26.512-9.005
														s21.425,5.418,26.51,9.005c3.409,2.404,4.118,2.904,7.27,2.904c3.15,0,3.859-0.5,7.266-2.903c5.085-3.586,12.772-9.005,26.509-9.005
														c13.737,0,21.424,5.419,26.509,9.005c3.409,2.403,4.118,2.903,7.268,2.903c3.15,0,3.859-0.5,7.267-2.903
														c5.084-3.586,12.771-9.005,26.508-9.005c13.737,0,21.424,5.419,26.509,9.005c3.408,2.403,4.116,2.903,7.266,2.903
														c3.148,0,3.857-0.5,7.264-2.903c5.084-3.586,12.77-9.006,26.507-9.006c13.737,0,21.422,5.419,26.506,9.006
														c3.408,2.403,4.116,2.903,7.264,2.903c3.147,0,3.856-0.5,7.26-2.902c5.084-3.586,12.77-9.006,26.506-9.006
														c13.738,0,21.423,5.419,26.508,9.006c3.408,2.403,4.116,2.903,7.265,2.903s3.858-0.5,7.265-2.903
														c5.084-3.586,12.77-9.006,26.507-9.006s21.423,5.419,26.507,9.006c3.408,2.403,4.116,2.903,7.264,2.903L458.648,348.591
														L458.648,348.591z"/>
													<path style="fill:#EC96CB;" d="M458.648,348.591c-13.738,0-21.423-5.419-26.507-9.006c-3.408-2.403-4.116-2.903-7.264-2.903
														c-3.148,0-3.858,0.5-7.264,2.903c-5.084,3.586-12.771,9.006-26.508,9.006s-21.423-5.419-26.508-9.006
														c-3.408-2.403-4.116-2.903-7.265-2.903c-3.147,0-3.856,0.5-7.26,2.902c-5.084,3.586-12.77,9.006-26.506,9.006
														c-13.738,0-21.423-5.419-26.508-9.006c-3.406-2.402-4.115-2.902-7.261-2.902c-3.148,0-3.857,0.5-7.264,2.903
														c-5.084,3.586-12.77,9.006-26.507,9.006c0-18.205,0-28.44,0-33.391c3.148,0,3.857-0.5,7.264-2.903
														c5.084-3.586,12.77-9.006,26.507-9.006s21.422,5.419,26.506,9.006c3.408,2.403,4.116,2.903,7.264,2.903
														c3.147,0,3.856-0.5,7.26-2.902c5.084-3.586,12.77-9.006,26.506-9.006c13.738,0,21.423,5.419,26.508,9.006
														c3.408,2.403,4.116,2.903,7.265,2.903s3.858-0.5,7.265-2.903c5.084-3.586,12.77-9.006,26.507-9.006s21.423,5.419,26.507,9.006
														c3.408,2.403,4.116,2.903,7.264,2.903V348.591z"/>
													<rect y="382.787" style="fill:#C3C3C9;" width="512" height="33.391"/>
													<rect x="162.159" y="470.261" style="fill:#7A7A7C;" width="187.67" height="33.391"/>
												</svg>
											<div class="local-details">
												<p class="date"><i class="fa fa-clock-o" aria-hidden="true"></i> 06/01/2018, 23h00</p>
												<p class="address"><i class="fa fa-map-marker" aria-hidden="true"></i> Av Paulista, #188, São Paulo/SP</p>
												<!-- <a href="#" class="btn btn-theme mg-20-top">Ver local</a> -->
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>

						<section class="space-default local title-middle overlay no-bg-mobile">
							<input type="radio" class="hidden" name="local" value="2">
							<img class="img-mobile" src="<?php echo get_template_directory_uri(); ?>/img/mobile/local4.jpg">
							<div class="container hidden-mobile">
								<div class="column">
									<div class="sm-4-12">
										<div class="local-item a-center bordered">
											<h2 class="font-dancing title-event a-center">Cerimônia </h2>
											<div class="local-details">
												<p><i class="fa fa-calendar" aria-hidden="true"></i> </p>
												<p class="date">10/12/2017, 20h00</p>
												<p class="address">Local: Av Paulista, #188, São Paulo/SP</p>
											</div>	
											<div class="a-center mg-40-top">
												<a href="#" class="btn btn-theme btn-pink btn-radius">Ver local</a>
											</div>
										</div>
									</div>
									<div class="sm-4-12">
										<div class="local-item a-center justify-center flex-center">
											<h2 class="font-dancing section-title rotate">Nossos</br>Eventos</br>Especiais</h2>
										</div>
									</div>
									<div class="sm-4-12">
										<div class="local-item a-center bordered">
											<h2 class="font-dancing title-event">Festa do casamento</h2>
											<div class="local-details">
												<p><i class="fa fa-calendar" aria-hidden="true"></i> </p>
												<p class="date">10/12/2017, 20h00</p>
												<p class="address">Av Paulista, #188, São Paulo/SP</p>
											</div>
											<div class="a-center mg-40-top">
												<a href="#" class="btn btn-theme btn-pink btn-radius">Ver local</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
					</div>
				</div>

				<h2 class="component-title">Confirmação de presença</h2>
				<div class="space-bottom">
					<div class="owl-carousel slidersingle components ">
						<div class="rsvp rsvp-default space-default no-bg-mobile">
							<input type="radio" class="hidden" name="rsvp" value="1">
							<img class="img-mobile" src="<?php echo get_template_directory_uri(); ?>/img/mobile/rsvp1.jpg">
							<div class="container hidden-mobile">
								<h2 class="a-center">RSVP</h2>
								<div class="form max-width">
									<div class="input-group">
										<label for="name" class="label">Digite seu nome</label>
										<input type="text" class="input" id="name" name="name">
									</div>
									<div class="input-group">
										<label for="email" class="label">Quantos convidados irá levar?</label>
										<select class="input">
											<option>0</option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
										</select>
									</div>
									<div class="a-center">
										<button class="btn btn-theme btn-pink btn-uppercase" type="submit">Confirmar Presença</button>
									</div>
								</div>
							</div>
						</div>
						<div class="rsvp space-default rsvp-pink">
							<input type="radio" class="hidden" name="rsvp" value="2">
							<img class="img-mobile" src="<?php echo get_template_directory_uri(); ?>/img/mobile/rsvp2.jpg">
							<div class="container hidden-mobile">
								<h2 class="a-center">RSVP</h2>
								<p class="a-center">Sua presença é muito importante para nós!</p>
								<div class="form max-width">
									<div class="input-group">
										<label for="name" class="label">Digite seu nome</label>
										<input type="text" class="input" id="name" name="name">
									</div>
									<div class="input-group">
										<label for="email" class="label">Quantos convidados irá levar?</label>
										<select class="input">
											<option>0</option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
										</select>
									</div>
									<button class="btn btn-theme btn-dark btn-block btn-uppercase" type="submit">Confirmar Presença</button>
								</div>
							</div>
						</div>
						<div class="rsvp space-default rsvp-font no-bg-mobile">
							<input type="radio" class="hidden" name="rsvp" value="3">
							<img class="img-mobile" src="<?php echo get_template_directory_uri(); ?>/img/mobile/rsvp3.jpg">
							<div class="container hidden-mobile">
								<h2 class="a-center font-dancing">Confirmação de presença</h2>
								<div class="form max-width">
									<div class="column">
										<div class="sm-8-12">
											<div class="input-group">
												<label for="name" class="label font-dancing">Digite seu nome</label>
												<input type="text" class="input" id="name" name="name">
											</div>
										</div>
										<div class="sm-4-12">
											<div class="input-group">
												<label for="email" class="label font-dancing"># Convidados</label>
												<select class="input">
													<option>0</option>
													<option>1</option>
													<option>2</option>
													<option>3</option>
													<option>4</option>
													<option>5</option>
												</select>
											</div>
										</div>
									</div>
									<div class="a-rigt">
									<button class="btn btn-theme btn-dark btn-uppercase" type="submit">Confirmar Presença</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<h2 class="component-title">Contagem regressiva</h2>
				<div class="owl-carousel slidersingle components space-bottom">	
					<section class="space-default timer overlay no-bg-mobile">
						<input type="radio" class="hidden" name="contagem" value="1">
						<img class="img-mobile" src="<?php echo get_template_directory_uri(); ?>/img/mobile/contagem1.jpg">
						<div class="cntainer max_width hidden-mobile">
							<h2 class="a-center section-title font-montserrrat">Contagem regressiva para o grande dia...</h2>
							<div class="column">
								<div class="xs-6-12 sm-3-12">
									<div class="timer-box a-center">
										<div class="number number-days">
										02
										</div>
										<div class="time">Dias</div>
									</div>
								</div>
								<div class="xs-6-12 sm-3-12">
									<div class="timer-box a-center">
										<div class="number number-hours">
										03
										</div>
										<div class="time">Horas</div>
									</div>
								</div>
								<div class="xs-6-12 sm-3-12">
									<div class="timer-box a-center">
										<div class="number number-minutes">
										23
										</div>
										<div class="time">Minutos</div>
									</div>
								</div>
								<div class="xs-6-12 sm-3-12">
									<div class="timer-box a-center">
										<div class="number number-seconds">
										54
										</div>
										<div class="time">Segundos</div>
									</div>
								</div>
							</div>
						</div>
					</section>

					<section class="space-default timer overlay simple no-bg-mobile">
						<input type="radio" class="hidden" name="contagem" value="2">
						<img class="img-mobile" src="<?php echo get_template_directory_uri(); ?>/img/mobile/contagem2.jpg">
						<div class="cntainer max_width hidden-mobile">
							<h2 class="a-center sans-serif section-title">Escolhemos o dia e estamos contando os segundos...</h2>
							<div class="column">
								<div class="xs-6-12 sm-3-12">
									<div class="timer-box a-center">
										<div class="number number-days">
										02
										</div>
										<div class="time">Dias</div>
									</div>
								</div>
								<div class="xs-6-12 sm-3-12">
									<div class="timer-box a-center">
										<div class="number number-hours">
										03
										</div>
										<div class="time">Horas</div>
									</div>
								</div>
								<div class="xs-6-12 sm-3-12">
									<div class="timer-box a-center">
										<div class="number number-minutes">
										23
										</div>
										<div class="time">Minutos</div>
									</div>
								</div>
								<div class="xs-6-12 sm-3-12">
									<div class="timer-box a-center">
										<div class="number number-seconds">
										54
										</div>
										<div class="time">Segundos</div>
									</div>
								</div>
							</div>
						</div>
					</section>

					<section class="space-default timer simple triangle no-bg-mobile">
						<input type="radio" class="hidden" name="contagem" value="3">
						<img class="img-mobile" src="<?php echo get_template_directory_uri(); ?>/img/mobile/contagem3.jpg">
						<div class="cntainer max_width hidden-mobile">
							<h2 class="a-center sans-serif section-title no-mg">25 de Outubro de 2018, São Paulo/SP</h2>
							<i class="fa a-center icon pulse fa-heart" aria-hidden="true"></i>
							<div class="column">
								<div class="xs-6-12 sm-3-12">
									<div class="timer-box a-center">
										<div class="number number-days">
										02
										</div>
										<div class="time">Dias</div>
									</div>
								</div>
								<div class="xs-6-12 sm-3-12">
									<div class="timer-box a-center">
										<div class="number number-hours">
										03
										</div>
										<div class="time">Horas</div>
									</div>
								</div>
								<div class="xs-6-12 sm-3-12">
									<div class="timer-box a-center">
										<div class="number number-minutes">
										23
										</div>
										<div class="time">Minutos</div>
									</div>
								</div>
								<div class="xs-6-12 sm-3-12">
									<div class="timer-box a-center">
										<div class="number number-seconds">
										54
										</div>
										<div class="time">Segundos</div>
									</div>
								</div>
							</div>
						</div>
					</section>

					<section class="space-default timer simple triangle overlay circle no-bg-mobile">
						<input type="radio" class="hidden" name="contagem" value="4">
						<img class="img-mobile" src="<?php echo get_template_directory_uri(); ?>/img/mobile/contagem4.jpg">
						<div class="cntainer max_width hidden-mobile">
							<h2 class="a-center sans-serif section-title">Venha celebrar nosso amor com a gente em...</h2>
							<div class="column">
								<div class="xs-6-12 sm-3-12">
									<div class="timer-box a-center">
										<div class="number number-days">
										02
										</div>
										<div class="time">Dias</div>
									</div>
								</div>
								<div class="xs-6-12 sm-3-12">
									<div class="timer-box a-center">
										<div class="number number-hours">
										03
										</div>
										<div class="time">Horas</div>
									</div>
								</div>
								<div class="xs-6-12 sm-3-12">
									<div class="timer-box a-center">
										<div class="number number-minutes">
										23
										</div>
										<div class="time">Minutos</div>
									</div>
								</div>
								<div class="xs-6-12 sm-3-12">
									<div class="timer-box a-center">
										<div class="number number-seconds">
										54
										</div>
										<div class="time">Segundos</div>
									</div>
								</div>
							</div>
						</div>
					</section>

					<section class="timer one-color no-bg">
						<input type="radio" class="hidden" name="contagem" value="5">
						<img class="img-mobile" src="<?php echo get_template_directory_uri(); ?>/img/mobile/contagem5.jpg">
						<div class="containr hidden-mobile">
							<div class="column">
								<div class="md-4-12 first-color"><h2 class="section-title">Faça a contagem regressiva conosco</h2></div>
								<div class="md-8-12 color_theme">
									<div class="column">
										<div class="sm-3-12 a-center">
												<div class="number number-days">
												02
												</div>
												<div class="time">Dias</div>
										</div>
										<div class="sm-3-12 a-center">
												<div class="number number-hours">
												03
												</div>
												<div class="time">Horas</div>
										</div>
										<div class="sm-3-12 a-center">
												<div class="number number-minutes">
												23
												</div>
												<div class="time">Minutos</div>
										</div>
										<div class="sm-3-12 a-center">
												<div class="number number-seconds">
												54
												</div>
												<div class="time">Segundos</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>

				</div>

				<!-- <h3 class="components-title">Galeria de Foto</h3> -->
				<h2 class=" component-title">Galeria de Fotos</h2>
				<div class="owl-carousel slidersingle components mg-bottom">
					<div>
						<input type="radio" class="hidden" name="fotos" value="1">
						<img class="img-mobile" src="<?php echo get_template_directory_uri(); ?>/img/mobile/fotos1.jpg">
						<div class="components-item gallery hidden-mobile column less-centered">
							<div class="sm-6-12 md-4-12">
								<div class="gallery-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/gallery/party.jpg')">
									<img src="<?php echo get_template_directory_uri(); ?>/img/gallery/party.jpg" alt="">
								</div>
							</div>
							<div class="sm-6-12 md-4-12">
								<div class="gallery-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/gallery/party_1.jpg')">
									<img src="<?php echo get_template_directory_uri(); ?>/img/gallery/party_1.jpg" alt="">
								</div>
							</div>
							<div class="sm-6-12 md-4-12">
								<div class="gallery-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/gallery/party_2.jpg')">
									<img src="<?php echo get_template_directory_uri(); ?>/img/gallery/party_2.jpg" alt="">
								</div>
							</div>
							<div class="sm-6-12 md-4-12">
								<div class="gallery-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/gallery/party_3.jpg')">
									<img src="<?php echo get_template_directory_uri(); ?>/img/gallery/party_3.jpg" alt="">
								</div>
							</div>
							<div class="sm-6-12 md-4-12">
								<div class="gallery-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/gallery/party_4.jpg')">
									<img src="<?php echo get_template_directory_uri(); ?>/img/gallery/party_4.jpg" alt="">
								</div>
							</div>
							<div class="sm-6-12 md-4-12">
								<div class="gallery-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/gallery/party_5.jpg')">
									<img src="<?php echo get_template_directory_uri(); ?>/img/gallery/party_5.jpg" alt="">
								</div>
							</div>
						</div>
					</div>
					<div>
						<input type="radio" class="hidden" name="fotos" value="2">
						<img class="img-mobile" src="<?php echo get_template_directory_uri(); ?>/img/mobile/fotos2.jpg">
						<!-- <h2 class=" component-title">Galeria de Fotos</h2> -->
						<div class="components-item gallery hidden-mobile gallery-tall less-centered">
							<div class="sm-25">
								<div class="gallery-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/gallery/party.jpg')">
									<img src="<?php echo get_template_directory_uri(); ?>/img/gallery/party.jpg" alt="">
								</div>
							</div>
							<div class="sm-25">
								<div class="gallery-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/gallery/party_1.jpg')">
									<img src="<?php echo get_template_directory_uri(); ?>/img/gallery/party_1.jpg" alt="">
								</div>
							</div>
							<div class="sm-25">
								<div class="gallery-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/gallery/party_3.jpg')">
									<img src="<?php echo get_template_directory_uri(); ?>/img/gallery/party_3.jpg" alt="">
								</div>
							</div>
							<div class="sm-25">
								<div class="gallery-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/gallery/party_4.jpg')">
									<img src="<?php echo get_template_directory_uri(); ?>/img/gallery/party_4.jpg" alt="">
								</div>
							</div>
						</div>
					</div>

					<div>
						<input type="radio" class="hidden" name="fotos" value="3">
						<img class="img-mobile" src="<?php echo get_template_directory_uri(); ?>/img/mobile/fotos3.jpg">
						<!-- <h2 class=" component-title">Galeria de Fotos</h2> -->
						<div class="gallery hidden-mobile gallery-featured">
							<div class="gallery-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/gallery/party.jpg')">
								<img src="<?php echo get_template_directory_uri(); ?>/img/gallery/party.jpg" alt="">
							</div>
					
							<div class="gallery-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/gallery/party_1.jpg')">
								<img src="<?php echo get_template_directory_uri(); ?>/img/gallery/party_1.jpg" alt="">
							</div>
						
							<div class="gallery-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/gallery/party_2.jpg')">
								<img src="<?php echo get_template_directory_uri(); ?>/img/gallery/party_2.jpg" alt="">
							</div>
						
							<div class="gallery-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/gallery/party_3.jpg')">
								<img src="<?php echo get_template_directory_uri(); ?>/img/gallery/party_3.jpg" alt="">
							</div>
						
							<div class="gallery-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/gallery/party_4.jpg')">
								<img src="<?php echo get_template_directory_uri(); ?>/img/gallery/party_4.jpg" alt="">
							</div>
						</div>
					</div>


					<div>
						<input type="radio" class="hidden" name="fotos" value="4">
						<img class="img-mobile" src="<?php echo get_template_directory_uri(); ?>/img/mobile/fotos4.jpg">
						<!-- <h2 class=" component-title">Galeria de Fotos</h2> -->
						<div class="gallery hidden-mobile gallery-five less-centered">				
							<div class="gallery-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/gallery/party_1.jpg')">
								<img src="<?php echo get_template_directory_uri(); ?>/img/gallery/party_1.jpg" alt="">
							</div>
							<div class="gallery-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/gallery/party_2.jpg')">
								<img src="<?php echo get_template_directory_uri(); ?>/img/gallery/party_2.jpg" alt="">
							</div>
							<div class="gallery-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/gallery/party_3.jpg')">
								<img src="<?php echo get_template_directory_uri(); ?>/img/gallery/party_3.jpg" alt="">
							</div>
							<div class="gallery-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/gallery/party_4.jpg')">
								<img src="<?php echo get_template_directory_uri(); ?>/img/gallery/party_4.jpg" alt="">
							</div>
							<div class="gallery-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/gallery/party_5.jpg')">
								<img src="<?php echo get_template_directory_uri(); ?>/img/gallery/party_5.jpg" alt="">
							</div>
						</div>
					</div>
				
				</div>
				<h2 class="component-title">Página de Recados</h2>
				<div class="owl-carousel slidersingle components mg-bottom">
					<section class="space-defaul notes">
						<input type="radio" class="hidden" name="recados" value="1">
						<img class="img-mobile" src="<?php echo get_template_directory_uri(); ?>/img/mobile/recados1.jpg">
						<div class="container hidden-mobile ">
							<div class="notes-group ">
								<div class="column">
									<div class="sm-6-12">
										<div class="notes-item">
											<p class="notes-p first-letter">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde ipsum a quia ducimus adipisci perferendis eius dignissimos harum amet voluptas cupiditate aliquid, iusto accusantium illo eligendi ad? Odio, libero, veniam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos nobis fugit, quae facilis tempore ullam!</p>
											<p class="notes-author">Sérgio Junior, </p>
											<p class="notes-connect">-Cunhado</p>
										</div>
									</div>
									<div class="sm-6-12">
										<div class="notes-item">
											<p class="notes-p first-letter">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut et inventore similique fugit, commodi excepturi aliquam explicabo, maiores nam cum sequi autem beatae officia! Aspernatur inventore aliquam eos hic, fuga.</p>
											<p class="notes-author">Sérgio Junior</p>
											<p class="notes-connect">-Cunhado</p>
										</div>
									</div>
									<div class="sm-6-12">
										<div class="notes-item">
											<p class="notes-p first-letter">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde ipsum a quia ducimus adipisci perferendis eius dignissimos harum amet voluptas cupiditate aliquid, iusto accusantium illo eligendi ad? Odio, libero, veniam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos nobis fugit, quae facilis tempore ullam!</p>
											<p class="notes-author">Sérgio Junior, </p>
											<p class="notes-connect">-Cunhado</p>
										</div>
									</div>
									<div class="sm-6-12">
										<div class="notes-item">
											<p class="notes-p first-letter">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut et inventore similique fugit, commodi excepturi aliquam explicabo, maiores nam cum sequi autem beatae officia! Aspernatur inventore aliquam eos hic, fuga.</p>
											<p class="notes-author">Sérgio Junior</p>
											<p class="notes-connect">-Cunhado</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>

					<section class="space-default notes overlay box no-bg-mobile">
						<input type="radio" class="hidden" name="recados" value="2">
						<img class="img-mobile" src="<?php echo get_template_directory_uri(); ?>/img/mobile/recados2.jpg">
						<div class="container hidden-mobile">
							<div class="notes-group column">
								<div class="sm-6-12">
									<div class="notes-item">
										<p class="notes-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro quo nam hic odio ratione, voluptas vero velit. Beatae fuga quam numquam sed iure sequi debitis, quibusdam labore qui voluptatem laboriosam.</p>
										<p class="notes-author">Sérgio Junior</p>
										<p class="notes-connect">-Cunhado</p>
									</div>
								</div>
								<div class="sm-6-12">
									<div class="notes-item">
										<p class="notes-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut et inventore similique fugit, commodi excepturi aliquam explicabo, maiores nam cum sequi autem beatae officia! Aspernatur inventore aliquam eos hic, fuga.</p>
										<p class="notes-author">Fernanda Muniz</p>
										<p class="notes-connect">-Cunhado</p>
									</div>
								</div>
								<div class="sm-6-12">
									<div class="notes-item">
										<p class="notes-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro quo nam hic odio ratione, voluptas vero velit. Beatae fuga quam numquam sed iure sequi debitis, quibusdam labore qui voluptatem laboriosam.</p>
										<p class="notes-author">Sérgio Junior</p>
										<p class="notes-connect">-Cunhado</p>
									</div>
								</div>
								<div class="sm-6-12">
									<div class="notes-item">
										<p class="notes-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut et inventore similique fugit, commodi excepturi aliquam explicabo, maiores nam cum sequi autem beatae officia! Aspernatur inventore aliquam eos hic, fuga.</p>
										<p class="notes-author">Fernanda Muniz</p>
										<p class="notes-connect">-Cunhado</p>
									</div>
								</div>
							</div>
						</div>
					</section>

					<section class="notes bordered-bottom">
						<input type="radio" class="hidden" name="recados" value="3">
						<img class="img-mobile" src="<?php echo get_template_directory_uri(); ?>/img/mobile/recados3.jpg">
						<div class="container hidden-mobile">
							<div class="notes-group column ">
								<div class="sm-6-12">
									<div class="notes-item">
										<p class="notes-p ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde ipsum a quia ducimus adipisci perferendis eius dignissimos harum amet voluptas cupiditate aliquid, iusto accusantium illo eligendi ad? Odio, libero, veniam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos nobis fugit, quae facilis tempore ullam!</p>
										<p class="notes-author">Sérgio Junior, <span>Cunhado</span></p>
									</div>
								</div>
								<div class="sm-6-12">
									<div class="notes-item">
										<p class="notes-p ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde ipsum a quia ducimus adipisci perferendis eius dignissimos harum amet voluptas cupiditate aliquid, iusto accusantium illo eligendi ad? Odio, libero, veniam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos nobis fugit, quae facilis tempore ullam!</p>
										<p class="notes-author">Sérgio Junior, <span>Cunhado</span></p>
									</div>
								</div>
								<div class="sm-6-12">
									<div class="notes-item">
										<p class="notes-p ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde ipsum a quia ducimus adipisci perferendis eius dignissimos harum amet voluptas cupiditate aliquid, iusto accusantium illo eligendi ad? Odio, libero, veniam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos nobis fugit, quae facilis tempore ullam!</p>
										<p class="notes-author">Sérgio Junior, <span>Cunhado</span></p>
									</div>
								</div>
								<div class="sm-6-12">
									<div class="notes-item">
										<p class="notes-p ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde ipsum a quia ducimus adipisci perferendis eius dignissimos harum amet voluptas cupiditate aliquid, iusto accusantium illo eligendi ad? Odio, libero, veniam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos nobis fugit, quae facilis tempore ullam!</p>
										<p class="notes-author">Sérgio Junior, <span>Cunhado</span></p>
									</div>
								</div>

							</div>
						</div>
					</section>
				</div>

				<h2 class="component-title">Blog do casal</h2>
				<div class="owl-carousel slidersingle components">
					<div class="containr space-default">
						<input type="radio" class="hidden" name="blog" value="1">
						<img class="img-mobile" src="<?php echo get_template_directory_uri(); ?>/img/mobile/blog1.jpg">
						<div class="blog blog-default column hidden-mobile">
							<div class="sm-4-12">
								<div class="blog_item">
									<div class="blog_img bg-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/Blog/blog.jpg')">
										<figure>
											<img class="hidden" src="<?php echo get_template_directory_uri(); ?>/img/noiva.jpeg" alt="">
										</figure>
									</div>
									<div class="blog_content">
										<a href="#"><h2 class="blog_content-title">Nosso destino na lua de mel</h2></a>

										<p class="blog_content-p">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam optio iusto numquam fugit omnis! Similique distinctio reiciendis, voluptatem praesentium ipsum...
											<a href="#" class="a-left">Continuar lendo...</a>
										</p>
									</div>
								</div>
							</div>

							<div class="sm-4-12">
								<div class="blog_item">
									<div class="blog_img bg-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/Blog/couple.jpg')">
										<figure>
											<img class="hidden" src="<?php echo get_template_directory_uri(); ?>/img/festa.jpg" alt="">
										</figure>
									</div>
									<div class="blog_content">
										<a href="#"><h2 class="blog_content-title">Conheça nossa história</h2></a>
										<p class="blog_content-p">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam optio iusto numquam fugit omnis! Similique distinctio reiciendis, voluptatem praesentium ipsum...
											<a href="#" class="a-left">Continuar lendo...</a>
										</p>
									</div>
								</div>
							</div>

							<div class="sm-4-12">
								<div class="blog_item">
									<div class="blog_img bg-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/Blog/dog.jpg')">
										<figure>
											<img class="hidden" src="<?php echo get_template_directory_uri(); ?>/img/madrinhas.jpg" alt="">
										</figure>
									</div>
									<div class="blog_content">
										<a href="#"><h2 class="blog_content-title">Veja nossa filha!</h2></a>
										<p class="blog_content-p">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam optio iusto numquam fugit omnis! Similique distinctio reiciendis, voluptatem praesentium ipsum...
											<a href="#" class="a-left">Continuar lendo...</a>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="containr space-default">
						<input type="radio" class="hidden" name="blog" value="2">
						<img class="img-mobile" src="<?php echo get_template_directory_uri(); ?>/img/mobile/blog2.jpg">
						<!-- <h2 class=" component-title">Blog do casal</h2> -->
						<div class="blog bg-overlay hidden-mobile column">
							<div class="sm-4-12">
								<div class="blog_item overlay bg-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/Blog/bride.jpg')">
									<figure>
										<img class="hidden" src="<?php echo get_template_directory_uri(); ?>/img/Blog/bride.jpg" alt="">
									</figure>
									<div>
										<h2>Saiba como foi meu dia de noiva</h2>
										<div class="shared-list">
											<ul>
												<li>
													<a class="facebook" href="#">
														<i class="fa fa-facebook" aria-hidden="true"></i>
													</a>
												</li>
												<li>
													<a class="twitter" href="#">
														<i class="fa fa-twitter" aria-hidden="true"></i>
													</a>
												</li>
												<li>
													<a class="whatsapp" href="#">
														<i class="fa fa-whatsapp" aria-hidden="true"></i>
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>

							<div class="sm-4-12 ">
								<div class="blog_item overlay bg-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/Blog/hotel.jpg')">
									<figure>
										<img class="hidden" src="<?php echo get_template_directory_uri(); ?>/img/Blog/hotel.jpg" alt="">
									</figure>
									<div>
										<h2>Onde se hospedar próximo a cerimônia?</h2>
										<div class="shared-list">
											<ul>
												<li>
													<a class="facebook" href="#">
														<i class="fa fa-facebook" aria-hidden="true"></i>
													</a>
												</li>
												<li>
													<a class="twitter" href="#">
														<i class="fa fa-twitter" aria-hidden="true"></i>
													</a>
												</li>
												<li>
													<a class="whatsapp" href="#">
														<i class="fa fa-whatsapp" aria-hidden="true"></i>
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>

							<div class="sm-4-12 ">
								<div class="blog_item overlay bg-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/Blog/music.jpg')">
									<figure>
										<img class="hidden" src="<?php echo get_template_directory_uri(); ?>/img/Blog/music.jpg" alt="">
									</figure>
									<div>
										<h2>Como será a playlist?</h2>
										<div class="shared-list">
											<ul>
												<li>
													<a class="facebook" href="#">
														<i class="fa fa-facebook" aria-hidden="true"></i>
													</a>
												</li>
												<li>
													<a class="twitter" href="#">
														<i class="fa fa-twitter" aria-hidden="true"></i>
													</a>
												</li>
												<li>
													<a class="whatsapp" href="#">
														<i class="fa fa-whatsapp" aria-hidden="true"></i>
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="containe space-default">
						<input type="radio" class="hidden" name="blog" value="3">
						<img class="img-mobile" src="<?php echo get_template_directory_uri(); ?>/img/mobile/blog3.jpg">
						<div class="card column hidden-mobile">
							<div class="sm-4-12 md-6-12">
								<div class="card_item">
									<div class="card_img">
										<figure>
											<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/noiva.jpeg" alt=""></a>
										</figure>
									</div>
									<div class="card_content">
										<a href="#"><h2 class="card_content-title">Saiba como foi o meu dia de noiva</h2></a>
										<div class="shared-list">

											<ul>
												<li>
													<p>Compartilhar</p>	
												</li>
												<li>
													<a class="facebook" href="#">
														<i class="fa fa-facebook" aria-hidden="true"></i>
													</a>
												</li>
												<li>
													<a class="twitter" href="#">
														<i class="fa fa-twitter" aria-hidden="true"></i>
													</a>
												</li>
												<li>
													<a class="whatsapp" href="#">
														<i class="fa fa-whatsapp" aria-hidden="true"></i>
													</a>
												</li>
											</ul>
										</div>
										<p class="card_content-p">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam optio iusto numquam fugit omnis! Similique distinctio reiciendis, voluptatem praesentium ipsum...
										</p>
									</div>
								</div>
							</div>

							<div class="sm-4-12 md-3-12">
								<div class="card_item">
									<div class="card_img">
										<figure>
											<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/festa.jpg" alt=""></a>
										</figure>
									</div>
									<div class="card_content">
										<a href="#"><h2 class="card_content-title">Conheça um pouco sobre a decoração</h2></a>
										<div class="shared-list">
											<ul>
												<li>
													<a class="facebook" href="#">
														<i class="fa fa-facebook" aria-hidden="true"></i>
													</a>
												</li>
												<li>
													<a class="twitter" href="#">
														<i class="fa fa-twitter" aria-hidden="true"></i>
													</a>
												</li>
												<li>
													<a class="whatsapp" href="#">
														<i class="fa fa-whatsapp" aria-hidden="true"></i>
													</a>
												</li>
											</ul>
										</div>
										<p class="card_content-p">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam optio iusto numquam fugit omnis! Similique distinctio reiciendis, voluptatem praesentium ipsum...
										</p>
									</div>
								</div>
							</div>

							<div class="sm-4-12 md-3-12">
								<div class="card_item">
									<div class="card_img">
										<figure>
											<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/madrinhas.jpg" alt=""></a>
										</figure>
									</div>
									<div class="card_content">
										<a href="#"><h2 class="card_content-title">Saiba quem serão as madrinhas</h2></a>
										<div class="shared-list">
											<ul>
												<li>
													<a class="facebook" href="#">
														<i class="fa fa-facebook" aria-hidden="true"></i>
													</a>
												</li>
												<li>
													<a class="twitter" href="#">
														<i class="fa fa-twitter" aria-hidden="true"></i>
													</a>
												</li>
												<li>
													<a class="whatsapp" href="#">
														<i class="fa fa-whatsapp" aria-hidden="true"></i>
													</a>
												</li>
											</ul>
										</div>
										<p class="card_content-p">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam optio iusto numquam fugit omnis! Similique distinctio reiciendis, voluptatem praesentium ipsum...
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<input type="hidden" value="1" name="createPage">
			</div>
			<div class="mg-bottom ">
				<p class="mg-bottom">Agora confirme o nome da noiva e do noivo.</p>
				<div class="max-width-content form bordered">
					<div class="column">
						<div class="sm-12-12">
							<div class="input-group">
								<label class="label">Digite o nome da noiva</label>
								<input type="text" ng-model="names.noiva" ng-change="changeName(names)" class="input" name="noiva">
							</div>
							<div class="input-group">
								<label class="label">Digite o nome do noivo</label>
								<input type="text" ng-model="names.noivo" ng-change="changeName(names)" class="input" name="noivo">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="a-center">
				<button type="submit" class="btn btn-theme btn-big btn-uppercase submit">Criar site</button>
			</div>
		</form>
	</div>

</section>
<?php get_footer(); ?>