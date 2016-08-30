<?php
    use App\lib\Jdf;
?>
@extends('layouts.Main')




@section('content')    
  
    <div id="wrap"><!-- needed for sticky footer -->
        <div id="main">
            <div id='competition'> 
                
                <script type="text/javascript">
                    jQuery(function ($) {
                        $('#comp-header-details h1').textfill({ maxFontPixels: 26, innerTag: 'a' });
                    });
                </script>
                <div id="comp-dash-header" class="comp-sidebar">



                </div>
                <div class="forum-page comp-content full-width">
                    <div class="comp-content-inside">
                        <div id="competition-intro">

                        </div>




                        <div id="forum-page">


                            

                            <div id="forum-search">
                                <form method="Post" action="<?= Url('search/topic'); ?>">
                                    {!! csrf_field() !!}
                                    <input type="text" style="direction:rtl;" name="search" size="50" maxlength="255" placeholder="عنوان موضوع را وارد کرده و سپس اینتر را بفشارید ..."/>
                                </form>
                            </div>


                            <div class='forum-buttons comp-forum-buttons' id="forum-above-buttons">
                                <a href="<?= Url('/users/panel/forum/create'); ?>">ثبت موضوع جدید</a>
                                
                            </div>













                            <div id="topiclist-head" class="forum-head">
                                <div id="topiclist-head-replies" class="score-col">رای ها</div>
                                <div id="topiclist-head-name" class="name-col">عنوان موضوع</div>
                                <div id="topiclist-head-replies" class="replies-col">تعداد پاسخ ها</div>
                                <div id="topiclist-head-views" class="views-col">تعداد بازدیدها</div>
                                <div id="topiclist-head-lastpost" class="lastpost-col">آخرین پست</div>
                            </div>

 


                             
                            @foreach($topic as $topic) 
                            <div style="direction:rtl;" id="topiclist" class="forum">
                                <div>
                                    <div class="topiclist-topic">
                                        <div class="topiclist-topic-score score-col">
                                            {{ $topic->emtyaz }}
                                        </div>
                                        <div style="text-align:center;" class="topiclist-topic-name name-col">
                                          <a href="<?= Url('/showpost/'.$topic->url); ?>" >{{ $topic->title }}</a>
                                        </div>
                                        <div class="topiclist-topic-replies replies-col">
                                            {!! getcount($topic->id) !!}
                                        </div>
                                        <div class="topiclist-topic-views views-col">
                                            {{ $topic->count_view }}
                                        </div>

                                        <?php $post=getpost($topic->id); ?>
                                        <div style="text-align:center;" class="topiclist-topic-lastpost lastpost-col">
                                            <?php

                                                if(strlen($post->matn)>35)
                                                {
                                                    echo substr($post->matn,0,35) .' ...';
                                                }
                                                else
                                                {
                                                    echo $post->matn;
                                                }

                                            ?>
                                            
                                            <br />
                                            <div style="margin-right: 27%; text-align: center; direction: rtl;">
                                                 <?php $Jdf=new Jdf();echo $Jdf->jdate('Y/n/j-H:i:s',$post->date); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
<?php 
    
    use App\AnsewerModel;
    function getcount($id){
        $count=AnsewerModel::where(['id_topics'=>$id,'state'=>1])->count();
        return $count;
    }

    function getpost($id){
        $post=AnsewerModel::where(['id_topics'=>$id,'state'=>1])->orderBy('id','desc')->first();
        // $post=DB::table('post')->where(['id_topics'=>$id,'state'=>1])->orderBy('id','desc')->skip(0)->take(1)->get();
        return $post;
    }

?>