
</section>

</div>

<footer class="main-footer">
    <div class="pull-left hidden-xs">
        <b>Version</b> 2.2.0
    </div>
    <strong>Copyright &copy; <?echo date("Y")?> <a href="http://alatheertech.com.com">شركة الاثير تك</a>.</strong> All rights reserved.
</footer>

<div class="control-sidebar-bg"></div>
</div>


<script src="<?php echo base_url("public/bc/")?>/plugins/select2/select2.full.min.js"></script>

<script src="<?php echo base_url("public/bc/")?>/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url("public/bc/")?>/plugins/datatables/dataTables.bootstrap.min.js"></script>

<script>
    $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });
        $(".select2").select2();

    });
</script>





<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="<?php echo base_url("public/bc/")?>plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url("public/bc/")?>plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url("public/bc/")?>plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url("public/bc/")?>plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->

<script src="<?php echo base_url("public/bc/")?>plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="<?php echo base_url("public/bc/")?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url("public/bc/")?>plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url("public/bc/")?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url("public/bc/")?>plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url("public/bc/")?>plugins/fastclick/fastclick.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url("public/bc/")?>dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url("public/bc/")?>dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url("public/bc/")?>dist/js/demo.js"></script>

</body>
</html>