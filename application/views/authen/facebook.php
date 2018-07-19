<style type="text/css">
	.login-form {
		width: 385px;
		margin: 30px auto;
	}
    .login-form form {
    	margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .login-btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .input-group-addon .fa {
        font-size: 18px;
    }
    .login-btn {
        font-size: 15px;
        font-weight: bold;
    }
	.social-btn .btn {
		border: none;
        margin: 10px 3px 0;
        opacity: 1;
	}
    .social-btn .btn:hover {
        opacity: 0.9;
    }
	.social-btn .btn-primary {
        background: #507cc0;
    }
	.social-btn .btn-info {
		background: #64ccf1;
	}
	.social-btn .btn-danger {
		background: #df4930;
	}
    .or-seperator {
        margin-top: 20px;
        text-align: center;
        border-top: 1px solid #ccc;
    }
    .or-seperator i {
        padding: 0 10px;
        background: #f7f7f7;
        position: relative;
        top: -11px;
        z-index: 1;
    }
</style>



<div class="login-form">
    <?php
if (isset($error)) {
    echo '<div class="alert alert-danger" role="alert"> ' . $error . ' </div>';
} else {
    echo validation_errors('<div class="alert alert-danger" role="alert">', '</div>');
}

?>

    <? echo form_open('register/loginWithOwnApp'); ?>
        <h2 class="text-center">Sign in</h2>
        <div class="form-group">
        	<div class="input-group">
                <span class="input-group-addon" style="margin: auto;padding-right:5px;"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" name="username" placeholder="อีเมล์ของคุณ" required="required">
            </div>
        </div>
		<div class="form-group">
            <div class="input-group">
                <span class="input-group-addon" style="margin: auto;padding-right:5px;"><i class="fa fa-lock"></i></span>
                <input type="password" class="form-control" name="password" placeholder="รหัสผ่าน" required="required">
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary login-btn btn-block">เข้าสู่ระบบ</button>
        </div>
        <div class="clearfix">

            <a href="#" class="pull-right">ลืมรหัสผ่าน?</a>
        </div>
		<div class="or-seperator"><i>or</i></div>
        <p class="text-center">เข้าสู่ระบบด้วย facebook</p>
        <div class="text-center social-btn">

            

            <a href="<?= $facebook ?>" class="btn btn-primary btn-social btn-facebook"><span class="fa fa-facebook"></span>&nbsp; Facebook</a>
        </div>
    </form>
    <p class="text-center text-muted small"><a href="#">เข้าระบบไม่ได้ใช้ใหม สมัครสมาชิกด้านซ้ายเลยคะ</a></p>
</div>
