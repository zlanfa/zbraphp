<style>
.stepwizard-step p {
    margin-top: 0px;
    color:#666;
}
.stepwizard-row {
    display: table-row;
}
.stepwizard {
    display: table;
    width: 100%;
    position: relative;
}
.stepwizard-step button[disabled] {
    /*opacity: 1 !important;
    filter: alpha(opacity=100) !important;*/
}
.stepwizard .btn.disabled, .stepwizard .btn[disabled], .stepwizard fieldset[disabled] .btn {
    opacity:1 !important;
    color:#bbb;
}
.stepwizard-row:before {
    top: 14px;
    bottom: 0;
    position: absolute;
    content:" ";
    width: 100%;
    height: 1px;
    background-color: #ccc;
    z-index: 0;
}
.stepwizard-step {
    display: table-cell;
    text-align: center;
    position: relative;
}
.btn-circle {
    width: 30px;
    height: 30px;
    text-align: center;
    padding: 6px 0;
    font-size: 12px;
    line-height: 1.428571429;
    border-radius: 15px;
}
</style>


<div class="container">
    <div class="stepwizard">
        <div class="stepwizard-row setup-panel">
            <div class="stepwizard-step col-xs-3">
                <button type="button" class="btn btn-info btn-circle"><i class="fa fa-list"></i></button>
                <p><small>ข้อมูลส่วนตัว</small></p>
            </div>
            <div class="stepwizard-step col-xs-3">
                <button type="button" class="btn btn-secondary btn-circle"><i class="fa fa-list"></i></button>
                <p><small>ข้อมูลติดต่อ</small></p>
            </div>
            <div class="stepwizard-step col-xs-3">
                <button type="button" class="btn btn-warning btn-circle"><i class="fa fa-unlock"></i></button>
                <p><small>สินค้าที่สนใจ</small></p>
            </div>
            <div class="stepwizard-step col-xs-3">
                <button type="button" class="btn btn-success btn-circle"><i class="fa fa-coffee "></i></button>
                <p><small>ยืนยัน</small></p>
            </div>
        </div>
    </div>
    <div class="row">
    <div class="col-6 m-0">
    <form role="form">
        <div class="panel panel-primary setup-content" id="step-1">
            <div class="panel-heading">
                 <h2 class="panel-title">ข้อมูลส่วนตัว</h2>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="control-label">Email</label>
                    <input maxlength="100" type="text" required="required" class="form-control" placeholder="กรอก อีเมล์" />
                </div>
                <div class="form-group">
                    <label class="control-label">Password</label>
                    <input maxlength="100" type="text" required="required" class="form-control" placeholder="กรอก พาสเวอส" />
                </div>
                <div class="form-group">
                    <label class="control-label">ชื่อ สกุล</label>
                    <input maxlength="100" type="text" required="required" class="form-control" placeholder="กรอก ชื่อ สกุล" />
                </div>
                <button class="btn btn-primary nextBtn pull-right" onclick="showStep2()" type="button">Next</button>
            </div>
        </div>
        <div class="panel panel-primary setup-content hidden" id="step-2">
            <div class="panel-heading">
                 <h2 class="panel-title">ข้อมูลติดต่อ</h2>
            </div>
            <div class="panel-body">
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
                <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
            </div>
        </div>
        <div class="panel panel-primary setup-content" id="step-3">
            <div class="panel-heading">
                 <h2 class="panel-title">สินค้าที่สนใจ</h2>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <div class="checkbox">
                        <label><input type="checkbox" value="">มือถือ</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" value="">คอมพิวเตอร์</label>
                    </div>
                    <div class="checkbox disabled">
                        <label><input type="checkbox" value="">รถยนต์</label>
                    </div>
                </div>
                <button class="btn btn-primary nextBtn pull-right" onclick="showStep2()" type="button">Finish</button>
            </div>
        </div>
    </form>
    </div>
    <div class="col-6 m-0">
        <h2>Social Register</h2>
        <?php $this->load->view('authen/facebook');?>

    </div>
    </div>
</div>


<script>

    function showStep2() {
        //hide step another
        $('#step-1').hide();
        $('#step-3').hide();
        $('#step-4').hide();
        //show
        $('#step-2').hide();
    }

</script>
