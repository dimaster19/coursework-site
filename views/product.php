<div class="content product-content mt-3 mb-3 radius-content">
    <div class="item-block">
        <div class="item-pics">
            <div class="item-main-pic">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                    <div class="carousel-indicators">
                        <?
                        for ($i = 0; $i < count($product->getImages()); $i++) {
                            if ($i == 0) { ?>

                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<? echo $i ?>" class="active" aria-current="true" aria-label="Slide <? echo $i ?>"></button>
                            <?
                            } else { ?>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<? echo $i ?>" aria-label="Slide <? echo $i ?>"></button>
                            <? } ?>
                        <? } ?>
                    </div>

                    <div class="carousel-inner">
                        <?
                        $tmp = 0;
                        foreach ($product->getImages() as $img) {
                            if ($tmp == 0) {
                        ?>
                                <div class="carousel-item active">
                                    <img src="../img/<? echo $img ?>" class="d-block w-100" alt="<? echo $img ?>">
                                </div>
                            <? $tmp = 1;
                            } else { ?>

                                <div class="carousel-item">
                                    <img src="../img/<? echo $img ?>" class="d-block w-100" alt="<? echo $img ?>">
                                </div>
                            <? } ?>
                        <? } ?>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">????????????????????</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">??????????????????</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="item-title">
            <h3><? echo $product->getName() ?></h3>
            <h3><strong><? echo $product->getPrice() ?>&nbsp&#8381</strong></h3>
            <div class="articul">
                ??????????????:&nbsp
                <div class="articul-num"><? echo $product->getId() ?></div>
            </div>
            <? if ($product->getCount() > 0) { ?>
                <div class="availability mt-2">
                    <div class="availability-true">???????? ?? ??????????????</div>
                </div>
                <form action="" class="item-to-cart mt-2">
                    <input type="number" id="itemCounr" class="form-control" min="1" value="1" max="<? echo $product->getCount() ?>">
                    <button type="submit" class="btn btn-primary">?? ??????????????</button>
                </form>
            <? } else { ?>
                <div class="availability mt-2">
                    <div class="availability-false">?????? ?? ??????????????</div>
                </div>
                <form action="" class="item-to-cart mt-2">
                    <input type="number" id="itemCounr" class="form-control" min="0" value="0" max="0">
                    <button type="submit" class="btn btn-primary" disabled>?? ??????????????</button>
                </form>
            <? } ?>


        </div>
    </div>
    <div class="item-bottom mt-3">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">????????????????</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">????????????????????????????</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">????????????</button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"><? echo $product->getDescription() ?></div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
        </div>
    </div>

</div>
