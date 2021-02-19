<?php
/* @var $this yii\web\View */
?>
<main id="app">
    <div class="ribbon yellow-ribbon top-page-ribbon black">
        <section>
            <h2><?= $text_blocks['social_science_colloquium'] ?></h2>
        </section>
    </div>
    <div class="ribbon blue-ribbon middle-ribbon"></div>
    <section class="main-section">
        <div class="page-block shadow">
        <?= $pages['social_science_colloquium'] ?>
        </div>
        <div class="page-box">
            <div class="page-box-block information-block shadow">
                <?= $text_blocks['social_science_colloquium_inf_block'] ?>
            </div>
            <div class="page-box-block slider-block shadow">
                <carousel :data="sliders" :controls="true">
                </carousel>
            </div>
        </div>

        <div class="archives-block shadow">
            <table class="archives-table" cellspacing="0" border="1" cellpadding="5">
                <tr>
                    <th>Year</th>
                    <th>Semester</th>
                    <th>Date of publication</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td>2021</td>
                    <td>Summer Semester</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>2020</td>
                    <td>Winter Semester</td>
                    <td>August 2021</td>
                    <td><a target="_blank" href="static/2020.pdf"><span>Read online</span> / Download</a></td>
                </tr>
            </table>
        </div>
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
            sliders() {
                return [
                    `<div class="slide-box">
			          	<div class="slide-pic">
			          		<img src="/img/img2.png" title="fun" />
			          	</div>
					</div>`,
                    `<div class="slide-box">
			          	<div class="slide-pic">
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