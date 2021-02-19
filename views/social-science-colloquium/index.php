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
                    <th><?= $text_blocks['Year'] ?></th>
                    <th><?= $text_blocks['Semester'] ?></th>
                    <th><?= $text_blocks['Date_of_publication'] ?></th>
                    <th><?= $text_blocks['Action'] ?></th>
                </tr>
                <?php foreach ($pdfs as $pdf): ?>
                <tr>
                    <td><?= $pdf['year'] ?></td>
                    <td><?= $pdf['semester'] ?></td>
                    <td><?= $pdf['date_of_publication'] ?></td>
                    <td><a target="_blank" href="<?= $pdf['pdf'] ?>"><span>Read online</span> / Download</a></td>
                </tr>
                <?php endforeach; ?>
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