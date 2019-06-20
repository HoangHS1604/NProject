    <script src="<?php echo base_url('admin/c_admin/productlist');?>"></script>
    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ti-panel"></i>
								<p>Stats</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-bell"></i>
                                    <p class="notification">5</p>
									<p>Notifications</p>
									<b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>
						<li>
                            <a href="#">
								<i class="ti-settings"></i>
								<p>Settings</p>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">

                <div class="row">
					<div class="col-md-6">
<form action="?controller=admin&action=themSP" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="">Title</label>
    <input type="text" class="form-control"  placeholder="Product Title" name="title">
  </div>
  <div class="form-group">
    <label for="">Price</label>
    <input type="text" class="form-control" id="price" placeholder="Product Price" name="price">

  </div>
  <div class="form-group">
    <label for="">Content</label>
    <!-- <input type="text" class="form-control" id="content" placeholder="Product Content" name="content"> -->
    <textarea id="content" name="content"  style="width:100%; height:200px;"></textarea>
  </div>
  <div class="form-group">
    <label for="">Description</label>
    <!-- <input type="text" class="form-control" id="des" placeholder="Product Description" name="des"> -->
    <textarea id="des" name="des"  style="width:100%; height:200px;"></textarea>
  </div>
  <div class="custom-file">
     <input type="file" class="custom-file-input" id="file1" name="file1"> 
    <!-- <textarea id="txt_content" name="file1" id="file1"  style="width:100%; height:200px;"></textarea> -->
  </div><br />
  <input type="submit" class="btn btn-primary" name="submit">
</form>

					</div>
                   
                </div>
                
    

        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>

                        <li>
                            <a href="http://www.creative-tim.com">
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com">
                               Blog
                            </a>
                        </li>
                        <li>
                            <a href="http://www.creative-tim.com/license">
                                Licenses
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">Creative Tim</a>
                </div>
            </div>
        </footer>

    </div>
    <script type="text/javascript">
	$(function() {				    				    
		if(CKEDITOR.instances['content']) {						
			CKEDITOR.remove(CKEDITOR.instances['content']);
        }
        if(CKEDITOR.instances['des']) {						
			CKEDITOR.remove(CKEDITOR.instances['des']);
		}
		CKEDITOR.config.width = 600;
	    CKEDITOR.config.height = 150;
        CKEDITOR.replace('content',{});
            CKEDITOR.replace('des',{});
    })
    $(function() {				    				    
var editor = CKEDITOR.replace('file1',
{
filebrowserBrowseUrl : '<?php echo base_url()."public/ckfinder/ckfinder.html"; ?>',
filebrowserImageBrowseUrl : '<?php echo base_url()."public/ckfinder/ckfinder.html?Type=Images";?>',
filebrowserFlashBrowseUrl : '<?php echo base_url()."public/ckfinder/ckfinder.html?Type=Flash" ?>',
filebrowserUploadUrl : '<?php echo base_url()."public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files"?>',
filebrowserImageUploadUrl : '<?php echo base_url()."public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images";?>',
filebrowserFlashUploadUrl : '<?php echo base_url()."ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash";?>',
filebrowserWindowWidth : '800',
filebrowserWindowHeight : '480'
});
CKFinder.setupCKEditor( editor, "<?php echo base_url().'public/ckfinder/'?>" );
})
</script>
