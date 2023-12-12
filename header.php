

  

<body>
        <!-- création de la banière -->
        <header id="banniere">
            <div>
                <a href="index.php"> <img src="assets/logosite.png" alt="logo" width="70" id="grappe" /> </a>
            </div>

            <nav>
                <ul class="menu">


                    <li class="rouge"><a href="#">Vin Rouge </a>
                        <ul class="sous">
                            <!-- création des sous-menu débilant -->
                            <li><a href="produit.php?cat=merlot">Merlot</a></li>
                            <li><a href="produit.php?cat=pinotnoir">Pinot Noir</a></li>
                            <li><a href="produit.php?cat=sangiovese">Sangiovese</a></li>
                            <li><a href="produit.php?cat=nerodavola">Nero D'Avola</a></li>
                          
                        </ul>

                    </li>
                    <li class="blanc"><a href="#">Vin  Blanc</a>
                        <ul class="sous">
                            <li><a href="produit.php?cat=chardonnay">Chardonnay</a></li>
                            <li><a href="produit.php?cat=sauvignon"> Sauvignon</a></li>
                            <li><a href="produit.php?cat=glera">Glera</a></li>
                            <li><a href="produit.php?cat=moscato">Moscato</a></li>
                        </ul>

                    </li>
                    <li class="propos"><a href="propos.php">A propos</a>

                    </li>
                    <li class="part"><a href="ppartenaire.php">Nos Partenaires</a>

                    </li>

                </ul>
            </nav>
            <!-- fin du menu -->
        </header>
      
    
    <main>
        
       
       
            
        <div class="connexion">
            <ul class="connexionpanier">
                <li>
                <?php
                if (isset($_SESSION['user'])) {
                    echo '<a href="profil.php" class="coco">' . htmlspecialchars($_SESSION['user']['login']) . '</a>';
                } else {
                    echo '<a href="connexion.php" class="coco">Connexion</a>';
                }
                ?>
            </li>
                <li>
                    <a href="panier.php" class="panier">Panier</a>
                </li>
            </ul>
        </div>
        <!-- fin de la bannière -->
        <!-- création du menu hamburger défillant  -->
        <nav class="burger">
            <div class="burger-container ">
                <input type="checkbox" name="" id="">
                <div class="burger-lines">
                    <span class="line line1"></span>
                    <span class="line line2"></span>
                    <span class="line line3"></span>
                </div>
                <ul class="menu-items">
                    <li><a href="acceuil.php">Acceuil</a></li>
                    <li><a href="Italie.php">L'Italie</a></li>
                    <li><a href="France.php">La France</a></li>
                    <li><a href="ppartenaire.php">nos Partenaires</a></li>
                    <li><a href="propos.php">A propos</a></li>
                    <li><a href="formulairecontact.php">Nous contacter</a></li>
                </ul>
            </div>
        </nav>