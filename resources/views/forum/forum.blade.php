<?php
    use App\lib\Jdf;
?>
@extends('layouts.heaer')
@section('content')

    
    @include('index.header')

                            <div id="forum-search">
                                <form method="get" action="https://www.google.com/search">
                                    <input type="text" name="q" size="25" maxlength="255" value="" />
                                    <input type="submit" value="جستجو" />
                                    <input type="hidden"  name="sitesearch" value="www.kaggle.com/c/integer-sequence-learning/forums" />
                                </form>
                            </div>


                            <div class='forum-buttons comp-forum-buttons' id="forum-above-buttons">
                                <a href="/forums/topics/new?forumId=1316">ثبت موضوع جدید</a>
                                <a href="/forums/watches/stop?forumId=1316" title="Stop receiving e-mail updates when new posts occur in this forum">شروع گفتگو</a>
                                {{--<a href="/forums/watches/stop?forumId=1316" title="Stop receiving e-mail updates when new posts occur in this forum">Stop Watching</a>--}}
                            </div>













                            <div id="topiclist-head" class="forum-head">
                                <div id="topiclist-head-replies" class="score-col">رای ها</div>
                                <div id="topiclist-head-name" class="name-col">9 موضوع و 16 پست</div>
                                <div id="topiclist-head-replies" class="replies-col">تعداد پاسخ ها</div>
                                <div id="topiclist-head-views" class="views-col">تعداد بازدیدها</div>
                                <div id="topiclist-head-lastpost" class="lastpost-col">آخرین پست</div>
                            </div>

 


                             
                            @foreach($topic as $topic) 
                            <div id="topiclist" class="forum">
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