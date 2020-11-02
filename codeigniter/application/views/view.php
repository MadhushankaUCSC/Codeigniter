<?php include_once('header.php'); ?>
<div class="container">
	<h3>View Post</h3>
	<h4><?php echo $post->title; ?></h4>
	<p><?php echo $post->description ;?></p>
	<p><?php echo $post->date ;?></p>
	<?php echo anchor('welcome','Back',['class'=>'btn btn-primary']); ?>
</div>

<?php include_once('footer.php'); ?>