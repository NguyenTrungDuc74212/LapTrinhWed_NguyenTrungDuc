@extends('admin.layout.index')
@section('content')
      <div class="col-lg-3"></div>
            <div class="col-lg-9">
             <div class="chuyenmuc">
               <div class="row">
                 <div class="col-lg-6">
                   <h3>Quản lý thể loại</h3>
                 </div>
                <div class="col-lg-6 text-right">
                  <a href="admin/theloai/themmoi" class="btn btn-success"><i class="fas fa-plus"></i>
                  Thêm mới</a>
                </div> 
               </div>
               <hr>
               <div class="row">
                  <div class="col-lg-6">
                   <div class="btn-group">
                     <button type="button" class="btn btn-default card">Hiển thị</button>
                     <button type="button" class="btn btn-primary|secondary|success|danger|warning|info|light|dark btn-lg|btn-sm dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       <span class="sr-only">Toggle Dropdown</span>
                     </button>
                     <div class="dropdown-menu">
                       <a class="dropdown-item" href="#">Action</a>
                       <a class="dropdown-item" href="#">Another action</a>
                       <a class="dropdown-item" href="#">Something else here</a>
                       <div class="dropdown-divider"></div>
                       <a class="dropdown-item" href="#">Separated link</a>
                     </div>
                   </div>                 
                 </div> 
                  <div class="col-lg-6 text-right">
                    <form>
                      <label>Tìm kiếm</label>
                      <input type="text" name="">
                    </form>
                </div> 
               </div> <!-- end row2 -->
              
 <div class="row"> 
  <div class="col-lg-12"> 
   <div class="card"> 
    <div class="card-body"> 
     <table class="table table-striped table-bordered table-list"> 
      <thead> 
       <tr> 
        <th class="text-center"><em class="fa fa-cog"></em>
        </th> 
        <th class="hidden-xs">STT</th> 
        <th>Tên</th> 
       </tr> 
      </thead> 
      <tbody> 
    @foreach($theloai as $tl)
     <tr>
       <td align="center"><a class="btn btn-primary"><em class="fas fa-pencil-alt"></em></a> <a class="btn btn-danger"><em class="fa fa-trash"></em></a>
       </td> 
       <td class="hidden-xs">{{$tl->id}}</td> 
       <td>{{$tl->tentheloai}}</td> 
      </tr> 
      @endforeach
     </tbody></table> 
    </div> 
    <div class="panel-footer card bg-light"> 
     <div class="row"> 
      <div class="col col-xs-4 text-left"><p>Hiển thị {{$theloai->currentPage()}} của {{$theloai->lastPage()}}</p></div> 
      <div class="col col-xs-8 text-right"> 
        {{$theloai->links()}}
      </div> 
     </div> 
    </div> 
   </div> 
  </div> 
</div>
@endsection