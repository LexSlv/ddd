<?php
/* @var $this yii\web\View */
$lang = Yii::$app->language;
?>

<main id="app">
    <div class="ribbon red-ribbon top-page-ribbon white">
        <section>
            <h2><?= $text_blocks['academic_improvement_title'] ?></h2>
        </section>
    </div>
    <div class="ribbon yellow-ribbon middle-ribbon"></div>
    <section class="main-section">
        <div class="page-block shadow">
            <?= $pages['academic_improvement'] ?>
        </div>
        <div class="page-block shadow">
            <h3><?= $text_blocks['forthcoming_events'] ?></h3>
            <div class="page-block-events">
                <?php foreach ($f_events as $key => $f_event):  ?>
                <div class="page-block-event" :key="<?= $key ?>" @click="showDescription<?= $key ?> = !showDescription<?= $key ?>">
                    <div class="event-title"><strong><?= $f_event['title_'.$lang] ?></strong><br /></div>
                    <div class="event-red-subtitle"><?= $f_event['subtitle_'.$lang] ?></div>

                    <div v-show="showDescription<?= $key ?>" class="event-description"><?= $f_event['description_'.$lang] ?> </div>

                    <div class="flex event-details">
                        <div class="event-author"><?= $f_event['author_'.$lang] ?></div>
                        <div class="event-date"><?= $f_event['event_date'] ?></div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="most-recent shadow">
            <div class="most-recent-title"><?= $text_blocks['most_recent_events'] ?></div>
            <div class="most-recent-events">
                <?php foreach ($m_events as $m_event): ?>
                <div>
                    <div class="event-title"><strong><?= $m_event['title_'.$lang] ?>,</strong></div>

                    <div class="event-red-subtitle"><?= $m_event['subtitle_'.$lang] ?> </div>

                    <div class="flex event-details">
                        <div class="event-author"><?= $m_event['author_'.$lang] ?></div>
                        <div class="event-date"><?= $m_event['event_date'] ?></div>
                    </div>
                </div>
                <?php endforeach; ?>

            </div>
            <!-- 		    	<div class="most-recent-past-events">
                                You can view all past events in the <strong>Past Events</strong> section
                            </div> -->
        </div>
    </section>
    <div class="ribbon blue-ribbon second-ribbon"></div>
</main>