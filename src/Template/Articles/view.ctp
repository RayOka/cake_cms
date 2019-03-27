<!-- src/Template/Article/view.ctp -->

<h1><?= h($article->title) ?></h1>
<p><?= h($article->body) ?></p>
<p><small>作成日時：<?= $article->created->format(DATE_RFC850) ?></small></p>
<td><?= $this->Html->link('Edit', ['action' => 'edit', $article->slug]) ?></td>
<td><?= $this->Html->link('Home', ['action' => 'index']) ?></td>
