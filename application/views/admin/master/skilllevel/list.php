<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Skill Level Data</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <p>
                  <a href="<?php echo base_url('admin/master/skilllevel/tambah') ?>" class="btn btn-success ">
                    <i class="fa fa-plus"></i> Add New
                  </a>
                </p>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Skill Level ID</th>
                    <th>Skill Level Name</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $no=1; foreach($skilllevel as $skilllevel){ ?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $skilllevel->skillLevelID ?></td>
                    <td><?php echo $skilllevel->skillLevelName ?></td>
                    <td>
                      <span class="badge">
                        <a href="<?php echo base_url('admin/master/skilllevel/edit/' .$skilllevel->skillLevelID) ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i>Edit</a>

                      <a href="<?php echo base_url('admin/master/skilllevel/delete/' .$skilllevel->skillLevelID) ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin ingin hapus data ini?')"><i class="fa fa-trash"></i>Delete</a>
                    </span>
                  </td>
                  </tr>
                  <?php $no++; } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
            <!-- /.card -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>