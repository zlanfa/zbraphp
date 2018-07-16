
<div class="row" style="background-color: #f5f5f5;">
    <div class="col-sm-6">
        <ul class="nav">
            <li><a href="<?=base_url()?>index.php/home">หน้าแรก</a></li>
            <li><a href="<?=base_url()?>index.php/blog">หน้าบล๊อก</a></li>
            <li><a href="<?=base_url()?>index.php/faq">คำถามถามบ่อย</a></li>
            <li><a href="<?=base_url()?>index.php/contact">ติดต่อ admin</a></li>
        </ul>
    </div>
    <div class="col-sm-6">
        <ul class="nav" style="float:right;">
            <li><a href="<?=base_url()?>index.php/register">เข้าสู่ระบบ / สมัครสมาชิก(ขายฟรี)</a></li>
            <?php if (isset($jwt)) {?>
            <li><a href="<?=base_url()?>index.php/backend">หน้าจัดการขาย</a></li>
            <li>
                <a href="#" onclick="showLogout()" class="dropdown-toggle"  data-toggle="dropdown" >
                    <img id="facebookProfileImage" src="" alt="" style="width:30px;height:30px;">
                </a>
            </li>
            <li>
                <a style="display:none" id="logout" href="#" onclick="logout()">logout</a>
            </li>
            <?php }?>
        </ul>
    </div>
</div>

<script>

    function showLogout(){
        $('#logout').show();
    }

    function logout(){
        window.location = '<?=base_url() . index_page()?>/register/logout';
    }
</script>