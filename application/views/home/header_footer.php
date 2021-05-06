<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Flight Ticket - <?= $title ?></title>
    <link rel="icon" href="<?= base_url() ?>assets/images/icon.png" type="image/icon type">
    <link rel="stylesheet" href="<?= base_url() ?>assets/styles/main.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/scripts/func.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</head>

<body>
    <!-- Header -->
    <header>
        <nav class="menu-pc grid wide">
            <div class="logo">
                <a href="<?= base_url() ?>">
                    <h1>Flight Ticket</h1>
                    <img src="<?= base_url() ?>assets/images/logo_icon.png" alt="Logo icon" />
                </a>
            </div>
            <div class="links">
                <ul>
                    <li><a class="menu-link" href="<?= base_url() ?>">Trang chủ</a></li>
                    <li><a class="menu-link" href="<?= base_url() ?>gioi-thieu">Giới thiệu</a></li>
                    <li><a class="menu-link" href="<?= base_url() ?>news">Bài viết</a></li>
                    <li><a class="menu-link" href="<?= base_url() ?>#">Câu hỏi thường gặp</a></li>
                    <li class="user">
                        <span>
                            <i class="fas fa-user"></i>
                            <?php echo is_null($this->session->userdata('email')) ? "" : "<p>" . $this->session->userdata('email') . "</p>"; ?>
                        </span>
                        <ul class="menu-user">
                            <?php foreach ($this->session->userdata('user_links') as $key => $value) : ?>
                            <li class="menu-list">
                                <a href="<?= $value ?>"><?= $key ?></a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                </ul>


            </div>
        </nav>
        <nav class="menu-mobile grid wide">
            <div class="logo">
                <a href="<?= base_url() ?>">
                    <h1>Flight Ticket</h1>
                    <img src="<?= base_url() ?>assets/images/logo_icon.png" alt="Logo icon" />
                </a>
            </div>
            <div class="icon">
                <i class="fas fa-bars icon-menu"></i>
            </div>
            </div>

        </nav>

        <div class="overlay"></div>
        <div class="list-mobile">
            <div class="close">
                <i class="fas fa-times"></i>
            </div>
            <div class="title">
                <p>Menu</p>
            </div>
            <ul>
                <li><a class="menu-link" href="<?= base_url() ?>">Trang chủ</a></li>
                <li><a class="menu-link" href="<?= base_url() ?>gioi-thieu">Giới thiệu</a></li>
                <li><a class="menu-link" href="<?= base_url() ?>news">Tin tức</a></li>
                <li><a class="menu-link" href="<?= base_url() ?>#">Câu hỏi thường gặp</a></li>
                <li class="user">
                    <span>
                        <i class="fas fa-user"></i>
                        <?php echo is_null($this->session->userdata('email')) ? "" : "<p>" . $this->session->userdata('email') . "</p>"; ?>
                        <i class="fas fa-angle-down"></i>
                    </span>
                    <ul class="menu-user">
                        <?php foreach ($this->session->userdata('user_links') as $key => $value) : ?>
                        <li class="menu-list">
                            <a href="<?= $value ?>"><?= $key ?></a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </li>
            </ul>
        </div>


        <script>
        // Active menu item
        $.each($('.menu-pc .links > ul > li > a'), function() {
            if ($(this).attr('href') == "<?= current_url() ?>") {
                $(this).addClass('active');
            }
        });
        </script>
    </header>
    <!-- End Header -->

    <!-- Main -->
    <main>
        <?php $this->load->view($view); ?>
    </main>
    <!--End Main -->

    <!-- Footer -->
    <footer>
        <!-- News Letter -->
        <div class="news-letter">
            <div class="grid wide">
                <div class="row">
                    <div class="col l-6 m-12 s-12 title">
                        <h2><i class="fas fa-plane-departure"></i> Đăng ký nhận tin khuyến mãi</h2>
                    </div>
                    <div class="col l-6 m-12 s-12 form">
                        <form action="" method="">
                            <input type="text" placeholder="Nhập địa chỉ email...">
                            <button type="submit"><i class="fas fa-paper-plane"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End News Letter -->

        <!-- Main Footer -->
        <div class="main-footer">
            <div class="grid wide">
                <div class="row about-us">

                    <div class="col l-3 m-6 s-12">
                        <h4 class="footer-title">
                            Thông tin thêm
                        </h4>
                        <ul class="footer-list">
                            <li class="footer-item">
                                <a href="#" title="Điều khoản sử dụng">Điều khoản sử dụng</a>
                            </li>
                            <li class="footer-item">
                                <a href="#" title="Chính sách bảo mật">Chính sách bảo mật</a>
                            </li>
                            <li class="footer-item">
                                <a href="#" title="Hướng dẫn đạt vé">Hướng dẫn đạt vé</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col l-3 m-6 s-12">
                        <h4 class="footer-title">
                            Về chúng tôi
                        </h4>
                        <ul class="footer-list">
                            <li class="footer-item">
                                <a href="#" title="Giới thiệu">Giới thiệu</a>
                            </li>
                            <li class="footer-item">
                                <a href="#" title="Khách hàng nói về chúng tôi">Khách hàng nói về chúng tôi</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col l-3 m-6 s-12">
                        <h4 class="footer-title">
                            Hỗ trợ
                        </h4>
                        <ul class="footer-list">
                            <li class="footer-item">
                                <a href="#" title="Phản hồi">Phản hồi</a>
                            </li>
                            <li class="footer-item">
                                <a href="#" title="Câu hỏi thường gặp">Câu hỏi thường gặp</a>
                            </li>
                            <li class="footer-item">
                                <a href="#" title="Tư vấn hỗ trợ đặt vé">Tư vấn hỗ trợ đặt vé</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col l-3 m-6 s-12">
                        <h4 class="footer-title">
                            Địa chỉ
                        </h4>
                        <ul class="footer-list">
                            <li class="footer-item">
                                <a href="#"
                                    title="Đường Nguyễn Khuyến, KP5, Phường Trảng Dài, TP. Biên Hòa, Tỉnh Đồng Nai"><?= $websitesetting['Address'] ?></a>
                            </li>
                        </ul>
                    </div>

                    <div class="col l-3 m-6 s-12">
                        <h4 class="footer-title">
                            Hotline
                        </h4>
                        <a href="tel:"><?= $websitesetting['Phone'] ?></a>
                    </div>

                    <div class="col l-3 m-6 s-12">
                        <h4 class="footer-title">
                            Email
                        </h4>
                        <a href="#"><?= $websitesetting['Email'] ?></a>
                    </div>

                    <div class="col l-3 m-6 s-12">
                        <h4 class="footer-title">
                            Kết nối
                        </h4>
                        <ul class="footer-list">
                            <li class="footer-item">
                                <a href="<?= $websitesetting['Facebook'] ?>" target="_blank"><i
                                        class="fab fa-facebook"></i>Facebook</a>
                            </li>
                            <li class="footer-item">
                                <a href="#"><i class="fab fa-instagram"></i>Instagram</a>
                            </li>
                        </ul>

                    </div>
                    <div class="col l-3 m-6 s-12 search">
                        <form action="">
                            <input type="text" class="footer-search" placeholder="Tôi có thể giúp gì cho bạn?">
                        </form>
                        <button type="submit" class="footer-submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Main Footer -->

        <div class="copyright">
            <p><i class="far fa-copyright"></i> 2021 - Bản quyền thuộc LHD.<br><span>Dự án website bán vé máy
                    bay</span></p>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- Button back to top -->
    <button class="to-top"><i class="fas fa-caret-up"></i></button>
    <!-- Loader -->
    <div class="loader-container">
        <img src="<?= base_url() ?>assets/images/loading.gif" alt="">
    </div>
    <!-- Scripts -->
    <script src="<?= base_url() ?>assets/scripts/script.js"></script>
    <script src="<?= base_url() ?>assets/scripts/home.js"></script>
    <script src="<?= base_url() ?>assets/scripts/finding.js"></script>
</body>

</html>