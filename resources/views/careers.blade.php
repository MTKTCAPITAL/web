@extends('template.app')
@section('content')
    <h2>Careers</h2>
    <h3>Sales</h3>
    <p>We are always looking for talented individuals to join our growing company. We operate in a fast paced and entrepreneurial environment, but also have a close-knit culture. Candidates that want to build a career in this type of environment are encouraged to apply. The sale role will focus on prospecting and developing new client relationships. This is an entry level position into a company that is poised to innovate the way businesses obtain financing. <br><br>Job Responsibilities:<br>- You will make outbound sales calls in order to help prospect new sales<br>- Deal with clients as the liaison throughout the entire deal cycle<br>- At times you will be asked to help out other efforts as well<br><br>Some essential skills:<br>- Comfortable working in a dynamic office environment<br>- Any telemarketing experience (or relevant work history)<br>- Strong interpersonal and communication skills<br></p>
    <form class="form-horizontal" role="form" action="http://mtktcapital.com/cart/form_action/first_form" enctype="multipart/form-data" method="post">
        <input type="hidden" name="job_title" value="Sales">
        <div class="form-group">
            <label for="inputName" class="col-sm-3 control-label">Name</label>
            <div class="col-sm-6">
                <input type="text" name="name" class="form-control" id="inputName">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-3 control-label">E-mail</label>
            <div class="col-sm-6">
                <input type="text" name="email" class="form-control" id="inputPassword3">
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputFile" class="col-sm-3 control-label">File input</label>
            <div class="col-sm-6">
                <input type="file" name="images" class="form-control file-input" id="exampeleInputFile">
            </div>
        </div>
        <div class="form-group">
            <div class=" col-sm-offset-3 col-sm-10">
                <button type="submit" class="btn btn-primary">SEND</button>
            </div>
        </div>
    </form>
@stop