<main id="app">
    <div class="ribbon red-ribbon top-page-ribbon white">
        <section>
            <h2><?= $text_blocks['occasional_papers'] ?></h2>
        </section>
    </div>
    <div class="ribbon blue-ribbon middle-ribbon"></div>
    <section class="main-section">
        <div class="page-block shadow" style="font-weight: 700;">
            <?= $pages['occasional_papers'] ?>
        </div>
        <div class="page-block occasional-block shadow">
            <h4><?= $text_blocks['latest_occasional_paper'] ?></h4>
            <div class="occasional-box">
                <?= $pages['latest_occasional_paper'] ?>
            </div>
        </div>
        <div class="archives-block shadow">
            <div class="archives-title flex white"><?= $text_blocks['Archive'] ?></div>
            <table class="archives-table" cellspacing="0" border="1" cellpadding="5">
                <tr>
                    <th><?= $text_blocks['Title'] ?></th>
                    <th><?= $text_blocks['Author'] ?></th>
                    <th><?= $text_blocks['Date_of_publication'] ?></th>
                    <th><?= $text_blocks['Action'] ?></th>
                </tr>
                <tr>
                    <?php foreach ($pdfs as $pdf): ?>
                    <td style="text-align: left;"><strong><?= $pdf['title'] ?></strong><br /><small><?= $pdf['sub_title'] ?></small></td>
                    <td><strong><?= $pdf['author'] ?></strong></td>
                    <td><?= $pdf['date_of_publication'] ?></td>
                    <td><a target="_blank" href="<?= $pdf['pdf'] ?>"><span>Read online</span> / Download</a></td>
                    <?php endforeach; ?>
                </tr>
            </table>
        </div>
    </section>
</main>