
<div class="nav-element"id="inline-nav-element">
    <a href="index.html" class="no-decoration-link" >Cart 
        <span id="" style="padding-left: 5px;"></span>
        <?php
        if (isset($_SESSION['cart'])){
            $count = count($_SESSION['cart']);
            echo "<span id=\"green-text\" style=\"margin-left:5px\">$count</span>";
        }else{
            echo "<span id=\"green-text\" style=\"margin-left:5px\">0</span>";
            }
        ?>
        <i class="fa-solid fa-bag-shopping nav-cart-icon"></i></a>
</div>
