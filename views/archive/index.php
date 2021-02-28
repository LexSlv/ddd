<?php
/* @var $this yii\web\View */
$lang = Yii::$app->language;
?>
<main id="app">
    <div class="ribbon yellow-ribbon top-page-ribbon white">
        <section>
            <h2><?= $text_blocks['Archive'] ?></h2>
        </section>
    </div>
    <div class="ribbon red-ribbon middle-ribbon"></div>
    <section class="main-section">
        <div class="archive-block shadow">
            <div class="archive-title">
                <div class="archive-search">
                    <input v-model="search" placeholder="Поиск по архиву" name="" />
                    <img @click="archiveSearch" src="img/search.svg" alt="Поиск" title="Поиск">
                </div>
            </div>
            <div class="archive-body">
                <table class="archive-table" cellspacing="0" border="1" cellpadding="5">
                    <tr>
                        <th><?= $text_blocks['Title'] ?></th>
                        <th><?= $text_blocks['Author'] ?></th>
                        <th><?= $text_blocks['Date_of_publication'] ?></th>
                        <th><?= $text_blocks['Action'] ?></th>
                    </tr>
                    <tr  v-for="archive in filteredList">
                        <td style="text-align: left;">
                            <strong> {{ archive.title }} </strong><br />
                            <small> {{ archive.subtitle }} </small></td>
                        <td><strong> {{ archive.author }} </strong></td>
                        <td> {{ archive.date }} </td>
                        <td><a :href="archive.url" target="_blank"><span>Read online</span> / Download</a></td>
                    </tr>
                </table>

            </div>
        </div>
    </section>
    <div class="ribbon blue-ribbon second-ribbon"></div>
</main>

<script src="/js/vue.js"></script>
<script src="/js/vue-carousel.min.js"></script>
<script>
    // Класс для архивов
    class Archive {
        constructor(title, subtitle, author, date, url) {
            this.title = title;
            this.subtitle = subtitle;
            this.author = author;
            this.date = date;
            this.url = url;
        }
    }
    const vm = new Vue({
        el: '#app',
        data () {
            return {
                search: '',
                // Архивы сюда через php суваем
                archiveList : [
                    <?php foreach ($pdfs as $pdf): ?>
                    new Archive(
                        '<?= $pdf['title_'.$lang] ?>',
                        '<?= $pdf['sub_title_'.$lang] ?>'',
                        '<?= $pdf['author_'.$lang] ?>',
                        '<?= $pdf['date_of_publication'] ?>',
                        '<?= $pdf['pdf'] ?>',
                    ),
                    <?php endforeach; ?>
                ]
            }
        },
        computed: {
            // Поиск по странице с архивами
            filteredList() {
                return this.archiveList.filter(archive => {
                    return archive.title.toLowerCase().includes(this.search.toLowerCase())
                })
            }
        },
        methods:{
            archiveSearch() {

            },
            prev(){
                this.$refs.switchDemo.prev()
            },
            next(){
                this.$refs.switchDemo.next()
            }
        }
    })
</script>