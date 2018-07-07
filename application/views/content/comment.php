<div class="container mt-4">
    <h2>Comment(<?php echo count($comment) ?>)</h2>
    <?php foreach ($comment as $key => $value) {?>

    <div class="row border rounded mt-2">
        <div class="col-sm-2 center-block">
            <img alt="" src="<?=base_url();?>/assets/images/avatar.png" width="67">
        </div>
        <div class="col-sm-10">
            <h2>Dan</h2>
            <p># <?php echo $value->dateCreate ?></p>
            <p><?php echo $value->postCommentText ?></p>
        </div>
    </div>

    <?php }?>
</div>