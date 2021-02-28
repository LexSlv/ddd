<?php
/* @var $this yii\web\View */
$lang = Yii::$app->language;
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
                    <td><?= $pdf['semester_'.$lang] ?></td>
                    <td><?= $pdf['date_of_publication'] ?></td>
                    <td><a target="_blank" href="<?= $pdf['pdf'] ?>"><span>Read online</span> / Download</a></td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </section>
    <div class="ribbon red-ribbon second-ribbon"></div>
</main>
