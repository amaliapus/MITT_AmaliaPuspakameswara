
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-6">
        <?php 
        // Error upload
        if(isset($error)) {
          echo '<p class="alert alert-warning">';
          echo $error;
          echo '</p>';
        }

        // Notifikasi error
        echo validation_errors('<div class="alert alert-warning">', '</div>');

        // Form open pakai MULTIPART untuk form yang ada upload GAMBAR
        echo form_open_multipart(base_url('admin/userprofile/tambah'), ' class="form-horizontal"');
         ?>
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Add New Skill</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form>
            <div class="card-body">
              <div class="form-group">
                <label for="skill">Skill</label>
                <select name="skillID" class="form-control select2" style="width: 100%;">
                    <?php foreach($skill as $skill) { ?>
                      <option value="<?php echo $skill->skillID ?>" >
                        <?php echo $skill->skillName ?>
                      </option>
                    <?php } ?>
                  </select>
              </div>
              <div class="form-group">
                <label class="col-md-2 control-label">Skill Level</label>
                <select name="skillLevelID" class="form-control select2" style="width: 100%;">
                    <?php foreach($skilllevel as $skilllevel) { ?>
                      <option value="<?php echo $skilllevel->skillLevelID ?>" >
                        <?php echo $skilllevel->skillLevelName ?>
                      </option>
                    <?php } ?>
                  </select>
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