<?php $data["title"] = "Đăng nhập"; ?>
<?php $bodyClass = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-flex-auto uk-text-center">
    <div class="uk-container">
        <div class="dangnhap__content__item-64-30">
            <div class="item__30">
                <div class="item__8">
                    <h1 class="uk-h1 dangnhap__content__title">Đăng nhập</h1>
                </div>
                <div class="item__8">
                    <div class="dangnhap__content__desc">Để ký hợp đồng điện tử, Quý khách vui lòng đăng nhập với tên đăng nhập và mật khẩu đã đươc VinFast gửi qua
                        <br class="uk-visible@m"> email của Quý khách.</div>
                </div>
            </div>
            <div class="item__30">
                <a href="" class="dangnhap__content__txtLink">Xem hướng dẫn</a>
            </div>
        </div>

        <div class="dangnhap__content__item-64-30">
            <div class="dangnhap__content__item-48-30">
                <div class="item__12">
                    <input class="dangnhap__content__input uk-input uk-form-large uk-width-large dangnhap__content__width" type="text" placeholder="Tên đăng nhập">
                </div>
                <div class="item__12">
                    <div class="uk-inline uk-width-large dangnhap__content__width">
                        <a class="uk-form-icon uk-form-icon-flip dangnhap__content__iconPass" href="#" uk-icon="icon: link"></a>
                        <input class="dangnhap__content__input uk-input uk-form-large" type="password" placeholder="Mật khẩu">
                    </div>
                </div>
            </div>
            <div class="dangnhap__content__item-48-30">
                <div class="item__24">
                    <button type="button" class="dangnhap__content__btnSubmit uk-button uk-button-primary uk-button-large">đăng nhập</button>
                </div>
                <div class="item__24">
                    <a href="" class="dangnhap__content__txtLink">Change language to English</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>