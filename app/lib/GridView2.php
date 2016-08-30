<?php
namespace App\lib;
use Illuminate\Html\FormFacade;
use App\lib\Jdf;
use Session;
use App\User;
use App\LanguageModel;
class GridView2
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

                elseif ($array2[$i]=='time_creat') {
                  echo '<td>'.$Jdf->jdate('Y/n/j-H:i:s',$model->$array2[$i]).'</td>'; 
                }

                elseif ($array2[$i]=='state') {

                  if($model->$array2[$i]== '0')
                  {
                    echo '<td style="color:red;"> غیر فعال می باشد </td>';
                  }
                  elseif( $model->$array2[$i] == '1' )
                  {
                    echo '<td style="color:green;"> فعال می باشد </td>';
                  }
                  else
                  {
                    echo '<td>'.$model->$array2[$i].'</td>'; 
                  }

                }
                elseif ( $array2[$i]=='file' ) {
                  echo '<td><a href="'.asset('resources/upload/file/'.$model->$array2[$i]).'">'.$model->$array2[$i].'</a></td>'; 
                }


                elseif ($array2[$i]=='date_st') {

                  echo '<td>'.$Jdf->jdate('Y/n/j-H:i:s',$model->$array2[$i]).'</td>'; 
                }

                elseif ($array2[$i]=='date_finish')
                {
                  echo '<td>'.$Jdf->jdate('Y/n/j-H:i:s',$model->$array2[$i]).'</td>'; 
                }

                elseif ($array2[$i] =='id_users')
                {
                  $username=User::find($model->$array2[$i])['name'];
                  echo '<td>'.$username.'</td>'; 
                }

                elseif ($array2[$i] == 'langs_id_langs') {
                  $namelang=LanguageModel::where('id_langs',$model->$array2[$i])->first()['name'];
                  echo '<td>'.$namelang.'</td>'; 
                }

                elseif($array2[$i]=='roule')
                {
                  if( $model->$array2[$i]!='1' )
                  {
                    echo '<td style="color:blue;"> مشترک </td>';
                  }
                  else
                  {
                    echo '<td style="color:green;"> مدیر </td>'; 
                  }
                }


                elseif ($array2[$i]=='img') {

                  if ($model->$array2[$i] != '') {
                    $imgurl=Url('/resources/upload/profile/'.$model->$array2[$i]);
                    echo '<td><img src="'. $imgurl .'" width="50px;" height="50px;" /></td>';
                  }
                  else
                  {
                    echo '<td>'.$model->$array2[$i].'</td>'; 
                  }
                }

                else
                {
                  echo '<td>'.$model->$array2[$i].'</td>'; 
                }
                
               
            }
          }
          echo '<td>';

          
                    if( $ntable != 'request' )
                    {
                      $url= asset('/admin/'.$ntable.'/'.$model['id'].'/edit');  
                    }

                    
          $url= asset('/admin/'.$ntable.'/'.$model['id'].'/edit'); 

          if($update)
          {
          ?>
          <a href="<?= $url ?>"><img src="<?= url('resources/images/14.gif') ?>" /></a>
          <?php }



                      if( $ntable != 'request' )
                      {
                        $route=asset('/admin/'.$ntable.'/'.$model['id']);
                      }



          $route= asset('/admin/'.$ntable.'/'.$model['id']);  
          // url().'/admin/'.$model['table'].'/'.$model->id;
          ?>
          <img src="<?= asset('resources/images/15.gif'); ?>" onclick="del_row('<?= $route ?>')" />

            
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