<?php
/* @var $this yii\web\View */
$lang = Yii::$app->language;
?>
<main id="app">
    <div class="ribbon red-ribbon top-page-ribbon white">
        <section>
            <h2><?= $text_blocks['current_and_past_dku_senior_fellows'] ?></h2>
        </section>
    </div>
    <div class="ribbon blue-ribbon middle-ribbon"></div>
    <section class="main-section">
        <div class="page-box shadow">
            <div class="senior-block">
                <h3><?= $text_blocks['dku_senior_fellows'] ?></h3>
                <div class="senior-box">
                    <?php foreach ($s_fellows as $s_fellow): ?>
                    <div class="slide-fellow-box">
                        <div class="slide-fellow-pic">
                            <img src="<?= $s_fellow['photo_url'] ?>" title="senior1" />
                        </div>
                        <div class="slide-fellow-text">
						          	<span class="slide-fellow-title">
						          		<strong><?= $s_fellow['name_'.$lang] ?>,</strong>  <?= $s_fellow['whois_'.$lang] ?>
									</span>
                            <span class="slide-fellow-tags">
						          		<strong>Research interests:</strong> <?= $s_fellow['research_interests_'.$lang] ?>
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
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="page-box shadow">
            <div class="senior-block">
                <h3><?= $text_blocks['dku_junior_fellows'] ?></h3>
                <div class="senior-box">
                    <?php foreach ($j_fellows as $j_fellow): ?>
                    <div class="slide-fellow-box">
                        <div class="slide-fellow-pic">
                            <img src="<?= $j_fellow['photo_url'] ?>" title="jun5" />
                        </div>
                        <div class="slide-fellow-text">
						          	<span class="slide-fellow-title">
						          		<strong><?= $j_fellow['name_'.$lang] ?>,</strong> <?= $j_fellow['whois_'.$lang] ?><br />
                                        <?= $j_fellow['university_'.$lang] ?>
									</span>
                            <span class="slide-fellow-tags">
						          		<strong>Research interests:</strong> <?= $j_fellow['research_interests_'.$lang] ?>
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
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="space40"></div>
    </section>
    <div class="ribbon yellow-ribbon second-ribbon"></div>
</main>