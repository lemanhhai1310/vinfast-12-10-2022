<?php $data["title"] = "4.1.1 Báo lỗi - khi thiết bị của KH không có chức năng chụp ảnh"; ?>
<?php $bodyClass = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-flex-auto uk-text-center xacthuc">
    <div class="uk-container">
        <div class="dangnhap__content__item-48-30">
            <div class="uk-hidden@m uk-text-left">
                <a href="" class="xacthuc__btnBack uk-text-left">
                    điều khoản
                </a>
            </div>
            <div class="item__30" uk-toggle="cls: uk-margin-remove-top; mode: media; media: @m">
                <div class="item__8">
                    <div class="uk-position-relative">
                        <h1 class="uk-h1 dangnhap__content__title">Xác thực ký hợp đồng điện tử</h1>
                        <a href="" class="xacthuc__btnBack uk-position-center-left uk-text-left uk-visible@m">
                            điều khoản
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
                                'step' => '1',
                            ),
                            array(
                                'txt' => 'Mặt trước <br class="uk-hidden@m"> CCCD/CMT',
                                'status' => 'inprogress',
                                'step' => '2',
                            ),
                            array(
                                'txt' => 'Mặt sau <br class="uk-hidden@m"> CCCD/CMT',
                                'status' => 'pending',
                                'step' => '3',
                            ),
                            array(
                                'txt' => 'Xác thực <br class="uk-hidden@m"> chân dung',
                                'status' => 'pending',
                                'step' => '4',
                            ),
                        );
                        foreach ($data as $k=>$v): ?>
                        <div class="xacthuc__step__item <?= $v['status'] ?>">
                            <div class="uk-text-center xacthuc__step__box">
                                <div class="item__8">
                                    <div class="xacthuc__step__box1 uk-border-circle <?= $v['status'] ?> step-<?= $v['step'] ?>"><?= $v['step'] ?></div>
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
                <div class="uk-child-width-auto uk-flex-center" uk-grid>
                    <div>
                        <div class="uk-width-max-medium uk-height-min-small uk-text-left">
                            <div class="dangnhap__content__item-24-16">
                                <div class="xacthuc__card__title">CHỤP ẢNH MẶT TRƯỚC CCCD/CMT</div>
                            </div>
                            <div class="dangnhap__content__item-24-16">
                                <div id="webcam">
                                    <video src="https://yootheme.com/site/images/media/yootheme-pro.mp4" autoplay="autoplay" playsinline="playsinline" style="width: 1080px; height: 810px; transform-origin: 0px 0px; transform: scaleX(0.277778) scaleY(0.277778);"></video>
                                </div>
                            </div>
                            <div class="dangnhap__content__item-24-16">
                                <div class="xacthuc__card__txt xacthuc__card__txt--c1">Thiết bị của Quý khách không hỗ trợ chức năng chụp ảnh, vui lòng đổi sang thiết bị khác.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dangnhap__content__item-48-30">
            <button uk-toggle="target: #modal-center-baoloi" type="button" class="dangnhap__content__btnSubmit dangnhap__content__btnSubmit--xacnhan dangnhap__content__btnSubmit--loi uk-button uk-button-primary uk-button-large">xác nhận</button>
        </div>
    </div>
</div>

<div id="modal-center-baoloi" class="uk-flex-top baoloi__modal" uk-modal="esc-close:false; bg-close:false;">
    <div class="baoloi__modal__dialog baoloi__modal__body uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
        <div class="uk-grid-small uk-grid-30-m uk-flex-middle" uk-grid>
            <div class="uk-width-auto">
                <div class="uk-spinner"><span class="loader"></span></div>
            </div>
            <div class="uk-width-expand">
                <p class="baoloi__modal__txt">Bắt đầu quá trình khởi tạo Camera. Quý khách vui lòng chờ trong giây lát.</p>
            </div>
        </div>
    </div>
</div>
<script>
    // UIkit.modal('#modal-center-baoloi').show();
    UIkit.util.on('#modal-center-baoloi', 'show', function () {
        setTimeout(()=>{
            UIkit.modal('#modal-center-baoloi').hide();
        },5000);
    });
</script>
<?php require "template-parts/layouts/footer.php"; ?>