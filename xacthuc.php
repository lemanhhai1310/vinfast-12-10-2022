<?php $data["title"] = "Xác thực ký hợp đồng điện tử"; ?>
<?php $bodyClass = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-flex-auto uk-text-center xacthuc">
    <div class="uk-container">
        <div class="dangnhap__content__item-48-30">
            <div class="uk-hidden@m uk-text-left">
                <a href="" class="xacthuc__btnBack uk-text-left">
                    mặt sau <br class="uk-visible@m">
                    CCCD/CMT
                </a>
            </div>
            <div class="item__30" uk-toggle="cls: uk-margin-remove-top; mode: media; media: @m">
                <div class="item__8">
                    <div class="uk-position-relative">
                        <h1 class="uk-h1 dangnhap__content__title">Xác thực ký hợp đồng điện tử</h1>
                        <a href="" class="xacthuc__btnBack uk-position-center-left uk-text-left uk-visible@m">
                            mặt sau <br class="uk-visible@m">
                            CCCD/CMT
                        </a>
                    </div>
                </div>
                <div class="item__8">
                    <div class="dangnhap__content__desc uk-text-center">Khách hàng: Nguyễn Văn A</div>
                </div>
            </div>
            <div class="item__30">
                <div class="uk-margin-auto xacthuc__width">
                    <div class="uk-child-width-expand uk-grid-collapse" uk-grid>
                        <?php
                        $data = array(
                            array(
                                'txt' => 'Điều khoản <br class="uk-hidden@m"> sử dụng',
                                'status' => 'active',
                                'step' => '',
                            ),
                            array(
                                'txt' => 'Mặt trước <br class="uk-hidden@m"> CCCD/CMT',
                                'status' => 'active',
                                'step' => '',
                            ),
                            array(
                                'txt' => 'Mặt sau <br class="uk-hidden@m"> CCCD/CMT',
                                'status' => 'active',
                                'step' => '',
                            ),
                            array(
                                'txt' => 'Xác thực <br class="uk-hidden@m"> chân dung',
                                'status' => 'inprogress',
                                'step' => '4',
                            ),
                        );
                        foreach ($data as $k=>$v): ?>
                        <div class="xacthuc__step__item">
                            <div class="uk-text-center xacthuc__step__box">
                                <div class="item__8">
                                    <div class="xacthuc__step__box1 uk-border-circle <?= $v['status'] ?>"><?= $v['step'] ?></div>
                                </div>
                                <div class="xacthuc__step__txt item__8"><?= $v['txt'] ?></div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="dangnhap__content__item-48-30">
            <div class="xacthuc__card uk-card uk-card-body uk-margin-auto">
                <div class="dangnhap__content__item-68-54">
                    <div class="item__24">
                        <div class="uk-grid-small uk-flex-middle uk-text-left" uk-grid>
                            <div class="uk-width-expand">
                                <div class="xacthuc__card__title">ĐỘ TRÙNG KHỚP</div>
                            </div>
                            <div class="uk-width-auto">
                                <div class="xacthuc__card__txt">Không đạt</div>
                            </div>
                        </div>
                    </div>
                    <div class="item__24">
                        <div class="uk-child-width-1-2@m uk-grid-20 uk-grid-24-m" uk-grid>
                            <div>
                                <img class="uk-width-1-1" src="images/cmt.png" alt="">
                            </div>
                            <div>
                                <div id="webcam">
                                    <video src="https://yootheme.com/site/images/media/yootheme-pro.mp4" autoplay="autoplay" playsinline="playsinline" style="width: 1080px; height: 810px; transform-origin: 0px 0px; transform: scaleX(0.277778) scaleY(0.277778);"></video>
                                </div>
<!--                                <video src="https://yootheme.com/site/images/media/yootheme-pro.mp4" width="1920" height="1080" controls playsinline uk-video></video>-->
<!--                                <img class="uk-width-1-1" src="images/anh-chup.png" alt="">-->
                            </div>
                        </div>
                    </div>
                    <div class="item__24">
                        <div class="uk-position-relative xacthuc__process uk-border-pill">
                            <div class="xacthuc__process__bar uk-position-left uk-border-pill" data-txt="40,04%" style="width: 40.04%"></div>
                        </div>
                    </div>
                </div>
                <div class="dangnhap__content__item-68-54">
                    <div class="xacthuc__box uk-text-left">
                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                            <div class="uk-width-expand">
                                <div class="xacthuc__box__txt">Vui lòng chụp ảnh lại.</div>
                            </div>
                            <div class="uk-width-auto uk-visible@m">
                                <button type="button" class="xacthuc__box__btn uk-button uk-button-primary">CHỤP ẢNH LẠI</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dangnhap__content__item-48-30 uk-hidden@m">
            <button type="button" class="xacthuc__box__btn uk-button uk-button-primary">CHỤP ẢNH LẠI</button>
        </div>
        <div class="dangnhap__content__item-48-30 uk-visible@m">
            <button type="button" class="dangnhap__content__btnSubmit dangnhap__content__btnSubmit--xacnhan uk-button uk-button-primary uk-button-large">xác nhận</button>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>