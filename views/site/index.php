<main id="app">
    <div class="ribbon blue-ribbon top-main-ribbon white">
        <section>
            <h2><?= $text_blocks['forthcoming_and_most_recent_events'] ?></h2>
        </section>
    </div>
    <div class="ribbon yellow-ribbon middle-ribbon"></div>
    <section class="main-section">
        <div class="main-block shadow">
            <p>
                <?= $pages['main'] ?>
            </p>
        </div>
        <div class="events-block">
            <div class="slider-block shadow">
                <carousel :data="sliders" :controls="true">
                </carousel>
            </div>
            <div class="banner-block information-block">
                <?= $text_blocks['information_block_main'] ?>
            </div>
        </div>
    </section>
</main>

<script src="/js/vue.js"></script>
<script src="/js/vue-carousel.min.js"></script>
<script src="/js/loader.js"></script>
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
