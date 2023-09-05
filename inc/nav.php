</head>
<body>
    <header>
        <?php if(isset($_SESSION['id'])){ ?>

        <?php }else { ?>
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
        <?php } ?>
    </header>