<?php
//function for generate data in row
function generateData($item)
{

    echo '<td style="cursor:pointer" onclick="goProduct(' . $item->postID . ')"> ' .
    ' <div class="panel panel-default" style="max-width:300px"> ' .
    ' <div class="panel-heading clearfix"> ' .
    '    <img src="' . base_url() . 'assets/images/avatar.png" alt="" style="width:30px;height:30px;float:left;"> ' .
    '    <h3 class="panel-title" style="float:left;margin-left:15px;">' . $item->fullname . '</h3> ' .
    ' </div> ' .
    ' <div class="panel-body" > ' .
    '    <img src="' . base_url() . 'assets/images/goods/a1.png" alt="" style="width:250px"  /></br> ' .
    '    <b style="margin-top:10px">' . $item->postHeader . '</b> ' .
    '    <p>' . substr($item->postBody, 0, 500) . '</p> ' .
    ' </div> ' .
    ' <div class="panel-footer" style="text-align:right;" > ' .
    '    <small> ' .
    '        <button class="btn btn-success" onclick="addWatchlist(' . $item->postID . ',this)" > ' .
        '            <span class="glyphicon glyphicon-copy"></span> เก็บไว้ ' .
        '        </button> ' .
        '        <button class="btn btn-warning"> ' .
        '            <span class="glyphicon glyphicon-phone"></span> แซทกับผู้ขาย ' .
        '        </button> ' .
        '    </small> ' .
        ' </div> ' .
        ' </div> ' .
        ' </td>';

}

?>

<div class="container" style="margin-top:20px;">
    <div class="x_title">
        <h2>สินค้าคละประเภทมาใหม่</h2>
    </div>
    <div>
	<table class="table">
    <?php

$index = 0;
foreach ($posts as $key => $value) {
    if ($index % 4 == 0) {
        echo '<tr>';
        generateData($value);
        echo '</tr>';
    } else {
        generateData($value);
    }
}

?>


    </table>
</div>

	<nav aria-label="Page navigation example">
		<ul class="pagination justify-content-end pagination-sm">
			<li class="page-item disabled">
				<a class="page-link" href="#" tabindex="-1">Previous</a>
			</li>
			<li class="page-item">
				<a class="page-link" href="#">1</a>
			</li>
			<li class="page-item">
				<a class="page-link" href="#">2</a>
			</li>
			<li class="page-item">
				<a class="page-link" href="#">3</a>
			</li>
			<li class="page-item">
				<a class="page-link" href="#">Next</a>
			</li>
		</ul>
	</nav>
</div>


<script type="text/javascript" >

//control this page
    function addWatchlist(id,btn_obj){
        //set inner html button to spinner
        btn_obj.innerHTML = '<i class="fa fa-spinner fa-spin"></i> เก็บไว้';

        var url = 'apiproduct/addwatchlist/' + id;

        $.get(url,function(data,status){
            console.log(status);
            if(status == 'success'){
                console.log(data);
                //finish and success set class button to success
                btn_obj.style.borderColor = 'green';
                //set innerHTML back to last image
                btn_obj.innerHTML = '<span class="glyphicon glyphicon-copy"></span> เก็บไว้ ';
            }
            return true;
        });

        return false;


    }

    //function send product
    function goProduct(page){
        window.location = "<?=base_url() . index_page()?>/home/product/"+ page;
    }

</script>