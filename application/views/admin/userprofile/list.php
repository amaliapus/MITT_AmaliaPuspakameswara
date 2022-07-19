<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">User Profile</h3>
                            
                <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
              <!-- form start -->
              <form>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Name</label>
                <input type="name" class="form-control" id="nameuser" placeholder="Name">
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" id="passworduser" placeholder="Password">
              </div>
              <div class="form-group">
                <label for="inputDescription">Address</label>
                <textarea id="inputDescription" class="form-control" rows="4"></textarea>
              </div>
              <!-- <div class="form-group">
                <label for="inputStatus">Status</label>
                <select id="inputStatus" class="form-control custom-select">
                  <option selected disabled>Select one</option>
                  <option>On Hold</option>
                  <option>Canceled</option>
                  <option>Success</option>
                </select>
              </div> -->
              <div class="form-group">
                <label>Birth of Date</label>
                <input type="date" class="form-control" id="boduser">
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" id="emailuser" placeholder="Email">
              </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
            </form>
          </div>
          <!-- /.card -->
        </div>

          <!-- /.col -->
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">User Skills</h3>

                <div class="card-tools">
                  <p>
                    <a href="<?php echo base_url('admin/userprofile/tambah') ?>" class="btn btn-success ">
                      <i class="fa fa-plus"></i> Add New
                    </a>
                  </p>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">No.</th>
                      <th>Skill</th>
                      <th>Level</th>
                      <th style="width: 40px">Action</th>
                    </tr>
                  </thead>
                  <!-- start -->
                  <tbody>
                    <tr>
                      <!-- data one -->
                      <td>1.</td>
                      <td>Update software</td>
                      <td>
                        <div class="progress progress-xs">
                          <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                        </div>
                      </td>
                      <td><span class="badge">
                        <a href="<?php echo base_url('admin/userprofile/edit') ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i>Edit</a>

                      <a href="#" class="btn btn-danger btn-xs" onclick="return confirm('Yakin ingin hapus data ini?')"><i class="fa fa-trash"></i>Delete</a>
                    </span></td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>Clean database</td>
                      <td>
                        <div class="progress progress-xs">
                          <div class="progress-bar bg-warning" style="width: 70%"></div>
                        </div>
                      </td>
                      <td><span class="badge">
                        <a href="#" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i>Edit</a>

                        <a href="#" class="btn btn-danger btn-xs" onclick="return confirm('Yakin ingin hapus data ini?')"><i class="fa fa-trash"></i>Delete</a>
                      </span></td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>Cron job running</td>
                      <td>
                        <div class="progress progress-xs progress-striped active">
                          <div class="progress-bar bg-primary" style="width: 30%"></div>
                        </div>
                      </td>
                      <td><span class="badge">
                        <a href="#" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i>Edit</a>

                        <a href="#" class="btn btn-danger btn-xs" onclick="return confirm('Yakin ingin hapus data ini?')"><i class="fa fa-trash"></i>Delete</a>
                      </span></td>
                    </tr>
                    <tr>
                      <td>4.</td>
                      <td>Fix and squish bugs</td>
                      <td>
                        <div class="progress progress-xs progress-striped active">
                          <div class="progress-bar bg-success" style="width: 90%"></div>
                        </div>
                      </td>
                      <td><span class="badge">
                        <a href="#" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i>Edit</a>

                        <a href="#" class="btn btn-danger btn-xs" onclick="return confirm('Yakin ingin hapus data ini?')"><i class="fa fa-trash"></i>Delete</a>
                      </span></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>