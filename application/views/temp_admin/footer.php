</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
  <strong>Copyright &copy; 2014-2021 <br>
    AdminLTE.io.</strong>
  All rights reserved.
  <div class="float-right d-none d-sm-inline-block">
    <b>Version</b> 3.2.0
  </div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!-- plugins:js -->
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.2/classic/ckeditor.js"></script>
<script>
  ClassicEditor
    .create(document.querySelector('#isi'))
    .catch(error => {
      console.error(error);
    });
</script>
<!-- jQuery -->
<script src="<?= base_url(); ?>asset_admin/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url(); ?>asset_admin/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge("uibutton", $.ui.button);
</script>
<!-- Bootstrap 4 -->
<script src="<?= base_url(); ?>asset_admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?= base_url(); ?>asset_admin/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?= base_url(); ?>asset_admin/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?= base_url(); ?>asset_admin/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= base_url(); ?>asset_admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url(); ?>asset_admin/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?= base_url(); ?>asset_admin/plugins/moment/moment.min.js"></script>
<script src="<?= base_url(); ?>asset_admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url(); ?>asset_admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?= base_url(); ?>asset_admin/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url(); ?>asset_admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url(); ?>asset_admin/dist/js/adminlte.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?= base_url(); ?>asset_admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>asset_admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url(); ?>asset_admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url(); ?>asset_admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url(); ?>asset_admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url(); ?>asset_admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url(); ?>asset_admin/plugins/jszip/jszip.min.js"></script>
<script src="<?= base_url(); ?>asset_admin/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= base_url(); ?>asset_admin/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= base_url(); ?>asset_admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url(); ?>asset_admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url(); ?>asset_admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url(); ?>asset_admin/dist/js/pages/dashboard.js"></script>
<!-- Code injected by live-server -->
<script>
  // <![CDATA[  <-- For SVG support
  if ('WebSocket' in window) {
    (function() {
      function refreshCSS() {
        var sheets = [].slice.call(document.getElementsByTagName("link"));
        var head = document.getElementsByTagName("head")[0];
        for (var i = 0; i < sheets.length; ++i) {
          var elem = sheets[i];
          var parent = elem.parentElement || head;
          parent.removeChild(elem);
          var rel = elem.rel;
          if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
            var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
            elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
          }
          parent.appendChild(elem);
        }
      }
      var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
      var address = protocol + window.location.host + window.location.pathname + '/ws';
      var socket = new WebSocket(address);
      socket.onmessage = function(msg) {
        if (msg.data == 'reload') window.location.reload();
        else if (msg.data == 'refreshcss') refreshCSS();
      };
      if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
        console.log('Live reload enabled.');
        sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
      }
    })();
  } else {
    console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
  }
  // ]]>
</script>
<!-- Page specific script -->
<script>
  $(function() {
    $("#example1").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>

</html>