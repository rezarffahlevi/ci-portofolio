          <div class="table-responsive">
            <table class="table table-striped dataTables-example">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Title</th>
                  <th>Description</th>
                  <th>Icon</th>
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
                  <td><?=$key->Icon;?></td>
                  <td><a href="<?=base_url('admin/edit_more/'.$key->MoreID)?>" class="btn btn-info">Edit</a></td>
                </tr>
              <?php } ?>
              </tbody>
            </table>
          </div>
