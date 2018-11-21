
          <a href="<?=base_url('admin/Add_data/porto')?>" class="btn btn-success btn-lg btn-block"><i class="glyphicon glyphicon-plus"></i> Add Data</a><hr>
          <div class="table-responsive">
            <table class="table table-striped dataTables-example">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Title</th>
                  <th>Description</th>
                  <th>Link</th>
                  <th>Category</th>
                  <th>File</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              <?php
                $no = 0;
                foreach ($data as $key) {
                $no++;
              ?>
                <tr>
                  <td><?=$no;?></td>
                  <td><?=$key->Title;?></td>
                  <td><?=$key->Description;?></td>
                  <td><?=$key->Link;?></td>
                  <td><?=$key->Category;?></td>
                  <td><?=$key->FileName;?></td>
                  <td><a href="<?=base_url('Admin/Delete/').$key->PortoID?>" class="btn btn-danger">Delete</a> <a href="<?=base_url('admin/edit_porto/'.$key->PortoID)?>" class="btn btn-info">Edit</a></td>
                </tr>
              <?php } ?>
              </tbody>
            </table>
          </div>
