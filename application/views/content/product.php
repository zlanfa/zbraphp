<div class="container">
	<h2>สินค้า</h2>
            <hr/>
	<div class="col-md-6">
		<div class="row">
			<img src="<?=base_url();?>assets/goods/1/shoes.png" alt="">
		</div>
		<div class="row">

			<img src="<?=base_url();?>assets/goods/1/shoes.png" alt="" class="image-thumb" >

			<img src="<?=base_url();?>assets/goods/1/shoes.png" alt="" class="image-thumb">

			<img src="<?=base_url();?>assets/goods/1/shoes.png" alt="" class="image-thumb">

			<img src="<?=base_url();?>assets/goods/1/shoes.png" alt="" class="image-thumb">

		</div>

	</div>
	<div class="col-md-6">
		<div class="row">
			<h2><?=$posts[0]->postHeader;?></h2>
			<hr/>
			<div>
				<?=$posts[0]->postBody;?>
			</div>
			<div>
				<h5><strong>สภาพปัจจุบัน : <?=$posts[0]->postCondition;?> %</strong></h5>
			</div>
			<div>
				<h5><strong>ประกันถึง <?=$posts[0]->postWarrantee;?></strong></h5>
			</div>
			<div>
				<h3><strong style="color:#26B99A">ราคา <?=$posts[0]->postPrice?> บาท</strong></h3>
			</div>
			<div>
				<button class="btn btn-success" onclick="addWatchlist(' . $item->postID . ',this)" >
                    <span class="glyphicon glyphicon-copy"></span> เก็บไว้
                </button>
                <button class="btn btn-warning">
                	<span class="glyphicon glyphicon-phone"></span> แซทกับผู้ขาย
                </button>
			</div>
			<div style="margin-top:20px;">
				share :
				<a class="btn btn-default btn-social-icon btn-facebook">
					<span class="fa fa-facebook"></span>
				</a>
				<a class="btn btn-default btn-social-icon btn-twitter">
					<span class="fa fa-twitter"></span>
				</a>
			</div>
		</div>
	</div>
</div>








