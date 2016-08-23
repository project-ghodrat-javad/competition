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






     <div class="topic-header">
        <h1 class="topic">{{ $showpost->title }}</h1>
            <div class="forum-buttons" id="forum-above-buttons">
            </div>
    </div>

    <div id="topicview" class="forum">
            <div class="forum-pages">
            </div>








<?php $co=getComment($showpost->id);
?>
@foreach($co as $co) 
<div class="post-outer">
    <a title="permaanchor" class="permaanchor" name="post130521"></a>
    <table class="post ">
        <tr>
            <td class="postmeta-vote authenticated" rowspan="2">
                <div>
                    <div><img src="<?= asset('resources/images/icon-thumbs-up.ef2a83d6.png') ?>" /></div>
                    <label title="Votes">{{ $co->emtyaz }}</label>
                    <div class="votes-label">امتیاز نوشته</div>
                </div>
            </td>
            <td class="postbox">
                <div class="postcontent">
                    
                    {!! $co->matn !!}

                </div>
            </td>
            <!-- postbox -->
        </tr>
        <tr>
            
            <td class="postmeta">
                <div class="postmeta-date">
                    <span><?php $Jdf=new Jdf();echo $Jdf->jdate('Y/n/j-H:i:s',$co->date); ?></span>
                </div>
                
                <div class="postmeta-user )">
                    <a class="avatar" href="/iglovikov" title="View Vladimir Iglovikov's profile">
                        <img class="avatar-img" src="https://kaggle2.blob.core.windows.net/avatars/thumbnails/286455-fb.jpg" alt="Vladimir Iglovikov's image" />
                    </a>
                    <div class="usermeta">
                        <a class="profilelink" href="/iglovikov" title="View Vladimir Iglovikov&#39;s profile">Vladimir Iglovikov</a>
                    </div>
                    
                </div>
            </td>
        </tr>
    </table>
</div><!--post-->
@endforeach







<div style="margin-top:60px;">
	{!! Form::open(['url'=>'/forum','files'=>true]) !!}
        <div>
            {!! Form::textarea('matn','',['class'=>'ckeditor']) !!}
        </div>


        <input type="hidden" name="id_topics" value="{{ $showpost->id }}">
        <input type="hidden" name="url" value="{{ $showpost->url }}">
        <div class="form-input" style="margin-top:20px;">
            {!! Form::label('file','انتخاب فایل') !!}
            {!! Form::file('file',['style'=>'direction:ltr;width:250px;']) !!}
        </div>


        <div class="form-input" style="margin-top:30px;margin-bottom:50px;">
            {!! Form::submit('ثبت نظر',['class'=>'btn btn-success','style'=>'margin-right:20px;'])!!}
        </div>
    {!! Form::close() !!}
</div>






@endsection
@section('Footer')
    <script type="text/javascript" src="<?= asset('resources/ckeditor/ckeditor.js') ?>"></script>
@endsection
<?php

	use App\AnsewerModel;

	function getComment($id)
	{
		$comment=AnsewerModel::where(['id_topics'=>$id,'state'=>1])->orderBy('id','desc')->get();
		// AnsewerModel::where('id_topics',$id)->get();
		return $comment;
	}

?>