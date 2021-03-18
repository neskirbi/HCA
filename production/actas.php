<?php
    $title ="Tickets | ";
    include "head.php";
    include "sidebar.php";
     $id= $_SESSION['user_log']; 
?>

   <div class="page-title">
      <div class="title_left">
        
      </div>
    </div>
    <div class="clearfix"></div>

    <div class="row">
      <div  valign="middle" style="width:95%; margin:0 auto;">
        <div class="x_panel">
          <div class="x_title">
              <div class="row">
                <div class="col-xs-12 invoice-header">
                  <h3>
                  <i class="fa fa-globe"> Head Count <small>MARS</small></i> 
                  </h3>
                </div>
                
              </div>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <section class="content invoice">
              <div class="row">
                <div class="col-xs-12 table">                 
                  <table class="table table-responsive jambo_table table-striped table-bordered bulk_action">
  
                    <thead>  

                            <th>Cedis</th>
                            <th class="text-center">Actas Subidas</th>
                            <th class="text-center">Actas Autorizadas</th>
                            <th class="text-center">Actas Erroneas</th>
    
                      </thead>    
                        <?php
                        $query = "declare @dni varchar(max),@sql varchar(max)
                        set @dni=''''+(Select REPLACE((SELECT zona FROM usuaripsPromo where nombre='".$id."'),',',''','''))+''''
                        set @sql='
                        declare @actas varchar(MAX),@actas_status Varchar(MAX)
                        SELECT
                        usu.us_nombre,
                        actas = (SELECT  actas +'',''    FROM usuarionom where us_nombre=usu.us_nombre 
                        and actas!='''' FOR XML PATH('''')) ,
                        actas_status = (SELECT actas_status +'','' FROM usuarionom where
                        us_nombre=usu.us_nombre and actas_status!='''' FOR XML PATH(''''))             
                        FROM usuarionom as usu
                        where usu.dni in ('+@dni+')
                        group by usu.us_nombre '
                        EXEC (@sql)";




                        $result = sqlsrv_query($conn, $query);
                        $total = array('subidas' => 0,'autorizadas' => 0, 'erroneas' => 0); 
                        while ($row = sqlsrv_fetch_array($result)) {
                          
                          
                          $actas=json_decode('['.$row['actas'].'{}]',true);
                         
                          
                          $actas_status=json_decode('['.$row['actas_status'].'{}]',true);
                          
                         
                          $subidas=0;
                          $autorizadas=0;
                          $erroneas=0;

                          foreach ($actas as $key => $value) {
                            if(isset($actas[$key]['1'])){
                              $subidas++;
                            }
                            if(isset($actas[$key]['2'])){
                              $subidas++;
                            }
                            if(isset($actas[$key]['3'])){
                              $subidas++;
                            }
                            
                          }

                          foreach ($actas_status as $key => $value) {
                            for($st=1;$st<=3;$st++){
                              if(isset($actas_status[$key])){
                                
                                

                                if(isset($actas_status[$key][$st]['cap']))
                                switch ($actas_status[$key][$st]['cap']){
                                  case '1':
                                  $autorizadas++;
                                  break;
                                  case '0':
                                  $erroneas++;
                                  break;
                                }
                                if(isset($actas_status[$key][$st]['leg']))
                                switch ($actas_status[$key][$st]['leg']){
                                  case '1':
                                  $autorizadas++;
                                  break;
                                  case '0':
                                  $erroneas++;
                                  break;
                                }
                              }
                           
                            }
                            
                          }

                          $total['subidas']+=$subidas;
                          $total['autorizadas']+=$autorizadas;
                          $total['erroneas']+=$erroneas;
                          
                          
                            ?>
                          </tbody>  
                            <tr>
                               <td class=""><b><?php echo $row['us_nombre'] ?></b></td>
                               <td class="text-center"><b><?php echo $subidas; ?></b></td>
                               <td class="text-center"><b><?php echo $autorizadas; ?></b></td>
                               <td class="text-center"><b><?php echo $erroneas; ?></b></td>
                                
                            </tr>
                            <?php
                        }
                        ?>
                        <tr>
                            <td><b>Total</b></td>
                            <td class="text-center"><b><?php echo $total['subidas'] ?></b></td>
                            <td class="text-center"><b><?php echo $total['autorizadas'] ?></b></td>
                            <td class="text-center"><b><?php echo $total['erroneas'] ?></b></td>
                            
                           
                        </tr>
                        </tbody>
                    </table>
                    </div><!-- /.col -->
                    </div><!-- /.row -->

                      

                  
                    </section>
                  </div>
                </div>
              </div>
            </div>  
  
<?php include "footer.php"; ?>