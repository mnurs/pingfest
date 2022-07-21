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
            <form action="<?php echo site_url('profile/setup_esport'); ?>" method="post" enctype="multipart/form-data" onsubmit="return confirm('Apakah anda yakin?')">
                <div class="form-group">
                    <label>Nama Tim <span class="text-danger">*</span></label>
                    <input <?php echo $locked ? 'readonly' : '' ?> type="text" class="form-control" name="team_name" placeholder="Nama Tim" value="<?php echo htmlspecialchars($identity['team_name']); ?>">
                </div>
                <div class="form-group">
                    <label>Asal Sekolah <span class="text-danger">*</span></label>
                    <input <?php echo $locked ? 'readonly' : '' ?> type="text" class="form-control" name="institution" placeholder="Asal Sekolah" value="<?php echo htmlspecialchars($identity['institution']); ?>">
                </div>
                <div class="form-group">
                    <label>Nama Ketua <span class="text-danger">*</span></label>
                    <input <?php echo $locked ? 'readonly' : '' ?> type="text" class="form-control" name="leader" placeholder="Nama Ketua" value="<?php echo htmlspecialchars($identity['leader']); ?>">
                </div>
                <div class="form-group">
                    <label>No. Telp. Ketua <span class="text-danger">*</span></label>
                    <input <?php echo $locked ? 'readonly' : '' ?> type="text" class="form-control" name="phone" placeholder="No. Telp. Ketua" value="<?php echo htmlspecialchars($identity['phone']); ?>">
                </div>   
                <div class="form-group">
                    <ul class="list-group" id="members-list">
                        <li class="list-group-item">Daftar Anggota (Selain Ketua)</li>
                        <?php for ($i = 0; $i <= 4; $i++): ?>
                             <li class="list-group-item member-desc"><input <?php echo $locked ? 'readonly' : '' ?> type="text" class="form-control" name="member[]" placeholder="Anggota #<?php echo $i + 1; ?>" value="<?php if(isset($identity['member'][$i])) echo htmlspecialchars($identity['member'][$i]); ?>"></li>
                        <?php endfor; ?> 
                    </ul>
                </div>
                <div class="form-group">
                    <ul class="list-group" id="account_nickname-list">
                        <li class="list-group-item">Daftar Nickname Anggota</li>
                        <?php for ($j = 0; $j <= 5; $j++): ?>
                            <li class="list-group-item account_nickname-desc"><input <?php echo $locked ? 'readonly' : '' ?> type="text" class="form-control" name="account_nickname[]" placeholder="Nickname Anggota #<?php echo $j + 1; ?>" value="<?php if(isset($identity['account_nickname'][$j])) echo htmlspecialchars($identity['account_nickname'][$j]); ?>"></li>
                        <?php endfor; ?> 
                    </ul>
                </div>
                <div class="form-group">
                    <ul class="list-group" id="account_id-list">
                        <li class="list-group-item">Daftar ID Anggota</li>
                        <?php for ($k = 0; $k <= 5; $k++): ?>
                            <li class="list-group-item account_id-desc"><input <?php echo $locked ? 'readonly' : '' ?> type="text" class="form-control" name="account_id[]" placeholder="ID Anggota #<?php echo $k + 1; ?>" value="<?php if(isset($identity['account_id'][$k]))  echo htmlspecialchars($identity['account_id'][$k]); ?>"></li>
                        <?php endfor; ?> 
                    </ul>
                </div>
                <div class="form-group">
                    <label>Kartu Tanda Pelajar (PDF) <span class="text-danger">*</span></label>
                    <div>
                        <span><b>Status:</b> <?php echo !empty($idcard_url) ? '<span class="badge badge-success">SUDAH DIUNGGAH</span>' : '<span class="badge badge-danger">BELUM DIUNGGAH</span>'; ?></span>
                        <?php if (!empty($idcard_url)): ?>
                            <span>- <a href="<?php echo $idcard_url; ?>">Unduh</a></span>
                        <?php endif; ?>
                    </div>
                    <?php if (!$locked): ?>
                        <input type="file" class="form-control-file" name="idcard" accept="application/pdf">
                    <?php endif; ?>
                    <small class="form-text text-muted">Unggah 1 file PDF yang berisi <b>6 foto kartu tanda pelajar</b> dari semua anggota tim (maks <b>15MB</b>)</small>
                </div>
                <div class="form-group">
                    <button <?php echo $locked ? 'disabled' : '' ?> type="submit" class="btn btn-success" name="submit" value="1"><span class="fa fa-sync mr-2"></span> Update</button>
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
});
</script>
