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
                            <input type="text" class="form-control" placeholder="Product Title" id="title" name="title" value="<?= $singledata['Title']?>">
                        </div>
                        <div class="form-group">
                            <label for="">Price</label>
                            <input type="text" class="form-control" id="price" placeholder="Product Price" name="price" value="<?= $singledata['Price']?>">

                        </div>
                        <div class="form-group">
                            <label for="">Content</label>
                            <!-- <input type="text" class="form-control" id="content" placeholder="Product Content" name="content" value="<?= $singledata['content']?>"> -->
                            <textarea id="content" name="content"  style="width:100%; height:200px;" value="<?= $singledata['content']?>"></textarea>

                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <!-- <input type="text" class="form-control" id="des" placeholder="Product Description" name="des" value="<?= $singledata['description']?>"> -->
                            <textarea id="des" name="des"  style="width:100%; height:200px;" value="<?= $singledata['description']?>"></textarea>
                        </div>
                         <div class="custom-file">
                         <img src="<?= base_url()?>public/home/images/featured products/<?= $singledata['Img'] ?>" width="250" height="200"></th>
                                    <th scope="col"><?= $singledata['created_date'] ?>
                            <input type="file" class="custom-file-input" id="validatedCustomFile" name="file1">
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
                        &copy; <script>
                            document.write(new Date().getFullYear())
                        </script>, made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">Creative Tim</a>
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
</script>