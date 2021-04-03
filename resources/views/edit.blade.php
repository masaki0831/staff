@extends('main')

@section('title', 'スタッフ編集')

@section('content')
    <div style="text-align:center;">
        <h2>従業員編集</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="mx-auto" style="width: 200px;">
                <form action="{{ action('StaffController@update')}}" method="post" enctype="multipart/form-data">
               
                    <div class="col-md-8 col-sm-6">
                        <label for="name">名前</label>
                        <input type="text" class="form-control" style="width:200px;"  name="name" value="{{$staff_form->name}}" required></input>
                    </div>
                    <div class="col-md-8 col-sm-6">
                        <label for="email">メールアドレス</label>
                        <input type="email" class="form-control" style="width:200px;" name="email" value="{{$staff_form->email}}" required></input>
                    </div>
                    <div class="col-md-8 col-sm-6">
                        <label for="tel">電話番号</label>
                        <input type="tel" class="form-control" style="width:200px;" name="tel" value="{{$staff_form->tel}}" required></input>
                    </div>
                    <input type="hidden" name="id" value="{{ $staff_form->id }}">
                    {{ csrf_field() }}
                    <br>
                    <button type="submit" class="btn btn-primary" style="margin-left:90px;">更新</button>
                </form>
            </div>
        </div>
        <div style="text-align: right;">
            <a href="/" class="button">戻る</a>
        </div>
    </div> 
@endsection