@extends('main')

@section('title', 'スタッフ管理')

@section('content')
    <div style="text-align:center;">
        <h2>従業員リスト</h2>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <a href="/create" class="btn btn-primary">追加</a>
            </div>
            <div class="col-md-8">
                <form action="{{ action('StaffController@index') }}" method="get">
                    <div class="form-group row">
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="cond_title" placeholder="名前で検索" value="{{ $cond_title }}">
                        </div>
                        <div class="col-md-2">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="検索">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <table class="table">
                    <thead>
                        <tr>
                            <th width="20%">名前</th>
                            <th width="30%">メールアドレス</th>
                            <th width="30%">電話番号</th>
                            <th width="10%">操作</th>
                            <th width="10%"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($staff as $list)
                            <tr>
                                <td>{{$list->name}}</td>
                                <td>{{$list->email}}</td>
                                <td>{{$list->tel}}</td>
                                <td>
                                    <a href="{{action('StaffController@edit',['id'=>$list->id])}}">編集</a>
                                </td>
                                <td>
                                    <a href="{{action('StaffController@delete',['id'=>$list->id])}}">削除</a>
                                </td>
                            </tr>
                             
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection