<form action="" method="post">
	Title <input type="text" name="title" value="<?=$data->Title?>" class="form-control">
	Description <input type="text" name="description" value="<?=$data->Description?>" class="form-control">
	Icon <input type="text" name="icon" value="<?=$data->Icon?>" class="form-control"><br>
	<div class="row">
    <div class="col-md-6">
      <button type="submit" name="update" class="btn btn-success btn-lg btn-block">Update</button>
    </div>
    <div class="col-md-6">
      <a href="<?=base_url('admin/more')?>" class="btn btn-danger btn-lg btn-block">Back</a>
    </div>
  </div>
</form>