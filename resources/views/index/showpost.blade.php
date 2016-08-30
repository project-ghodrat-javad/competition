<?php
    use App\lib\Jdf;
    use App\Http\Controllers\Auth\AuthController;
?>

@extends('layouts.Main')
@section('content')

<?php $co=getComment($showpost->id);
?>



     <div class="topic-header">
        <h1 class="topic">{{ $showpost->title }}</h1>
            <div class="forum-buttons" id="forum-above-buttons">
            </div>
    </div>

    <div id="topicview" class="forum">
            <div class="forum-pages">
            </div>



@foreach($co as $co) 
<div class="post-outer" style="direction:rtl;">
    <a title="permaanchor" class="permaanchor" ></a>
    <table class="post ">
        <tr>
            <td class="postmeta-vote authenticated" rowspan="2">
                <div>
                    <?php
                        if ( Auth::check() )
                        {
                    ?>
                    <a href="<?= Url('/showpost/'.$co->id.'/add'); ?>"><div><img src="<?= asset('resources/images/icon-thumbs-up.ef2a83d6.png') ?>"/></div></a>
                    <?php } ?>
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
                <?php
                    $userinfo=get_user($co->id_users); 
                ?>
                <div class="postmeta-user )">
                    <a class="avatar" href="/iglovikov" title="View Vladimir Iglovikov's profile">
                        <?php
                            if ( $userinfo->img != '' ) {
                                ?>
                                    <img class="avatar-img" src="<?= asset('resources/upload/profile/'.$userinfo->img); ?>" alt="{{ $userinfo->name }}" />
                                <?php
                            }else{ ?> 
                                <img class="avatar-img" src="<?= asset('resources/upload/profile/laravel-logo.png'); ?>" alt="{{ $userinfo->name }}" />
                                <?php
                            }
                        ?>
                    </a>   
                    <!-- laravel-logo.png -->
                    <div class="usermeta">
                        <a class="profilelink" href="/iglovikov" title="View Vladimir Iglovikov&#39;s profile"><?= $userinfo->name; ?></a>
                    </div>
                    
                </div>
            </td>
        </tr>
    </table>
</div><!--post-->
@endforeach




<?php
    if ( Auth::check() )
    {
?>
<div style="margin-top:60px;direction:rtl;">
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
<?php }else{ ?>
        <a href="<?= Url('/login'); ?>" class="btn btn-success"> نظری ثبت نمایید </a>
    <?php } ?>






@endsection
@section('Footer')
    <script type="text/javascript" src="<?= asset('resources/ckeditor/ckeditor.js') ?>"></script>
@endsection
<?php

	use App\AnsewerModel;
    use App\User;

	function getComment($id)
	{
		$comment=AnsewerModel::where(['id_topics'=>$id,'state'=>1])->orderBy('id','desc')->get();
		// AnsewerModel::where('id_topics',$id)->get();
		return $comment;
	}

    function get_user($id)
    {
        $user=User::find($id);
        return $user;
    }

?>