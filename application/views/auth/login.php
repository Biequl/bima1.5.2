<?php
function isMobile() {
    $userAgent = $_SERVER['HTTP_USER_AGENT'];
    $isMobile = preg_match('/Mobile|Android|BlackBerry|iPhone|Windows Phone/i', $userAgent);
    $isExambrowser = preg_match('/ExamBrowser|Exambro/i', $userAgent); // Tambahkan pengecekan user-agent Exambro

    // Jika perangkat mobile dan bukan ExamBrowser
    if ($isMobile && !$isExambrowser) {
        return true;
    }

    return false;
}

if (isMobile()) {
    echo '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mobile Access Restricted</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
        <div class="modal fade" id="mobileModal" tabindex="-1" role="dialog" aria-labelledby="mobileModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="mobileModalLabel">Akses Ditolak</h5>
                    </div>
                    <div class="modal-body">
                        <p>Akses dari perangkat mobile tidak diizinkan. Silakan gunakan laptop atau perangkat lain untuk mengakses halaman ini.</p>
                    </div>
                    <div class="modal-footer">
                        <a href="uploads/import/cbtexambro.apk" download>
                            <button type="button" class="btn btn-primary">Download APK Ujian</button>
                        </a>
                        <button type="button" class="btn btn-secondary" onclick="closeWindow()">Tutup</button>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function() {
                $("#mobileModal").modal("show");
            });

            function closeWindow() {
                window.close();
            }
        </script>
    </body>
    </html>';
    exit;
}
?>

<div class="container">
    <div class="info-box bg-transparent shadow-none">
        <?php
        $logo_app = $setting->logo_kanan == null ? base_url() . 'assets/img/favicon.png' : base_url() . $setting->logo_kanan;
        ?>
    </div>
    <div class="container-fluid h-100">
        <div class="row h-100 justify-content-center">
            <div class="login-box">
					
					<div class="card form-signin">
						<div class="login-logo text-white" style="text-shadow: 1px 1px 2px #000000">
						<br>
						<img src="<?= $logo_app ?>" width="80" height="80"> 
						<p><b><?= $setting->sekolah ?></b></p>
					</div>
                    <div class="card-body">
                        <p class="login-box-msg">Silahkan Masukan User dan Pasword yang dimiliki</p>
                        <div id="infoMessage"><?php echo $message; ?></div>

                        <?= form_open("auth/cek_login", array('id' => 'login')); ?>
                        <div class="input-group mb-3 has-feedback">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                            <?= form_input($identity, '', 'required'); ?>
                            <div class="help-block"></div>
                        </div>
                        <div class="input-group mb-3 has-feedback">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                            <?= form_input($password, '', 'required'); ?>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span id="toggle-password" class="fas fa-eye-slash" style="cursor: pointer"></span>
                                </div>
                            </div>
                            <div class="help-block"></div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <!--
								<div class="icheck-primary">
									<?= form_checkbox('remember', '', FALSE, 'id="remember"'); ?>
									<label for="remember">
										Remember Me
									</label>
								</div>
								-->
                            </div>
                            <!-- /.col -->
                            <div class="col-4">
                                <?= form_submit('submit', lang('login_submit_btn'), array('id' => 'submit', 'class' => 'btn btn-primary btn-block btn-flat')); ?>
                            </div>
                            <!-- /.col -->
                        </div>
                        <?= form_close(); ?>
                        <!--
				<a href="<?= base_url() ?>auth/forgot_password" class="text-center"><?= lang('login_forgot_password'); ?></a>
				-->
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script src="<?= base_url() ?>/assets/app/js/jquery.backstretch.js"></script>
<script type="text/javascript">
    let base_url = '<?=base_url();?>';
    var img = ["wall1.jpg", "wall2.jpg", "wall3.jpg", "wall4.jpg"];

    $.backstretch([
        base_url + 'assets/img/' + img[0],
        base_url + 'assets/img/' + img[1],
        base_url + 'assets/img/' + img[2],
        base_url + 'assets/img/' + img[3]
    ], {
        fade: 1000,
        duration: 10000
    });
</script>
<script src="<?= base_url() ?>/assets/app/js/auth/login.js"></script>
