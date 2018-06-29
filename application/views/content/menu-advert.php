<div class="container">
    <div class="row">
        <div class="col">
            <div class="row">
                <div class="col-sm-4 col-md-3 sidebar">
            <div class="mini-submenu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </div>
            <div class="list-group">
                <span href="#" class="list-group-item active bg-success">
                    Link แนะนำ
                    <span class="pull-right" id="slide-submenu">
                        <i class="fa fa-times"></i>
                    </span>
                </span>
                <?php foreach($categories as $it) { ?>
                <a href="/<?= $it->categoryID ?>" class="list-group-item">
                    <i class="fa fa-comment-o"></i> <?= $it->categoryName ?>
                </a>
                <?php } ?>
                
            </div>        
        </div>
        <div class="col">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div style="background-color:#CCC;width:100%;height:500px;"></div>
                    <img class="d-block w-100" src="..." alt="First slide"  />
                </div>
                <div class="carousel-item">
                <div style="background-color:#CCC;width:100%;height:500px;"></div>
                <img class="d-block w-100" src="..." alt="Second slide">
                </div>
                <div class="carousel-item">
                <div style="background-color:#CCC;width:100%;height:500px;"></div>
                <img class="d-block w-100" src="..." alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
        <div style="background-color:#CCC;width:100%;height:150px;"></div>
            <img src="#" alt="advert2" />
        </div>
        <div class="col">
        <div style="background-color:#CCC;width:100%;height:150px;"></div>
            <img src="#" alt="advert3" />
        </div>
    </div>
</div>