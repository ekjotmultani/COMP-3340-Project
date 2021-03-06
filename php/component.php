<?php

function component($picname, $picprice, $imgfile, $imgid, $picdesc){
    $element = "
    
    <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
                <form action=\"index.php\" method=\"post\">
                    <div class=\"card shadow\">
                        <a href = \"productpage.php?id=$imgid\">
                        <div>
                            <img src=\"$imgfile\" alt=\"img/default\" class=\"img-fluid card-img-top\">
                        </div>
                        </a>
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">$picname</h5>
            
                            <p class=\"card-text\">$picdesc</p>

                            <h5>
                                <span class=\"price\">$$picprice</span>
                            </h5>

                            <button type=\"submit\" class=\"btn btn-secondary my-3\" name=\"add\">Add to Cart <i class=\"fas fa-shopping-cart\"></i></button>
                             <input type='hidden' name='product_id' value='$imgid'>
                        </div>
                    </div>
                </form>
            </div>
    ";
    echo $element;
}

function cartElement($imgfile, $picname, $picprice, $imgid, $picdesc){
    $element = "
    
    <form action=\"cart.php?action=remove&id=$imgid\" method=\"post\" class=\"cart-items\">
                    <div class=\"border rounded\">
                        <div class=\"row bg-white\">
                            <div class=\"col-md-3 pl-0\">
                                <img src=$imgfile alt=\"Image1\" class=\"img-fluid\">
                            </div>
                            <div class=\"col-md-6\">
                                <h5 class=\"pt-2\">$picname</h5>
                                <h5 class=\"pt-2\">$$picprice</h5>

                                <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Remove</button>
                            </div>
                            <!-- <div class=\"col-md-3 py-5\">
                                <div>
                                    <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-minus\"></i></button>
                                    <input type=\"text\" value=\"1\" class=\"form-control w-25 d-inline\">
                                    <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-plus\"></i></button>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </form>
    
    ";
    echo  $element;
}

















