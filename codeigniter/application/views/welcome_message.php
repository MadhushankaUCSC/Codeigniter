<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php include_once('header.php'); ?>
		<header class="header header container-fluid">
			
			<div class="overlay">
				<div class="description">
					<h1>Always in Good Taste!!</h1>
						<p>
							It’s our mission to bring you the largest selection of cakes and other great quality desserts on the
							market. Along with a vast wealth of knowledge in the products we sell, Divine carries everything you could
							possibly imagine and more. We’re here for our customers, and want each one of them to have a unique, one-of-a-kind experience at our amazing Cake Shop.
						</p>
						<button class="btn btn-dark btn-lg">Read More</button>
				</div>
			</div>
		</header>
				<div class="container features">
  <div class="row align-items-start">
    <div class="col">
      <h3 class="feature-title">Black Forest Cake</h3>

			<img src="assets/images/img_27021.jpg" class="img-fluid img-tile">
			<p>Black Forest Cake is a party cake. What says "celebration" more than chocolate cake, Kirsch flavored Morello cherries, and loads of sweet whipped cream? As its name implies, Black Forest Cake comes from the Black Forest region of Germany. The first written recipe for this very popular cake appeared in 1934, and there are many theories as to its origin.</p>
    </div>
    <div class="col">
      <h3 class="feature-title">Red Velvet Cake</h3>
			<img src="assets/images/red velvet.jpg" class="img-fluid img-tile">
			<p>A Red Velvet Cake is instantly recognizable with its bright red color offset by a white Cream Cheese Frosting. There are many theories as to its origin. Some say it originated in the South, others say it originated in the North. All we really know for sure is that it has been a favorite for decades.</p>
    </div>
    <div class="col">
      <h3 class="feature-title">Chocolate Cake</h3>
			<img src="assets/images/chocolate.jpg" class="img-fluid img-tile">
			<p>A layered Chocolate Cake never goes out of style. Trends may come and go but a Chocolate Cake is as popular today as it was 10, 20, or 75 years ago. This Simple Chocolate Cake is especially appealing both for the baker and for those who get to enjoy this cake. I find that most bakers are always on the lookout for a cake.</p>
    </div>
  </div>
  <div class="row align-items-center">
    <div class="col">
      <h3 class="feature-title">White-Round-Cake</h3>
			<img src="assets/images/white-round-cake.jpg" class="img-fluid img-tile">
			<p>Layer cakes are always well received and they seem to make any get together a little more special. This two-layered White Butter Cake is no exception. It's buttery sweet and I like to sandwich the two layers together with raspberry jam and a tangy-sweet cream cheese frosting. The frosting is also used to cover and decorate the cake. I often pile some fresh berries in the center of the cake which makes it look so beautiful..</p>
    </div>
    <div class="col">
      	<h3 class="feature-title">Carrot Cake</h3>
			<img src="assets/images/carrot.jpg" class="img-fluid img-tile">
			<p>Carrot Cake never seems to go out of style. This rich and moist spice cake, full of grated carrot, toasted nuts, and crushed pineapple, has great flavor, especially when covered with a tangy-sweet Cream Cheese Frosting. The interesting part is that while those pretty orange flecks of grated carrot give the Carrot Cake color, sweetness, and a moist texture, its flavor is almost indistinguishable.</p>
    </div>
    <div class="col">
       	<h3 class="feature-title">Strawberry Cake</h3>
			<img src="assets/images/strawberry cake.jpg" class="img-fluid img-tile">
			<p> A layered strawberry Cake never goes out of style. Trends may come and go but a Chocolate Cake is as popular today as it was 10, 20, or 75 years ago. This Simple Chocolate Cake is especially appealing both for the baker and for those who get to enjoy this cake. I find that most bakers are always on the lookout for a cake.</p>
    </div>
  </div>

</div>
<div class="container">
	<h4>More Post</h4>
	<?php if($msg=$this->session->flashdata('msg')): ?>
		<?php echo $msg; ?>
	<?php endif; ?>
	<?php echo anchor('Welcome/create', 'ADD NEW POST', ['class'=>'btn btn-primary']); ?>
<table class="table table-hover">
  <thead>
    <tr>
     
      <th scope="col-md-8">Title</th>
      <th scope="col-md-8">Description</th>
      <th scope="col-md-8">Date</th>
      <th scope="col-md-8">Action</th>
    </tr>
  </thead>
  <tbody>
  	<?php if(count($posts)): ?>
  	 	<?php foreach ($posts as $post): ?>
    <tr>
     
      <td><?php echo $post->title;?></td>
      <td><?php echo $post->description;?></td>
      <td><?php echo $post->date;?></td>
      <td><?php echo anchor("Welcome/view/{$post->id}", 'View Post', ['class'=>'btn btn-success btn-sm']); ?>
      <?php echo anchor("Welcome/update/{$post->id}", 'Update Post', ['class'=>'btn btn-warning btn-sm']); ?>
      	<?php echo anchor("Welcome/delete/{$post->id}", 'Delete Post', ['class'=>'btn btn-danger btn-sm']); ?>
      </td>
    </tr>
		<?php endforeach; ?>
   <?php else:?>
   	<tr>
   		<td>No Records Found Sorry!</td>
   	</tr>
   <?php endif;?>
  </tbody>
</table>
</div>
<?php include_once('footer.php'); ?>	
