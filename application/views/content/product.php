<div class="container">
	<div class="row">
		<div class="col-sm-5">
			<div style="background-color:#CCC;width:100%;height:325px;">
				<img src="<?=base_url();?>assets/goods/1/<?=$postImage[0]->postLink?>" class="w-100 h-100" alt="">
			</div>
			<div class="single-product-gallery-thumbs gallery-thumbs mt-2">
				<div id="owl-single-product-thumbnails" style="opacity: 1; display: block;" class="owl-carousel owl-theme">
					<div class="owl-wrapper-outer">
						<div class="owl-wrapper" style="width: 1296px; left: 0px; display: block; transition: all 0ms ease 0s; transform: translate3d(0px, 0px, 0px);">
<?php
for ($i = 1; $i < count($postImage); $i++) {
    echo '<div class="owl-item" style="width: 72px;"> ' .
        ' <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="0" href="#slide1"> ';
    if ($postImage[$i]->postLink != '') {
        echo '	<img alt="" src="' . base_url() . 'assets/goods/1/' . $postImage[$i]->postLink . '" width="67" height="67"> ';
    } else {
        echo '	<img alt="" src="<?=base_url();?>assets/images/products/gallery-thumb-01.jpg" width="67" height="67"> ';
    }

    echo ' </a> ' .
        ' </div> ';
}
?>


						</div>
					</div>
				</div>
				<!-- /#owl-single-product-thumbnails -->


			</div>

		</div>
		<div class="col-sm-7">
			<div class="star-holder inline">
				<div class="star" data-score="4" style="cursor: pointer; width: 80px;">
					<img src="<?=base_url();?>assets/images/star-on.png" alt="1" title="bad">
					<img src="<?=base_url();?>assets/images/star-on.png" alt="2" title="poor">
					<img src="<?=base_url();?>assets/images/star-on.png" alt="3" title="regular">
					<img src="<?=base_url();?>assets/images/star-on.png" alt="4" title="good">
					<img src="<?=base_url();?>assets/images/star-off.png" alt="5" title="gorgeous">
					<input name="score" value="4" type="hidden">
				</div>
			</div>
			<div class="title">
				<a href="#"><?php echo $posts[0]->postHeader; ?></a>
			</div>
			<div class="brand">apple</div>
			<div class="social-row">
				<span class="st_facebook_hcount" st_processed="yes">
					<span style="text-decoration:none;color:#000000;display:inline-block;cursor:pointer;" class="stButton">
						<span>
							<span class="stMainServices st-facebook-counter" style="background-image: url(&quot;http://w.sharethis.com/images/2017/facebook_counter.png&quot;);">&nbsp;</span>
							<span class="stArrow">
								<span class="stButton_gradient stHBubble" style="display: inline-block;">
									<span class="stBubble_hcount">0</span>
								</span>
							</span>
						</span>
					</span>
				</span>
				<span class="st_twitter_hcount" st_processed="yes">
					<span style="text-decoration:none;color:#000000;display:inline-block;cursor:pointer;" class="stButton">
						<span>
							<span class="stMainServices st-twitter-counter" style="background-image: url(&quot;http://w.sharethis.com/images/2017/twitter_counter.png&quot;);">&nbsp;</span>
							<span class="stArrow">
								<span class="stButton_gradient stHBubble" style="display: inline-block;">
									<span class="stBubble_hcount">0</span>
								</span>
							</span>
						</span>
					</span>
				</span>
				<span class="st_pinterest_hcount" st_processed="yes">
					<span style="text-decoration:none;color:#000000;display:inline-block;cursor:pointer;" class="stButton">
						<span>
							<span class="stMainServices st-pinterest-counter" style="background-image: url(&quot;http://w.sharethis.com/images/2017/pinterest_counter.png&quot;);">&nbsp;</span>
							<span class="stArrow">
								<span class="stButton_gradient stHBubble" style="display: inline-block;">
									<span class="stBubble_hcount">0</span>
								</span>
							</span>
						</span>
					</span>
				</span>
			</div>
			<div class="buttons-holder">
			<button onclick="">
               <i class="fa fa-copy"></i>
               add watchlist
           	</button>
			   <button>
               <i class="fa fa-comments"></i>
               chat now
          </button>
			</div>
			<div class="excerpt mt-4">
				<p><?php echo $posts[0]->postBody; ?></p>
			</div>
			<div>
				<p>สภาพปัจจุบัน <?php echo $posts[0]->postCondition; ?> %</p>
			</div>
			<div>
				<p>ประกันถึง <?php echo $posts[0]->postWarrantee; ?></p>
			</div>
			<div class="prices">
				<div class="price-current" style="font-weight:bold;color:red;">ราคา <?php echo $posts[0]->postPrice ?> บาท</div>
			</div>
		</div>
	</div>
</div>
