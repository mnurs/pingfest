<script src="<?php echo base_url('public/marked/js/marked.min.js'); ?>"></script>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="alert alert-info">
                <h5>Pengumuman</h5>
                <hr>
                <div id="announcements"><?php echo htmlspecialchars($announcements); ?></div>
            </div>
        </div>
        <?php if ($locked): ?>
            <div class="col-12">
                <div class="alert alert-danger"><span class="fa fa-exclamation-circle"></span> Pengisian data sudah ditutup</div>
            </div>
        <?php else: ?>
            <div class="col-12">
                <div class="alert alert-success"><span class="fa fa-exclamation-circle"></span> Pengisian data masih dibuka</div>
            </div>
        <?php endif; ?>
        <div class="col-12" style="padding-bottom: 3rem">
            <form action="<?php echo site_url('profile/setup_semnas'); ?>" method="post" onsubmit="return confirm('Apakah anda yakin?')">
                <div class="form-group">
                    <label>Asal Institusi</label>
                    <input type="text" class="form-control" name="institution" placeholder="Asal Institusi" value="<?php echo htmlspecialchars($identity['institution']); ?>">
                </div>
                <div class="form-group">
                    <label>Sumber Informasi</label>
                    <select class="form-control" name="informasi" id="informasi">
                        <option value="Instagram" <?php if(isset($identity['informasi']))  if($identity['informasi'] == "Instagram") echo "selected"   ?>>Instagram</option>
                        <option value="Website" <?php if(isset($identity['informasi']))  if($identity['informasi'] == "Website") echo "selected"   ?>>Website</option>
                        <option value="Twitter" <?php if(isset($identity['informasi']))  if($identity['informasi'] == "Twitter") echo "selected"  ?>>Twitter</option>
                        <option value="Publikasi Sekolah" <?php if(isset($identity['informasi']))  if($identity['informasi'] == "Publikasi Sekolah") echo "selected"  ?>>Publikasi Sekolah</option>
                        <option value="Lainnya" <?php if(isset($identity['informasi']))  if($identity['informasi'] == "Lainnya") echo "selected"  ?>>Lainnya</option> 
                    </select>
                    <br>
                    <input type="text" class="form-control" name="informasi_lain" placeholder="Silahkan isi sumber informasi" value="<?php echo htmlspecialchars($identity['informasi_lain']); ?>" id="informasi_lain" style="display: none;">
                </div>
                <div class="form-group">
                    <button <?php echo $locked ? 'disabled' : '' ?> type="submit" class="btn btn-success" name="submit" value="1"><span class="fa fa-sync mr-2"></span> Update</button>
                    <a href="<?php echo site_url('semnas/tiket'); ?>" target="_blank" class="btn btn-primary"><span class="fa fa-eye mr-2"></span> Lihat Tiket</a>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
$(document).ready(function() {
    $('#announcements').html(function(index, announcements) {
        return marked(announcements);
    });
    $('#informasi').on('change', function() {
       if($('#informasi').find(":selected").text() == "Lainnya"){
            $('#informasi_lain').show()
        }else{
            $('#informasi_lain').hide()
        }
    }); 

    if($('#informasi').find(":selected").text() == "Lainnya"){
        $('#informasi_lain').show()
    }else{
        $('#informasi_lain').hide()
    }
});
</script>
