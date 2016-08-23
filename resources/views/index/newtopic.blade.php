
@extends('layouts.heaer')
@section('content')
    @include('index.header')




<div class="create-topic-page comp-content full-width">
                <div class="comp-content-inside">
                    <div id="competition-intro">

                    </div>




<h1 class="create-head">Create Topic</h1>

<div id="forum-createlocation">
   
</div>

<form action="/forums/topics/new/post" id="create-topic" method="post">    <div class="left">
        <input name="__RequestVerificationToken" type="hidden" value="R-57y0aQzABsQrucXnAJOblGLqbphdfFWgX6l8vS_blkxJtUnIXsK3FTQ3nna3VWXjajJjjVm3jcYHAidU8F5eQBUR81" />
        <input class="text-box single-line" id="Subject" name="subject" type="text" value="" placeholder="Topic Title">
        <input type="hidden" name="forumId" value="1287"/>
        
            <div class="wmd-panel">
        <div id="wmd-button-bar"></div>
        <textarea name="rawMarkdown" class="wmd-input" id="wmd-input"></textarea>
        <textarea name="content" style="display: none"></textarea>
        <div id="wmd-preview" class="wmd-panel wmd-preview post-text-styling"></div>

    </div>
    <script type="text/javascript">
        var generatedHtml = "";

        (function () {
                var converter = Markdown.getSanitizingConverter();

            var hooks = converter.hooks;
            hooks.addNoop("preSafe");
            hooks.chain("postConversion", function (s) { return hooks.preSafe(s); });
            
            var editor = new Markdown.Editor(converter, undefined, {
                strings: {
                    imagedialog: "<p><b>Insert Image</b></p><p>http://example.com/images/diagram.jpg \"optional title\""
                }
            });

            // Add Highlighting and MathJax to a div with generated content
            editor.hooks.chain("onPreviewRefresh", function() {
                // Regenerate the MathJax content
                if (typeof window.MathJax != "undefined") {
                    window.MathJax.Hub.Queue(["Typeset", window.MathJax.Hub]);
                }
            });

            StackExchange.mathjaxEditing.prepareWmdForMathJax(editor, "", ["$"]);

            hooks.chain("postConversion", function(s) {
                generatedHtml = s;
                return s;
            });

            editor.run();
        })();

        $("*[name='content']").parents("form:first").submit(function(e) {
            e.preventDefault();
            $("textarea[name='content']").val(generatedHtml);
            this.submit();
        });
    </script>

    </div>
        <div class="right">
            


<style type="text/css">
    #fileupload-form {
        border: 1px solid #999999;
        padding: 10px;
    }
</style>

<style type="text/css">
    #zombie-form {
        border: 1px solid #999999;
        padding: 10px;
    }
</style>

<div id="file-uploader" data-bind="zombie: uploader, with: uploader">
    <div id="file-drop" class="uploader">

        <div class="uploader-header">
            <input class="uploader-fileupload" type="file" name="fileName" data-bind="visible: fallback" style="display: none" multiple />
            <button class="uploader-add" data-bind="visible: !fallback, click: add"> Add Files...</button>
            <div class="uploader-progress" data-bind="visible: progress" style="display: none">
                <div class="uploader-progress-bar" data-bind="progressbar: percentage"></div>
                <div class="uploader-progress-stats">
                    <span data-bind="text: loadedText"></span> /
                    <span data-bind="text: totalText"></span>
                    <span data-bind="visible: bitrate">
                        (<span data-bind="text: bitrateText"></span>)
                    </span>
                </div>
            </div>
        </div>

        <ul class="uploader-files" data-bind="visible: files().length, foreach: files" style="display: none">
            <li data-bind="attr: { id: 'uploader-file-' + n }, css: { success: done }">
                <ul>
                    <li class="uploader-file-name">
                        <span data-bind="text: name"></span>
                        <span class="uploader-file-size" data-bind="text: sizeText"></span>
                    </li>
                    <li class="uploader-file-progress" data-bind="visible: progress">
                        <div class="uploader-file-progress-bar" data-bind="progressbar: percentage"></div>
                    </li>
                    <li class="uploader-file-status">
                        <div class="uploader-file-buttons _buttons">
                            <a class="button start" data-bind="click: start, visible: canStart, text: startText">Start</a>
                            <a class="button pause" data-bind="click: stop, visible: canStop">Pause</a>
                        </div>
                        <div class="uploader-file-message" data-bind="visible: syncing">Checking Server</div>
                        <div class="uploader-file-message" data-bind="visible: (retry() > 0) && (retry() <= 1)">Retrying in a second...</div>
                        <div class="uploader-file-message" data-bind="visible: (retry() > 1)">Retrying in <span data-bind="text: Math.ceil(retry())"></span> seconds...</div>
                        <div class="uploader-file-message" data-bind="visible: done() && completed() === null">Completing upload</div>
                        <div class="uploader-file-message success" data-bind="visible: completed() === true">Upload complete!</div>
                        <div class="uploader-file-message failure" data-bind="visible: completed() === false">Upload failed</div>
                        <a class="uploader-file-delete" data-bind="click: $parent.remove"></a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>

<script type="text/javascript">
        var totalZombieTokens = 0;
    
    jQuery(function($) {
        var viewModel = {
            uploader: new Kaggle.Zombie({
                url: '/blobs/inbox/forum-message-attachment-files',
                autoUpload: true,
                complete: function() {
                    
                                                                             
                            this.hiddenId = 'blobFileToken[' + totalZombieTokens + ']';
                            var newTokenElement = '<input type="hidden" name="' + this.hiddenId + '" value="' + this.token() + '" />'
                            $('form').append(newTokenElement);
                            totalZombieTokens++;
                            this.completed(true);
                        
                }
            })
        };

        ko.applyBindings(viewModel, document.getElementById("file-uploader"));
    })
</script>
            
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