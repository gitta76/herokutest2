@extends('layouts.index')

@section('title', false)
@section('pageId', 'index')

@section('contents')
<div class="default-content">
  <h1>ページ一覧</h1>

  <ul class="list">
    <li><a href="/admin/auth/login">ログイン</a></li>
  </ul>

  <h2>顧客</h2>
  <ul class="list">
    <li><a href="/admin/user_list">顧客一覧</a></li>
  </ul>

  <h2>顧客詳細</h2>
  <ul class="list">
    <li><a href="/admin/user_detail/plan">プラン</a></li>
    <li><a href="/admin/user_detail/plan/modify">プラン 変更</a></li>
    <li><a href="/admin/user_detail/plan/confirm">プラン 確認</a></li>
    <li><a href="/admin/user_detail">基本情報</a></li>
    <li><a href="/admin/user_detail/modify">基本情報 変更</a></li>
    <li><a href="/admin/user_detail/confirm">基本情報 確認</a></li>
    <li><a href="/admin/user_detail/history">ご利用履歴</a></li>
    <li><a href="/admin/user_detail/questionnaire/list">アンケート一覧</a></li>
    <li><a href="/admin/user_detail/questionnaire/result">アンケート結果詳細</a></li>
  </ul>

  <h2>メンテナンス情報</h2>
  <ul class="list">
    <li><a href="/admin/maintenance_info">メンテナンス情報設定</a></li>
    <li><a href="/admin/maintenance_info/modify">編集画面</a></li>
  </ul>

  <h2>パーツ</h2>
  <ul class="list">
    <li><a href="/sample/test">共通パーツ一覧</a></li>
  </ul>
</div>
@endsection

@section('localScript')
@endsection

@section('localStyle')
<style>
.default-content {
    padding: 40px 100px 0;
    font-size: 12px;
    display: flex;
    flex-direction: column;
    flex-wrap: wrap;
    height: 800px;
    position: relative;
}

h1 {
    font-size: 1.2em;
}

h2 {
    font-weight: bold;
    margin-bottom: 10px;
}

.default-content li {
    margin-top: 0.5em;
}

.list {
    margin: 0 0 30px;
}

.list li {
    padding-left: 0.5em;
}
</style>
@endsection
