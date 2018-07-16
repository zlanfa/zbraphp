<div class="clearfix"></div>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-success">
                    <span class="glyphicon glyphicon-camera"></span> สินค้ายอดนิยม <span class="badge">7</span>
                </a>
                <?php foreach ($categories as $it) {?>
                <a href="/<?=$it->categoryID?>" class="list-group-item">
                    <span class="glyphicon glyphicon-file"></span> <?=$it->categoryName?>
                </a>
                <?php }?>
            </div>
        </div>
        <div class="col-md-9">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Carousel indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <!-- Wrapper for carousel items -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="<?=base_url()?>assets/images/sliders/slider01.jpg" alt="First Slide">
                    </div>
                    <div class="item">
                        <img src="<?=base_url()?>assets/images/sliders/slider03.jpg" alt="Second Slide">
                    </div>
                    <div class="item">
                        <img src="<?=base_url()?>assets/images/sliders/slider03.jpg" alt="Third Slide">
                    </div>
                </div>
                <!-- Carousel controls -->
                <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="carousel-control right" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function(){
     $("#myCarousel").carousel();
});
</script>
