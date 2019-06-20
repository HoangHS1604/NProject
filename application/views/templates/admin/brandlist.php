<div class="box">
    <div class="box-header">
    <a href="<?php echo base_url('admin/c_admin/insertbrand');?>">New Brand</a>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
            <div class="row">
                <div class="col-sm-6"></div>
                <div class="col-sm-6"></div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                        <thead>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Brand's Name</th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" >Image</th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" >Active</th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" >Update</th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" >Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($brandlist as $item) { ?>
                                <tr role="row" class="odd">
                                    <td scope="col"> <?= $item['brand_name'] ?> </td>
                                    <td scope="col"><?= $item['brand_img'] ?></td>
                                    <td scope="col"><?php if( $item['active']=='1'){
                                            echo 'Yes';
                                    } else{
                                        echo 'No';
                                    } ?></td>
                                    <td scope="col"><a href="<?php echo base_url('admin/c_admin/update/'.$item['idb']);?>">Update</a></td>
                                    <td scope="col">
                                        <a href="<?php echo base_url('admin/c_admin/deletebrand/'.$item['idb']);?>">Delete</a></td>
                                </tr>
                            <?php } ?>
                            
                        </tbody>
                        <tfoot>
                            <tr>
                                <th rowspan="1" colspan="1">Brand's Nmae</th>
                                <th rowspan="1" colspan="1">Image</th>
                                <th rowspan="1" colspan="1">Active(s)</th>
                                <th rowspan="1" colspan="1">Update</th>
                                <th rowspan="1" colspan="1">Delete</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-5">
                    <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
                </div>
                <div class="col-sm-7" style="float-right">
                    <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                        <ul class="pagination" style="float: right;">
                            <li class="paginate_button previous disabled" id="example2_previous"><a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0">Previous</a></li>
                            <li class="paginate_button active"><a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0">1</a></li>
                            <li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0">2</a></li>
                            <li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0">3</a></li>
                            <li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="4" tabindex="0">4</a></li>
                            <li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="5" tabindex="0">5</a></li>
                            <li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="6" tabindex="0">6</a></li>
                            <li class="paginate_button next" id="example2_next"><a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0">Next</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.box-body -->
</div>