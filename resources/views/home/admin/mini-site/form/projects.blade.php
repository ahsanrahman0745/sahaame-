@include('home/admin/mini-site/include/head')
<body>
   <!-- <livewire-tables:row.user_table>
      </livewire-tables:row.user_table> -->
      @include('home/admin/mini-site/include/dashboard-nav')
   <main class="content">
   @include('home/admin/mini-site/include/mini-site-nav')
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
            <li class="breadcrumb-item"><a href="#">All Mini Sites </a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$form_name}}</li>
         </ol>
      </nav>
      <h2 class="h4">{{$form_name}}</h2>
   </div>
</div>
</div>
<!-- All Business Start-->
<div class="row">
    <div class="col-12 pb-5">
        <div class="card shadow border-0 mb-5">
            <div class="p-4">
                @if(session()->has('success'))
                    <div class="text-success text-center" id='success-message'>{{ session()->get('success') }}</div>
                @endif
                <div class="mini-site-form-outer">
                    <div class="mini-site-form-inner">
                        <form action="{{url('/admin/mini-site')}}/{{$business_id}}/projects/add" method='POST' enctype="multipart/form-data">
                            @csrf
                            <div class="mini-site-form-main">
                                <div class="row">
                                    <div class="col-md-6 mb-2">
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" class='form-control' placeholder='Enter Title' required autofill='off' name='title'>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <div class="form-group">
                                            <label>Image</label>
                                            <input type="file" class='form-control' placeholder='Enter Country/ Region' required autofill='off' name='image'>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-12">
                                        <textarea name="detail" id="" cols="30" rows="10" class='form-control' placeholder='Enter Project Detail' ></textarea>
                                    </div>
                                </div>
                                <hr>
                                <div class="row mt-3">
                                    <div class="col-md-4 mb-2">
                                        <button type='submit' class='btn btn-success'>Save</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- All Business End-->
@include('home/admin/mini-site/include.footer')