<div class="container">
	<h2>แสดงความคิดเห็น(<?=count($comment)?>)</h2>
            <hr/>
    <?php foreach ($comment as $key => $value) {?>
	<div class="row comment" style="margin-top:2px;">
		<div class="col-md-2">
			<img src="<?=base_url()?>assets/images/avatar.png" alt="" style="width:60px;height:60px;"> </br>
			<p>
				Danny Dee </br>
				เป็นสมาชิกเมื่อ: 10/10/2000 </br>

			</p>

		</div>
		<div class="col-md-10">
			<p>
				โพสต์เมื่อ : <?=$value->dateCreate?>
			</p>
			<p>
			<?=$value->postCommentText?>
			</p>
			<div style="margin-top:40px">
			<button class="btn btn-outline-danger" >
				<span class="fa fa-trash"></span> แจ้งลบ
			</button>
			</div>
		</div>

    </div>
    <?php }?>
</div>
<div class="container">
    <h2>เพิ่มแสดงความคิดเห็น *(โพสต์นี้เป็นแบบเปิด ไม่จำเป็นต้องเข้าสู่ระบบก่อน)</h2>
            <hr/>
    <textarea rows="3" class="form-control" placeholder="Message"></textarea>
    <button class="btn btn-primary" style="margin-top:10px;">
        <span class="fa fa-plus"></span>
        เพิ่มแสดงความคิดเห็น
    </button>
</div>

