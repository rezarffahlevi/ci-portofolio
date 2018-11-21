<form class="" action="<?=site_url('admin/add_porto/')?>" method="post" enctype="multipart/form-data">
  Portofolio Title <input type="text" name="title"  class="form-control">
  Portofolio Description <textarea name="description" class="form-control"></textarea>
  Portofolio Link <input type="text" name="link" class="form-control">
  Portofolio Category
<select name="category" class="form-control" required>
  <option value="">Choose Category</option>
  <option>Web</option>
  <option>Dekstop</option>
  <option>Graphic</option>
</select>
  Portofolio Image <input type="file" name="image" class="form-control"><br>
  <div class="row">
    <div class="col-md-6">
      <button type="submit" name="save" class="btn btn-success btn-lg btn-block">Save</button>
    </div>
    <div class="col-md-6">
      <a href="<?=base_url('admin')?>" class="btn btn-danger btn-lg btn-block">Back</a>
    </div>
  </div>

</form>
