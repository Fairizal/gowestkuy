<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2 text-center text-sm-left">
            <div class="flex-sm-fill">
                <h1 class="h3 font-w700 mb-2">
                    <?php echo $title ?>
                </h1>
            </div>
        </div>
    </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
    <!-- Dynamic Table Simple -->
    <div class="block block-rounded">
        <div class="block-header">
            <h3 class="block-title">Filter <?php echo $title ?></h3>
        </div>
        <div class="block-content block-content-full">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-4 col-form-label">Periode</label>
                        <div class="col-sm-8">
                            <div class="input-daterange input-group" data-date-format="yyyy-mm-dd" data-week-start="1" data-autoclose="true" data-today-highlight="true">
                                <input type="text" class="form-control" id="startdate" name="startdate" placeholder="From" data-week-start="1" data-autoclose="true" data-today-highlight="true">
                                <div class="input-group-prepend input-group-append">
                                    <span class="input-group-text font-w600">
                                        <i class="fa fa-fw fa-arrow-right"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" id="enddate" name="enddate" placeholder="To" data-week-start="1" data-autoclose="true" data-today-highlight="true">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <center>
                <button onclick="$.fn.search()" class="btn btn-primary" id="save">Cari</button>
            </center>
        </div>
    </div>
    <div class="block block-rounded">
        <div class="block-header">
            <h3 class="block-title">Daftar <?php echo $title ?></h3>
        </div>
        <div class="block-content block-content-full">
            <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 80px;">No</th>
                        <th>No. Transaksi</th>
                        <th>Tgl. Kembali</th>
                        <th>Lama Telat</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $idx = 1;
                        foreach ($dataBack as $back) {
                    ?>
                        <tr>
                            <td class="text-center font-size-sm"><?php echo $idx ?></td>
                            <td class="font-w400 font-size-sm"><?php echo $back->trxno ?></td>
                            <td class="font-w400 font-size-sm"><?php echo $back->tgl_kembali ?></td>
                            <td class="font-w400 font-size-sm"><?php echo $back->backdays ?></td>
                        </tr>
                    <?php
                        $idx++;
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- END Dynamic Table Simple -->
</div>
<!-- END Page Content -->
<script type="text/javascript">
    $(document).ready(function() {
        var param = window.location.search.substring(1);
        if (param != "") {
            var dataparam = param.split('&');
            var startdate = dataparam[0].substring(10);
            var enddate = dataparam[1].substring(8);
            $('#startdate').val(startdate);
            $('#enddate').val(enddate);
        } else {
            $('#startdate').val(moment().add(-30, 'days').format('YYYY-MM-DD'));
            $('#enddate').val(moment().format('YYYY-MM-DD'));
        }

    });

    $.fn.delete = function(id) {
        $.ajax({
            method: "POST",
            url: "<?= base_url('back/delete/') ?>"+id,
            dataType: 'json',
            // contentType: 'application/json',
            success: function(data) {
                if(data.status == true) {
                    $('#toastTitle').text('Berhasil');
                    $('#toastText').text(data.msg);
                    jQuery('#toast-example-1').toast('show');
                    window.location.href = "<?= base_url('back') ?>";
                } else {
                    $('#toastTitle').text('Gagal');
                    $('#toastText').text(data.msg);
                    jQuery('#toast-example-1').toast('show');
                }
            }
        });
    }

    $.fn.search = function() {
        var startdate = $('#startdate').val();
        var enddate = $('#enddate').val();
        window.location.href = "<?= base_url('backreport?') ?>" + "startdate=" + startdate + "&enddate=" + enddate;
    }
</script>