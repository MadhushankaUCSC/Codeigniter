<?php include_once('header.php'); ?>

<div class="card  text-white bg-warning border-dark mb-3">
  <div class="card-body">
    <h5 class="card-title">PASTE YOUR POST !</h5>
    <p class="card-text">You can paste your post in here..</p>
  </div>
</div>

<div class="container">
	


	<?php echo form_open('welcome/save',['class'=>'form-horizontal']);?>
  <div class="form-group">
    <label for="exampleFormControlInput1"><b>Title</b></label>
   <div class="col-md-8">
    <?php echo form_input(['name'=>'title','placeholder'=>'Enter Title','class'=>'form-control']); ?>
    </div>
    <div>
    	<?php echo form_error('title','<div class="text-danger">','</div>'); ?>
    </div>
  </div>
  
 
  <div class="form-group">
    <label for="exampleFormControlTextarea1"><b>Description</b></label>
   <div class="col-md-8">
      <?php echo form_textarea(['name'=>'Description','placeholder'=>'Enter Description','class'=>'form-control']); ?>
  </div>
   <div>
    	<?php echo form_error('Description','<div class="text-danger">','</div>'); ?>
    </div>
  </div>

   
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
      <label class="form-check-label text-success" for="invalidCheck3">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback text-success">
        You must agree before submitting.
      </div>
    </div>
  </div>
 
  <?php echo form_submit(['name'=>'submit','value'=>'Submit','class'=>'btn btn-primary']); ?>
  
<?php echo form_close(); ?>

</div>
<?php include_once('footer.php'); ?>