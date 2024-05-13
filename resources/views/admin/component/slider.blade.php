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
        @foreach($sliders as $slider)

            <div class="col-md-4 mb-5">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <h3 class="card-title">{{$slider->title}}</h3>
                        <div class="card-toolbar">

                            <button type="button" class="btn btn-sm btn-light slider-edit-button" data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_2" data-id="{{$slider->id}}">
                                Düzenle
                            </button>
                            <a href="{{route('admin.slider.delete', ['id' => $slider->id])}}"
                               class="btn btn-sm btn-light ms-5">Sil</a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="card-p mb-10">

                            <div class="text-center px-4">
                                <img class="mw-100 mh-300px card-rounded-bottom" alt=""
                                     src="{{asset('/uploads/slider/'.$slider->image)}}"/>
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
                    <h3 class="modal-title">Slider Ekle</h3>

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                         aria-label="Close">
                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>
                <form action="{{route('admin.slider.add')}}" method="post" enctype="multipart/form-data">
                    <div class="modal-body">

                        <div class="mb-10">
                            <label for="exampleFormControlInput1" class="form-label">Resim (1951x1246)</label>
                            <div class="input-group mb-5">
                                <input type="file" class="form-control" name="image" placeholder="Dosya"
                                       aria-label="Dosya"
                                       aria-describedby="basic-addon1"/>
                            </div>
                        </div>

                        <div class="mb-10">
                            <label for="exampleFormControlInput1" class="required form-label">Alt Başlık</label>
                            <input type="text" name="sub_title" class="form-control form-control-solid"
                                   placeholder="Alt Başlık"/>
                        </div>

                        <div class="mb-10">
                            <label for="exampleFormControlInput1" class="required form-label">Başlık</label>
                            <input type="text" name="title" class="form-control form-control-solid"
                                   placeholder="Başlık"/>
                        </div>


{{--                        <div class="mb-10">--}}
{{--                            <label for="exampleFormControlInput1" class="required form-label">Metin</label>--}}
{{--                            <input type="text" name="description" class="form-control form-control-solid"--}}
{{--                                   placeholder="Metin"/>--}}
{{--                        </div>--}}
{{--                        <div class="mb-10">--}}
{{--                            <label for="exampleFormControlInput1" class="form-label">Video Bağlantısı</label>--}}
{{--                            <div class="input-group mb-5">--}}

{{--                                <span class="input-group-text" id="basic-addon1">@</span>--}}
{{--                                <input type="text" name="video_url" class="form-control" placeholder="Youtube"--}}
{{--                                       aria-label="Username"--}}
{{--                                       aria-describedby="basic-addon1"/>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="mb-10">--}}
{{--                            <label for="exampleFormControlInput1" class="form-label">Sağ Buton</label>--}}
{{--                            <div class="input-group mb-5">--}}

{{--                                <input type="text" name="right_button_text" class="form-control" placeholder="Metin"--}}
{{--                                       aria-label="Metin"--}}
{{--                                       aria-describedby="basic-addon1"/>--}}
{{--                                <input type="text" name="right_button_url" class="form-control" placeholder="Bağlantı"--}}
{{--                                       aria-label="Bağlantı"--}}
{{--                                       aria-describedby="basic-addon1"/>--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        <div class="mb-10">
                            <label for="exampleFormControlInput1" class="form-label">Sıralama</label>
                            <input type="text" name="order" class="form-control form-control-solid"
                                   placeholder="Sıralama"/>
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
                    <h3 class="modal-title">Slider Düzenle</h3>
                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                         aria-label="Close">
                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>
                <form action="{{route('admin.slider.update')}}" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <input type="text" hidden name="id" id="update_id">
                        <div class="mb-10">
                            <label for="exampleFormControlInput1" class="form-label">Resim (1951x1246)</label>
                            <div class="input-group mb-5">
                                <input type="file" class="form-control" name="image" placeholder="Dosya"
                                       aria-label="Dosya"
                                       aria-describedby="basic-addon1"/>
                            </div>
                        </div>

                        <div class="mb-10">
                            <label for="exampleFormControlInput1" class="required form-label">Alt Başlık</label>
                            <input type="text" name="sub_title" class="form-control form-control-solid"
                                   placeholder="Alt Başlık"/>
                        </div>

                        <div class="mb-10">
                            <label for="exampleFormControlInput1" class="required form-label">Başlık</label>
                            <input type="text" name="title" class="form-control form-control-solid"
                                   placeholder="Başlık"/>
                        </div>


{{--                        <div class="mb-10">--}}
{{--                            <label for="exampleFormControlInput1" class="required form-label">Metin</label>--}}
{{--                            <input type="text" name="description" class="form-control form-control-solid"--}}
{{--                                   placeholder="Metin"/>--}}
{{--                        </div>--}}
{{--                        <div class="mb-10">--}}
{{--                            <label for="exampleFormControlInput1" class="form-label">Video Bağlantısı</label>--}}
{{--                            <div class="input-group mb-5">--}}

{{--                                <span class="input-group-text" id="basic-addon1">@</span>--}}
{{--                                <input type="text" name="video_url" class="form-control" placeholder="Youtube"--}}
{{--                                       aria-label="Username"--}}
{{--                                       aria-describedby="basic-addon1"/>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="mb-10">--}}
{{--                            <label for="exampleFormControlInput1" class="form-label">Sağ Buton</label>--}}
{{--                            <div class="input-group mb-5">--}}

{{--                                <input type="text" name="right_button_text" class="form-control" placeholder="Metin"--}}
{{--                                       aria-label="Metin"--}}
{{--                                       aria-describedby="basic-addon1"/>--}}
{{--                                <input type="text" name="right_button_url" class="form-control" placeholder="Bağlantı"--}}
{{--                                       aria-label="Bağlantı"--}}
{{--                                       aria-describedby="basic-addon1"/>--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        <div class="mb-10">
                            <label for="exampleFormControlInput1" class="form-label">Sıralama</label>
                            <input type="text" name="order" class="form-control form-control-solid"
                                   placeholder="Sıralama"/>
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
                    url: '{{route('admin.slider.get')}}',
                    type: 'GET',
                    data: {
                        id: id,
                        _token: '{{csrf_token()}}'
                    },
                    success: function (response) {
                        $('#kt_modal_2 input[name="id"]').val(response.id);
                        $('#kt_modal_2 input[name="sub_title"]').val(response.sub_title);
                        $('#kt_modal_2 input[name="title"]').val(response.title);
                        // $('#kt_modal_2 input[name="description"]').val(response.description);
                        // $('#kt_modal_2 input[name="video_url"]').val(response.video_url);
                        // $('#kt_modal_2 input[name="right_button_text"]').val(response.right_button_text);
                        // $('#kt_modal_2 input[name="right_button_url"]').val(response.right_button_url);
                        $('#kt_modal_2 input[name="order"]').val(response.order);
                    }
                });
            });
        });
    </script>

@endsection
