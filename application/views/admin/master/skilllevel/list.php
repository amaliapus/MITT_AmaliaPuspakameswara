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
                    <th>Skill ID</th>
                    <th>Skill Name</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>Internet
                      Explorer 4.0
                    </td>
                    <td>Win 95+</td>
                    <td><span class="badge">
                        <a href="<?php echo base_url('admin/master/skilllevel/edit') ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i>Edit</a>

                      <a href="#" class="btn btn-danger btn-xs" onclick="return confirm('Yakin ingin hapus data ini?')"><i class="fa fa-trash"></i>Delete</a>
                    </span></td>
                  </tr>
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