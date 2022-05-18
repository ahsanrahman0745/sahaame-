<div>
<div class="card border-0 shadow components-section">
            <div class="card-body">     
                <div class="row mb-4">
                    <div class="col-lg-4 col-sm-6">    
<form action="/saveemailtemplate" method="post">
@csrf 
    <h1 class="title">Email Template</h1>
    <div class="field"><label class="label" for="subject">Email Subject</label>
        <input class="form-control" name="subject" id="subject" type="text" value="{{$emailsubject}}"></div>
    <div class="field"><label class="label" for="body">Email Body</label>
        <textarea class="form-control" name="body" id="body">{{$emailbody}}</textarea></div>
    <div><input type="submit" value="Save" class="btn btn-primary"></div>
</form>
</div>
</div>
</div>
</div>
</div>
