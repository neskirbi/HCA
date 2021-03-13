<?php 
    $title ="Main";
    include "head.php";
    include "sidebar.php";
 ?>
 <!--- nota recordar pasar el filtro, buscador y translador de la tabla a php (usar el ejemplo de CoPi1) --->
<!----------        Contenido        ------------> 

       
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left"><strong> Reclutamiento </strong><small> control </small></div> 
            </div>   
<!---------- page content            ------------->
<div class="row">     
  <div class="x_panel">
Mis clientes:<br><!--- esto con el fin de borrar idCliente de la tabla--->
<?php if ($tt_usuario_JTI=="1")           { echo '* JTI<br>';        }?>
<?php if ($tt_usuario_Penafiel=="1")      { echo '* Peñafiel<br>';   }?> 
<?php if ($tt_usuario_KUA=="1")           { echo '* KUA<br>';        }?> 
<?php if ($tt_usuario_Wrigley=="1")       { echo '* Wrigley<br>';}   ?>  
<?php if ($tt_usuario_EFFEM=="1")         { echo '* EFFEM<br>'; }    ?>  
<?php if ($tt_usuario_Mars=="1")          { echo '* Mars<br>'; }     ?>   
  </div>
</div>
<!---------- /page content            ------------->

        <!-- footer content -->
        <footer>
          <div class="pull-right"><a>Reclutamiento - Promotecnicas</a></div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- jQuery Sparklines -->
    <script src="../vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.js"></script>
    <script src="../vendors/jszip/dist/jszip.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>    
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>