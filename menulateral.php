<body>
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
   