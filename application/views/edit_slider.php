<form class="" action="<?=site_url('admin/update_slider')?>" method="post">
  <img src="<?=base_url('assets/img/slides/').$value->Slider?>" width="500px">
  <hr>
  <input type="hidden" name="id" value="<?=$value->SliderID?>">
  Slider Title <input type="text" name="title" value="<?=$value->Title?>" class="form-control">
  Slider Description <textarea name="desc" class="form-control"><?=$value->Description?></textarea>
  <hr>
  <div class="row">
    <div class="col-md-6">
      <button type="submit" name="update" class="btn btn-success btn-lg btn-block">Update</button>
    </div>
    <div class="col-md-6">
      <a href="<?=base_url('admin/more')?>" class="btn btn-danger btn-lg btn-block">Back</a>
    </div>
  </div>
</form>
