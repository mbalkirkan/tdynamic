@extends('admin.layout')
@section('content')
    <div class="row">
        @if(session('success'))
            <div class="alert alert-success">{{session('success')}}</div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger">{{session('error')}}</div>
        @endif

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
{{--                            <button type="submit" class="btn btn-sm btn-info justify-content-end align-right">--}}
{{--                                Değişiklikleri Kayedet--}}
{{--                            </button>--}}
                        </div>
                        <!--end::Toolbar-->
                    </div>
                </div>
            </div>
        @foreach($portfolios as $portfolio)

            <div class="col-md-4 mb-5">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <h3 class="card-title">{{$portfolio->title}}</h3>
                        <div class="card-toolbar">

                            <button type="button" class="btn btn-sm btn-light slider-edit-button" data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_2" data-id="{{$portfolio->id}}">
                                Düzenle
                            </button>
                            <a href="{{route('admin.portfolio.delete', ['id' => $portfolio->id])}}"
                               class="btn btn-sm btn-light ms-5">Sil</a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="card-p mb-10">

                            <div class="text-center px-4">
                                <img class="mw-100 mh-300px card-rounded-bottom" alt=""
                                     src="{{asset('/uploads/portfolio/'.$portfolio->image)}}"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-header">
                    <h3 class="card-title">Başlık</h3>
                    <div class="card-toolbar">
                        <button type="button" class="btn btn-sm btn-light" data-bs-toggle="modal"
                                data-bs-target="#kt_modal_1">
                            Yeni Ekle
                        </button>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="card-p mb-10">

                        <div class="text-center px-4">
                            <img class="mw-100 mh-300px card-rounded-bottom" alt=""
                                 src="{{asset('/admin/assets/media/auth/chart-graph.png')}}"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" id="kt_modal_1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Portfolio Ekle</h3>

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                         aria-label="Close">
                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>
                <form action="{{route('admin.portfolio.add')}}" method="post" enctype="multipart/form-data">
                    <div class="modal-body">

                        <div class="mb-10">
                            <label for="exampleFormControlInput1" class="form-label">Resim (600x800)</label>
                            <div class="input-group mb-5">
                                <input type="file" class="form-control" name="image" placeholder="Dosya"
                                       aria-label="Dosya"
                                       aria-describedby="basic-addon1"/>
                            </div>
                        </div>

                        <div class="mb-10">
                            <label for="exampleFormControlInput1" class="required form-label">Başlık</label>
                            <input type="text" name="title" class="form-control form-control-solid"
                                   placeholder="Başlık"/>
                        </div>
                        <div class="mb-10">
                            <label for="exampleFormControlInput1" class="required form-label">Alt Başlık</label>
                            <input type="text" name="sub_title" class="form-control form-control-solid"
                                   placeholder="Alt Başlık"/>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Kapat</button>
                        <button type="submit" class="btn btn-primary">Kaydet</button>
                    </div>
                    @csrf
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" id="kt_modal_2">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Portfolio Düzenle</h3>
                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                         aria-label="Close">
                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>
                <form action="{{route('admin.portfolio.update')}}" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <input type="text" hidden name="id" id="update_id">
                        <div class="mb-10">
                            <label for="exampleFormControlInput1" class="form-label">Resim (600x800)</label>
                            <div class="input-group mb-5">
                                <input type="file" class="form-control" name="image" placeholder="Dosya"
                                       aria-label="Dosya"
                                       aria-describedby="basic-addon1"/>
                            </div>
                        </div>
                        <div class="mb-10">
                            <label for="exampleFormControlInput1" class="required form-label">Başlık</label>
                            <input type="text" name="title" class="form-control form-control-solid"
                                   placeholder="Başlık"/>
                        </div>

                        <div class="mb-10">
                            <label for="exampleFormControlInput1" class="required form-label">Alt Başlık</label>
                            <input type="text" name="sub_title" class="form-control form-control-solid"
                                   placeholder="Alt Başlık"/>
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Kapat</button>
                        <button type="submit" class="btn btn-primary">Güncelle</button>
                    </div>
                    @csrf
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
            $('.slider-edit-button').click(function () {
                var id = $(this).data('id');
                $.ajax({
                    url: '{{route('admin.portfolio.get')}}',
                    type: 'GET',
                    data: {
                        id: id,
                        _token: '{{csrf_token()}}'
                    },
                    success: function (response) {
                        $('#kt_modal_2 input[name="id"]').val(response.id);
                        $('#kt_modal_2 input[name="sub_title"]').val(response.sub_title);
                        $('#kt_modal_2 input[name="title"]').val(response.title);
                    }
                });
            });
        });
    </script>

@endsection
