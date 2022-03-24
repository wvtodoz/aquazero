<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Aquazero</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="assets/bootstraps/css/bootstrap.min.css">         
        <link rel="stylesheet" type="text/css" href="assets/slick/slick.css"/>
        <!-- Add the new slick-theme.css if you want the default styling-->
        <link rel="stylesheet" type="text/css" href="assets/slick/slick-theme.css"/>     
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
        
    </head>
    <body>
        <header>
            <div class="container header--area">
                <div class="header--logo">
                    <a href="https://api.whatsapp.com/send?phone=55119992119846&text=Olá%20gostaria%20de%20agendar%20um%20serviço."><img src="https://www.acquazero.com/wp-content/uploads/2022/01/logo-acquazero.png" alt=""></a>                
                </div>                
            </div>            
        </header>
        <section id="slider">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <picture>
                            <source media="(max-width: 480px)" srcset="assets/image/img-laricia-mobile.png">
                            <img src="assets/image/banner-cupom20-laricia.png" class="d-block img-fluid" alt="...">
                        </picture>                        
                    </div>                    
                    <div class="carousel-item">
                        <picture>
                            <source media="(max-width: 480px)" srcset="assets/image/douglas-mobie.jpg">
                            <img src="assets/image/banner-cupom-cristal-free-Douglas-2.png" class="d-block img-fluid" alt="...">
                        </picture>                        
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        <section id="tabs">            
            <div class="container tabs--area">
                <ul class="pt-2">
                    <li>
                    <span><i class="pt-3 fa fa-truck fa-flip-horizontal fa-pull-left fa-2x"></i></span>                       
                        <span class="text-white">Vamos até você!</span>
                    </li>
                    <li>
                    <span><i class="pt-3 fa fa-users fa-flip-horizontal fa-pull-left fa-2x"></i></span>                       
                        <span class="text-white">Profissionais qualificados</span>
                    </li>
                    <li>
                    <span><i class="pt-3 fa fa-calendar fa-flip-horizontal fa-pull-left fa-2x"></i></span>                       
                        <span class="text-white">Serviços agendados</span>
                    </li>
                    <li>
                    <span><i class="pt-3 fa fa-shield fa-flip-horizontal fa-pull-left fa-2x"></i></span>                       
                        <span class="text-white">100% segura</span>
                    </li>
                    <li>
                    <span><i class="pt-3 fa fa-certificate fa-flip-horizontal fa-pull-left fa-2x"></i></span>                       
                        <span class="text-white">Nº1 do mundo</span>
                    </li>                                   
                </ul>
            </div>                      
        </section>
        <section id="oferta--mes">
            <div class="container oferta--area">
                <div class="row d-flex justify-content-center pt-3">
                    <div class="container">
                        <h2 class="d-flex justify-content-center pt-5 pb-5">Ofertas do <strong>&nbsp;Mês</strong></h2>
                    </div>                    
                </div>                
                <div class="slick">
                    <div><img src="assets/image/of1.jpg" alt="js" /></div>
                    <div><img src="assets/image/of2.jpg" alt="Oferta 1" /></div>
                    <div><img src="assets/image/of3.jpg" alt="Oferta 2" /></div>
                    <div><img src="assets/image/of4.jpg" alt="Oferta 3" /></div>
                    <div><img src="assets/image/of5.jpg" alt="Oferta 4" /></div>                        
                </div>              
            </div>
        </section>
        <section id="oferta--mes">
            <div class="container oferta--area">
                <div class="row d-flex justify-content-center pt-5">
                    <div class="container"> 
                        <h2 class="d-flex justify-content-center pb-5">Serviços <strong>&nbsp;Automotivos</strong></h2>
                    </div>                    
                </div>
                <div class="row">
                    <div class="cards d-flex flex-wrap">
                        <div class="card" style="width: 18rem;">
                            <img src="https://www.acquazero.com/wp-content/uploads/2021/12/limpeza-ecologica.jpg" class="card-img-top" alt="Limpeza Ecológica">
                            <div class="card-body d-flex align-content-between flex-wrap">
                                <div class="card-info">                                    
                                    <h5 class="card-title">Limpeza Ecológica</h5>
                                    <div>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    
                                    </div>
                                    <p class="card-text">A limpeza ecológica da Acquazero com o composto de cera não prejudica a pintura, protegida contra males do tempo e é biodegradável.</p>                                    
                                </div>
                                <div class="preco_botao d-flex flex-column align-items-start mt-3">
                                    <p class="preco">A partir de <strong>&nbsp;R$70,00</strong></p>                                    
                                    <a href="https://api.whatsapp.com/send?phone=55119992119846&text=Olá%20gostaria%20de%20agendar%20o%20serviço%20Limpeza%20Ecológica" class="btn btn-primary">Agendar Serviço</a>
                                </div>                                
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="https://www.acquazero.com/wp-content/uploads/2022/01/polimento-de-pintura-acquazero-bmw.jpg" class="card-img-top" alt="Enceramento Wax">
                            <div class="card-body d-flex align-content-between flex-wrap">
                                <div class="card-info">
                                    <h5 class="card-title">Enceramento Wax</h5>
                                    <div>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    
                                    </div>
                                    <p class="card-text">Nossa Super Cera cria uma película de proteção sobre a lataria, vedando os micro poros da pintura. Como resultado, menos danos provocados pelos raios solares.</p>                                    
                                </div>
                                <div class="preco_botao d-flex flex-column align-items-start mt-3">
                                    <p class="preco">A partir de <strong>&nbsp;R$110,00</strong></p>
                                    <a href="https://api.whatsapp.com/send?phone=55119992119846&text=Olá%20gostaria%20de%20agendar%20o%20serviço%20Enceramento%20Wax." class="btn btn-primary">Agendar Serviço</a>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="https://www.acquazero.com/wp-content/uploads/2021/12/revitalizacao.jpg" class="card-img-top" alt="Revitalização de plásticos">
                            <div class="card-body d-flex align-content-between flex-wrap">
                                <div class="card-info">
                                    <h5 class="card-title">Revitalização de plásticos</h5>
                                    <div>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    
                                    </div>
                                    <p class="card-text">A revitalização de plásticos Acquazero traz vida e um visual mais atraente as peças que vão se desbotando ao longo do tempo, que ficam expostas ao sol e a chuva. </p>                                    
                                </div>
                                <div class="preco_botao d-flex flex-column align-items-start mt-3">
                                    <p class="preco">A partir de <strong>&nbsp;R$30,00</strong></p>
                                    <a href="https://api.whatsapp.com/send?phone=55119992119846&text=Olá%20gostaria%20de%20agendar%20o%20serviço%20Revitalização%20de%20plásticos." class="btn btn-primary">Agendar Serviço</a>
                                </div>                               
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="https://www.acquazero.com/wp-content/uploads/2022/01/polimento-de-pintura-acquazero.jpg" class="card-img-top" alt="Polimento de Pintura">
                            <div class="card-body d-flex align-content-between flex-wrap">
                                <div class="card-info">
                                    <h5 class="card-title">Polimento de Pintura</h5>
                                    <div>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    
                                    </div>
                                    <p class="card-text">Carros com pinturas manchadas merecem o polimento de pintura. O processo também reaviva a cor e o brilho da lataria, além de eliminar riscos.</p>                                    
                                </div>
                                <div class="preco_botao d-flex flex-column align-items-start mt-3">
                                    <p class="preco">A partir de <strong>&nbsp;R$500,00</strong></p>
                                    <a href="https://api.whatsapp.com/send?phone=55119992119846&text=Olá%20gostaria%20de%20agendar%20o%20serviço%20Polimento%20de%20Pintura" class="btn btn-primary">Agendar Serviço</a>
                                </div> 
                            </div>
                        </div>
                        
                        <div class="card" style="width: 18rem;">
                            <img src="https://www.acquazero.com/wp-content/uploads/2021/04/como-limpar-couro-sintetico1.jpg" class="card-img-top" alt="Hidratação de Couro">
                            <div class="card-body d-flex align-content-between flex-wrap">
                                <div class="card-info">
                                    <h5 class="card-title">Hidratação de Couro</h5>
                                    <div>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    
                                    </div>
                                    <p class="card-text">O processo de limpeza e hidratação de couro da Acquazero o equilíbrio do PH. O produto utilizado é à base de óleos naturais do próprio couro, eliminando rangidos.</p>                                    
                                </div> 
                                <div class="preco_botao d-flex flex-column align-items-start mt-3">
                                    <p class="preco">A partir de <strong>&nbsp;R$40,00</strong></p>
                                    <a href="https://api.whatsapp.com/send?phone=55119992119846&text=Olá%20gostaria%20de%20agendar%20o%20serviço%20Hidratação%20de%20Couro" class="btn btn-primary">Agendar Serviço</a>
                                </div>                              
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="https://www.acquazero.com/wp-content/uploads/2022/02/impermeabilizacao-bancos.jpg" class="card-img-top" alt="Impermeabilização dos Tecidos">
                            <div class="card-body d-flex align-content-between flex-wrap">
                                <div class="card-info">
                                    <h5 class="card-title">Impermeabilização dos Tecidos</h5>
                                    <div>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    
                                    </div>
                                    <p class="card-text">A impermeabilização da Acquazero super protege o tecido, traz maior durabilidade e previne o surgimento de fungos e bactérias</p>
                                </div>
                                <div class="preco_botao d-flex flex-column align-items-start mt-3">
                                    <p class="preco">A partir de <strong>&nbsp;R$200,00</strong></p>
                                    <a href="https://api.whatsapp.com/send?phone=55119992119846&text=Olá%20gostaria%20de%20agendar%20o%20serviço%20Impermeabilização%20dos%20Tecidos" class="btn btn-primary">Agendar Serviço</a>
                                </div>                             
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="https://www.acquazero.com/wp-content/uploads/2021/10/como-e-feita-a-oxi-sanitizacao-1-edited.jpg" class="card-img-top" alt="Oxi-sanitização">
                            <div class="card-body d-flex align-content-between flex-wrap">
                                <div class="card-info">
                                    <h5 class="card-title">Oxi-sanitização</h5>
                                    <div>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>                                    
                                    </div>
                                    <p class="card-text">A oxi-sanitização é um processo que elimina totalmente odores desagradáveis, como cheiro de cigarro, vômito, derramamento acidental de líquidos e alimentos.</p>                                    
                                </div>
                                <div class="preco_botao d-flex flex-column align-items-start mt-3">
                                    <p class="preco">A partir de <strong>&nbsp;R$200,00</strong></p>
                                    <a href="https://api.whatsapp.com/send?phone=55119992119846&text=Olá%20gostaria%20de%20agendar%20o%20serviço%20Oxi-sanitização" class="btn btn-primary">Agendar Serviço</a>
                                </div>                             
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="https://www.acquazero.com/wp-content/uploads/2021/12/porta-malas.jpg.jpg" class="card-img-top" alt="Higienização do Porta Malas">
                            <div class="card-body d-flex align-content-between flex-wrap">
                                <div class="card-info">
                                    <h5 class="card-title">Higienização do Porta Malas</h5>
                                    <div>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>                                    
                                    </div>
                                    <p class="card-text">Evite que suas malas se sujem, oe que o porta-malas dê mau cheiro. Limpeza completa a seco e que elimina toda a sujeira e bactérias.</p>
                                </div> 
                                <div class="preco_botao d-flex flex-column align-items-start mt-3">
                                    <p class="preco">A partir de <strong>&nbsp;R$80,00</strong></p>
                                    <a href="https://api.whatsapp.com/send?phone=55119992119846&text=Olá%20gostaria%20de%20agendar%20o%20serviço%20Higienização%20do%20Porta%20Malas" class="btn btn-primary">Agendar Serviço</a>
                                </div>
                            </div>
                        </div>                        
                    </div>                   
                </div>
                <div class="row">
                    <div class="container banner">
                        <img src="https://www.acquazero.com/wp-content/uploads/2022/03/com-inovacao-e-sustentabilidade-desktop-1.png" class="d-none d-md-block">
                        <img src="https://www.acquazero.com/wp-content/uploads/2022/03/com-inovacao-e-sustentabilidade-mobile.png" class="d-block d-md-none" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="cards d-flex flex-wrap pt-5">
                        <div class="card" style="width: 18rem;">
                            <img src="https://www.acquazero.com/wp-content/uploads/2021/12/cadeirao-para-crianca.jpg" class="card-img-top" alt="Higienização do Cadeirão">
                            <div class="card-body d-flex align-content-between flex-wrap">
                                <div class="card-info">
                                    <h5 class="card-title">Higienização do Cadeirão</h5>
                                    <div>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    
                                    </div>
                                    <p class="card-text">A limpeza e higienização completa do cadeirão elimina sujeira, mau cheiro e bactérias que podem fazer mal para o bebê ou criança.</p>                                    
                                </div><br> 
                                <div class="preco_botao d-flex flex-column align-items-start mt-3">
                                    <p class="preco">A partir de <strong>&nbsp;R$180,00</strong></p>
                                    <a href="https://api.whatsapp.com/send?phone=55119992119846&text=Olá%20gostaria%20de%20agendar%20o%20serviço%20Higienização%20do%20Cadeirão" class="btn btn-primary">Agendar Serviço</a>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="https://www.acquazero.com/wp-content/uploads/2022/01/vitrificacao-acquazero-bmw.jpg" class="card-img-top" alt="Cristalização de Pintura">
                            <div class="card-body d-flex align-content-between flex-wrap">
                                <div class="card-info">
                                    <h5 class="card-title">Cristalização de Pintura</h5>
                                    <div>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    
                                    </div>
                                    <p class="card-text">A cristalização traz de volta a vida da pintura com brilho muito mais intenso, removendo micro riscos e ocasionando uma proteção duradoura contra os diversos males do tempo.</p>                                    
                                </div>
                                <div class="preco_botao d-flex flex-column align-items-start mt-3">
                                    <p class="preco">A partir de <strong>&nbsp;R$350,00</strong></p>
                                    <a href="https://api.whatsapp.com/send?phone=55119992119846&text=Olá%20gostaria%20de%20agendar%20o%20serviço%20Cristalização%20de%20Pintura" class="btn btn-primary">Agendar Serviço</a>
                                </div>                            
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="https://www.acquazero.com/wp-content/uploads/2021/12/enceramento-espelhamento-acquazero.jpg" class="card-img-top" alt="Espelhamento de Pintura">
                            <div class="card-body d-flex align-content-between flex-wrap">
                                <div class="card-info">
                                    <h5 class="card-title">Espelhamento de Pintura</h5>
                                    <div>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    
                                    </div>
                                    <p class="card-text">A “Super Cera” da Acquazero cria uma película de proteção sobre a lataria, vedando os micro poros da pintura. É ideal para carros com brilho mais desgastado.</p>                                    
                                </div> 
                                <div class="preco_botao d-flex flex-column align-items-start mt-3">
                                    <p class="preco">A partir de <strong>&nbsp;R$250,00</strong></p>
                                    <a href="https://api.whatsapp.com/send?phone=55119992119846&text=Olá%20gostaria%20de%20agendar%20o%20serviço%20Espelhamento%20de%20Pintura." class="btn btn-primary">Agendar Serviço</a>
                                </div>                             
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="https://www.acquazero.com/wp-content/uploads/2022/02/vitificacao.jpg" class="card-img-top" alt="Vitrificação de Pintura">
                            <div class="card-body d-flex align-content-between flex-wrap">
                                <div class="card-info">
                                    <h5 class="card-title">Vitrificação de Pintura</h5>
                                    <div>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    
                                    </div>
                                    <p class="card-text">Serviço exclusivo da Acquazero. Ele cria proteção contra o desgaste da pintura pelo tempo ou ocasionada por pequenos acidentes, como batidas e leves esbarrões.</p>                                    
                                </div> 
                                <div class="preco_botao d-flex flex-column align-items-start mt-3">
                                    <p class="preco">A partir de <strong>&nbsp;R$1000,00</strong></p>
                                    <a href="https://api.whatsapp.com/send?phone=55119992119846&text=Olá%20gostaria%20de%20agendar%20o%20serviço%20Vitrificação%20de%20Pintura." class="btn btn-primary">Agendar Serviço</a>
                                </div>                       
                            </div>
                        </div>
                        
                        <div class="card" style="width: 18rem;">
                            <img src="https://www.acquazero.com/wp-content/uploads/2020/09/car-panel-7.jpg" class="card-img-top" alt="Revitalização de Plásticos Internos">
                            <div class="card-body d-flex align-content-between flex-wrap">
                                <div class="card-info">
                                    <h5 class="card-title">Revitalização de Plásticos Internos</h5>
                                    <div>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    
                                    </div>
                                    <p class="card-text">A revitalização de plásticos Acquazero traz vida e um visual mais atraente as peças que vão se desbotando ao longo do tempo.</p>                                    
                                </div>  
                                <div class="preco_botao d-flex flex-column align-items-start mt-3">
                                    <p class="preco">A partir de <strong>&nbsp;R$60,00</strong></p>
                                    <a href="https://api.whatsapp.com/send?phone=55119992119846&text=Olá%20gostaria%20de%20agendar%20o%20serviço%20Revitalização%20de%20Plásticos%20Internos." class="btn btn-primary">Agendar Serviço</a>
                                </div>                            
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="https://www.acquazero.com/wp-content/uploads/2021/12/vitrificacao-acquazero.jpg" class="card-img-top" alt="Vitrificação de Vidros">
                            <div class="card-body d-flex align-content-between flex-wrap">
                                <div class="card-info">
                                    <h5 class="card-title">Vitrificação de Vidros</h5>
                                    <div>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    
                                    </div>
                                    <p class="card-text">A limpeza e manutenção da Acquazero nos vidros, evita a fixação de sujeiras pesadas e melhora a visibilidade. Diminui a necessidade de limpezas frequentes.</p>                                    
                                </div> 
                                <div class="preco_botao d-flex flex-column align-items-start mt-3">
                                    <p class="preco">A partir de <strong>&nbsp;R$150,00</strong></p>
                                    <a href="https://api.whatsapp.com/send?phone=55119992119846&text=Olá%20gostaria%20de%20agendar%20o%20serviço%20Vitrificação%20de%20Vidros." class="btn btn-primary">Agendar Serviço</a>
                                </div>                            
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="https://www.acquazero.com/wp-content/uploads/2021/12/manutencao-de-pintura-acquazero.jpg" class="card-img-top" alt="Descontaminação de Pintura">
                            <div class="card-body d-flex align-content-between flex-wrap">
                                <div class="card-info">
                                    <h5 class="card-title">Descontaminação de Pintura</h5>
                                    <div>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    
                                    </div>
                                    <p class="card-text">A descontaminação de pintura da Acquazero remove os contaminantes que deixam a pintura áspera, parecendo lixa,</p>                                    
                                </div>  
                                <div class="preco_botao d-flex flex-column align-items-start mt-3">
                                    <p class="preco">A partir de <strong>&nbsp;R$250,00</strong></p>
                                    <a href="https://api.whatsapp.com/send?phone=55119992119846&text=Olá%20gostaria%20de%20agendar%20o%20serviço%20Descontaminação%20de%20Pintura." class="btn btn-primary">Agendar Serviço</a>
                                </div>                           
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="https://www.acquazero.com/wp-content/uploads/2022/02/polimento-de-farol.jpg" class="card-img-top" alt="Polimento de Faróis">
                            <div class="card-body d-flex align-content-between flex-wrap">
                                <div class="card-info">
                                    <h5 class="card-title">Polimento de Faróis</h5>
                                    <div>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    
                                    </div>
                                    <p class="card-text">O polimento remove respingos de asfalto, arranhões da superfície e opacidade, aumentando sua capacidade de iluminação. </p>                                   
                                </div><br>
                                <div class="preco_botao d-flex flex-column align-items-start mt-3">
                                    <p class="preco">A partir de <strong>&nbsp;R$50,00</strong></p>
                                    <a href="https://api.whatsapp.com/send?phone=55119992119846&text=Olá%20gostaria%20de%20agendar%20o%20serviço%20Polimento%20de%20Faróis" class="btn btn-primary">Agendar Serviço</a>
                                </div>                        
                            </div>
                        </div>                        
                    </div>                   
                </div>
                <div class="row">
                    <div class="container banner">
                        <img src="https://www.acquazero.com/wp-content/uploads/2022/03/banner-regua-douglas-e-laricia.jpg" class="d-none d-md-block">
                        <img src="https://www.acquazero.com/wp-content/uploads/2022/03/banner-douglas-residencial-MOBILE.jpg" class="d-block d-md-none" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="cards d-flex flex-wrap pt-5">
                        <div class="card" style="width: 18rem;">
                            <img src="https://www.acquazero.com/wp-content/uploads/2021/12/limpeza-tecnica-de-motor.jpg" class="card-img-top" alt="Limpeza Técnica de Motor">
                            <div class="card-body d-flex align-content-between flex-wrap">
                                <div class="card-info">
                                    <h5 class="card-title">Limpeza Técnica de Motor</h5>
                                    <div>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    
                                    </div>
                                    <p class="card-text">A limpeza no motor é feita artesanalmente, com pincéis e produtos biodegradáveis. Sem uso de água os itens não agridem o motor e garantem a manutenção das suas funções.</p>                                    
                                </div>  
                                <div class="preco_botao d-flex flex-column align-items-start mt-3">
                                    <p class="preco">A partir de <strong>&nbsp;R$100,00</strong></p>
                                    <a href=https://api.whatsapp.com/send?phone=55119992119846&text=Olá%20gostaria%20de%20agendar%20o%20serviço%20Limpeza%20Técnica%20de%20Motor." class="btn btn-primary">Agendar Serviço</a>
                                </div>                             
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="https://www.acquazero.com/wp-content/uploads/2021/12/higinizacao-interna.jpg" class="card-img-top" alt="Higienização Interna">
                            <div class="card-body d-flex align-content-between flex-wrap">
                                <div class="card-info">
                                    <h5 class="card-title">Higienização Interna</h5>
                                    <div>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    
                                    </div>
                                    <p class="card-text">A higienização interna consiste em uma limpeza detalhada, incluindo teto estofado, painel, lateral de portas, carpete e porta-malas, realçando a cor dos tecidos. </p>                                    
                                </div><br>  
                                <div class="preco_botao d-flex flex-column align-items-start mt-3">
                                    <p class="preco">A partir de <strong>&nbsp;R$400,00</strong></p>
                                    <a href="https://api.whatsapp.com/send?phone=55119992119846&text=Olá%20gostaria%20de%20agendar%20o%20serviço%20Higienização%20Interna." class="btn btn-primary">Agendar Serviço</a>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="https://www.acquazero.com/wp-content/uploads/2021/12/ar-condicionado.jpg" class="card-img-top" alt="Higienização de Ar Condicionado">
                            <div class="card-body d-flex align-content-between flex-wrap">
                                <div class="card-info">
                                    <h5 class="card-title">Higienização de Ar Condicionado</h5>
                                    <div>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    
                                    </div>
                                    <p class="card-text">A higienização do ar-condicionado limpa profundamente o sistema de circulação de ar, protegendo-o contra diversos tipos de fungos, mofos e bactérias que provocam mau cheiro. </p>                                    
                                </div>
                                <div class="preco_botao d-flex flex-column align-items-start mt-3">
                                    <p class="preco">A partir de <strong>&nbsp;R$80,00</strong></p>
                                    <a href="https://api.whatsapp.com/send?phone=55119992119846&text=Olá%20gostaria%20de%20agendar%20o%20serviço%20Higienização%20de%20Ar%20Condicionado" class="btn btn-primary">Agendar Serviço</a>
                                </div>                              
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="https://www.acquazero.com/wp-content/uploads/2021/12/remocao-chuva-acida.jpg" class="card-img-top" alt="Remoção de Chuva Ácida">
                            <div class="card-body d-flex align-content-between flex-wrap">
                                <div class="card-info">                                
                                    <h5 class="card-title">Remoção de Chuva Ácida</h5>
                                    <div>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>                                    
                                    </div>
                                    <p class="card-text">Chuvas ácidas podem causar uma série de manchas na lataria e nos vidros do veículo. A Acquazero recupera o visual do carro e elimina os danos provocados por esse fenômeno. </p>                                    
                                </div><br>
                                <div class="preco_botao d-flex flex-column align-items-start mt-3">
                                    <p class="preco">A partir de <strong>&nbsp;R$30,00</strong></p>
                                    <a href="https://api.whatsapp.com/send?phone=55119992119846&text=Olá%20gostaria%20de%20agendar%20o%20serviço%20Remoção%20de%20Chuva%20Ácida." class="btn btn-primary">Agendar Serviço</a>
                                </div>
                            </div>
                        </div>                                               
                    </div>                   
                </div>
            </div>
        </section>
       
        
        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="assets/slick/slick.min.js"></script>
        <script src="assets/bootstraps/js/bootstrap.min.js"> </script>

        
        
    </body>
</html>