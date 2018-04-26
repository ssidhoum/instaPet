<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post $post
 */
?>
<div>
	<?= h($post->name);?>
</div>
<div>
<?php $url= 'files/Posts/photo/'.h($post->photo);
    echo $this->Html->image($url, [
        'height' => '500',
        'width' => '520'
]);?>
</div>
