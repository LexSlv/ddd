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
                <?= $text_blocks['main_text_block'] ?>
            </p>
        </div>
        <div class="events-block">
            <div class="slider-block shadow">
                <carousel :data="sliders" :controls="true">
                </carousel>
            </div>
            <div class="banner-block information-block">
                <?= $text_blocks['information_block_main'] ?>
                <!-- 		          	<div class="banner-pic">
                                          <img src="img/magazin.png" title="magazin" />
                                      </div>
                                      <div class="banner-text">
                                          <span class="banner-title">
                                              Peace in Central Asia in the Early 21. Century
                                        </span>
                                          <span class="banner-subtitle">
                                              Conditions for Success in an Era of Change
                                        </span>
                                         <span class="banner-author">
                                                  Peter Smith
                                        </span>
                                         <a href="" class="banner-link">
                                                  Read more...
                                        </a>
                                      </div> -->
            </div>
        </div>
    </section>
</main>