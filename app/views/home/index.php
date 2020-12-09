<?php 
    $this->view('home/Cabecalho');
?>

<body id="page-top">
    <!-- Navigation-->
    <?php 
    $this->view('home/menu.php');
?>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container d-flex h-100 align-items-center">
            <div class="mx-auto text-center">
                <h1 class="mx-auto my-0 text-uppercase">Big Date</h1>
                <h2 class="text-white-50 mx-auto mt-2 mb-5">Área do conhecimento que estuda como tratar, analisar e obter informações a partir de conjuntos de dados extremamente grandes para serem analisados por sistemas ditos 'tradicionais', cuja capacidade de armazenamento e tratamento das infoirmações são bastante simples.</h2>
                <a class="btn btn-primary js-scroll-trigger" href="#about">Get Started</a>
            </div>
        </div>
    </header>
    <!-- About-->
    <section class="about-section text-center" id="about">
        <div class="container">
            <?php 
    $this->view('home/form');
?>
        </div>
    </section>
    <!-- Projects-->
    <section class="projects-section bg-light" id="projects">
        <div class="container">
            <!-- Featured Project Row-->
            <div class="row align-items-center no-gutters mb-4 mb-lg-5">
                <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="assets/img/bg-masthead.jpg"
                        alt="" /></div>
                <div class="col-xl-4 col-lg-5">
                    <div class="featured-text text-center text-lg-left">
                        <h4>Inteligência Artificial</h4>
                        <p class="text-black-50 mb-0">A Inteligência Artificial, que você vai ver por aí sendo citada apenas como IA (ou AI, de artificial intelligence) é um avanço tecnológico que permite que sistemas simulem uma inteligência similar à humana — indo além da programação de ordens específicas para tomar decisões de forma autônoma, baseadas em padrões de enormes bancos de dados.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Project One Row-->
            <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
                <div class="col-lg-6"><img class="img-fluid" src="assets/img/demo-image-01.jpg" alt="" /></div>
                <div class="col-lg-6">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4 class="text-white">loT</h4>
                                <p class="mb-0 text-white-50">a internet das coisas nada mais é que uma rede de objetos físicos (veículos, prédios e outros dotados de tecnologia embarcada, sensores e conexão com a rede) capaz de reunir e de transmitir dados. É uma extensão da internet atual que possibilita que objetos do dia-a-dia, quaisquer que sejam mas que tenham capacidade computacional e de comunicação, se conectem à Internet.
                                </p>
                                <hr class="d-none d-lg-block mb-0 ml-0" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Project Two Row-->
            <div class="row justify-content-center no-gutters">
                <div class="col-lg-6"><img class="img-fluid" src="assets/img/demo-image-02.jpg" alt="" /></div>
                <div class="col-lg-6 order-lg-first">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-right">
                                <h4 class="text-white">Cloud</h4>
                                <p class="mb-0 text-white-50">Computação em nuvem (em inglês, cloud computing), é um termo coloquial para a disponibilidade sob demanda de recursos do sistema de computador , especialmente armazenamento de dados e capacidade de computação, sem o gerenciamento ativo direto do utilizador. O termo geralmente é usado para descrever centros de dados disponíveis para muitos utilizadores pela Internet. </p>
                                <hr class="d-none d-lg-block mb-0 mr-0" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Signup-->
    <section class="signup-section" id="signup">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto text-center">
                    <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                    <h2 class="text-white mb-5">Contato</h2>
                    <form class="form-inline d-flex">
                        <input class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="inputEmail" type="email"
                            placeholder="Enter email address..." />
                        <button class="btn btn-primary mx-auto" type="submit">Entre em contato</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact-->
    <section class="contact-section bg-black">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Endereço</h4>
                            <hr class="my-4" />
                            <div class="small text-black-50">0000 Avenida Paulista - SP - Brasil</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-envelope text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Email</h4>
                            <hr class="my-4" />
                            <div class="small text-black-50"><a href="#!">email@email.com</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-mobile-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Telefone</h4>
                            <hr class="my-4" />
                            <div class="small text-black-50">(62)00000-0000</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="social d-flex justify-content-center">
                <a class="mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                <a class="mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                <a class="mx-2" href="#!"><i class="fab fa-github"></i></a>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer bg-black small text-center text-white-50">
        <div class="container">Copyright ©zaratim 2020</div>
    </footer>
    <?php 
    $this->view('home/Rodape');
?>
