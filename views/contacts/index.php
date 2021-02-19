<main id="app">
    <div class="ribbon blue-ribbon top-page-ribbon white">
        <section>
            <h2><?= $text_blocks['Contacts'] ?></h2>
        </section>
    </div>
    <div class="ribbon red-ribbon middle-ribbon"></div>
    <div class="ribbon yellow-ribbon second-ribbon"></div>

    <section class="main-section">
        <div class="contacts-block shadow">
            <div class="contacts-box">
                <div>
                    <h4><?= $text_blocks['Address'] ?>:</h4>
                    <?= $text_blocks['address_info'] ?>
                </div>
                <div>
                    <h4><?= $text_blocks['head_of_crge'] ?>:</h4>
                    <?= $text_blocks['head_of_crge_info'] ?>
                </div>
                <div>
                    <h4><?= $text_blocks['social_networks'] ?>:</h4>
                    <div class="contacts-social-box">
                        <?= $text_blocks['social_block_main'] ?>
                    </div>
                </div>
            </div>

            <div class="contacts-map-block">
                <h4><?= $text_blocks['we_on_the_map'] ?></h4>
                <div class="contacts-map">
                    <div id="map" class="contacts-map-size"></div>
                </div>

            </div>

        </div>
    </section>
</main>


<script src="/js/vue.js"></script>
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
        }
    })
</script>
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