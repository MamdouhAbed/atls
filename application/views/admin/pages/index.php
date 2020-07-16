<div class="robust-content content container-fluid">
    <div class="content-wrapper">
<section id="responsive">
<div class="row match-height">

    <div class="col-xl-9 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">آخـر الأخبار</h4>
                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                        <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body">
                <div class="card-block">
                    <p> <a href="<?php echo base_url();?>admin/addNews" class="btn btn-info float-md-right"><i class="icon-plus4"></i> إضافة خبر</a> <span class="float-xs-left"><a href="<?php echo base_url();?>admin/dtableNews" >المزيد <i class="icon-arrow-left2"></i></a></span></p>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                        <tr>
                            <th>رقم الخبر</th>
                            <th>عنوان الخبر</th>
                            <th>المشاهدات</th>
                            <th>المستخدم</th>
                            <th>التاريخ والوقت</th>
                            <th>العمليات</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php

                        foreach (array_slice($News,0,5) as $news)
                        {?>
                            <tr>
                                <td><?php  echo $news->id ?></td>
                                <td><?php  echo $news->title ?></td>
                                <td><?php  echo $news->view_count ?></td>
                                <td><?php  echo $news->name ?></td>
                                <td><?php echo ArabicDate($news->created_at); ?></td>
                                <td>
                                    <a href="<?php echo base_url().'admin/updateNews/'.$news->id?>"><i class="fa fa-pencil info" title="Edit" style="font-size: 20px;"></i></a>
                                    <a class="btndelete"><i class="fa fa-trash danger" title="Delete" style="font-size: 20px; margin-right: 10px;"></i></a>

                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-12">
 <a href="<?php echo base_url();?>admin/addCurrency" class="card card-inverse bg-success text-xs-center height-200">
            <div class="card-body">
                <div class="card-block">
                    <img src="<?php echo base_url();?>admin-assets/images/elements/mony.png" alt="عملات" height="110" class="mb-1" />
                    <h4 class="card-title m-0">إضافـة أسعار العملات</h4>

                </div>
            </div>
        </a>
        <a href="<?php echo base_url();?>admin/addImages" class="card card-inverse bg-warning text-xs-center height-200">
            <div class="card-body">
                <div class="card-block">
                    <img src="<?php echo base_url();?>admin-assets/images/elements/photo.png" alt="element 05" height="110" class="mb-1" />
                    <h4 class="card-title m-0">إضافـة ألبـوم صـور</h4>

                </div>
            </div>
        </a>
        <a href="<?php echo base_url();?>admin/addBreakNew" class="card card-inverse bg-danger text-xs-center height-80-per">
            <div class="card-body">
                <div class="card-block">

                    <h4 class="card-title m-0">إضافـة خبـر عاجـل</h4>

                </div>
            </div>
        </a>

    </div>
</div>
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
                    <h4 class="modal-title" id="myModalLabel1"> حذف خبر  </h4>
                </div>
                <form  id="form-delete" >
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-2">
                                <i class="fa  fa-warning danger " style="font-size: 30px; margin-right: 50px;"></i>
                            </div>
                            <input type="hidden" class="form-control" name="deptid" placeholder="" id="deptid2"  >
                            <div class="form-group" >
                                <h5 class="col-md-8  control-label" >هل تريد حذف الخبر؟! </h5>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" type="text/javascript"></script>


<script>


    $('.btndelete').on('click',function (e) {
        // alert(1);
        e.preventDefault();
        var txt=$(this).parent().prev().prev().prev().prev().prev().text();
        $('#deptid2').val(txt);
        $('#delete').modal('show');
    });


    $(document).on('click','#delete1',function () {
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('admin/deleteNews/');?>",
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
