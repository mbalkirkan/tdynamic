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
                        <h3 class="card-title">Blok 1</h3>
                    </div>
                    <div class="card-body p-0">
                        <div class="card-p mb-10">
                            <div class="mb-10">
                                <label for="exampleFormControlInput1" class="required form-label">Başlık - 1</label>
                                <input type="text" name="title" value="{{$index_page->block_1[0]['title']}}" class="form-control form-control-solid"
                                       placeholder="Başlık - 1"/>
                            </div>
                            <div class="mb-10">
                                <label for="exampleFormControlInput1" class="required form-label">Açıklama - 1</label>
                                <textarea class="form-control " placeholder="Açıklama - 1" style="height: 100px">{{$index_page->block_1[0]['description']}}</textarea>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <h3 class="card-title">Blok 1</h3>
                    </div>
                    <div class="card-body p-0">
                        <div class="card-p mb-10">
                            <div class="mb-10">
                                <label for="exampleFormControlInput1" class="required form-label">Başlık - 2</label>
                                <input type="text" name="title" value="{{$index_page->block_1[1]['title']}}" class="form-control form-control-solid"
                                       placeholder="Başlık - 2"/>
                            </div>
                            <div class="mb-10">
                                <label for="exampleFormControlInput1" class="required form-label">Açıklama - 2</label>
                                <textarea class="form-control " placeholder="Açıklama - 2" style="height: 100px">{{$index_page->block_1[1]['description']}}</textarea>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <h3 class="card-title">Blok 1</h3>
                    </div>
                    <div class="card-body p-0">
                        <div class="card-p mb-10">
                            <div class="mb-10">
                                <label for="exampleFormControlInput1" class="required form-label">Başlık - 3</label>
                                <input type="text" name="title" value="{{$index_page->block_1[2]['title']}}" class="form-control form-control-solid"
                                       placeholder="Başlık - 3"/>
                            </div>
                            <div class="mb-10">
                                <label for="exampleFormControlInput1" class="required form-label">Açıklama - 3</label>
                                <textarea class="form-control " placeholder="Açıklama - 3" style="height: 100px">{{$index_page->block_1[2]['description']}}</textarea>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 mt-5">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <h3 class="card-title">Blok 2 Ayarları</h3>
                    </div>
                    <div class="card-body p-0">
                        <div class="card-p mb-10">
                            <div class="mb-10">
                                <label for="exampleFormControlInput1" class="required form-label">Arka Plan Resmi (1800x1269)</label>
                                <div class="input-group mb-5">
                                    <input type="file" class="form-control" name="logo" placeholder="Arka Plan Resmi"
                                           aria-label="Arka Plan Resmi"
                                           aria-describedby="basic-addon1"/>
                                </div>
                            </div>
                            <div class="mb-10">
                                <label for="exampleFormControlInput1" class="required form-label">Başlık</label>
                                <input type="text" name="title" value="{{$index_page->block_1[2]['title']}}" class="form-control form-control-solid"
                                       placeholder="Başlık - 3"/>
                            </div>
                            <div class="mb-10">
                                <label for="exampleFormControlInput1" class="required form-label">Alt Başlık</label>
                                <textarea class="form-control" placeholder="Açıklama - 3" style="height: 100px">{{$index_page->block_1[2]['description']}}</textarea>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 mt-5">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <h3 class="card-title">Blok 3 Ayarları</h3>
                    </div>
                    <div class="card-body p-0">
                        <div class="card-p mb-10">
                            <div class="mb-10">
                                <label for="exampleFormControlInput1" class="required form-label">Arka Plan Resmi (1542x501)</label>
                                <div class="input-group mb-5">
                                    <input type="file" class="form-control" name="logo" placeholder="Arka Plan Resmi"
                                           aria-label="Arka Plan Resmi"
                                           aria-describedby="basic-addon1"/>
                                </div>
                            </div>
                            <div class="mb-10">
                                <label for="exampleFormControlInput1" class="required form-label">Başlık</label>
                                <input type="text" name="title" value="{{$index_page->block_1[2]['title']}}" class="form-control form-control-solid"
                                       placeholder="Başlık - 3"/>
                            </div>
                            <div class="mb-10">
                                <label for="exampleFormControlInput1" class="required form-label">Alt Başlık</label>
                                <textarea class="form-control" placeholder="Açıklama - 3" style="height: 100px">{{$index_page->block_1[2]['description']}}</textarea>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 mt-5">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <h3 class="card-title">Blok 5 Ayarları</h3>
                    </div>
                    <div class="card-body p-0">
                        <div class="card-p mb-10">
                            <div class="mb-10">
                                <label for="exampleFormControlInput1" class="required form-label">Arka Plan Resmi (1800x707)</label>
                                <div class="input-group mb-5">
                                    <input type="file" class="form-control" name="logo" placeholder="Arka Plan Resmi"
                                           aria-label="Arka Plan Resmi"
                                           aria-describedby="basic-addon1"/>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-3">
                                    <div class="card shadow-sm">
                                        <div class="card-header">
                                            <h3 class="card-title">Sayaç 1</h3>
                                        </div>
                                        <div class="card-body p-0">
                                            <div class="card-p mb-10">
                                                <div class="mb-10">
                                                    <label for="exampleFormControlInput1" class="required form-label">Sayaç - 1</label>
                                                    <input type="text" name="title" value="{{$index_page->block_5['counter_1']}}" class="form-control form-control-solid"
                                                           placeholder="Sayaç - 1"/>
                                                </div>
                                                <div class="mb-10">
                                                    <label for="exampleFormControlInput1" class="required form-label">Sayaç Açıklama - 1</label>
                                                    <input type="text" name="title" value="{{$index_page->block_5['counter_1_text']}}" class="form-control form-control-solid"
                                                           placeholder="Sayaç Açıklama - 1"/>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card shadow-sm">
                                        <div class="card-header">
                                            <h3 class="card-title">Sayaç 1</h3>
                                        </div>
                                        <div class="card-body p-0">
                                            <div class="card-p mb-10">
                                                <div class="mb-10">
                                                    <label for="exampleFormControlInput1" class="required form-label">Sayaç - 1</label>
                                                    <input type="text" name="title" value="{{$index_page->block_5['counter_1']}}" class="form-control form-control-solid"
                                                           placeholder="Sayaç - 1"/>
                                                </div>
                                                <div class="mb-10">
                                                    <label for="exampleFormControlInput1" class="required form-label">Sayaç Açıklama - 1</label>
                                                    <input type="text" name="title" value="{{$index_page->block_5['counter_1_text']}}" class="form-control form-control-solid"
                                                           placeholder="Sayaç Açıklama - 1"/>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card shadow-sm">
                                        <div class="card-header">
                                            <h3 class="card-title">Sayaç 1</h3>
                                        </div>
                                        <div class="card-body p-0">
                                            <div class="card-p mb-10">
                                                <div class="mb-10">
                                                    <label for="exampleFormControlInput1" class="required form-label">Sayaç - 1</label>
                                                    <input type="text" name="title" value="{{$index_page->block_5['counter_1']}}" class="form-control form-control-solid"
                                                           placeholder="Sayaç - 1"/>
                                                </div>
                                                <div class="mb-10">
                                                    <label for="exampleFormControlInput1" class="required form-label">Sayaç Açıklama - 1</label>
                                                    <input type="text" name="title" value="{{$index_page->block_5['counter_1_text']}}" class="form-control form-control-solid"
                                                           placeholder="Sayaç Açıklama - 1"/>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card shadow-sm">
                                        <div class="card-header">
                                            <h3 class="card-title">Sayaç 1</h3>
                                        </div>
                                        <div class="card-body p-0">
                                            <div class="card-p mb-10">
                                                <div class="mb-10">
                                                    <label for="exampleFormControlInput1" class="required form-label">Sayaç - 1</label>
                                                    <input type="text" name="title" value="{{$index_page->block_5['counter_1']}}" class="form-control form-control-solid"
                                                           placeholder="Sayaç - 1"/>
                                                </div>
                                                <div class="mb-10">
                                                    <label for="exampleFormControlInput1" class="required form-label">Sayaç Açıklama - 1</label>
                                                    <input type="text" name="title" value="{{$index_page->block_5['counter_1_text']}}" class="form-control form-control-solid"
                                                           placeholder="Sayaç Açıklama - 1"/>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>


                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 mt-5">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <h3 class="card-title">Blok 6 Ayarları</h3>
                    </div>
                    <div class="card-body p-0">
                        <div class="card-p mb-10">
                            <div class="mb-10">
                                <label for="exampleFormControlInput1" class="required form-label">Arka Plan Resmi (1800x743)</label>
                                <div class="input-group mb-5">
                                    <input type="file" class="form-control" name="logo" placeholder="Arka Plan Resmi"
                                           aria-label="Arka Plan Resmi"
                                           aria-describedby="basic-addon1"/>
                                </div>
                            </div>
                            <div class="mb-10">
                                <label for="exampleFormControlInput1" class="required form-label">Başlık</label>
                                <input type="text" name="title" value="{{$index_page->block_1[2]['title']}}" class="form-control form-control-solid"
                                       placeholder="Başlık - 3"/>
                            </div>
                            <div class="mb-10">
                                <label for="exampleFormControlInput1" class="required form-label">Açıklama</label>
                                <textarea class="form-control" placeholder="Açıklama - 3" style="height: 100px">{{$index_page->block_1[2]['description']}}</textarea>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card shadow-sm">
                                        <div class="card-header">
                                            <h3 class="card-title">Buton - 1</h3>
                                        </div>
                                        <div class="card-body p-0">
                                            <div class="card-p mb-10">
                                                <div class="mb-10">
                                                    <label for="exampleFormControlInput1" class="required form-label">Buton 1 Text</label>
                                                    <input type="text" name="title" value="{{$index_page->block_1[2]['title']}}" class="form-control form-control-solid"
                                                           placeholder="Başlık - 3"/>
                                                </div>
                                                <div class="mb-10">
                                                    <label for="exampleFormControlInput1" class="required form-label">Buton 1 Link</label>
                                                    <input type="text" name="title" value="{{$index_page->block_1[2]['title']}}" class="form-control form-control-solid"
                                                           placeholder="Başlık - 3"/>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card shadow-sm">
                                        <div class="card-header">
                                            <h3 class="card-title">Buton - 2</h3>
                                        </div>
                                        <div class="card-body p-0">
                                            <div class="card-p mb-10">
                                                <div class="mb-10">
                                                    <label for="exampleFormControlInput1" class="required form-label">Buton 1 Text</label>
                                                    <input type="text" name="title" value="{{$index_page->block_1[2]['title']}}" class="form-control form-control-solid"
                                                           placeholder="Başlık - 3"/>
                                                </div>
                                                <div class="mb-10">
                                                    <label for="exampleFormControlInput1" class="required form-label">Buton 1 Link</label>
                                                    <input type="text" name="title" value="{{$index_page->block_1[2]['title']}}" class="form-control form-control-solid"
                                                           placeholder="Başlık - 3"/>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 mt-5">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <h3 class="card-title">Blok 7 Ayarları</h3>
                    </div>
                    <div class="card-body p-0">
                        <div class="card-p mb-10">
                            <div class="mb-10">
                                <label for="exampleFormControlInput1" class="required form-label">Arka Plan Resmi (2000x747)</label>
                                <div class="input-group mb-5">
                                    <input type="file" class="form-control" name="logo" placeholder="Arka Plan Resmi"
                                           aria-label="Arka Plan Resmi"
                                           aria-describedby="basic-addon1"/>
                                </div>
                            </div>
                            <div class="mb-10">
                                <label for="exampleFormControlInput1" class="required form-label">Başlık</label>
                                <input type="text" name="title" value="{{$index_page->block_1[2]['title']}}" class="form-control form-control-solid"
                                       placeholder="Başlık - 3"/>
                            </div>

                            <div class="mb-10">
                                <label for="exampleFormControlInput1" class="required form-label">Buton Text</label>
                                <input type="text" name="title" value="{{$index_page->block_1[2]['title']}}" class="form-control form-control-solid"
                                       placeholder="Buton Text"/>
                            </div>
                            <div class="mb-10">
                                <label for="exampleFormControlInput1" class="required form-label">Buton Url</label>
                                <input type="text" name="title" value="{{$index_page->block_1[2]['title']}}" class="form-control form-control-solid"
                                       placeholder="Buton Url"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @csrf
        </form>

    </div>
@endsection
