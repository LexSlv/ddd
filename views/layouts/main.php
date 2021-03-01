<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\models\Blocks;
use app\models\Menu;
use app\models\Meta;
use app\models\Events;


$s_events = Events::find()->where(['show_in_slider' => 1])->all();
$c_events = Events::find()->where(['show_in_slider_col' => 1])->all();

$lang = Yii::$app->language;

$text_blocks = Blocks::find()->all();
foreach ($text_blocks as $block) {
    $blocks[$block['key']] = $block['text_block_'.$lang];
}


$controller_id = Yii::$app->controller->id;
$meta = Meta::find()->where(['action_name' => $controller_id])->one();
$menus = Menu::find()->orderBy(['position' => SORT_ASC])->all();


$this->title = $this->title = $meta['page_title_'.Yii::$app->language];

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
    <meta name="viewport" content="width=400, initial-scale=1">

    <!-- Favicon-->
    <link rel="apple-touch-icon" sizes="180x180" href="/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon-16x16.png">

    <meta name="theme-color" content="#ffffff">
    <!-- Author Meta -->
    <meta name="author" content="lamplab.kz">
    <!-- Meta Description -->
    <meta name="description" content="Centre for Research & Graduate Education" />
    <!-- Meta character set -->
    <meta charset="utf-8">
    <!-- Meta Keyword -->
    <meta name="keywords" content="" />
    <!-- Site Title -->
    <title><?= Html::encode($this->title) ?></title>

    <!--
    CSS
    ============================================= -->
    <script src="/js/vue.js"></script>
    <link rel="stylesheet" href="/css/style.css" />
</head>
<body>
<?php $this->beginBody() ?>
<header id="header">
    <section>
        <div class="header">
            <div class="logo"><img @click="goTo('index')" style="max-height: 132px;" src="/img/crge-min.png" title="CRGE" alt="CRGE" /></div>
            <div class="title"><?= $blocks['top_text'] ?></div>
            <div class="logo"><img @click="goTo('dkuen')" style="max-height: 132px;" src="/img/dku-min.png" title="DKU" alt="DKU" /></div>
        </div>
    </section>

    <div class="ribbon gray-ribbon">
        <section>
            <nav>
                <ul class="desktop-menu">
                    <?php foreach ($menus as $menu): ?>
                    <li>
                        <?php
                        $action_name = Yii::$app->controller->id;
                        if (Yii::$app->controller->id == "site") {
                            $action_name = "";
                        }

                        if ("/".$action_name === $menu['link_'.Yii::$app->language]) {
                            $menu_class = "menu-active";
                        } else {
                            $menu_class = "";
                        }

                        ?>
                        <a class="<?= $menu_class ?>"  href="<?= $menu['link_'.Yii::$app->language] ?>" title=""><?= $menu['name_'.Yii::$app->language] ?></a>
                    </li>
                    <?php endforeach; ?>

                </ul>

                <ul v-if="mobileMenu" class="mobile-menu" :class="{'display' : mobileMenu}">
                    <div @click="mobileMenu = false" class="close"></div>
                    <?php foreach ($menus as $menu): ?>
                        <li>
                            <a class="menu-active" href="<?= $menu['link_'.Yii::$app->language] ?>" title=""><?= $menu['name_'.Yii::$app->language] ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>


                <div class="nav-block">
                    <div @click="mobileMenu = true" class="hamburger"></div>
                    <div class="search">
                        <img src="/img/search.svg" alt="Поиск" title="Поиск">
                    </div>
                    <div class="lang">
                        <a :class="{'active-lang' : pathname.includes('/en')}" href="/en">EN</a>&nbsp;
                        <a :class="{'active-lang' : pathname.includes('/ru')}" href="/ru">RU</a>
                    </div>
                </div>
            </nav>
        </section>
    </div>
</header>


<?= $content ?>

<footer id="footer">
    <?php if (Yii::$app->controller->id === "site"): ?>
    <div class="ribbon red-ribbon">
        <section class="flex">
            <div class="social-block">
                <span><?= $blocks['we_are_in_social_networks'] ?>:</span>
                <?= $blocks['social_block_main'] ?>
            </div>
            <div class="sign-up-block">
                <span><?= $blocks['sign_up_for_our_updates_main'] ?></span>
                <div class="sign-up-box">

                    <?= Html::beginForm(['/subscribe'], 'post') ?>
                    <input name="email">
                    <button ><?= $blocks['sign_up_main'] ?></button>
                    <?= Html::endForm() ?>

                </div>
            </div>
        </section>
    </div>
    <div class="ribbon gray-ribbon">
        <section class="flex">
            <div class="gray-ribbon-title"><?=  $blocks['Contacts'] ?>:</div>
            <div class="gray-ribbon-title"><?=  $blocks['find_us_on_the_map'] ?>:</div>
        </section>
    </div>
    <div class="map-block">
        <section class="contacts-grid">
            <div class="contacts" @click="goToContacts">
                <?= $blocks['address_info'] ?>
            </div>
            <div class="map">
                <div id="map" class="map-size"></div>
            </div>
            <div class="partner">
                <img src="/img/daad-min.png" title="DAAD" alt="DAAD" />
            </div>
        </section>
    </div>
    <?php endif; ?>
    <?= $blocks['footer'] ?>


</footer>

<?php $this->endBody() ?>

</body>

<script src="/js/vue-carousel.min.js"></script>
<script src="/js/axios.min.js"></script>
<script>
    const mob = new Vue({
        el: '#header',
        data () {
            return {
                mobileMenu: false,
                pathname: window.location.pathname
            }
        },
        methods:{
            goTo(val) {
                if (val === 'dkuen') window.location.href = 'https://dku.kz/en/'
                if (val === 'index') window.location.href = '/'
            }
        }
    });
    const footer = new Vue({
        el: '#footer',
        data () {
            return {
                mailbox: ''
            }
        },
        methods:{
            goToContacts() {
                window.location.href = 'contacts'
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
    });
    const vm = new Vue({
        el: '#app',
        data () {
            return {
                showDescription0: false,
                showDescription1: false,
                showDescription2: false,
                showDescription3: false,
                showDescription4: false,
                showDescription5: false,
                showDescription6: false,
                showDescription7: false,
                showDescription8: false,
                showDescription9: false,
            }
        },
        computed: {
            sliders() {
                return [
                    <?php foreach ($s_events as $s_event): ?>
                    `<div class="slide-box">
							<a href="/academic-improvement" class="page-block-event">
								<div class="event-title">
									<strong><?= $s_event['title_'.$lang] ?></strong><br>
								</div>
								<div class="event-subtitle"><?= $s_event['subtitle_'.$lang] ?></div>

								<div class="flex event-details">
									<div class="event-author"><?= $s_event['author_'.$lang] ?></div>
									<div class="event-date"><?= $s_event['event_date'] ?></div>
								</div>
							</a>
					</div>`,
                    <?php endforeach; ?>
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
                window.location.href = 'academic-improvement'
            }
        }
    })
</script>
</html>
<?php $this->endPage() ?>
