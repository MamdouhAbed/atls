

<div class="robust-content content container-fluid">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="breadcrumb-wrapper col-xs-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>admin/index">الرئيسية</a>
                    </li>
                    <li class="breadcrumb-item active">قائمة الملفات
                    </li>
                </ol>
            </div>

            <div class="content-header-lead col-xs-12 mt-1">

            </div>
        </div>
        <div class="content-body">
            <!-- Responsive integration table -->
            <section id="responsive">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"><i class="icon-tag"></i> قائمة الملفات</h4>
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
                                <div class="card-block card-dashboard">
                                    <div class="buttons-group ">
                                        <a href="addFile" class="btn btn-info float-md-right"><i class="icon-plus4"></i> رفع ملف</a>
                                    </div>

                                    <table class="table table-striped table-bordered dataex-fixh-responsive">
                                        <thead>
                                        <th>رقم الملف</th>
                                        <th>اسم الملف</th>
                                        <th>رابط الملف</th>
                                        <th>التاريخ والوقت</th>
                                        <th>العمليات</th>

                                        </thead>
                                        <tbody>
                                        <?php
                                        foreach ($UploadFiles as $uploadfiles)
                                        {?>
                                            <tr>
                                                <td><?php  echo $uploadfiles->id ?></td>
                                                <td><?php  echo $uploadfiles->file_name ?></td>
                                                <td><?php echo base_url();?><?php  echo $uploadfiles->file_link ?></td>
                                                <td><?php echo ArabicDate($uploadfiles->created_at); ?></td>

                                                <td>
                                                    <a class="btnupdate"><i class="fa fa-pencil info" title="Edit" style="font-size: 20px;"></i></a>
                                                    <a class="btndelete" onclick="delet(<?php  echo $uploadfiles->id ?>)"><i class="fa fa-trash danger" title="Delete" style="font-size: 20px; margin-right: 10px;"></i></a>
                                                    <button  name="" class="btn btn-success btncopy"> نسخ الرابط <i class="fa fa-copy position-right"></i></button>

                                                </td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>رقم الملف</th>
                                            <th>اسم الملف</th>
                                            <th>رابط الملف</th>
                                            <th>التاريخ والوقت</th>
                                            <th>العمليات</th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Responsive integration table -->
        </div>

        <!-- Modal -->
        <div class="modal fade text-xs-left" id="update" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel1">تعديل اسم الملف</h4>
                    </div>
                    <form action="<?php echo base_url().'admin/updateFile'?>" method="Post" id="form-update" >
                        <div class="modal-body">
                            <div class="row">
                                <label class="col-md-3 text-xs-right control-label">اسم الملف : </label>
                                <div class="col-sm-7">

                                    <input type="hidden" class="form-control" name="deptid" placeholder="" id="deptid"  >
                                    <input type="text" class="form-control" name="deptname" placeholder="" id="deptname"  >
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="modal-footer">
                        <button type="button" id="save" class="btn btn-primary">حفظ التغييرات</button>
                        <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">إغلاق</button>

                    </div>
                </div>
            </div>
        </div><!--End Modal -->

        <div class="modal fade text-xs-left" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel1"> حذف ملف </h4>
                    </div>
                    <form  id="form-delete" >
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-2">
                                    <i class="fa  fa-warning danger " style="font-size: 30px; margin-right: 50px;"></i>
                                </div>
                                <input type="hidden" class="form-control" name="deptid" placeholder="" id="deptid2"  >
                                <div class="form-group" >
                                    <h5 class="col-md-8  control-label" >هل تريد حذف هذا الملف؟! </h5>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" type="text/javascript"></script>


<script>
    $('.btnupdate').on('click',function (e) {
        // alert(1);
        e.preventDefault();
        var txt=$(this).parent().prev().prev().prev();
        $('#deptname').val(txt.text());
        $('#deptid').val(txt.prev().text());
        $('#update').modal('show');
    });

   /* $('.btndelete').on('click',function (e) {
        // alert(1);
        e.preventDefault();
        var txt=$(this).parent().prev().prev().prev();
        $('#deptid2').val(txt.prev().text());
        $('#delete').modal('show');
    });
*/
    function delet(id) {
        $('#deptid2').val(id);
        $('#delete').modal('show');
    }

    $('.btncopy').on('click',function (e) {

        e.preventDefault();
        var txt=$(this).parent().prev().prev();
        copyToClipboard(txt);

    });

    $(document).on('click','#save',function () {
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('admin/updateFile/');?>",
            data: {'textbox': $("#deptname").val(),
                'deptID':$('#deptid').val()},
            dataType: "text",
            cache:false,
            success:
                function(data){
                    $('#update').modal('hide');
                    window.location.reload();
                }


        });// you have missed this bracket
    });

    $(document).on('click','#delete1',function () {
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('admin/deleteFile/');?>",
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

    function copyToClipboard(element) {

        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($(element).text()).select();
        document.execCommand("copy");
        $temp.remove();
    }

</script>

