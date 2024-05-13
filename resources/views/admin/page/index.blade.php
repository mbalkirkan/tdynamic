@extends('admin.layout')

@section('content')
    <div class="row">
        @if(session('success'))
            <div class="alert alert-success">{{session('success')}}</div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger">{{session('error')}}</div>
        @endif

        <form class="row" action="{{route('admin.system.update')}}" method="post" enctype="multipart/form-data">
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
                                <label for="exampleFormControlInput1" class="required form-label">Logo (164x31)</label>
                                <div class="input-group mb-5">
                                    <input type="file" class="form-control" name="logo" placeholder="Dosya"
                                           aria-label="Dosya"
                                           aria-describedby="basic-addon1"/>
                                </div>
                            </div>
                            <div class="mb-10">
                                <label for="exampleFormControlInput1" class="required form-label">Logo (123x31)</label>
                                <div class="input-group mb-5">
                                    <input type="file" class="form-control" name="logo2" placeholder="Dosya"
                                           aria-label="Dosya"
                                           aria-describedby="basic-addon1"/>
                                </div>
                            </div>
                            <div class="mb-10">
                                <label for="exampleFormControlInput1" class="required form-label">Favicon</label>
                                <div class="input-group mb-5">
                                    <input type="file" class="form-control" name="favicon" placeholder="Dosya"
                                           aria-label="Dosya"
                                           aria-describedby="basic-addon1"/>
                                </div>
                            </div>

                            <div class="mb-10">
                                <label for="exampleFormControlInput1" class="required form-label">Başlık</label>
                                <input type="text" name="title" value="{{$system->title}}" class="form-control form-control-solid"
                                       placeholder="Başlık"/>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <h3 class="card-title">SEO</h3>
                    </div>
                    <div class="card-body p-0">
                        <div class="card-p mb-10">


                            <div class="mb-10">
                                <label for="exampleFormControlInput1" class="required form-label">Yazar</label>
                                <input type="text" name="author" value="{{$system->author}}" class="form-control form-control-solid"
                                       placeholder="Yazar"/>
                            </div>

                            <div class="mb-10">
                                <label for="exampleFormControlInput1" class="required form-label">Meta Açıklama</label>
                                <input type="text" name="meta_description" value="{{$system->meta_description}}" class="form-control form-control-solid"
                                       placeholder="Meta Açıklama"/>
                            </div>
                            <div class="mb-10">
                                <label for="exampleFormControlInput1" class="required form-label">Meta Keywords (, ile
                                    ayırınız.)</label>
                                <input type="text" name="meta_keywords" value="{{$system->meta_keywords}}" class="form-control form-control-solid"
                                       placeholder="Meta Keywords (',' ile ayırınız.)"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <h3 class="card-title">Sosyal Medya</h3>
                    </div>
                    <div class="card-body p-0">
                        <div class="card-p">
                            <div class="">
                                <label for="exampleFormControlInput1" class="required form-label">Facebook</label>
                                <input type="text" name="facebook" value="{{$system->facebook}}" class="form-control form-control-solid"
                                       placeholder="Facebook"/>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="card-p">
                            <div class="">
                                <label for="exampleFormControlInput1" class="required form-label">Twitter</label>
                                <input type="text" name="twitter" value="{{$system->twitter}}" class="form-control form-control-solid"
                                       placeholder="Twitter"/>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="card-p">
                            <div class="">
                                <label for="exampleFormControlInput1" class="required form-label">Instagram</label>
                                <input type="text" name="instagram" value="{{$system->instagram}}" class="form-control form-control-solid"
                                       placeholder="Instagram"/>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="card-p">
                            <div class="">
                                <label for="exampleFormControlInput1" class="required form-label">Linkedin</label>
                                <input type="text" name="linkedin" value="{{$system->linkedin}}" class="form-control form-control-solid"
                                       placeholder="Linkedin"/>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="card-p">
                            <div class="">
                                <label for="exampleFormControlInput1" class="required form-label">Youtube</label>
                                <input type="text" name="youtube" value="{{$system->youtube}}" class="form-control form-control-solid"
                                       placeholder="Youtube"/>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="card-p">
                            <div class="">
                                <label for="exampleFormControlInput1" class="required form-label">Pinterest</label>
                                <input type="text" name="pinterest" value="{{$system->pinterest}}" class="form-control form-control-solid"
                                       placeholder="Pinterest"/>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

            @csrf
        </form>

    </div>
@endsection
