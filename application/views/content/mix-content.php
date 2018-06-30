<?php 
    //function for generate data in row
    function generateData($item){

        echo '<td>'.
            '<div class="card border-success mb-3" style="max-width: 18rem;">'.
            '<div class="card-header bg-transparent border-success">'.
            '    <img src="'. base_url() .'/assets/images/avatar.png" alt="" width="30px" height="30px" />'.
            '    <b>'. $item->fullname.'</b>'.
            '</div>'.
            '<div class="card-body text-success">'.
            '    <img src="'. base_url().'/assets/images/goods/a1.png" alt="">'.
            '    <h5 class="card-title text-dark">'.$item->postHeader.'</h5>'.
            '    <p class="card-text text-dark">'. substr($item->postBody,0,500) .'</p>'.
            '</div> '.
            '<div class="card-footer bg-transparent border-success"> '.   
            '</div> '.
            '</div> '.
            '</td> ';


    }
    
?>

<div class="container">
    <h2>New Arrivals</h2>
    <table class="table">

        <?php 
            $index = 0;
            foreach ($posts as $key => $value) {
                if($index % 4 == 0){
                    echo '<tr>';
                    generateData($value);
                    echo '</tr>';
                }else{
                    generateData($value);
                }
            }
        ?>

        
    </table>
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-end">
            <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
            <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
</div>