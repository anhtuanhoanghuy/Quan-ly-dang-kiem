<!-- hiển thị giao diện đầu trang -->
<div class="homePageContainer">
                <div class="homePageContainer_News_marquee">
                    <h2>TIN MỚI</h2>
                    <div class="homePageContainer_marquee">
                        <ul>
                            <li><a href="http://www.vr.org.vn/vn/tin-tuc-su-kien/tin-tuc-chung/giot-mau-dao---trao-hy-vong-10539.html">Giọt máu đào - Trao hy vọng</a></li>
                            <li><a href="http://www.vr.org.vn/vn/tin-tuc-su-kien/tin-tuc-chung/tiep-nhan-kiem-dinh-vien-quan-su-tang-cuong-cho-cac-trung-tam-dang-kiem-10537.html">Tiếp nhận kiểm định viên quân sự tăng cường cho các trung tâm đăng kiểm </a></li>
                            <li><a href="http://www.vr.org.vn/vn/tin-tuc-su-kien/tin-tuc-chung/trao-quyet-dinh-bi-thu-dang-uy-cuc-dang-kiem-viet-nam-cho-cuc-truong-nguyen-chien-thang-10535.html">Trao Quyết định Bí thư Đảng uỷ Cục Đăng kiểm Việt Nam cho Cục trưởng Nguyễn Chiến Thắng </a></li>
                        </ul>
                    </div>
                </div>
                <div class="homePageContainer_items">
                    <div class="news_Slide_Container">
                        <button type="button" class="preSlide" onclick="showSlide(-2)">&#10094;</button>
                        <button type="button" class="nextSlide" onclick="showSlide(0)">&#10095;</button>
                        <ul>
                            <li class="news_Slide fadding_animate">
                                <img alt ="png" src="./public/img/miendangkiemlandau.jpg">
                                <a href="http://www.vr.org.vn/vn/tin-tuc-su-kien/duong-bo--duong-sat/mien-dang-kiem-lan-dau-voi-xe-o-to-moi-keo-dai-chu-ki-kiem-dinh-voi-mot-so-loai-phuong-tien-10538.html" class="Slide_Desc">Miễn đăng kiểm lần đầu với xe ô tô mới, kéo dài chu kì kiểm định với một số loại phương tiện</a>
                            </li>
                            <li class="news_Slide fadding_animate">
                                <img alt ="png" src="./public/img/0R3A1015.jpg">
                                <a href="http://www.vr.org.vn/vn/tin-tuc-su-kien/tin-tuc-chung/trao-quyet-dinh-bi-thu-dang-uy-cuc-dang-kiem-viet-nam-cho-cuc-truong-nguyen-chien-thang-10535.html" class="Slide_Desc">Trao Quyết định Bí thư Đảng uỷ Cục Đăng kiểm Việt Nam cho Cục trưởng Nguyễn Chiến Thắng</a>
                            </li>
                            <li class="news_Slide fadding_animate">
                                <img alt ="png" src="./public/img/0R3A1088.jpg">
                                <a href="http://www.vr.org.vn/vn/tin-tuc-su-kien/tin-tuc-chung/dang-kiem-viet-nam-nguyen-tu-soi-tu-sua-dung-len-phuc-vu-vi-nhan-dan-10536.html" class="Slide_Desc">Đăng kiểm Việt Nam nguyện tự soi, tự sửa, đứng lên phục vụ vì Nhân dân</a>
                            </li>
                        </ul>
                    </div>
                    <div class="homePageContainer_linked-website">
                        <div>
                            <span class="material-symbols-outlined captive-portal-icon">
                                captive_portal
                            </span>
                            <h1>Liên kết Website</h1>
                        </div>
                        <select title = "linked-website" linkname="linked-website" id="linked-website" onchange="visitWebsite(this)">
                            <option value="">Chọn website liên kết</option>
                            <option value="https://mt.gov.vn/vn/Pages/Trangchu.aspx">Bộ giao thông vận tải</option>
                            <option value="https://vinamarine.gov.vn/">Cục hàng hải Việt Nam</option>
                            <option value="https://drvn.gov.vn/https://drvn.gov.vn/">Tổng cục đường bộ Việt Nam</option>
                        </select>
                    </div>
                </div>
            </div>
            <script type="text/javascript" src="./public/js/HomePage.js"></script>