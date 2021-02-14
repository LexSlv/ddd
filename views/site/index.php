<main id="app">
    <div class="ribbon blue-ribbon top-main-ribbon white">
        <section>
            <h2>Forthcoming and most recent Events</h2>
        </section>
    </div>
    <div class="ribbon yellow-ribbon middle-ribbon"></div>
    <section class="main-section">
        <div class="main-block shadow">
            <p>Running since fall 2020, the DKU’s Centre for Research & Graduate Education (CRGE) encompasses a range of activities. It develops and organizes events which help faculty, students and young scholars within and outside the DKU build and improve their academic writing and research skills - both online and face-to-face. Among other things, we offer methods courses. In tandem with the DAAD-Information Centre Kazakhstan, the CRGE also holds training workshops about “Doing a PhD in Germany”, usually every one to two years alternately in Almaty and Nursultan. It helps foster research particularly in the social sciences and contributes to the development and maintenance of research cooperation with other academic institutions in Central Asia and beyond. The CRGE also runs the Social Science Colloquium. In addition, it organizes the DKU Fellows Program, providing the opportunity for researchers from other universities to come to Almaty as visiting researchers to enrich the DKU community. The Centre moreover publishes the DKU Occasional Papers series. Check out the above links for further information and be sure to sign up for our updates below if you are interested in what we do!
            </p>
        </div>
        <div class="events-block">
            <div class="slider-block shadow">
                <carousel :data="sliders" :controls="true">
                </carousel>
            </div>
            <div class="banner-block information-block">
                <h3>Information Block</h3>
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