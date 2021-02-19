<?php
/* @var $this yii\web\View */
//echo "<pre>";
//print_r($s_fellows);
//die;
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
                    <?php foreach ($s_fellows as $s_fellow):  ?>
                    `<div class="slide-fellow-box">
			          	<div class="slide-fellow-pic">
			          		<img src="<?= $s_fellow['photo_url'] ?>" title="senior1" />
			          	</div>
			          	
			          	<div class="slide-fellow-text">
				          	<span class="slide-fellow-title">
				          		<strong><?= $s_fellow['name'] ?>,</strong> <?= $s_fellow['whois'] ?>
							</span>
				          	<span class="slide-fellow-tags">
				          		<strong>Research interests:</strong> <?= $s_fellow['research_interests'] ?>
							</span>
							<div class="action-fellow-block">
					          	<span class="slide-fellow-date">
					          		<strong>Fellowship period:</strong> <?= $s_fellow['fellowship_period'] ?>
								</span>
					          	<span class="slide-fellow-contact">
					          		<strong>Email:</strong> <?= $s_fellow['email'] ?>
								</span>					
							</div>
			          	</div>
					</div>`,
					<?php endforeach; ?>
					
                   	]
            },
            juniorSlider() {
                return [
                    <?php foreach ($j_fellows as $j_fellow):  ?>
                    `<div class="slide-fellow-box">
			          	<div class="slide-fellow-pic">
			          		<img src="<?= $j_fellow['photo_url'] ?>" title="senior1" />
			          	</div>
			          	
			          	<div class="slide-fellow-text">
				          	<span class="slide-fellow-title">
				          		<strong><?= $j_fellow['name'] ?>,</strong> <?= $j_fellow['whois'] ?>
							</span>
				          	<span class="slide-fellow-tags">
				          		<strong>Research interests:</strong> <?= $j_fellow['research_interests'] ?>
							</span>
							<div class="action-fellow-block">
					          	<span class="slide-fellow-date">
					          		<strong>Fellowship period:</strong> <?= $j_fellow['fellowship_period'] ?>
								</span>
					          	<span class="slide-fellow-contact">
					          		<strong>Email:</strong> <?= $j_fellow['email'] ?>
								</span>					
							</div>
			          	</div>
					</div>`,
					<?php endforeach; ?>
                ]
            },
            sliders() {
                return [
                    <?php foreach ($slider as $slide): ?>
                    `<div class="slide-box">
			          	<div class="slide-pic">
			          		<img src="<?= $slide['image_url']?>" title="fun" />
			          	</div>
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
            }
        }
    })
</script>