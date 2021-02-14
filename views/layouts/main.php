<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <!-- Mobile Specific Meta -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
    <meta name="viewport" content="width=400px, initial-scale=1">

    <!-- Favicon-->
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">

    <meta name="theme-color" content="#ffffff">
    <!-- Author Meta -->
    <meta name="author" content="lamplab.kz">
    <!-- Meta Description -->
    <meta name="description" content="Centre for Research & Graduate Education - Main page" />
    <!-- Meta character set -->
    <meta charset="utf-8">
    <!-- Meta Keyword -->
    <meta name="keywords" content="" />
    <!-- Site Title -->
    <title><?= Html::encode($this->title) ?></title>

    <!--
    CSS
    ============================================= -->
    <script src="js/vue.js"></script>
    <link rel="stylesheet" href="css/style.css" /
</head>
<body>
<?php $this->beginBody() ?>
<body>
<header id="header">
    <section>
        <div class="header">
            <div class="logo"><img @click="goTo('index')" style="max-height: 132px;" src="img/crge-min.png" title="CRGE" alt="CRGE" /></div>
            <div class="title">Centre for Research & Graduate Education</div>
            <div class="logo"><img @click="goTo('dkuen')" style="max-height: 132px;" src="img/dku-min.png" title="DKU" alt="DKU" /></div>
        </div>
    </section>

    <div class="ribbon gray-ribbon">
        <section>
            <nav>
                <ul class="desktop-menu">
                    <li>
                        <a class="menu-active" href="index.html" title="">Main</a>
                    </li>
                    <li>
                        <a href="academic_improvement.html" title="">Academic Improvement</a>
                    </li>
                    <li>
                        <a href="social_science_colloquium.html" title="">Social Science Colloquium</a>
                    </li>
                    <li>
                        <a href="dku_fellows.html" title="">DKU Fellows</a>
                    </li>
                    <li>
                        <a href="occasional_papers.html" title="">Occasional Papers</a>
                    </li>
                    <li>
                        <a href="contacts.html" title="">Contacts</a>
                    </li>
                </ul>

                <ul v-if="mobileMenu" class="mobile-menu" :class="{'display' : mobileMenu}">
                    <div @click="mobileMenu = false" class="close"></div>
                    <li>
                        <a class="menu-active" href="index.html" title="">Main</a>
                    </li>
                    <li>
                        <a href="academic_improvement.html" title="">Academic Improvement</a>
                    </li>
                    <li>
                        <a href="social_science_colloquium.html" title="">Social Science Colloquium</a>
                    </li>
                    <li>
                        <a href="dku_fellows.html" title="">DKU Fellows</a>
                    </li>
                    <li>
                        <a href="occasional_papers.html" title="">Occasional Papers</a>
                    </li>
                    <li>
                        <a href="contacts.html" title="">Contacts</a>
                    </li>
                </ul>


                <div class="nav-block">
                    <div @click="mobileMenu = true" class="hamburger"></div>
                    <div class="search">
                        <img src="img/search.svg" alt="Поиск" title="Поиск">
                    </div>
                    <div class="lang">EN RU</div>
                </div>
            </nav>
        </section>
    </div>
</header>


<?= $content ?>

<footer id="footer">
    <div class="ribbon red-ribbon">
        <section class="flex">
            <div class="social-block">
                <span>We are in Social Networks:</span>
                <div class="social-box">
                    <a>
                        <img style="max-height: 34px;" src="img/facebook.svg" title="Facebook" alt="Facebook" />
                    </a>
                    <a>
                        <img style="max-height: 34px;" src="img/youtube.svg" title="YouTube" alt="YouTube" />
                    </a>
                    <a>
                        <img style="max-height: 34px;" src="img/instagram.svg" title="Instagram" alt="Instagram" />
                    </a>
                </div>
            </div>
            <div class="sign-up-block">
                <span>SIGN UP FOR OUR UPDATES</span>
                <div class="sign-up-box">
                    <input v-model="mailbox" name="sign-up">
                    <button @click="sendData">sign up</button>
                </div>
            </div>
        </section>
    </div>
    <div class="ribbon gray-ribbon">
        <section class="flex">
            <div class="gray-ribbon-title">Contact:</div>
            <div class="gray-ribbon-title">Find us on the Map:</div>
        </section>
    </div>
    <div class="map-block">
        <section class="contacts-grid">
            <div class="contacts" @click="goToContacts">
                <span>A0M0E7, Almaty, Kazakhstan</span>
                <span>Nazarbayev av., 173, room 302</span>
                <span>Tel. +7 727 355 0551 (ex. 241)</span>
                <span>crge-info@dku.kz</span>
            </div>
            <div class="map">
                <div id="map" class="map-size"></div>
            </div>
            <div class="partner">
                <img src="img/daad-min.png" title="DAAD" alt="DAAD" />
            </div>
        </section>
    </div>
    <div class="ribbon gray-ribbon">
        <section class="flex footer-block">
            <div style="text-transform: uppercase;">© 2020 Centre for Research & Graduate Education </div>
            <a class="hide-in-mobile" style="text-decoration: none;" href="https://lamplab.kz" title="Создано в lampLAB" target="_blank">
                <div class="lamplab">
                    <div class="create">Создано в lampLAB </div>
                    <img src="img/ll.svg" class="icon-style" alt="Создано в lampLAB" title="Создано в lampLAB">
                </div>
            </a>
        </section>
    </div>

</footer>

<?php $this->endBody() ?>
</body>


<script src="js/vue-carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
<script>
    const mob = new Vue({
        el: '#header',
        data () {
            return {
                mobileMenu: false
            }
        },
        methods:{
            goTo(val) {
                if (val === 'dkuen') window.location.href = 'https://dku.kz/en/'
                if (val === 'index') window.location.href = 'index.html'
            }
        }
    })
    const footer = new Vue({
        el: '#footer',
        data () {
            return {
                mailbox: ''
            }
        },
        methods:{
            goToContacts() {
                window.location.href = 'contacts.html'
            },
            sendData() {
                if (this.mailbox) {
                    axios
                        .post('sendData.php', { mailbox: this.mailbox }, {
                            headers: {"Content-Type": "application/json"}
                        })
                        .then(response => {
                            console.log('response: ', response)
                            if (response.status == 200) {
                                alert(`${this.mailbox} box is subscribed for distribution`)
                            } else {
                                alert('Error!')
                            }
                        })
                        .catch(error => {
                            console.log(error);
                            alert('Error!')
                        })
                        .finally(()=>{
                            this.mailbox = ''
                        })
                }
            }
        }
    })
    const vm = new Vue({
        el: '#app',
        data () {
            return {
            }
        },
        computed: {
            sliders() {
                return [
                    `<div class="slide-box">
							<a href="academic_improvement.html" class="page-block-event">

								<div class="event-title">
									<strong>Project proposal writing, Part 2</strong><br>(russ «Написание проектной заявки»)
								</div>
								<div class="event-description">Webinar</div>

								<div class="flex event-details">
									<div class="event-author">Guljamal Issaeva</div>
									<div class="event-date">February 26, 2021</div>
								</div>

							</a>
					</div>`,
                    `<div class="slide-box">
						<a href="academic_improvement.html" class="page-block-event">
				      		<div class="event-title"><strong>Writing Policy Papers</strong>, Webinar (in cooperation with the Friedrich Ebert Foundation Kazakhstan) </div>

				      		<div class="event-description">Webinar </div>

				      		<div class="flex event-details">
					      		<div class="event-author">Edward Lemon</div>
					      		<div class="event-date">27 November and 05 December 2020</div>
				      		</div>
			      		</a>
		    		</div>`,
                    `<div class="slide-box">
						<a href="academic_improvement.html" class="page-block-event">
		    				<div class="event-title"><strong>Basics of Academic Writing</strong>, Webinar</div>

			      			<div class="event-description">Talk for MA Students of the Ecosystems, Society and Economics of the Region of Aral (ESERA) Project</div>

			      			<div class="flex event-details">
				      			<div class="event-author">Sebastian Mayer</div>
				      			<div class="event-date">30 July 2020</div>
			      			</div>
		    			</a>
		    		</div>`
                ]
            }
        },
        methods:{
            prev(){
                this.$refs.switchDemo.prev()
            },
            next(){
                this.$refs.switchDemo.next()
            },
            goToAI() {
                window.location.href = 'academic_improvement.html'
            }
        }
    })
</script>
<script src="js/loader.js"></script>
<script type="text/javascript">
    var map;

    DG.then(function () {
        map = DG.map('map', {
            center: [43.244172, 76.947719],
            zoom: 18
        });

        DG.marker([43.244172, 76.947719]).addTo(map).bindPopup('Centre for Research & Graduate Education');
    });
</script>







</html>
<?php $this->endPage() ?>
