@extends('app')

@section('titile', 'ログイン')

@section('content')
  <div class="container">
    <div class="row">
      <div class="mx-auto col col-12 col-sm-12 col-md-9 col-lg-7 col-xl-6">
        <h1 class="text-center"><a href="/" class="text-dard">memo</a></h1>
        <div class="card mt-3">
          <div class="card-body text-center">
            <h2 class="h3 card-title mt-3">ログイン</h2>

            <a href="{{route('login.{provider}', ['provider' => 'google'])}}" class="btn btn-block btn-danger">
            <i class="fab fa-google mr-1"></i>Googleでログイン
            </a>

            @include('error_card_list')

            <div class="card-text">
              <form action="{{ route('login') }}" method="POST">
              @csrf

              <div class="md-form">
                <label for="email">メールアドレス</label>
                <input type="text" class="form-control" id="email" name="email" required value="{{old('email')}}">
              </div>

              <div class="md-form">
                <label for="password">パスワード</label>
                <input type="password" class="form-control" id="password" name="password" required >
              </div>

              <input type="hidden" name="remember" id="remember" value="on">

              <div class="text-left">
                <a href="{{ route('password.request') }}" class="card-text">パスワードを忘れた方</a>
              </div>

              <button class="btn btn-block blue-gradient mt-2 mb-2" type="submit">ログイン</button>
              </form>

              <div class="mt-0">
                <a href="{{route('register')}}" class="card-text">ユーザー登録はこちら</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
