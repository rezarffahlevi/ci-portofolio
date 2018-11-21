<form class="" action="<?=site_url('admin/update_porto')?>" method="post">
  <input type="hidden" name="id" value="<?=$value->PortoID?>">
  Portofolio Title <input type="text" name="title" value="<?=$value->Title?>" class="form-control">
  Portofolio Description <textarea name="desc" class="form-control"><?=$value->Description?></textarea>
  Portofolio Link <input type="text" name="link" value="<?=$value->Link?>" class="form-control">
  Portofolio Category
    <select name="category" class="form-control" required>
      <option><?=$value->Category?></option>
      <option>Web</option>
      <option>Dekstop</option>
      <option>Graphic</option>
    </select>
  <hr>
  <img src="<?=base_url('assets/').$value->Folder."/".$value->FileName?>" width="500px">
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
