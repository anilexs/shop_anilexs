</head>
<body>
    <header>
        <?php if(isset($_SESSION['id'])){ ?>
            <nav>
                <div>
                    <a href="http://localhost/shop_anilexs/accueil.php">
                        <img src="http://localhost/shop_anilexs/asset/img/shop.png" alt="" class="imgNav">
                    </a>
                </div>
                <div>
                    <button class="navmenu"></button>
                </div>
            </nav>
        <?php }else { ?>
            <nav>
                <div>
                    <a href="http://localhost/shop_anilexs/accueil.php">
                        <img src="http://localhost/shop_anilexs/asset/img/shop.png" alt="" class="imgNav">
                    </a>
                </div>
                <ul class="navUl">
                    <li><a href="http://localhost/shop_anilexs/accueil.php" class="navA">Accueil</a></li>
                    <li><a href="http://localhost/shop_anilexs/" class="navA">Avis</a></li>
                    <li><a href="http://localhost/shop_anilexs/" class="navA">Proof</a></li>
                    <li><a href="http://localhost/shop_anilexs/" class="navA">V-buck</a></li>
                    <li><a href="http://localhost/shop_anilexs/shop.php" class="navA">Shop</a></li>
                </ul>
                <div>
                    <a href="http://localhost/shop_anilexs/inscription.php"class="login">inscription</a>
                    <span class="navslah">/</span>
                    <a href="http://localhost/shop_anilexs/connexion.php" class="logout">connexion</a>
                </div>
            </nav>
        <?php } ?>
    </header>