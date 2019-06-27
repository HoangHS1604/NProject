<label for="">Description</label>
<!-- <input type="text" class="form-control" id="des" placeholder="Product Description" name="des"> -->
<textarea id="des" name="des" style="width:100%; height:200px;"></textarea>
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
            &copy; <script>
                document.write(new Date().getFullYear())
            </script>, made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">Creative Tim</a>
        </div>
    </div>
</footer>

</div>
<script type="text/javascript">
    $(function() {
        if (CKEDITOR.instances['content']) {
            CKEDITOR.remove(CKEDITOR.instances['content']);
        }
        if (CKEDITOR.instances['des']) {
            CKEDITOR.remove(CKEDITOR.instances['des']);
        }
        CKEDITOR.config.width = 600;
        CKEDITOR.config.height = 150;
        CKEDITOR.replace('content', {});
        CKEDITOR.replace('des', {});
    })
    $(function() {
        var editor = CKEDITOR.replace('file1', {
            filebrowserBrowseUrl: '<?php echo base_url() . "public/ckfinder/ckfinder.html"; ?>',
            filebrowserImageBrowseUrl: '<?php echo base_url() . "public/ckfinder/ckfinder.html?Type=Images"; ?>',
            filebrowserFlashBrowseUrl: '<?php echo base_url() . "public/ckfinder/ckfinder.html?Type=Flash" ?>',
            filebrowserUploadUrl: '<?php echo base_url() . "public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files" ?>',
            filebrowserImageUploadUrl: '<?php echo base_url() . "public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images"; ?>',
            filebrowserFlashUploadUrl: '<?php echo base_url() . "ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash"; ?>',
            filebrowserWindowWidth: '800',
            filebrowserWindowHeight: '480'
        });
        CKFinder.setupCKEditor(editor, "<?php echo base_url() . 'public/ckfinder/' ?>");
    })
</script>