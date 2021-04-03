@extends('main')

@section('title', 'create')

@section('content')
    <div style="text-align:center;">
        <h2>従業員登録</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="mx-auto" style="width: 200px;">
                <form action="{{ action('StaffController@create')}}" method="post">
                    <div class="col-md-8 col-sm-6">
                        <label for="name">名前</label>
                        <input type="text" class="form-control" style="width:200px;" placeholder="フルネーム" name="name" required></input>
                    </div>
                    <div class="col-md-8 col-sm-6">
                        <label for="email">メールアドレス</label>
                        <input type="email" class="form-control" style="width:200px;" name="email" placeholder="アドレス登録必須"></input>
                    </div>
                    <div class="col-md-8 col-sm-6">
                        <label for="tel">電話番号</label>
                        <input type="tel" class="form-control" style="width:200px;" name="tel" placeholder="ハイフン無しで入力"></input>
                    </div>
                    {{ csrf_field() }}
                    <br>
                    <button type="submit" class="btn btn-primary" style="margin-left:90px;">送信</button>
                </form>
            </div>
        </div>
        <div style="text-align: right;">
            <a href="/" class="button">戻る</a>
        </div>
    </div> 
@endsection