<style>
    .card-deck .col-md-4{
        margin-bottom: 25px;
    }
    .card-deck .card{
        display: inline-block;
        width: 305px;
    }
    .card-title{
        height: 25px;
        min-width: 200px;
        overflow: hidden;
        text-overflow: ellipsis;
        font-size: 14px;
        margin-bottom: -1rem;
    }

    .embed-responsive-16by9 {
        padding-bottom: 15%;
    }

    .btn-disabled{

        border-color: #ddd;
        background-color: #ddd;
        color: #000;

    }

</style>
<div class="robust-content content container-fluid">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="breadcrumb-wrapper col-xs-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>admin/index">الرئيسية</a>
                    </li>
                    <li class="breadcrumb-item active">إدارة الإعلانات
                    </li>
                </ol>
            </div>

            <div class="content-header-lead col-xs-12 mt-1">

            </div>
        </div>
        <div class="content-body">

            <section id="image-grid" class="card">
                <div class="card-header">
                    <h4 class="card-title"><i class="icon-tag"></i> إدارة الإعلانات</h4>
                    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                            <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                            <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                            <li><a data-action="close"><i class="icon-cross2"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body collapse in">
                    <div class="card-block">

                        <div class="card-deck-wrapper">
                            <div class="card-deck row">
                                <?php
                                foreach($Banner as $banner){
                                    ?>
                                    <div class="col-md-4">
                                        <div class="card border-grey border-lighten-2">
                                            <div class="card-img-top embed-responsive embed-responsive-item embed-responsive-16by9">
                                                <img class="gallery-thumbnail" src="<?php echo base_url(thumb($banner->img,303,49)); ?>" />
                                            </div>
                                            <div class="card-block text-xs-center">
                                                <h4 class="card-title"><?php  echo $banner->name ?></h4>


                                            </div>
                                            <div class="text-xs-center">
                                                <a href="<?php echo base_url().'admin/updateBanner/'.$banner->id?>" class="btn btn-social-icon mr-1 mb-1 btn-outline-info"><span class="icon-edit"></span></a>
                                                <a id="<?php echo $banner->id?>" class=" btndelete btn btn-social-icon mr-1 mb-1 btn-outline-danger"><span class="icon-trash"></span></a>
                                                <?php
                                                if ($banner->activat_id == 1) {
                                                    echo "<span class=\" btn mr-1 mb-1 btn-success\">فعال</span>";
                                                } else {
                                                    echo "<span class=\" btn mr-1 mb-1 btn-disabled \">معطل</span>";
                                                }
                                                ?>

                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>

                        </div>



                    </div>
                </div>
                <!--/ PhotoSwipe -->
            </section>

        </div>

        <!-- Modal -->
        <div class="modal fade text-xs-left" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel1"> حذف الإعلان </h4>
                    </div>
                    <form  id="form-delete" >
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-2">
                                    <i class="fa  fa-warning danger " style="font-size: 30px; margin-right: 50px;"></i>
                                </div>
                                <input type="hidden" class="form-control" name="deptid" placeholder="" id="deptid2"  >
                                <div class="form-group" >
                                    <h5 class="col-md-8  control-label" >هل تريد حذف الإعلان؟! </h5>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="modal-footer">
                        <button type="button" id="delete1" class="btn btn-primary">نعم</button>
                        <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">لا</button>

                    </div>
                </div>
            </div>
        </div><!--End Modal -->
    </div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->
<script>


    $('.btndelete').on('click',function (e) {
        // alert(1);
        e.preventDefault();
        var txt=$(this).attr('id');
        $('#deptid2').val(txt);
        $('#delete').modal('show');
    });


    $(document).on('click','#delete1',function () {
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('admin/deleteBanner');?>",
            data: {
                'deptID':$('#deptid2').val()},
            cache:false,
            success:
                function(data){
                    $('#delete').modal('hide');
                    window.location.reload();
                }
        });// you have missed this bracket
    });

</script>


