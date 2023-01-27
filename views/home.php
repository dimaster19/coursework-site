<div id="carouselExampleFade" class="carousel slide carousel-fade mb-4" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <a href="" class=""><img src="img/slide1.jpg" style="max-height: 550px;" class="d-block w-100" alt="..."></a>
        </div>
        <div class="carousel-item">
            <a href="" class=""><img src="img/slide2.jpg" style="max-height: 550px;" class="d-block w-100" alt="..."></a>
        </div>
        <div class="carousel-item">
            <a href="" class=""><img src="img/slide3.jpg" style="max-height: 550px;" class="d-block w-100" alt="..."></a>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<div class="content">

    <div class="main-categories">
        <div class="category">
            <a href="" class="link-categories">
                <div class="block-categories">
                    <div class="categories-img">
                        <img src="img/category1.jpg" alt="">
                    </div>
                    <div class="categories-name">
                        Смартфоны
                    </div>
                </div>
            </a>
        </div>
        <div class="category">
            <a href="" class="link-categories">
                <div class="block-categories">
                    <div class="categories-img">
                        <img src="img/category1.jpg" alt="">
                    </div>
                    <div class="categories-name">
                        Смартфоны
                    </div>
                </div>
            </a>
        </div>

        <div class="category">
            <a href="" class="link-categories">
                <div class="block-categories">
                    <div class="categories-img">
                        <img src="img/category1.jpg" alt="">
                    </div>
                    <div class="categories-name">
                        Смартфоны
                    </div>
                </div>
            </a>
        </div>

        <div class="category">
            <a href="" class="link-categories">
                <div class="block-categories">
                    <div class="categories-img">
                        <img src="img/category1.jpg" alt="">
                    </div>
                    <div class="categories-name">
                        Смартфоны
                    </div>
                </div>
            </a>
        </div>

        <div class="category">
            <a href="" class="link-categories">
                <div class="block-categories">
                    <div class="categories-img">
                        <img src="img/category1.jpg" alt="">
                    </div>
                    <div class="categories-name">
                        Смартфоны
                    </div>
                </div>
            </a>
        </div>

        <div class="category">
            <a href="" class="link-categories">
                <div class="block-categories">
                    <div class="categories-img">
                        <img src="img/category1.jpg" alt="">
                    </div>
                    <div class="categories-name">
                        Смартфоны
                    </div>
                </div>
            </a>
        </div>


    </div>


    <div class="products-heading">
        <h1>
            <svg width="38" height="16" viewBox="0 0 38 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="38" height="16" rx="8" fill="#FFCE1F"></rect>
            </svg>
            <p>Популярные товары</p>
        </h1>
    </div>
    <div class="products">
        <?php

        while ($result = pg_fetch_array($query)) {
        ?>
            <div class="product-item" id="<? echo $result[0]; ?>">
                <div class="product-image">
                    <img src="img/<? echo $result[5]; ?>" alt="<? echo $result[5] ?>">
                </div>
                <div class="product-price"><? echo $result[2] ?>&nbsp&#8381</div>
                <div class="product-name"><a href="/product/<? echo str_replace(" ", "-", $result[1]) ?>"><? echo $result[1] ?></a></div>
                <div class="add-product">
                    <a href=""  data-id="<? echo $result[0] ?>" class="add-product-link">В корзину
                    </a>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>
<!-- Close DB -->
