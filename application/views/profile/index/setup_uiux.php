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
            <form action="<?php echo site_url('profile/setup_uiux'); ?>" method="post" enctype="multipart/form-data" onsubmit="return confirm('Apakah anda yakin?')">
                <div class="form-group">
                    <label>Nama Tim <span class="text-danger">*</span></label>
                    <input <?php echo $locked ? 'readonly' : '' ?> type="text" class="form-control" name="team_name" placeholder="Nama Tim" value="<?php echo htmlspecialchars($identity['team_name']); ?>">
                </div>
                <div class="form-group">
                    <label>Asal Institusi <span class="text-danger">*</span></label>
                    <input <?php echo $locked ? 'readonly' : '' ?> type="text" class="form-control" name="institution" placeholder="Asal Institusi" value="<?php echo htmlspecialchars($identity['institution']); ?>">
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
                    <label>Email Ketua <span class="text-danger">*</span></label>
                    <input <?php echo $locked ? 'readonly' : '' ?> type="text" class="form-control" name="email" placeholder="Email Ketua" value="<?php echo htmlspecialchars($identity['email']); ?>">
                </div>
                <div class="form-group">
                    <label>Jumlah Anggota (Selain Ketua)</label>
                    <select <?php echo $locked ? 'readonly' : '' ?> class="form-control" id="members-count">
                        <?php for ($i = 0; $i <= 2; $i++): ?>
                            <option value="<?php echo $i; ?>" <?php echo $i == count($identity['members']) ? 'selected' : ''; ?>><?php echo $i; ?></option>
                        <?php endfor; ?>
                    </select>
                </div>
                <div class="form-group">
                    <ul class="list-group" id="members-list">
                        <li class="list-group-item">Daftar Anggota</li>
                        <?php foreach ($identity['members'] as $i => $member): ?>
                            <li class="list-group-item member-desc"><input <?php echo $locked ? 'readonly' : '' ?> type="text" class="form-control" name="members[]" placeholder="Anggota #<?php echo $i + 1; ?>" value="<?php echo htmlspecialchars($member); ?>"></li>
                        <?php endforeach; ?>
                    </ul>
                </div> 
                <div class="form-group">
                    <label>Pengumpulan hasil (kirimkan link google drive)</label>
                    <input <?php echo $locked ? 'readonly' : '' ?> type="text" class="form-control" name="hasil" placeholder="Pengumpulan hasil (kirimkan link google drive)" value="<?php echo htmlspecialchars($identity['hasil']); ?>">
                </div>
                <div class="form-group">
                    <label>Pengumpulan presentasi</label>
                    <input <?php echo $locked ? 'readonly' : '' ?> type="text" class="form-control" name="presentasi" placeholder="Pengumpulan presentasi" value="<?php echo htmlspecialchars($identity['presentasi']); ?>">
                </div>
                <div class="form-group">
                    <label>Kartu Tanda Mahasiswa (PDF) <span class="text-danger">*</span></label>
                    <div>
                        <span><b>Status:</b> <?php echo !empty($idcard_url) ? '<span class="badge badge-success">SUDAH DIUNGGAH</span>' : '<span class="badge badge-danger">BELUM DIUNGGAH</span>'; ?></span>
                        <?php if (!empty($idcard_url)): ?>
                            <span>- <a href="<?php echo $idcard_url; ?>">Unduh</a></span>
                        <?php endif; ?>
                    </div>
                    <?php if (!$locked): ?>
                        <input type="file" class="form-control-file" name="idcard" accept="application/pdf">
                    <?php endif; ?>
                    <small class="form-text text-muted">Unggah 1 file PDF yang berisi <b>kumpulan foto kartu tanda mahasiswa</b> dari semua anggota tim (maks <b>15MB</b>)</small>
                </div> 

                <div class="form-group">
                    <button <?php echo $locked ? 'disabled' : '' ?> type="submit" class="btn btn-success" name="submit" value="1"><span class="fa fa-sync mr-2"></span> Update</button>
                    <a class="btn btn-primary" href="https://chat.whatsapp.com/JVVoAbbnGUcKUb45ei8IhI" target="_blank"><span class="fa fa-user-plus mr-2"></span> Gabung Group Whatsapp</a>
                </div>
            </form>
        </div>
    </div>
</div>
<script>

function changeMembersCount(count) {
    var membersList = $('#members-list');
    var oldMembers = [];
    var newMembers = [];
    var i;

    membersList.find('.member-desc').each(function(i, e) {
        oldMembers.push($(e).find('input').val());
    });

    for (i = 0; i < Math.min(count, oldMembers.length); i++) {
        newMembers.push(oldMembers[i]);
    }

    membersList.find('.member-desc').remove();
    for (i = 0; i < count; i++) {
        var li = $(document.createElement('li'));
        li.addClass(['list-group-item', 'member-desc']);

        var input = $(document.createElement('input'));
        input.attr('type', 'text');
        input.addClass('form-control');
        input.attr('name', 'members[]');
        input.attr('placeholder', 'Anggota #' + (i + 1));
        <?php if ($locked): ?>
            input.attr('readonly', 'readonly');
        <?php endif; ?>
        input.val(newMembers[i]);
        input.appendTo(li);

        li.appendTo(membersList);
    }
}

$(document).ready(function() {
    changeMembersCount($('#members-count').val());
    $('#members-count').on('input', function(e) {
        changeMembersCount($(e.target).val());
    });
    $('#announcements').html(function(index, announcements) {
        return marked(announcements);
    });
});

</script>
