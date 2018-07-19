<div class="container">
    <div class="col-md-6">

        <div class="row">
            <h2>สมัครสมาชิก</h2>
            <hr/>
            <div class="form-group">
                <label for="email" >อีเมล์</label>
                <input type="email" class="form-control" id="email" placeholder="Email@email.com" >
            </div>
            <div class="form-group">
                <label for="password" >รหัสผ่าน</label>
                <input type="password" class="form-control" id="password" placeholder="รหัสผ่าน" >
            </div>
            <div class="form-group">
                <label for="fullname" >ชื่อสกุล</label>
                <input type="text" class="form-control" id="fullname" placeholder="ชื่อ สกุล" >
            </div>
            <div class="form-group">
                <label class="control-label">จังหวัด(มีผลกับการขาย ทำให้หาสินค้าง่ายขึ้น)</label>
                <input maxlength="100" list="provinces" name="province" type="text" required="required" class="form-control" placeholder="กรอก จังหวัด" />
                <datalist id="provinces">
                        <option value="Internet Explorer">
                        <option value="Firefox">
                        <option value="Chrome">
                        <option value="Opera">
                        <option value="Safari">
                </datalist>
            </div>
            <div class="form-group">
                    <label class="control-label">ที่อยู่</label>
                    <textarea class="form-control" rows="5" id="comment"></textarea>
            </div>
            <div class="form-group">
                    <label class="control-label">ไอดี facebook</label>
                    <input maxlength="100" type="text" required="required" class="form-control" placeholder="กรอก ไอดี facebook" />
            </div>
            <div class="form-group">
                    <label class="control-label">ไอดี line</label>
                    <input maxlength="100" type="text" required="required" class="form-control" placeholder="กรอก ไอดี line" />
            </div>
            <button class="btn btn-primary nextBtn pull-right"  type="submit">สมัครเลย</button>
        </div>
    </div>
    <div class="col-md-6">
        <h2>เข้าสู่ระบบ</h2>
        <hr/>
        <?php
            $data['facebook'] = $facebook;
            $this->load->view('authen/facebook',$data,false);
        ?>
    </div>
</div>



