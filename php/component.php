<?php
    // $element = '';
    function component($productName,$productOldPrice,$productImg,$productid){
        $element ="
        <div class='col-md-3 col-sm-6 my-3 my-md-0'>
        <form action='index.php' method='post'>
            <div class='card mb-3 p-2 shadow'>
                <div>
                    <img src='uploads/$productImg' alt='' srcset=''>
                </div>
                <div class='card-body'>
                    <h5 class='card-title'>$productName</h5>
                    <h6>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-solid fa-star-half'></i>
                    </h6>
                    <p class='card-text'>
                        Some Quick Exaple text to build on the card.
                    </p>
                    <h5>
                        <small class='text-secondary'><s>$$productOldPrice</s></small>
                        <span class='price'>$34</span>
                    </h5>

                    <button type='submit' name='add' class='btn btn-warning my-3'>Add To Cart <i class='fa-solid fa-shopping-cart'></i></button>
                    <input type=hidden name='product_id' value='$productid'>
                </div>
            </div>
        </form>
        </div>
        ";
        echo $element   ;
    }

?>