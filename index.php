<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Cardápio</title>
    <link rel="apple-touch-icon" sizes="57x57" href="assets/icon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/icon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/icon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/icon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/icon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/icon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/icon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/icon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/icon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/icon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/icon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/icon/favicon-16x16.png">
    <link rel="manifest" href="assets/icon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/icon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://texasprotocol.io/assets/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <section class="background">
        <div class="box_menu">
            <input type="checkbox" id="check">
            <div class="menu-icon">
                <label for="check">
                    <i class="las la-bars"></i>
                </label>
            </div>

            <div class="sidebar_menu">
                <div class="siderbar_titulo">
                    <a href="index.php">Cardápio</a>
                </div>
                <div class="btn_close">
                    <label for="check">
                        <i class="las la-times"></i>
                    </label>
                </div>


                <nav class="menu">
                    <ul>
                    <li class="<?= (@$_GET['area']) == 'Porções e outros' ? 'activeBtn' : '' ?>">
                            <i class="las la-carrot"></i>
                            <a href="opcoes.php?area=Porções e outros">Porções e outros</a>
                        </li>

                        <li class="<?= (@$_GET['area']) == 'Cortes bovinos' ? 'activeBtn' : '' ?>">
                            <i class="las la-drumstick-bite "></i>
                            <a href="cortes.php?area=Cortes bovinos">Cortes bovinos</a>
                        </li>

                        <li class="<?= (@$_GET['area']) == 'Burgues' ? 'activeBtn' : '' ?>">
                            <i class="las la-hamburger"></i>
                            <a href="burguers.php?area=Burgues">Burguers</a>
                        </li>

                        <li class="<?= (@$_GET['area']) == 'Pratos Executivos' ? 'activeBtn' : '' ?>">
                            <i class="las la-utensils"></i>
                            <a href="executivos.php?area=Pratos Executivos">Pratos executivos</a>
                        </li>

                        <li class="<?= (@$_GET['area']) == 'Pratos fámilia' ? 'activeBtn' : '' ?>">
                            <i class="las la-user-friends"></i>
                            <a href="familia.php?area=Pratos fámilia">Pratos família</a>
                        </li>

                        <li class="<?= (@$_GET['area']) == 'Massa' ? 'activeBtn' : '' ?>">
                            <i class="las la-mortar-pestle"></i>
                            <a href="massas.php?area=Massa">Massa</a>
                        </li>

                        <li class="<?= (@$_GET['area']) == 'Prato KIDS' ? 'activeBtn' : '' ?>">
                            <i class="las la-baby"></i>
                            <a href="kids.php?area=Prato KIDS">Prato KIDS</a>
                        </li>

                        <li class="<?= (@$_GET['area']) == 'Súinos defumados' ? 'activeBtn' : '' ?>">
                            <i class="las la-drumstick-bite"></i>
                            <a href="defumado.php?area=Súinos defumados">Súinos defumados</a>
                        </li>

                        <li class="<?= (@$_GET['area']) == 'Acompanhamentos' ? 'activeBtn' : '' ?>">
                            <i class="las la-carrot"></i>
                            <a href="acompanhamento.php?area=Acompanhamentos">Acompanhamentos</a>
                        </li>

                        <li class="<?= (@$_GET['area']) == 'Saladas' ? 'activeBtn' : '' ?>">
                            <i class="las la-leaf"></i>
                            <a href="salada.php?area=Saladas">Saladas</a>
                        </li>

                        <li class="<?= (@$_GET['area']) == 'Feijoada' ? 'activeBtn' : '' ?>">
                            <i class="las la-mitten"></i>
                            <a href="feijoada.php?area=Feijoada">Feijoada</a>
                        </li>

                        <li class="<?= (@$_GET['area']) == 'Sobremesa' ? 'activeBtn' : '' ?>">
                            <i class="las la-candy-cane"></i>
                            <a href="sobremesa.php?area=Sobremesa">Sobremesa</a>
                        </li>

                        <li class="<?= (@$_GET['area']) == 'Bebidas' ? 'activeBtn' : '' ?>">
                            <i class="las la-glass-whiskey"></i>
                            <a href="bebidas.php?area=Bebidas">Bebidas</a>
                        </li>

                        <li class="<?= (@$_GET['area']) == 'Carta de vinhos' ? 'activeBtn' : '' ?>">
                            <i class="las la-glass-cheers"></i>
                            <a href="cartaVinho.php?area=Carta de vinhos">Carta de vinhos </a>
                        </li>

                        <li class="<?= (@$_GET['area']) == 'Couvert Artístico' ? 'activeBtn' : '' ?>">
                            <i class="las la-guitar"></i>
                            <a href="couver.php?area=Couvert Artístico">Couvert Artístico</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="texto1">
                        A chave para um jantar requintado
                    </h1>
                    <p class="subtitulo">Sit Tellus Lobortis Sed Senectus Vivamus Molestie. Condimentum Volutpat Morbi Facilisis Quam Scelerisque Sapien. Et, Penatibus Aliquam Amet Tellus</p>
                    <a href="#" class="button2" id=""> Explorar o menu </a>
                </div>  
                <div class="col-md-6">
                    <img class="img-fluid Macarone" src="assets/img/Macarone.png" alt="">
                </div>
            </div>

            
        </div>
    </section>

    <section class="background2">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center">
                    <img class="costelinha" src="assets/img/Costelinha.webp" alt="">
                </div>

                <div class="col-md-6 text-center">
                    <h1 class="nossaComida">Nossa comida</h1>
                    <p class="detalheComida">Muito rica em proteínas, vitaminas do complexo B e ferro, a carne suína de acordo com especialistas
                        em saúde e alimentação, é uma das carnes mais saudáveis do mundo, diferente do que muitos acreditam,
                        ela é mais saudável e nutritiva que a carne bovina. Aqui no Bacon & Co. você irá desfrutar do melhor
                        da carne suína. Já imaginou ter bacon na sua sobremesa? Aqui é possível, e prometemos te surpeender
                        no sabor. Desde o Joelho de Porco ao Burger, você terá uma incrível experiência, com gostinho de quero mais!</p>
                </div>
            </div>
        </div>
    </section>


    <section class="background3">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="insta">Instagram</h2>
                    <h1 class="galeria">Galeria de Fotos</h1>
                    <p class="descriGal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto tempora sit voluptas adipisci cumque. Consequuntur odit quos dignissimos atque doloremque ratione.</p>
                    <a href="https://www.instagram.com/bacon_e_co/" target="_blank" class="button2"> Ver Mais</a>
                </div>

                <div class="col-md-6">
                <div class="owl-carousel owl-theme">
                    <div class="item ista">
                        <img src="assets/img/bolinha.jpg" alt="">
                        <a href="https://www.instagram.com/bacon_e_co/" target="_blank"><i class="lab la-instagram icon"></i></a>
                    </div>

                    <div class="item ista">
                        <img src="assets/img/picanha.jpg" alt="">
                        <a href="https://www.instagram.com/bacon_e_co/" target="_blank"><i class="lab la-instagram icon"></i></a>
                    </div>

                    <div class="item ista">
                        <img src="assets/img/hamburgaoecoca.jpg" alt="">
                        <a href="https://www.instagram.com/bacon_e_co/" target="_blank"><i class="lab la-instagram icon"></i></a>
                    </div>

                    <div class="item ista">
                        <img src="assets/img/torresmo.jpg" alt="">
                        <a href="https://www.instagram.com/bacon_e_co/" target="_blank"><i class="lab la-instagram icon"></i></a>
                    </div>

                    <div class="item ista">
                        <img src="assets/img/hamburgao.jpg" alt="">
                        <a href="https://www.instagram.com/bacon_e_co/" target="_blank"><i class="lab la-instagram icon"></i></a>
                    </div>
                </div>
            </div> 
              
            </div>
        </div>
    </section>


    <section class="background4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center">
                    <h1 class="quemSomos">Quem Somos</h1>
                    <p class="infoSomos">O Bacon & Co. nasceu do desejo em trazer o que há de melhor na culinária contemporânea, quebrando tabus com muito sabor e qualidade, mostrando que é possível entregar variedade e pratos saudáveis, tendo como ingrediente principal a carne suína.</p>
                </div>
                <div class="col-md-6 text-center">
                    <img class="img-fluid picanha"src="assets/img/picanha.webp" alt="">
                </div>
            </div>
        

        <div class="row footer">
            <div class="col-md-4 text-center">
                <h1 >Nosso Contato</h1>
                <h1 class="cidadeInfo">Av. Francisco Galassi, 990 <br> Morada da Colina Uberlândia - MG</h1>
                <p class="subInfo">34 2589-5771</p>
                <p class="subInfo">Para informações e reservas</p>
            </div>

            <div class="col-md-4 text-center">
                <img class="fotoo"src="assets/img/BACON-HOUSE-PNG-BRANCA.png" alt="">
            </div>

            <div class="col-md-4 text-center ">
                <h1 class="fincionamento" >Nossos horarios de funcionamentos</h1>
                <p class="subInfo">Terça a Sexta <br> 17h às 23h </p>
                <p class="subInfo">Sábado e Domingo <br> 11h às 00h</p>
            </div>
        </div>

        <div class="row">
            <div class="col-12 text-center">
                <h1 class="por" >©2023 por Bacon & Co.</h1>
            </div>
        </div>
    </div>

    </section>

   

    <div class="loader-container">
    <img src="assets/img/loader.gif" alt="">
</div>



    <script src="assets/js/script.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     
    <script>
        $(document).ready(function(){
    $(".owl-carousel").owlCarousel({
        loop: true,
        dots: false,
        autoplay : true,
        autoplayTimeout: 2000,
        responsive: {
            0 : {
                items : 1
            },
            600 : {
                items : 2
            },
            1200 : {
                items : 3
            }
        }
        });   

    })
    </script>

</body>

</html>