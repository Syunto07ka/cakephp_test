<div class = "">もいもい</div>
<div><?= $pun ?></div>
<?php
  foreach($fruits as $fruit){
      echo $this->Html->link(
        $fruit,
        array(
            'controller' => 'posts',
            'action' => 'index',
        )
    );
    echo '<br />';
  }
?>