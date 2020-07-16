<style>
    .slash:last-child{
        display: none;
    }
</style>
<div class="robust-content content container-fluid">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="breadcrumb-wrapper col-xs-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>admin/index">الرئيسية</a>
                    </li>
                    <li class="breadcrumb-item active">قائمة الكتب
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
                                <h4 class="card-title"><i class="icon-tag"></i> قائمة الكتب</h4>
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
                                        <a href="addBooks" class="btn btn-info float-md-right"><i class="icon-plus4"></i> إضافة كتاب</a>
                                    </div>

                                    <table class="table table-striped table-bordered dataex-fixh-responsive">
                                        <thead>
                                        <th>رقم الكتاب</th>
                                        <th>اسم الكتاب</th>
                                        <th>تاريخ الإصدار</th>
                                        <th>الكاتب</th>
                                        <th>التاريخ والوقت</th>
                                        <th>العمليات</th>

                                        </thead>
                                        <tbody>
                                        <?php
                                        foreach ($Books as $books)
                                        {?>
                                            <tr>
                                                <td><?php  echo $books->id ?></td>
                                                <td><?php  echo $books->title ?></td>
                                                <td><?php  echo $books->date_book ?></td>
                                                <td>
                                                    <?php
                                                    foreach (get_Authors_books($books->id) as $authors) {?>
                                                    <?php  echo $authors->name_author ?>
                                                        <i class="slash">/</i>
                                                    <?php }?>
                                                </td>
                                                <td><?php echo ArabicDate($books->created_at); ?></td>

                                                <td>
                                                    <a  href="<?php echo base_url().'admin/updateBooks/'.$books->id?>"><i class="fa fa-pencil info" title="Edit" style="font-size: 20px;"></i></a>
                                                    <a class="btndelete"><i class="fa fa-trash danger" title="Delete" style="font-size: 20px; margin-right: 10px;"></i></a>
                                                    <!--                                        <a><i class="fa fa-eye orange" title="View" style="font-size: 20px; margin-right: 10px;"></i></a>-->
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>رقم الكتاب</th>
                                            <th>اسم الكتاب</th>
                                            <th>تاريخ الإصدار</th>
                                            <th>الكاتب</th>
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

        <div class="modal fade text-xs-left" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel1"> حذف كتاب </h4>
                    </div>
                    <form  id="form-delete" >
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-2">
                                    <i class="fa  fa-warning danger " style="font-size: 30px; margin-right: 50px;"></i>
                                </div>
                                <input type="hidden" class="form-control" name="deptid" placeholder="" id="deptid2"  >
                                <div class="form-group" >
                                    <h5 class="col-md-8  control-label" >هل تريد حذف هذا الكتاب؟! </h5>
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


    $('.btndelete').on('click',function (e) {
        // alert(1);
        e.preventDefault();
        var txt=$(this).parent().prev().prev().prev().prev();
        $('#deptid2').val(txt.prev().text());
        $('#delete').modal('show');
    });


    $(document).on('click','#delete1',function () {
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('admin/deleteBooks/');?>",
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

