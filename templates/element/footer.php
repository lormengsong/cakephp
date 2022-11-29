<footer>
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <div class="logo">
                        <a href="">
                            <img src="https://via.placeholder.com/150x150" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-3">
                    <div class="main-title">
                        QUIK LINK
                    </div>
                    <ul class="menu">
                        <li><a href="#">HOME</a></li>
                        <li><a href="#">ABOUT US</a></li>
                        <li><a href="#">CONTACT US</a></li>
                        <li><a href="#">PROMOTION</a></li>
                    </ul>
                </div>
                <div class="col-3">
                    <div class="main-title">
                        ABOUT US
                    </div>
                    <div class="footer-title">
                        យើង និងដៃគូរបស់យើងប្រើឃុកគី ឬបច្ចេកវិទ្យាប្រហាក់ប្រហែល ដើម្បីចូលមើល និងស្តុកទិន្នន័យ ដែលមិនមានលក្ខណៈសម្ងាត់ឯកជន ដូចជា អាស័យដ្ឋាន IP ជាដើម។
                        ទិន្នន័យរបស់លោកអ្នកនឹងត្រូវប្រើក្នុងគោលដៅកែលម្អឲ្យកាន់តែប្រសើរឡើងនូវដំណើរការវេបសាយរបស់យើង វាស់វែងអ្នកចូលមើល ដំណើរការផ្សេងៗទាក់ទងនឹងបណ្តាញសង្គម ឬការដាក់បង្ហាញការផ្សព្វផ្សាយពាណិជ្ជកម្មដែលតម្រូវទៅតាមអ្នកមើល ។
                    </div>
                </div>
                <div class="col-3">
                    <div class="main-title">
                        FOLLOW US
                    </div>
                    <div class="follow-us">
                        <a href="">
                            <img src="https://via.placeholder.com/35x35" alt="">
                        </a>
                        <a href="">
                            <img src="https://via.placeholder.com/35x35" alt="">
                        </a>
                        <a href="">
                            <img src="https://via.placeholder.com/35x35" alt="">
                        </a>
                        <a href="">
                            <img src="https://via.placeholder.com/35x35" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="footer-bottom">
        &copy; Easy Math Cambodia 2022. រក្សាសិទ្ធគ្រប់យ៉ាង.
    </div>
</body>
<script>
    $(document).ready(function() {
        var popup = '<div class="popup"></div>';
        $(".show-menu").click(function() {
            $(".left-menu").css({
                "right": "0px"
            });
            $("body").append(popup);
        });
        $("body").on("click", ".popup", function() {
            $(".left-menu").css({
                "right": "-260px"
            });
            $(this).remove();
        });
    });
</script>

</html>