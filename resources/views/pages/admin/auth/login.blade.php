@extends('layouts.no_header')

@section('title', 'ログイン')
@section('pageId', 'login')

@section('contents')

<div class="p-login">
  {{-- TODO トーストの表示が必要な時にこのHTMLを出力する --}}
  <div id="js-toast" class="c-alert">
    <p class="c-alert__text">ログアウトしました</p>
    <div id="js-toast-close" class="c-alert__close-btn"><span></span></div>
  </div>
  {{-- / トーストの表示が必要な時にこのHTMLを出力する --}}

  <form method="POST" action="{{-- TODO: POST先設定 --}}" onsubmit="return false">
    @csrf

    <div class="p-login-content c-contents">
      <div class="p-login-content__logo"><img src="/img/logo.svg" alt="Navilight">管理画面</div>

      <div class="p-login__form">

        <div class="p-login__form-area">
          <div class="p-login__form-title"><label for="email">メールアドレス</label></div>
          <div class="c-form-area">
            <input class="c-form-text" type="text" id="email" name="{{-- name値設定--}}" value="" placeholder="navilight@nkgr.co.jp">
          </div>
        </div>

        <div class="p-login__form-area">
          <div class="p-login__form-title"><label for="password">パスワード</label></div>
          <div class="c-form-area">
            <input class="c-form-text" type="password" id="password" name="{{-- name値設定--}}" value="">
          </div>
        </div>

      </div><!-- /.p-login__form -->

      <div class="c-form-checkbox p-login__checkbox">
        <input type="checkbox" id="check" name="{{-- name値設定--}}" >
        <label for="check" class="c-form-checkbox__input c-form-checkbox__title">ログインしたままにする</label>
      </div>

      <div class="c-btn-wrapper p-login__btn">
        <div class="c-btn c-btn--primary">
          <button type="button" class="c-btn__content" onclick="submit()">ログインする</button>
        </div>
      </div><!-- /.p-login-btn -->

      <p class="p-login__link-text">パスワードを忘れた場合は<a href="" class="c-link-text">こちら</a></p>
    </div><!-- /.p-login-content -->
  </form>
</div><!-- /.p-login-->
@endsection

@section('localScript')
@endsection

@section('localStyle')
@endsection
