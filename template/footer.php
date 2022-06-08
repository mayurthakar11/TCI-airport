
<footer class="footer-main" data-aos="fade-up">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-links-main">
                        <div class="footer-box">
                            <div class="footer-logo">
                                <a href="" title="Turks & Caicos Islands Airports Authority"><img src="assets/images/footer-logo.png" alt="Turks & Caicos Islands Airports Authority"></a>
                            </div>
                            <span class="footer-add">
                                        Turks and Caicos Islands Airports Authority is a statutory body that was established in 2006 with the mandate to operate and manage the state controlled airports.                    
                                    </span>
                            <ul class="menu-link">
                                <li><a href="tel:6499464420"><i class="icon-phone"></i>649 946 4420</a></li>
                            </ul>
                            <ul class="social-link">
                                <li><a href=""><i class="icon-facebook"></i></a></li>
                                <li><a href=""><i class="icon-linkedin"></i></a></li>
                                <li><a href=""><i class="icon-twitter"></i></a></li>
                                <li><a href=""><i class="icon-youtube"></i></a></li>
                            </ul>
                        </div>

                        <div class="footer-box order-lg-2">
                            <h3>Main menu</h3>
                            <div class="footer-main-link">
                                <ul class="menu-link">
                                    <li><a class="active" href="">Home</a></li>
                                    <li><a href="">About</a></li>
                                    <li><a href="">Airports</a></li>
                                    <li><a href="">AIS</a></li>
                                    <li><a href="">Publications</a></li>
                                </ul>
                                <ul class="menu-link">
                                    <li><a href="">Sustainability </a></li>
                                    <li><a href="">Join Us </a></li>
                                    <li><a href="">Media</a></li>
                                    <li><a href="">Complaints</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="footer-box order-lg-3">
                            <h3>Useful Links</h3>
                            <div class="footer-main-link">
                                <ul class="menu-link">
                                    <li><a href="">Flight Information</a></li>
                                    <li><a href="">Airport Information</a></li>
                                    <li><a href="">TCI Weather</a></li>
                                    <li><a href="">COVID-19 Information</a></li>
                                    <li><a href="">Safety Management System</a></li>
                                </ul>
                                <ul class="menu-link">
                                    <li><a href="">Rates and Charges</a></li>
                                    <li><a href="">Aeronautical Information</a></li>
                                    <li><a href="">Terms & Conditions</a></li>
                                    <li><a href="">Sitemap</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="f-b-content">
                        <p>© 2022 Airports Authority. All Rights Reserved.Privacy Policy</p>
                        <p>Website Designed & Developed by WebNYS</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
<!--wrapper -->
</body>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/moment.min.js"></script>
<script src="assets/js/bootstrap-select.js"></script>
<script src="assets/js/popper.min.js"></script>
<!-- <script src="assets/js/datetimepicker.min.js"></script> -->
<script src="assets/js/datetimepicker.min.js" type="text/javascript"></script>
<script src="assets/js/lazy-load.js"></script>
<script src="assets/js/mobile-menu.js"></script>
<script src="assets/js/aos.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/owl-thubnail.js"></script>
<script src="assets/js/jquery.fancybox.min.js"></script>
<script src="assets/js/mCustomScrollbar.concat.min.js"></script>
<script src="assets/js/common.js"></script>


<script>
    $(document).ready(function() {
        AOS.init({
            once: true,
            disable: 'mobile'
        });

    });
    //haeder search bar S
    function openSearch() {
        document.getElementById("searchOverlay").style.display = "block";
    }

    function closeSearch() {
        document.getElementById("searchOverlay").style.display = "none";
    }
    //haeder search bar E

    $(document).ready(function() {
        ///////
        var startDate;
        var endDate;
        var datesArray = ['05/06/2022', '14/06/2022']
        var datesArray1 = ['15/06/2022', '18/06/2022']
        var today = new Date();

        $("#datepicker").datepicker({

            dateFormat: 'dd-mm-yy',
            // numberOfMonths: 12,
            changeMonth: false,
            changeYear: false,
            //    minDate: 0,
            selectMultiple: true,
            beforeShowDay: function(date) {
                var theday = (("0" + date.getDate()).slice(-2)) + '/' +
                    ("0" + (date.getMonth() + 1)).slice(-2) + '/' +
                    date.getFullYear();

                return [true, $.inArray(theday, datesArray) >= 0 ? "specialDate" : ($.inArray(theday, datesArray1) >= 0 ? "specialDate1" : '')];
            }
        }).datepicker("option", "defaultDate", +0);




    });
    $(document).on('click', '.ui-datepicker-next', function() {
        $('#datepicker').datepicker("refresh");
        var day = $('.ui-datepicker-month').text();
        var day = $('.ui-datepicker-month').text();
        //var date = $('#datepicker').datepicker('getDate');
        alert(day);
    })

    $(document).on('click', '.ui-datepicker-prev', function() {
        alert('2s');
    })

    function getMonthFromString(mon) {
        return new Date(Date.parse(mon + " 1, 2012")).getMonth() + 1
    }
</script>

</html>