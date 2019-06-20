<div class="content">
        <div class="box box-primary">

        <div class="box-header with-border">
        <a href="<?php echo base_url('admin/c_admin/brandlist');?>">Brand List</a>
            </div>
                
                    
                    <form role="form" action="?controller=admin&action=addbrand" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="BName">Brand's Name</label>
                  <input type="text" class="form-control" id="BName" placeholder="Brand's Name" name="BName">
                </div>
                <div class="form-group">
                  <label for="brandlogo">File input</label>
                  <input type="file" id="brandlogo" name="brandlogo">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
              <input type="submit" class="btn btn-primary" name="submit">
              </div>
            </form>

            
        </div>
</div>
