<?php
/* @var $this yii\web\View */
?>
<main id="app">
    <div class="ribbon blue-ribbon top-page-ribbon white">
        <section>
            <h2>DKU Fellows</h2>
        </section>
    </div>
    <div class="ribbon yellow-ribbon middle-ribbon"></div>
    <section class="main-section">
        <div class="page-box shadow">
            <div class="page-box-text">
                <p>
                    Under its DKU Fellows Program, the DKU provides the opportunity for researchers from other universities to come to Almaty as visiting researchers to enrich the DKU community. They may conduct own research and/or collaborate with DKU faculty in an area of common interest. To be eligible, you must have a research theme related to DKU expertise.
                </p>
                <p>
                    The DKU Fellows Program is divided into two categories: Junior Fellows at least enrolled in an MA program; and Senior Fellows having obtained a doctorate. The possible duration of researcher stays is between two weeks and six months. During their stay, DKU Fellows will be provided a dedicated working space with internet access and printer. One desktop computer with a large 26” monitor is also available in the Fellows room. Fellows are entitled to use DKU research facilities, including its library and on-line library resources (JSTOR, Web of Science, Science Direct, Scopus…).
                </p>
                <p>
                    DKU Fellowships are generally unpaid. Yet depending on funding availability, we may award Fellows subject-specific allowances. Note: Unless stated below on this page, there are currently no funds available for this purpose! You may generally apply for a DAAD short-term scholarship (“Kurzzeitdozentur”) to get funding for a stay as DKU Fellow, stretching from four weeks up to six months.
                </p>
                <p>
                    We expect Fellows hosted for four weeks or more to prepare an article for one of our research outlets (DKU Occasional Papers or CAJWR) during their stay - and to give one speech in the DKU Talks series, provided that the stay arises during the semester.
                </p>
            </div>
            <div class="fellows-img"></div>
            <div class="procedure-box">
                <h3 class="white">Application Procedure:</h3>
                <div class="procedure-block">
                    <p>
                        We encourage interested prospective DKU Fellows to commence the application process early in advance, in no case later than six months prior to the proposed visit. The following materials are to accompany the application:
                    </p>
                    <ul>
                        <li>cover letter indicating your applicable status (junior or senior), the proposed visit duration and dates and the DKU faculty to which the research is related: Economic Sciences, Engineering Economics or Social and Political Sciences. In case you plan to stay four weeks or more, please, also propose the title of your talk as well as the title of your paper and the DKU outlet for its further publication: DKU Occasional Papers or CAJWR;</li>
                        <li>curriculum vitae;</li>
                        <li>brief description and implementation plan for the proposed research project, including a statement explaining why DKU presents an appropriate setting for the work (all in English and altogether no more than three pages).</li>
                    </ul>
                    <span>Please, send your full application in one PDF file to <a>crge-fellows@dku.kz</a></span>
                </div>
            </div>
        </div>
        <div class="page-box">
            <div class="slider-block shadow">
                <h3>DKU Senior Fellows</h3>
                <carousel :data="seniorSlider" :controls="true"></carousel>
            </div>
            <div class="space20"></div>
            <div class="slider-block shadow">
                <h3>DKU Junior Fellows</h3>
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