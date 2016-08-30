
@extends('layouts.heaer')
@section('content')
    @include('index.header')




<div class="create-topic-page comp-content full-width">
                <div class="comp-content-inside">
                    <div id="competition-intro">

                    </div>




<h1 class="create-head">ایجاد موضوع جدید</h1>

<div id="forum-createlocation">
   
</div>

<form action="" id="create-topic" method="post">    
    <div class="left">
        <input class="text-box single-line" id="Subject" name="subject" type="text" >
        <input type="hidden" name="forumId" value="1287"/>
        
        <div class="wmd-panel">
        <div id="wmd-button-bar"></div>
        
        <textarea name="content" style=""></textarea>
        <div id="wmd-preview" class="wmd-panel wmd-preview post-text-styling"></div>
        </div>
    </div>

    <div class="right">
            



    <div id="file-uploader" data-bind="zombie: uploader, with: uploader">
        <div id="file-drop" class="uploader">

            <div class="uploader-header">
                <input class="uploader-fileupload" type="file" name="fileName" data-bind="visible: fallback" style="display: none" multiple />
            </div>

            
        </div>
    </div>        
</div>
    <div class="forum-buttons _buttons" style="margin-left:0; padding-left:0; padding-top:1em; clear:both;">
        <input type="submit" value="Create Topic" />
    </div>
</form>                </div>
            </div>  
        </div>

            </div>
    </div> 


@endsection