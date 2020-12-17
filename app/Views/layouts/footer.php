<footer class="footer">
    <div class="container-fluid">
        <nav class="float-left">
            <ul>
                <li>
                    <a href="">
                        IFN512B - Pengembangan Aplikasi Web
                    </a>
                </li>
            </ul>
        </nav>
        <div class="copyright float-right" id="date">
            , made with <i class="material-icons">favorite</i> by
            <a href="" target="_blank">Xave, Tasya, Lens, and Mona</a> (Group 3).
        </div>
    </div>
</footer>
<script>
    const x = new Date().getFullYear();
    let date = document.getElementById('date');
    date.innerHTML = '&copy; ' + x + date.innerHTML;
</script>
</div>
</div>
<!--   Core JS Files   -->
<script src="<?php echo base_url(); ?>/assets/js/core/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/core/popper.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/core/bootstrap-material-design.min.js"></script>
<script src="https://unpkg.com/default-passive-events"></script>
<script src="<?php echo base_url(); ?>/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<script async defer src="https://buttons.github.io/buttons.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/plugins/chartist.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/plugins/bootstrap-notify.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/material-dashboard.js?v=2.1.0"></script>
<script>
    $(document).ready(function() {
        $().ready(function() {
            $sidebar = $('.sidebar');

            $full_page = $('.full-page');

            $sidebar_responsive = $('body > .navbar-collapse');

            window_width = $(window).width();

            $('.switch-sidebar-mini input').change(function() {
                $body = $('body');

                $input = $(this);

                if (md.misc.sidebar_mini_active == true) {
                    $('body').removeClass('sidebar-mini');
                    md.misc.sidebar_mini_active = false;

                    $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

                } else {

                    $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

                    setTimeout(function() {
                        $('body').addClass('sidebar-mini');

                        md.misc.sidebar_mini_active = true;
                    }, 300);
                }

                var simulateWindowResize = setInterval(function() {
                    window.dispatchEvent(new Event('resize'));
                }, 180);

                setTimeout(function() {
                    clearInterval(simulateWindowResize);
                }, 1000);

            });
        });
    });
</script>
<script>
    $(document).ready(function() {
        md.initDashboardPageCharts();
    });
</script>
</body>

</html>