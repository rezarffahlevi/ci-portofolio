<form class="" action="<?=site_url('admin/add_slider/')?>" method="post" enctype="multipart/form-data">
  Slider Title <input type="text" name="title"  class="form-control">
  Slider Description <textarea name="description" class="form-control"></textarea>
  Slider Image <input type="file" name="image" class="form-control"><br>
  <div class="row">
    <div class="col-md-6">
      <button type="submit" name="save" class="btn btn-success btn-lg btn-block">Save</button>
    </div>
    <div class="col-md-6">
      <a href="<?=base_url('admin/slider')?>" class="btn btn-danger btn-lg btn-block">Back</a>
    </div>
  </div>

</form>
