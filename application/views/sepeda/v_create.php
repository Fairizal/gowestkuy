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
    <!-- Basic -->
    <div class="block block-rounded">
        <div class="block-header">
            <h3 class="block-title"><?php echo $title ?></h3>
        </div>
        <div class="block-content block-content-full">
            <form action="be_forms_elements.html" method="POST" enctype="multipart/form-data" onsubmit="return false;">
                <div class="row push">
                    <div class="col-lg-12 col-xl-5">
                        <div class="form-group">
                            <label for="example-text-input">Nama</label>
                            <input type="text" class="form-control" id="nama" name="example-text-input" placeholder="Contoh : Polygon">
                        </div>
                        <div class="form-group">
                            <label for="val-select2">Tipe <span class="text-danger">*</span></label>
                            <select class="js-select2 form-control" id="type" name="type" style="width: 100%;" data-placeholder="Pilih Tipe">
                                <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                <option value="1">Fixie</option>
                                <option value="2">Gunung</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="val-select2">Merk <span class="text-danger">*</span></label>
                            <select class="js-select2 form-control" id="merk" name="merk" style="width: 100%;" data-placeholder="Pilih Merk">
                                <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                <option value="1">Fixie</option>
                                <option value="2">Gunung</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div>
                    <a href="<?= base_url('sepeda')?>" class="btn btn-alt-light">Kembali</a>
                    <a onclick="save()" class="btn btn-primary">Simpan</a>
                </div>
            </form>
        </div>
    </div>
    <!-- END Basic -->
</div>
<!-- END Page Content -->
<script type="text/javascript">
    function save() {
        var nama = $('#nama').val();
        var type = $('#type').select2('val');
        var merk = $('#merk').select2('val');
        // console.log([nama, type, merk]);
        $.ajax({
            method: "POST",
            url: "<?= base_url('sepeda/create') ?>",
            data: { 
                nama: nama, 
                type: type,
                merk: merk, 
            },
            dataType: 'json',
            // contentType: 'application/json',
            success: function(data) {
                console.log(data);
                jQuery('#toast-example-1').toast('show');
                window.location.href = "<?= base_url('sepeda/view/') ?>"+data.id;
            }
        });
    }
</script>