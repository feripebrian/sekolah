  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Profile Lengkap</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <?php if ($this->session->flashdata('success')) {?>
                    <div class="alert alert-success alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                       <h4>  <i class="icon fa fa-check"></i> Success!</h4>
                      <?php echo $this->session->flashdata('success');?>
                    </div>
                  <?php }elseif ($this->session->flashdata('failed')) {?>
                    <div class="alert alert-danger alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <h4>  <i class="icon fa fa-check"></i> failed!</h4>
                      <?php echo $this->session->flashdata('failed');?>
                    </div>
                  <?php }?>
                <!-- <header></header>3 class="card-title">Title</h3> -->

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <?php foreach($profil_lengkap  as $row){ ?>
                  <?php echo form_open('admin/dasbor/profil_lengkap_update/'.$row['id'],'role="form"');?>
                  <div class="card-body">
                    <div class="form-group">
                      <label>Name</label>
                      <?php echo form_input('name',$row['name'],'class="form-control" placeholder="Name"');?>
                    </div>
                    <div class="form-group">
                      <label>Description </label>
                      <textarea id="editor-ckeditor" name="description"><?php echo $row['description']?></textarea>
                    </div>
                    <div class="form-group">
                      <label>Status</label>
                      <div class="radio">
                        <label>
                          <input type="radio" name="status" id="status1" value="1" 
                          <?php $answer = $row['status'];  
                            if ($answer == "1") {          
                                echo 'checked="Correct"';      
                            }
                          ?>>
                          Enable
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="status" id="status2" value="0"
                          <?php $answer = $row['status'];  
                            if ($answer == "0") {          
                                echo 'checked="Correct"';      
                            }
                          ?>>
                          Disable
                        </label>
                      </div>
                    </div>

                  </div>
                  <!-- /.card-body -->

                  <div class="box-footer">
                      <?php echo form_submit('submit', 'Simpan','class="btn btn-primary"');?>
                  <?php }?>
                    </div>
                  <?php echo form_close();?>
              </div>
              <!-- /.card-body -->
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>

  </div>