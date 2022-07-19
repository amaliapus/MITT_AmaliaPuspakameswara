<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-6">
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
                <select class="form-control select2" style="width: 100%;">
                    <?php foreach($skill as $skill) { ?>
                      <option value="<?php echo $skill->skillID ?>" >
                        <?php echo $skill->skillName ?>
                      </option>
                    <?php } ?>
                  </select>
              </div>
              <div class="form-group">
                <label class="col-md-2 control-label">Skill Level</label>
                <select class="form-control select2" style="width: 100%;">
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