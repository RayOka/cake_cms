<h1>ログイン</h1>
<?php
    echo $this->Form->create();
    echo $this->Form->control('email');
    echo $this->Form->control('password');
    echo $this->Form->button('ログイン');
    echo $this->Form->end() ?>