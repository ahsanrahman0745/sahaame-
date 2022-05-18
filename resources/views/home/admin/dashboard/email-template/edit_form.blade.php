<?php
    $template = $template_detail;
?>
@include('home/admin/mini-site/include/head')
<link type="text/css" href="{{asset('business/assets/lib/editor/editor.css')}}" rel="stylesheet">
<style>
#rich-textarea {
  height: 300px;
  overflow: auto;
}

.message-body-preview {
    padding: 10px;
    border: 1px solid #ccc;
}
</style>
<body>
   <!-- <livewire-tables:row.user_table>
      </livewire-tables:row.user_table> -->
      @include('home/admin/mini-site/include/dashboard-nav')
   <main class="content">
   @include('home/admin/mini-site/include/dashboard-top-nav')
   <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
   <div class="d-block mb-4 mb-md-0">
      <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
         <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
            <li class="breadcrumb-item">
               <a href="#">
                  <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                     xmlns="http://www.w3.org/2000/svg">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                     </path>
                  </svg>
               </a>
            </li>
            <li class="breadcrumb-item"><a href="#">{{$page_category}} </a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$page_name}}</li>
         </ol>
      </nav>
      <h2 class="h4">{{$page_name}}</h2>
   </div>
</div>
</div>
<!-- All Business Start-->
<div class="row">
    <div class="col-12">
        <div class="card shadow border-0">
            <div class="p-4">
                <form action="{{url('manage/email-template/')}}/{{$template->id}}/update" method='POST'>
                    @csrf
                    @if(session()->has('success'))
                        <div class="text-success text-center">{{ session()->get('success') }}</div>
                    @endif
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Subject</label>
                                <input type="text" name='subject' value='{{$template->subject}}' class='form-control'>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mt-3">
                                <label>Message Body Preview</label>
                                <div class="message-body-preview">
                                    <div class="message-body-preview-outer">
                                        <div class="message-body-preview-inner">
                                        <?php echo $template->body_html ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mt-3">
                                <label>Message Body</label>
                                <div id="rich-textarea"></div>
                                <textarea name="body_json" id="rich-textarea-json" class='form-control d-none' cols="30" rows="10">{{$template->body_json}}</textarea>
                                <textarea name="body_html" id="rich-textarea-field" class='form-control d-none' cols="30" rows="10">{{$template->body_html}}</textarea>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label style='opacity:0'>Title</label>
                                <button class='btn btn-success form-control' >Update Template</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- All Business End-->
@include('home/admin/mini-site/include.footer')
<script src="{{asset('business/assets/lib/editor/editor.js')}}"></script>
<!-- Custom Script -->
<script>
    var options = {
        placeholder: 'Create Your Email Template.',
        theme: 'snow'
    };
    var editor = new Quill('#rich-textarea', options);
    editor.setContents(
        <?php echo $template->body_json?>
    )
    // editor.root.innerHTML = "";
    editor.on('text-change', function() {
        var delta = editor.getContents();
        var json_data = JSON.stringify(delta);
        var html_data = editor.root.innerHTML;
        $('#rich-textarea-json').html(json_data);
        $('#rich-textarea-field').html(html_data);
        // $('.message-body-preview-inner').html(html_data);
    });
    $(document).ready(function() {
        // $("#rich-textarea").Editor();
    });
</script>