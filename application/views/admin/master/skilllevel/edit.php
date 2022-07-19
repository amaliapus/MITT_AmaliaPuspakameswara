<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-6">
        <?php
          //notifikasi error
          echo validation_errors('<div class="alert alert-warning">','</div>');
          //form open
          echo form_open(base_url('admin/master/skilllevel/edit/' .$skilllevel->skillLevelID),' 
            class="form-horizontal"');
        ?>
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Edit Skill Level</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form>
            <div class="card-body">
              <div class="form-group">
                <label for="skilllevel">Skill Level Name</label>
                <input type="text" class="form-control" name="skillLevelName" placeholder="skill level Name" value="<?php echo $skilllevel->skillLevelName ?>" required>
              </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
        <!-- /.card -->
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>

<?php echo form_close(); ?>
