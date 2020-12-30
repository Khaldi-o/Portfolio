<?php
if(isset($_POST['mailform']))
{
	if(!empty($_POST['nom']) AND !empty($_POST['mail']) AND !empty($_POST['message']))
	{
		$header="MIME-Version: 1.0\r\n";
		$header.='From:"Portfolio"<omar_khaldi@hotmail.fr>'."\n";
		$header.='Content-Type:text/html; charset="uft-8"'."\n";
		$header.='Content-Transfer-Encoding: 8bit';

		$message='
		<html>
			<body>
				<div align="center">
					<br />
					<u>Nom de l\'expéditeur :</u>'.$_POST['nom'].'<br />
					<u>Mail de l\'expéditeur :</u>'.$_POST['mail'].'<br />
					<br />
					'.nl2br($_POST['message']).'
					<br />
				</div>
			</body>
		</html>
		';

		mail("anonym.omar@gmail.com", "CONTACT - Mon Portfolio", $message, $header);
		$msg="Votre message a bien été envoyé !";
	}
	else
	{
		$msg="Tous les champs doivent être complétés !";
	}
}
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="stylesheet" href="assets/css/styles.css">

        <!-- =====BOX ICONS===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
        <script src="https://kit.fontawesome.com/dcd55a313f.js"></script>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


        <title>Khaldi's Portfolio</title>
    </head>
    <body>
        <!--===== HEADER =====-->
        <header class="l-header">
            <nav class="nav bd-grid">
                <div>
                    <a href="#" class="nav__logo">KHALDI Omar</a>
                </div>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#home" class="nav__link active">Accueil</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">Présentation</a></li>
                        <li class="nav__item"><a href="#skills" class="nav__link">Compétences</a></li>
                        <li class="nav__item"><a href="#work" class="nav__link">Expériences</a></li>
                        <li class="nav__item"><a href="#work" class="nav__link">Formations</a></li>
                        <li class="nav__item"><a href="#contact" class="nav__link">Contact</a></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">
            <!--===== HOME =====-->
            <section class="home bd-grid" id="home">
                <div class="home__data">
                    <h1 class="home__title">Bonjour,<br>Je m'appelle <span class="home__title-color">KHALDI <br> Omar</span> et je suis web<br> developper Fullstack</h1>

                    <a target="_blank" href="assets/moncv.pdf" class="button">Mon CV</a>
                </div>

                <div class="home__social">
                    <a href="https://www.linkedin.com/in/omarkhaldi/" class="home__social-icon"><i class='bx bxl-linkedin'></i></a>
                    <a href="https://www.facebook.com/omar.ld.12139" class="home__social-icon"><i class='bx bxl-facebook' ></i></a>
                    <a href="https://github.com/Khaldi-o" class="home__social-icon"><i class='bx bxl-github' ></i></a>
                </div>

                <div class="home__img">    
                    <img src="assets/img/perfile.png" alt="">
                </div>
            </section>

            <!--===== ABOUT =====-->
            <section class="about section " id="about">
                <h2 class="section-title">Ma Présentation</h2>

                <div class="about__container bd-grid">
                    <div class="about__img">
                        <div class="photogra">
                        <h2 class="about__subtitle">Développeur web Fullstack</h2>
                        <img src="assets/img/me.jpg" alt=""> <br>
                        </div> <br> <br>
                        <p class="about__text"> Poursuivant mon Bachelor en cycle d'ingénieur <br> informatique à l'ETNA, je désire mettre toutes mes<br> compétences au service de ceux voulant développer <br> leurs projets web lors d’un contrat en alternance. <br><br>
                        A travers mes différentes expériences professionnelles j’ai pu acquérir une autonomie dans mon travail et développer diverses compétences comme la créativité pour se démarquer , et l'adaptation de manière performante au mode de travail.</p>
                        
                    </div>
                    
                    <div>
                        <h3 class="about__subtitle"> Mon projet d'études</h3>
                        <p class="about__text"> Le projet d’études que je souhaite réaliser est poursuivre un master spécialisé en développement web à l'ETNA afin d'obtenir le titre d'ingénieur Bac+5, et me préparer efficacement pour entamer mon projet professionnel qui se base sur le développement web et l'analyse des données. </p>

                        <h3 class="about__subtitle"> Mon projet professionnel</h3>
                        <p class="about__text"> j’attends beaucoup de cette formation en alternance en tant que développeur web full stack, de me permettre de structurer mes acquis, de progresser et d’accumuler de l’expérience. je recherche donc une entreprise où je pourrais contruire un avenir et évoluer dans le développement web à long terme.<br>
                            Je suis persuadé que ce parcours est celui qui conviendra le mieux à mon projet professionnel. Conscient de l’engagement que cela nécessite, je suis prêt et déterminé à m’y investir pleinement. </p>
                            <h3 class="about__subtitle"> Mes centres d'intérêts : </h3>
                        <form class="my_interest">
                           
                            <div class="rectangle">
                                <i class="fas fa-swimmer interest_icon"></i>
                                <p class="interest"> NATATION</p>
                            </div>
                            <div class="rectangle">
                                <i class="fas fa-gamepad interest_icon"></i>
                                <p class="interest"> GAMING</p>
                            </div>
                            <div class="rectangle">
                                <i class="fas fa-book-dead interest_icon"></i>
                                <p class="interest"> MANGA</p>
                            </div>
                        </form>

                        <form class="my_interest">
                           
                            <div class="rectangle">
                                <i class="fas fa-snowboarding interest_icon"></i>
                                <p class="interest"> wakeboard </p>
                            </div>
                            <div class="rectangle">
                                <i class="fas fa-book-open interest_icon"></i>
                                <p class="interest"> philosophie</p>
                            </div>
                            <div class="rectangle">
                                <i class="fas fa-music interest_icon"></i>
                                <p class="interest"> MUSIC </p>
                            </div>
                        </form>

                    </div>
                    
                </div>
            </section>




             <!--===== WORK =====-->
            <section class="work section" id="work">
                <h2 class="section-title">Mon Parcours professionnel</h2>

                <div class="work__container bd-grid">
                    <div class="work__img">
                        <img src="assets/img/work1 (2).jpg" alt="">
                        <h4 class="section-mission" style="margin-left: 10px;"> Chargé de développement et marketing digital</h4>
                        <h4 class="firm" style="margin-left: 10px;"> MAKGOODIES </h4>
                        <i class="fas fa-map-marker-alt local-icon" style="margin-left: 10px;"></i>
                        <span class="work_address">Amiens 80000 - France</span> <br> <br>
                        <p class="work_text" style="margin-left: 8px;"> Chargé de developpement des plateformes web de l'entreprise et du web marketing... </p>
                        <button id="modalBtn" class="detail1"> Détails</button>

                    </div>
                   
                    <div class="work__img">
                        <img src="assets/img/work2.jpg" alt="">
                        <h4 class="section-mission" style="margin-left: 10px;"> Chargé de clientèle et gestionnaire de sinistres</h4>
                        <h4 class="firm" style="margin-left: 10px;"> ALLIANZ </h4>
                        <i class="fas fa-map-marker-alt local-icon" style="margin-left: 10px;"></i>
                        <span class="work_address">Casablanca - Maroc</span><br> <br>
                        <p class="work_text" style="margin-left: 8px;"> Gestion de la clientèle, production des contrats d'assurance, et gestion des sinistres materiels... </p>
                        <button id="modalBtn2" class="detail1"> Détails</button>
                    </div>

                    <div class="work__img">
                        <img src="assets/img/work3.jpg" alt="">
                        <h4 class="section-mission" style="margin-left: 10px;"> Technicien en développement informatique</h4>
                        <h4 class="firm" style="margin-left: 10px;"> FRIOCONDAL </h4>
                        <i class="fas fa-map-marker-alt local-icon" style="margin-left: 10px;"></i>
                        <span class="work_address">Dakhla - Maroc</span><br> <br>
                        <p class="work_text" style="margin-left: 8px;"> Analyse, Conception et gestion des bases de données des produits et des clients, création d'application AZALL... </p>
                        <button id="modalBtn3" class="detail1"> Détails</button>
                    </div>

                    <div class="work__img">
                        <img src="assets/img/work4.jpg" alt="">
                        <h4 class="section-mission"> Stage en statistiques informatique</h4>
                        <h4 class="firm" style="margin-left: 10px;"> WILAYA d'Oued-Eddahab </h4>
                        <i class="fas fa-map-marker-alt local-icon" style="margin-left: 10px;"></i>
                        <span class="work_address">Dakhla - Maroc</span><br> <br>
                        <p class="work_text" style="margin-left: 8px;"> au sein du service informatique, j'avais pour mission la collecte des coordonées géographique dans la région, les trier et puis les stocker dans la base de données ...</p>
                        <button id="modalBtn4" class="detail1"> Détails</button>
                    </div>


                    <div class="work__img">
                        <img src="assets/img/work5.jpg" alt="">
                        <h4 class="section-mission"> Stage en réseaux informatique</h4>
                        <h4 class="firm" style="margin-left: 10px;"> PALM MENARA Marrakech </h4>
                        <i class="fas fa-map-marker-alt local-icon" style="margin-left: 10px;"></i>
                        <span class="work_address">Marrakech - Maroc</span><br> <br>
                        <p class="work_text" style="margin-left: 8px;"> stage au sein du service informatique de l'entreprise, installation des postes et des systèmes d'exploitation dans ordinateurs, interconnexion des ordinateurs (cables)... </p>
                        <button id="modalBtn5" class="detail1"> Détails</button>
                    </div>



                </div>
            </section>

            <!--===== FORMATIONS =====-->

            <section class="education-section">
                
                <h2 class="section-title">Mes formations</h2>
                <div class="backgrnd">
                    
                <h3 class="alternance"> "L'alternance est selon moi le meilleur moyen d'apprendre,<br> une alliance entre la théorie et la pratique </h3><br>

                <div class="educ_container bd-grid">
                    <div class="etna_img" id="One">
                        <div class="content_educ">
                            <h2 class="educ_subtitle">Bac+5</h2>
                            <img src="assets/img/etna.jpg" alt="">
                            <p class="educ_text"> Diplôme: Bac+5 ingénierie développement web, mobile et UX  <br> Intitulé: Responsable de projet Web et Mobile <br> Date : 2020 /2023 <br> Formation: En alternance <br> Poste recherché : Développeur web Fullstack</p>
                        </div>
                    </div>
                    
                     
                    <div class="etna_img" id="Two">
                        <div class="content_educ">
                        <h2 class="educ_subtitle">Bachelor 3</h2>
                        <img src="assets/img/esc.jpg" alt="">
                        <p class="educ_text"> Diplôme: Bachelor 3ème année <br> Intitulé: Bachelor 3 spécialité Web marketing <br> Date : 2019 /2020 <br> Formation:Modules théoriques + Mission en entreprise  <br> Poste en stage : Chargé de dév web et de market digital</p>
                    </div>
                    </div>
                    
                    <div class="etna_img" id="Three">
                        <div class="content_educ">
                        <h2 class="educ_subtitle">Licence pro</h2>
                        <img src="assets/img/lp3.jpg" alt="">
                        <p class="educ_text"> Diplôme 1er année du licence pro  <br> Intitulé: LP MSI (Modélisation - Statitistiques- informatique) <br> Date : 2018 /2019 <br> Formation : cette licence pro se passe en 2 année (S3 - S6) <br>Mention : assez bien
                    </div>
                    </div>
                    <div class="etna_img">
                        <div class="content_educ">
                        <h2 class="educ_subtitle">BTS</h2>
                        <img src="assets/img/bts2.png" alt="">
                        <p class="educ_text"> Diplôme: BTS Brevet technicien supérieur <br> Intitulé: BTS DSI (Développement des systèmes d'information) <br> Date : 2015 /2017 <br> Formation : Modules (CC, CI) + Stage + Pfe <br> Mention: Assez bien
                    </div>
                    </div>
                    <!--
                    <div class="etna_img">
                        <div class="content_educ">
                        <h2 class="educ_subtitle">Bac+1</h2>
                        <img src="assets/img/efet2.jpg" alt="">
                        <p class="educ_text"> Diplôme: 1er année de la formation Bac+2<br> Intitulé: Technicien spécialisé en systèmes et réseaux informatique <br> Date : 2014 /2015 <br> Formation : Modules + stage <br> mention : Bien
                    </div>
                    </div> -->

                </div>
                </div>
                
                </section>                
                <div class="curved"> 
                    <h3> Vous pouvez également consulter mon CV au format PDF :</h3>
                    <a target="_blank" href="assets/moncv.pdf">
                    <button class="curvi"><i class="far fa-hand-point-right"></i> Mon CV <i class="far fa-hand-point-left"></i>
                    </a>
                </button>
                
                    <p> Fasten your seatbelts, let's discover my skills and what I'm capable of <i class="far fa-hand-point-down icon_down"></i></p>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,128L60,112C120,96,240,64,360,69.3C480,75,600,117,720,122.7C840,128,960,96,1080,85.3C1200,75,1320,85,1380,90.7L1440,96L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
                 </div>


            <!--===== COMPETENCES =====-->
            <section class="skills section" id="skills">
                <h2 class="section-title">Mes compétences</h2>

                <div class="skills__container bd-grid">          
                    <div>
                        <h2 class="skills__subtitle">En Front-End</h2>
                        <p class="skills__text"> Développement front-end et mise en place des éléments graphiques permettant à l’utilisateur de se repérer sur l’interface</p>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-html5 skills__icon'></i>
                                <span class="skills__names">HTML5</span>
                            </div>
                            <div class="skills__bar skills__html">

                            </div>
                            <div>
                                <span class="skills__percentage">90%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-css3 skills__icon'></i>
                                <span class="skills__names">CSS3</span>
                            </div>
                            <div class="skills__bar skills__css">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">80%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-javascript skills__icon' ></i>
                                <span class="skills__names">JAVASCRIPT</span>
                            </div>
                            <div class="skills__bar skills__js">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">65%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-react skills__icon'></i>
                                <span class="skills__names">React Js</span>
                            </div>
                            <div class="skills__bar skills__ux">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">55%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-wordpress skills__icon' ></i>
                                <span class="skills__names">Wordpress</span>
                            </div>
                            <div class="skills__bar skills__js">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">65%</span>
                            </div>
                        </div>
                    </div>
                    
                    <div>              
                        <img src="assets/img/frontend.jpg" alt="" class="skills__img">
                    </div>

                </div>
                
                <div class="skills__container bd-grid">

                    <div>
                        <img src="assets/img/back.jpg" alt="" class="skills__img">
                    </div>


                    <div>
                        <h2 class="skills__subtitle">En Back-end & en Frameworks</h2>
                        <p class="skills__text">Développement back-end et gestion des bases de données, ainsi que la gestion des versions et codes sources (Git).</p>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class="fab fa-php skills__icon"></i>
                                <span class="skills__names">PHP</span>
                            </div>
                            <div class="skills__bar skills__html">

                            </div>
                            <div>
                                <span class="skills__percentage">60%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class="fab fa-symfony skills__icon"></i>
                                <span class="skills__names">Symfony</span>
                            </div>
                            <div class="skills__bar skills__css">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">40%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class="fas fa-database skills__icon"></i>
                                <span class="skills__names">MySQL</span>
                            </div>
                            <div class="skills__bar skills__css">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">75%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class="fab fa-adn skills__icon"></i>
                                <span class="skills__names"> ASP.NET core MVC (C#)</span>
                            </div>
                            <div class="skills__bar skills__js">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">50%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class="fab fa-java skills__icon"></i>
                                <span class="skills__names">JAVA</span>
                            </div>
                            <div class="skills__bar skills__ux">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">50%</span>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

            <!--===== SVD =====-->

            <div class="curvedd"> 
                <h3> Mon savoir être :</h3>
                <p> <span class="softs">Rigoureux</span> et <span class="softs">dynamique</span> je me mets sérieusement sur les taches et les missions qu'on me confie.<br>
                    <span class="softs">Créatif</span> et <span class="softs">à l'écoute</span> des idées et des propositions, je me sens plus à l'aise dans le <span class="softs">travail en groupe</span><br>
                    Le <span class="softs">sens d'organisation</span> est pour moi la clé d'une bonne <span class="softs">gestion de projets</span>.<br>
                    <span class="softs">Passionné</span> par le développement, j'ai appris à manier des logiciels et travailler sur de differents projets de façon tout à fait <span class="softs">autonome</span>.
                 <br>Tout en prenant en compte mon <span class="softs"> sens d'adaptation </span>, ma <span class="softs">flexibilité</span> et ma <span class="softs">capacité et volonté d'apprendre</span>.</p>
                <h4 style="color: floralwhite;"> Le secret d'un bon développeur pour moi est le respect de cet équilibre <i class="fas fa-balance-scale icon_soft"></i></h4>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,32L60,32C120,32,240,32,360,37.3C480,43,600,53,720,53.3C840,53,960,43,1080,37.3C1200,32,1320,32,1380,32L1440,32L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
            </div>

            <!--===== CONTACT =====-->
            <section class="contact-section" id="contact">
                <h2 class="section-title">Contact</h2>
                <h3> Mon profile vous intéresse? N'hesitez pas à me contacter <br> Together We'll Build The Future</h3>

                <div class="contact__container bd-grid">
                    <form method="POST" action="" class="contact__form">
                        <input type="text" name="nom" placeholder="Votre nom / raison social" class="contact__input" value="<?php if(isset($_POST['nom'])) { echo $_POST['nom']; } ?>">
                        <input type="mail" name="mail" placeholder=" Votre email" class="contact__input" value="<?php if(isset($_POST['mail'])) { echo $_POST['mail']; } ?>">
                        <textarea name="message" id="" cols="0" rows="10" class="contact__input"> <?php if(isset($_POST['message'])) { echo $_POST['message']; } ?></textarea>
                        <input type="submit" name="mailform" value="Envoyer" class="contact__button button"> <br>
                    </form>
              
                </div>
                <?php
		if(isset($msg))
		{
			echo $msg;
		}
		?>
            </section>
        </main>

        <!--===== MODAL Pop_Up =====-->

        <div id="simpleModal" class="modal">
            <div class="modal-content">
                <span class="closeBtn" id="Btnclose"> &times;</span>
                <h4 class="section-mission"> Chargé de développement web et de marketing digital</h4>
                <hr>
                <i class="fas fa-calendar pop_icon"></i>
                <span class="pop_text"> Date : Juillet 2020 - Octobre 2020 (13 semaines)</span> <br><br>
                
                    <i class="far fa-building pop_icon"></i>
                    <span class="pop_text"> MAKGOODIES est un startup Amienoise spécialisé dans la communication par l'objet publicitaire, le textile professionnel, les produits de luxe ... </span> <br>
                    <h4> <i class="fas fa-list-alt pop_icon"></i>
                    <span class="pop_text" style="font-style : bold; color: coral; text-decoration: underline;">Missions principales :</span> </h4>
                <ul class="cercl">
                    <li> Optimisation des compagnes d'acquisitions</li><br>
                    <li> Referencement naturel et payant (SEO/SEO) </li><br>
                    <li> Développement et gestion CMS (Wordpress) </li><br>
                    <li> Gestion du contenu web</li><br>
                    <li> Création des catalogues, banner, landing pages, ...</li><br>
                    <li> Réalisation d'un audit marketing digital</li><br>
                    <li> Participation aux réunions avec clients/collaborateurs</li><br>
                    <li> Emailing et SAV</li>

                </ul>
            </div>
        </div>

        <!-- ==== Modal 2 : Allianz ===-->
        <div id="simpleModal2" class="modal2">
            <div class="modal-content">
                <span class="closeBtn" id="Btnclose2"> &times;</span>
                <h4 class="section-mission"> Chargé de clientèle et gestionnaire de sinistres</h4>
                <hr>
                <i class="fas fa-calendar pop_icon"></i>
                <span class="pop_text"> Date : Août 2017 - Août 2018 (1 an)</span> <br><br>
                
                    <i class="far fa-building pop_icon"></i>
                    <span class="pop_text"> La multinationale Allianz de services finnanciers, ayant comme activités principales les métiers d'assurances et la gestion d'actifs. </span> <br>
                    <h4> <i class="fas fa-list-alt pop_icon"></i>
                    <span class="pop_text" style="font-style : bold; color: coral; text-decoration: underline;">Missions principales :</span> </h4>
                <ul class="cercl" style="font-size: 88%;"> 
                    <li> Productions des contrats d'assurances et gestion des BDD</li><br>
                    <li> Réalisation des états de production(quotidiennement) </li><br>
                    <li> Conseil, assistance et gestion des clients  </li><br>
                    <li> Recouvrement et gestion du portefeuille d'un bureau direct</li><br>
                    <li> Gestion des sinistres matériels (automobile, immobilier)</li><br>
                    <li> Vérification des documents administratives et des rabais</li><br>
                    <li> Création, modification, résiliation et extensions des garanties assurances</li><br>
                    <li> Fidélisation de la clientèle, et contact pour rappeler des échéances</li>

                </ul>
            </div>
        </div>

        <!-- ==== Model3: Friocondal ==== -->

        <div id="simpleModal3" class="modal3">
            <div class="modal-content">
                <span class="closeBtn" id="Btnclose3"> &times;</span>
                <h4 class="section-mission"> Technicien en développement informatique</h4>
                <hr>
                <i class="fas fa-calendar pop_icon"></i>
                <span class="pop_text"> Date : Août 2017 - Août 2018 (1 an)</span> <br><br>
                
                    <i class="far fa-building pop_icon"></i>
                    <span class="pop_text"> Friocondal est une entreprise de vente et d'export des produits maritime après le traitement, la congelation et l'emballage alimentaire pour poissonnerie. </span> <br>
                    <h4> <i class="fas fa-list-alt pop_icon"></i>
                    <span class="pop_text" style="font-style : bold; color: coral; text-decoration: underline;">Missions principales :</span> </h4>
                <ul class="cercl" style="font-size: 88%;"> 
                    <li> Analysen conception et gestion des BDD</li><br>
                    <li> Création des fichiers de production et de vente journalière </li><br>
                    <li> Tavail avec un administrateur réseau et un technicien en développement sur la réalisations des interfaces graphiques de l'application </li><br>
                    <li> Effectuer de la maintenance</li><br>
                    <li> Développement (from scratch) d'une application 'AZALL' de gestion des employés de Friocondal </li>
                    <li> Création des fiches publicitaires de produits (photoshop)</li>
                </ul>
            </div>
        </div>

<!--===== Modal 4: Palm Menara ==== -->

        <div id="simpleModal5" class="modal5">
            <div class="modal-content">
                <span class="closeBtn" id="Btnclose5"> &times;</span>
                <h4 class="section-mission"> Technicien en réseau informatique</h4>
                <hr>
                <i class="fas fa-calendar pop_icon"></i>
                <span class="pop_text"> Date : Août 2017 - Août 2018 (1 an)</span> <br><br>
                
                    <i class="far fa-building pop_icon"></i>
                    <span class="pop_text"> Palm Menara group est une moyen entreprise commerciale spécialisé dans la vente et la commercialisation des matériels et des services de terme energetiques </span> <br>
                    <h4> <i class="fas fa-list-alt pop_icon"></i>
                    <span class="pop_text" style="font-style : bold; color: coral; text-decoration: underline;">Missions principales :</span> </h4>
                <ul class="cercl" style="font-size: 88%;"> 
                    <li> Installation des matériels et des logiciels(O.S)</li><br>
                    <li> Test des équipements réseaux </li><br>
                    <li> Installation des mises à jours  </li><br>
                    <li> Diagnostic et résolution des dysfonctionnement</li><br>
                    <li> Participation à la maintenance matérielle du parc informatique</li>
                </ul>
            </div>
        </div>


        <!-- ==== Modal5: Wilaya-->
        <div id="simpleModal4" class="modal4">
            <div class="modal-content">
                <span class="closeBtn" id="Btnclose4"> &times;</span>
                <h4 class="section-mission"> Technicien en réseau informatique</h4>
                <hr>
                <i class="fas fa-calendar pop_icon"></i>
                <span class="pop_text"> Date : Août 2017 - Août 2018 (1 an)</span> <br><br>
                
                    <i class="far fa-building pop_icon"></i>
                    <span class="pop_text"> Palm Menara group est une moyen entreprise commerciale spécialisé dans la vente et la commercialisation des matériels et des services de terme energetiques </span> <br>
                    <h4> <i class="fas fa-list-alt pop_icon"></i>
                    <span class="pop_text" style="font-style : bold; color: coral; text-decoration: underline;">Missions principales :</span> </h4>
                <ul class="cercl" style="font-size: 88%;"> 
                    <li> Détermination minitieuse des coordonnées de géolocalisation des terrains destiné aux investisseurs </li><br>
                    <li> Traitement des dossiers en ligne des candidats de l'INDH(Initiative nationale du développement humain) </li><br>
                    <li> Travail avec l'ingénieur informatique sur la résolution des problèmes techniques (materiels/logiciels) </li><br>
                    <li> Réalisation des notices techniques et guides d'installation des outils pour le service INDH </li><br>
                    <li> Back up des disques durs et installation des mises à jour </li>
                </ul>
            </div>
        </div>

        <!--===== FOOTER =====-->
        <footer class="footer">
            <p class="footer__title">KHALDI Omar</p>
            <div class="footer__social">
                <a href="https://www.facebook.com/omar.ld.12139" class="footer__icon"><i class='bx bxl-facebook' ></i></a>
                <a href="https://www.github.com/Khaldi-o" class="footer__icon"><i class='bx bxl-github' ></i></a>
                <a href="https://www.linkedin.com/in/omarkhaldi/" class="footer__icon"><i class='bx bxl-linkedin' ></i></a>
            </div>
            <p> omar_khaldi@hotmail.fr</p>
            <div class="container">
                <div class="card">
                    <div class="content">
                        <!--<h2> 01</h2> -->
                        <h3> Mes cordonnées <br></h3>
                        <p>
                            <B>Adresse Mail</B>📧: omar_khaldi@hotmail.fr<br>
                            <B>Téléphone</B>📱 :<br> 07 80 74 55 36<br>
                            <B>📍 Adresse</B>📍 : <br> Vigneux-sur-Seine 94700<br>
                            <B>Contrat</B>💻: <br> Alternacne <br>
                            <B>Poste</B> : <br> Web developper Fullstack.
                        </p>
        
                    </div>
                </div>
            </div>
        
        </footer>


        <!--===== SCROLL REVEAL =====-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <script title="text/javascript" src="vanilla.-tilt.js"> </script>
        <script>
            VanillaTilt.init(document.querySelector(".etna_img"), {
                max: 25,
                speed: 400,
                glare: true,
                "max-glare": 1,
            })
        </script>

        <!--===== MAIN JS =====-->
        <script src="assets/js/main.js"></script>
    </body>
</html>