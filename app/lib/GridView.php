<?php
namespace App\lib;
//use Illuminate\Html\FormFacade;
use App\lib\Jdf;
use App\LanguageModel;
use Session;

class GridView
{
   public static function view($array1,$array2,$model,$update=true,$total,$ntable)
   {
      if(isset($model[0]))
      {
         
         $Jdf=new Jdf();
       ?>
       <table id="tbl_product" class="table table-striped" >
        <tr>
          <?php
          foreach($array1 as $key=>$value) :
            ?>
          <td style="background:#48adff;font-family:Yekan;color:#ffffff;"><?= $value ?></td>
          <?php endforeach; ?>
        </tr>

        <?php
         $j=0;
         foreach ($model as $model) 
         {
          ?><tr style=" border-bottom: 1px solid #48ADFF;"><?php
          $j++;
          for($i=0;$i<sizeof($array2);$i++)
          {
            if($array2[$i]=='-')
            {
              echo '<td >'.$j.'</td>';
            }
            else 
              {
                if($array2[$i]=='date')
                {
                  echo '<td>'.$Jdf->jdate('Y/n/j-H:i:s',$model->$array2[$i]).'</td>'; 
                }

                elseif ($array2[$i]=='date_st') {

                  echo '<td>'.$Jdf->jdate('Y/n/j-H:i:s',$model->$array2[$i]).'</td>'; 
                }

                elseif ($array2[$i]=='date_finish')
                {
                  echo '<td>'.$Jdf->jdate('Y/n/j-H:i:s',$model->$array2[$i]).'</td>'; 
                }

                elseif ( $array2[$i]=='file' ) {
                  echo '<td><a href="'.asset('resources/upload/file/'.$model->$array2[$i]).'">'.$model->$array2[$i].'</a></td>'; 
                }
                
                elseif ($array2[$i] == 'name') {
                  echo '<td><a href="'.asset('resources/upload/file/'.$model->$array2[$i]).'">'.$model->$array2[$i].'</a></td>'; 
                }

                else
                {
                  echo '<td>'.$model->$array2[$i].'</td>'; 
                }
                
               
            }
          }
          echo '<td>';
          // url().'/admin/'.$model['table'].'/'.$model->id;
          if ($ntable=='delete/file') {
            $route= asset('/admin/'.$ntable.'/'.$model['id']);
          ?>
            <a href="<?= $route ?>"><img src="<?= asset('resources/images/15.gif'); ?>"/></a>
          <?php
            }
            elseif ($ntable=='panel/delete/file') {
              $route= asset('/users/'.$ntable.'/'.$model['id']);
              ?>
                 <a href="<?= $route ?>"><img src="<?= asset('resources/images/15.gif'); ?>"/></a>
              <?php
            }
            elseif ($ntable=='panel/datascript/delete') {
              $route= asset('/users/'.$ntable.'/'.$model['id']);
              ?>
                <a href="<?= $route ?>"><img src="<?= asset('resources/images/15.gif'); ?>"/></a>
              <?php
            }
            elseif ( $ntable=='panel/member/datascript/delete' ) {
              $route= asset('/users/'.$ntable.'/'.$model['id']);
              ?>
                <a href="<?= $route ?>"><img src="<?= asset('resources/images/15.gif'); ?>"/></a>
              <?php
            }
            elseif ($ntable=='delete/data/script') {
              $route= asset('/admin/'.$ntable.'/'.$model['id']);
              ?>
              <a href="<?= $route ?>"><img src="<?= asset('resources/images/15.gif'); ?>"/></a>
              <?php 
            }
            else{ 
              $route= asset('/admin/'.$ntable.'/'.$model['id_langs']);
          ?>
            <img src="<?= asset('resources/images/15.gif'); ?>" onclick="del_row('<?= $route ?>')" />
          <?php } ?>
            
          </td>
          </tr><?php
         }
 
        ?>

        </table>
 <?php

           $token=Session::token();

           ?>
        <script type="text/javascript">
        function del_row(route)
        {
          if (!confirm("آیا از حذف این رکورد اطمینان دارید !"))
          return false;
           var form = document.createElement("form");
            form.setAttribute("method", "POST");
            form.setAttribute("action",route);
            

            var hiddenField1 = document.createElement("input");
            hiddenField1.setAttribute("name", "_method");
            hiddenField1.setAttribute("value",'DELETE');
            form.appendChild(hiddenField1);

            var hiddenField2 = document.createElement("input");
            hiddenField2.setAttribute("name", "_token");
            hiddenField2.setAttribute("value",'<?= $token ?>');
            form.appendChild(hiddenField2);

            document.body.appendChild(form);
            form.submit();
            document.body.removeChild(form);
        }
        </script>

        
       <?php
return true;
      }
      else
      {
         return false;
      }
   }
}