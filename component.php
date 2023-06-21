<?php

function component(){
    $element = '
        <div class="swiper-slide card" style="width: 302px;">
            <div class="card-image">
                <a href="diablo4.html"><img src="Images/diablo.webp" alt="diablo 4 cover"></a>
            </div>
            <div class="card-content">
                <a href="diablo4.html" class="no-decoration-link"><h4>Diablo IV</h4></a>
            </div>
            <div class="card-button">
                <p>699.99MAD</p><button>Buy <i class="fa-solid fa-bag-shopping"></i></button>
            </div>
        </div>
    ';
    echo $element;
}

?>
