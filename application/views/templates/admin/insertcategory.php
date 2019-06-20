<div class="content">
        <div class="box box-primary">

        <div class="box-header with-border">
        <a href="<?php echo base_url('admin/c_admin/categorylist');?>">Category List</a>
            </div>
                
                    
                    <form role="form" action="?controller=admin&action=addbrand" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="BName">Category's Name</label>
                  <input type="text" class="form-control" id="CName" placeholder="Category's Name" name="CName">
                </div>
                <div class="form-group">
                  <label for="BName">Parent Category</label>
                  <select name="root">
                  <option value="0"></option>
                  <?php foreach ($categorylist as $item) { ?>
                    <option value="<?= $item['idc'] ?>"><?= $item['category_name'] ?></option>
                    <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                  <label for="brandlogo">Description</label>
                  <textarea id="des" name="des"  style="width:100%; height:200px;" ></textarea>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
              <input type="submit" class="btn btn-primary" name="submit">
              </div>
            </form>

            
        </div>
</div>
<script type="text/javascript">
	$(function() {				    				    
		
        if(CKEDITOR.instances['des']) {						
			CKEDITOR.remove(CKEDITOR.instances['des']);
		}
		CKEDITOR.config.width = 600;
	    CKEDITOR.config.height = 150;
            CKEDITOR.replace('des',{});
	})
</script>