<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <?php if (session()->getFlashData('pesan')) : ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <?php echo session()->getFlashData('pesan'); ?> <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Penggunaan Ruang / Fasilitas</h4>
                        <p class="card-category">Form untuk mengelola penggunaan ruang atau fasilitas</p>
                    </div>
                    <div class="card-body">
                        <form action="/kelola/ruangbaru" method="POST">
                            <?php
                            if ($idref != '') {
                                $condition = 'disabled';
                                $condition2 = 'hidden';
                                $id = $ruang['id'];
                                $nama = $ruang['nama'];
                                $nimnip = $ruang['nimnip'];
                                $tujuan = $ruang['tujuan'];
                                $pic = $ruang['pic'];
                                $tanggalp = $ruang['tanggalp'];
                                $waktum = $ruang['waktum'];
                                $waktus = $ruang['waktus'];
                            } else {
                                $condition = '';
                                $condition2 = '';
                                $id = '';
                                $nama = '';
                                $nimnip = '';
                                $tujuan = '';
                                $pic = $curuser['email'];
                                $tanggalp = '';
                                $waktum = '';
                                $waktus = '';
                            } ?>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">ID (Otomatis)</label>
                                        <input type="text" class="form-control" value="<?php echo $id ?>" disabled>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Nama Lengkap</label>
                                        <input type="text" class="form-control" name="nama" value="<?php echo $nama ?>" <?php echo $condition ?> autofocus>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">NIM / NIP</label>
                                        <input type="text" class="form-control" name="nimnip" value="<?php echo $nimnip ?>" <?php echo $condition ?>>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Tujuan</label>
                                        <input type="text" class="form-control" name="tujuan" value="<?php echo $tujuan ?>" <?php echo $condition ?>>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">PIC Studio</label>
                                        <input type="text" class="form-control" name="pic" value="<?php echo $pic; ?>" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <p>Tanggal Penggunaan</p>
                                        <input type="date" class="form-control" name="tanggalp" value="<?php echo $tanggalp ?>" <?php echo $condition ?>>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <p>Waktu Mulai</p>
                                        <input type="time" class="form-control" name="waktum" value="<?php echo $waktum ?>" <?php echo $condition ?>>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <p>Waktu Selesai</p>
                                        <input type="time" class="form-control" name="waktus" value="<?php echo $waktus ?>" <?php echo $condition ?>>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary pull-right" <?php echo $condition2 ?>>Kirim Formulir</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>