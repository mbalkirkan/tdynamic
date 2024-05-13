@extends('admin.layout')

@section('content')
    <div class="row">
        @if(session('success'))
            <div class="alert alert-success">{{session('success')}}</div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger">{{session('error')}}</div>
        @endif

        <form class="row" action="{{route('admin.header.update')}}" method="post" enctype="multipart/form-data">
            <div class="col-md-12 mb-5">
                <div class="card">
                    <div class="card-header py-5">
                        <!--begin::Title-->
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold text-gray-900">Yönetim Paneli</span>
                            <span class="text-gray-500 mt-1 fw-semibold fs-6">Hoşgeldin, Admin</span>
                        </h3>
                        <!--end::Title-->
                        <!--begin::Toolbar-->
                        <div class="card-toolbar">
                            <button type="submit" class="btn btn-sm btn-info justify-content-end align-right">Değişiklikleri Kayedet</button>
                        </div>
                        <!--end::Toolbar-->
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <h3 class="card-title">Temel</h3>
                    </div>
                    <div class="card-body p-0">
                        <div class="card-p mb-10">
                            <div class="mb-10">
                                <label for="exampleFormControlInput1" class="required form-label">Icon</label>
                                <div class="input-group mb-5">
                                    <input type="file" class="form-control" name="icon" placeholder="Dosya"
                                           aria-label="Dosya"
                                           aria-describedby="basic-addon1"/>
                                </div>
                            </div>


                            <div class="mb-10">
                                <label for="exampleFormControlInput1" class="required form-label">Başlık</label>
                                <input type="text" name="title" value="{{$header->title}}" class="form-control form-control-solid"
                                       placeholder="Başlık"/>
                            </div>

                            <div class="mb-10">
                                <label for="exampleFormControlInput1" class="required form-label">Alt Başlık</label>
                                <input type="text" name="sub_title" value="{{$header->sub_title}}" class="form-control form-control-solid"
                                       placeholder="Alt Başlık"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            @csrf
        </form>

    </div>
@endsection
