<?php
/* @var $this yii\web\View */
?>
<main id="app">
    <div class="ribbon blue-ribbon top-page-ribbon white">
        <section>
            <h2><?= $text_blocks['DKU_fellows'] ?></h2>
        </section>
    </div>
    <div class="ribbon yellow-ribbon middle-ribbon"></div>
    <section class="main-section">
        <div class="page-box shadow">
            <div class="page-box-text">
            <?= $pages['fellows'] ?>
            </div>
        </div>
        <div class="page-box">
            <div class="slider-block shadow">
                <h3><?= $text_blocks['dku_senior_fellows'] ?></h3>
                <carousel :data="seniorSlider" :controls="true"></carousel>
            </div>
            <div class="space20"></div>
            <div class="slider-block shadow">
                <h3><?= $text_blocks['dku_junior_fellows'] ?></h3>
                <carousel :data="juniorSlider" :controls="true"></carousel>
            </div>
            <div class="page-box-block slider-block shadow">
                <carousel :data="sliders" :controls="true"></carousel>
            </div>
        </div>

        <div class="space40"></div>
    </section>
    <div class="ribbon red-ribbon second-ribbon"></div>
</main>


<script src="/js/vue.js"></script>
<script src="/js/vue-carousel.min.js"></script>
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
    const vm = new Vue({
        el: '#app',
        data () {
            return {
            }
        },
        computed: {
            seniorSlider() {
                return [
                    `<div class="slide-fellow-box">
			          	<div class="slide-fellow-pic">
			          		<img src="/img/senior1.png" title="senior1" />
			          	</div>
			          	<div class="slide-fellow-text">
				          	<span class="slide-fellow-title">
				          		<strong>Yuliya Podoprigora,</strong> Cand. Sc. History, Senior fellow
							</span>
				          	<span class="slide-fellow-tags">
				          		<strong>Research interests:</strong> Culture and History of the  German Minority in Kazakhstan
							</span>
							<div class="action-fellow-block">
					          	<span class="slide-fellow-date">
					          		<strong>Fellowship period:</strong> 17.03.2020−31.12.2020
								</span>
					          	<span class="slide-fellow-contact">
					          		<strong>Email:</strong> podoprigora178@gmail.com
								</span>					
							</div>
			          	</div>
					</div>`,
                    `<div class="slide-fellow-box">
			          	<div class="slide-fellow-pic">
			          		<img src="/img/senior2.png" title="senior2" />
			          	</div>
			          	<div class="slide-fellow-text">
				          	<span class="slide-fellow-title">
				          		<strong>Zarina Adambussinova,</strong> PhD student, Senior fellow
							</span>
				          	<span class="slide-fellow-tags">
				          		<strong>Research interests:</strong> Critical heritage studies, museum and
									anthropology, post-Soviet Central Asia, post-Soviet
									mono-industrial cities, household survival strategies,
									labor migration in Central Asia
							</span>
							<div class="action-fellow-block">
					          	<span class="slide-fellow-date">
					          		<strong>Fellowship period:</strong> 15.04.2020 — 15.08.2020
								</span>
					          	<span class="slide-fellow-contact">
					          		<strong>Email:</strong> adambussinova@dku.kz
								</span>					
							</div>
			          	</div>
					</div>`,				]
            },
            juniorSlider() {
                return [
                    `<div class="slide-fellow-box">
			          	<div class="slide-fellow-pic">
			          		<img src="/img/jun1.png" title="jun1" />
			          	</div>
			          	<div class="slide-fellow-text">
				          	<span class="slide-fellow-title">
				          		<strong>Halimov Ardamehr,</strong> Master student, Junior fellow<br />
				          		Tajikistan/ State Scientific Institution «Center for the Study of Glaciers», Academy of Sciences of the Republic of Tajikistan
							</span>
				          	<span class="slide-fellow-tags">
				          		<strong>Research interests:</strong> Water resource management, environmental issues
							</span>							
							<div class="action-fellow-block">
					          	<span class="slide-fellow-date">
					          		<strong>Fellowship period:</strong> 2019−2020
								</span>				
							</div>
			          	</div>
					</div>`,
                    `<div class="slide-fellow-box">
			          	<div class="slide-fellow-pic">
			          		<img src="/img/jun2.png" title="jun2" />
			          	</div>
			          	<div class="slide-fellow-text">
				          	<span class="slide-fellow-title">
				          		<strong>Tilek Askaraliev,</strong> Bachelor student, Junior fellow<br />
				          		Kyrgyz Republic/ Kyrgyz National Agrarian University named after K.I. Skryabin
							</span>
				          	<span class="slide-fellow-tags">
				          		<strong>Research interests:</strong> Water resource management, environmental issues
							</span>							
							<div class="action-fellow-block">
					          	<span class="slide-fellow-date">
					          		<strong>Fellowship period:</strong> 2019−2020
								</span>				
							</div>
			          	</div>
					</div>`,
                    `<div class="slide-fellow-box">
			          	<div class="slide-fellow-pic">
			          		<img src="/img/jun3.png" title="jun3" />
			          	</div>
			          	<div class="slide-fellow-text">
				          	<span class="slide-fellow-title">
				          		<strong>Zhumagul Akunova,</strong> Master student, Junior fellow<br />
				          		Kyrgyz Republic/ American University of Central Asia
							</span>
				          	<span class="slide-fellow-tags">
				          		<strong>Research interests:</strong> Water resource management, environmental issues
							</span>							
							<div class="action-fellow-block">
					          	<span class="slide-fellow-date">
					          		<strong>Fellowship period:</strong> 2019−2020
								</span>				
							</div>
			          	</div>
					</div>`,
                    `<div class="slide-fellow-box">
			          	<div class="slide-fellow-pic">
			          		<img src="/img/jun4.png" title="jun4" />
			          	</div>
			          	<div class="slide-fellow-text">
				          	<span class="slide-fellow-title">
				          		<strong>Gulzat Asanakunova,</strong> Master student, Junior fellow<br />
				          		Kyrgyz Republic/ Institute of Water Problem & Hydropower Engineering
							</span>
				          	<span class="slide-fellow-tags">
				          		<strong>Research interests:</strong> Water resource management, environmental issues
							</span>							
							<div class="action-fellow-block">
					          	<span class="slide-fellow-date">
					          		<strong>Fellowship period:</strong> 2019−2020
								</span>				
							</div>
			          	</div>
					</div>`,
                    `<div class="slide-fellow-box">
			          	<div class="slide-fellow-pic">
			          		<img src="/img/jun5.png" title="jun5" />
			          	</div>
			          	<div class="slide-fellow-text">
				          	<span class="slide-fellow-title">
				          		<strong>Nurbek Asangaziev,</strong> Master student, Junior fellow<br />
				          		Kyrgyz Republic/ Kyrgyz National Agrarian University named fter K.I. Skryabin
							</span>
				          	<span class="slide-fellow-tags">
				          		<strong>Research interests:</strong> Water resource management, environmental issues
							</span>							
							<div class="action-fellow-block">
					          	<span class="slide-fellow-date">
					          		<strong>Fellowship period:</strong> 2019−2020
								</span>				
							</div>
			          	</div>
					</div>`,
                ]
            },
            sliders() {
                return [
                    `<div class="slide-box">
			          	<div class="slide-pic fellows">
			          		<img src="/img/img2.png" title="fun" />
			          	</div>
					</div>`,
                    `<div class="slide-box">
			          	<div class="slide-pic fellows">
			          		<img src="/img/img1.jpg" title="fun" />
			          	</div>
					</div>`,
                ]
            }
        },
        methods:{
            prev(){
                this.$refs.switchDemo.prev()
            },
            next(){
                this.$refs.switchDemo.next()
            }
        }
    })
</script>