<!-- src/Template/Articles/index.ctp -->

<h1>記事</h1>
<table>
<?= $this->html->link('記事の追加', ['action' => 'add']) ?>
    <tr>
        <th>タイトル</th>
        <th>作成日時</th>
        <th>操作</th>
    </tr>

    <!-- ここで、$articles クエリーオブジェクトを繰り返して、記事の情報を出力します -->

    <?php foreach ($articles as $article): ?>
    <tr>
        <td>
            <?= $this->Html->link($article->title, ['action' => 'view', $article->slug]) ?>
        </td>
        <td>
            <?= $article->created->format(DATE_RFC850) ?>
        </td>
        <td>
            <?= $this->Html->link('記事の編集', ['action' => 'edit', $article->slug]) ?>
            <?= $this->Form->postLink(
                '記事の削除',
                ['action' => 'delete', $article->slug],
                ['confirm' => 'よろしいですか？'])
            ?>
        </td>
    </tr>
<?php endforeach; ?>
</table>