@extends('layouts.default')

@section('title', 'アンケート')
@section('pageId', 'questionnaire')

@section('contents')

<article>
  <div class="p-questionnaire l-contents">
    <div class="c-link-back">
      <a href="/admin/user_list" class="c-link-back__text">一覧へ戻る</a>
    </div>

    <div class="c-heading-m">
      <h1 class="c-heading-m__title">登録者名（会社名）</h1>
    </div>

    <div class="c-contents__parts">
      <div class="c-list-definition">
        <h2 class="c-list-definition__term">サービス利用状況</h2>
        <div class="c-list-definition__description"><div class="c-label">利用中</div></div>
      </div>
    </div><!-- /.c-contents__parts -->

    <div class="c-tab-menu">
      <div class="c-tab-item"><a href="/admin/user_detail/plan" class="c-tab-item__inner">プラン</a></div>
      <div class="c-tab-item"><a href="/admin/user_detail" class="c-tab-item__inner">基本情報</a></div>
      <div class="c-tab-item"><a href="/admin/user_detail/history" class="c-tab-item__inner">ご利用履歴</a></div>
      <div class="c-tab-item"><a href="/admin/user_detail/questionnaire/list" class="c-tab-item__inner c-tab-item__inner--selected">アンケート</a></div>
    </div><!-- /.c-tab-menu -->

    <table class="p-questionnaire-list c-table-normal">
      <thead>
        <tr class="c-table-normal__row">
          <th class="c-table-normal__head">実施期間</th>
          <th class="c-table-normal__head">参加チーム</th>
          <th class="c-table-normal__head">参加人数</th>
          <th class="c-table-normal__head">状況</th>
        </tr>
      </thead>

      <tbody>
        <tr class="c-table-normal__row c-table-normal__row--running">
          <td class="c-table-normal__data">2019.01.01〜2019.01.01</td>
          <td class="c-table-normal__data">システム企画開発部 GCS・SAグループ最大25文字</td>
          <td class="c-table-normal__data">19/20</td>
          <td class="c-table-normal__data">アンケート実施中</td>
        </tr>

        <tr class="c-table-normal__row">
          <td class="c-table-normal__data"><a href="/admin/user_detail/questionnaire/result" class="c-table-normal__data-cell">2019.01.01〜2019.01.01</a></td>
          <td class="c-table-normal__data"><a href="/admin/user_detail/questionnaire/result" class="c-table-normal__data-cell">システム企画開発部 GCS・SAグループ最大25文字</a></td>
          <td class="c-table-normal__data"><a href="/admin/user_detail/questionnaire/result" class="c-table-normal__data-cell">19/20</a></td>
          <td class="c-table-normal__data"><a href="/admin/user_detail/questionnaire/result" class="c-table-normal__data-cell">済</a></td>
        </tr>

        <tr class="c-table-normal__row">
          <td class="c-table-normal__data"><a href="/admin/user_detail/questionnaire/result" class="c-table-normal__data-cell">2019.01.01〜2019.01.01</a></td>
          <td class="c-table-normal__data"><a href="/admin/user_detail/questionnaire/result" class="c-table-normal__data-cell">システム企画開発部 GCS・SAグループ最大25文字</a></td>
          <td class="c-table-normal__data"><a href="/admin/user_detail/questionnaire/result" class="c-table-normal__data-cell">19/20</a></td>
          <td class="c-table-normal__data"><a href="/admin/user_detail/questionnaire/result" class="c-table-normal__data-cell">済</a></td>
        </tr>

        <tr class="c-table-normal__row">
          <td class="c-table-normal__data"><a href="/admin/user_detail/questionnaire/result" class="c-table-normal__data-cell">2019.01.01〜2019.01.01</a></td>
          <td class="c-table-normal__data"><a href="/admin/user_detail/questionnaire/result" class="c-table-normal__data-cell">システム企画開発部 GCS・SAグループ最大25文字</a></td>
          <td class="c-table-normal__data"><a href="/admin/user_detail/questionnaire/result" class="c-table-normal__data-cell">19/20</a></td>
          <td class="c-table-normal__data"><a href="/admin/user_detail/questionnaire/result" class="c-table-normal__data-cell">済</a></td>
        </tr>

        <tr class="c-table-normal__row">
          <td class="c-table-normal__data"><a href="/admin/user_detail/questionnaire/result" class="c-table-normal__data-cell">2019.01.01〜2019.01.01</a></td>
          <td class="c-table-normal__data"><a href="/admin/user_detail/questionnaire/result" class="c-table-normal__data-cell">システム企画開発部 GCS・SAグループ最大25文字</a></td>
          <td class="c-table-normal__data"><a href="/admin/user_detail/questionnaire/result" class="c-table-normal__data-cell">19/20</a></td>
          <td class="c-table-normal__data"><a href="/admin/user_detail/questionnaire/result" class="c-table-normal__data-cell">済</a></td>
        </tr>

        <tr class="c-table-normal__row">
          <td class="c-table-normal__data"><a href="/admin/user_detail/questionnaire/result" class="c-table-normal__data-cell">2019.01.01〜2019.01.01</a></td>
          <td class="c-table-normal__data"><a href="/admin/user_detail/questionnaire/result" class="c-table-normal__data-cell">システム企画開発部 GCS・SAグループ最大25文字</a></td>
          <td class="c-table-normal__data"><a href="/admin/user_detail/questionnaire/result" class="c-table-normal__data-cell">19/20</a></td>
          <td class="c-table-normal__data"><a href="/admin/user_detail/questionnaire/result" class="c-table-normal__data-cell">済</a></td>
        </tr>

        <tr class="c-table-normal__row">
          <td class="c-table-normal__data"><a href="/admin/user_detail/questionnaire/result" class="c-table-normal__data-cell">2019.01.01〜2019.01.01</a></td>
          <td class="c-table-normal__data"><a href="/admin/user_detail/questionnaire/result" class="c-table-normal__data-cell">システム企画開発部 GCS・SAグループ最大25文字</a></td>
          <td class="c-table-normal__data"><a href="/admin/user_detail/questionnaire/result" class="c-table-normal__data-cell">19/20</a></td>
          <td class="c-table-normal__data"><a href="/admin/user_detail/questionnaire/result" class="c-table-normal__data-cell">済</a></td>
        </tr>
      </tbody>
    </table>
  </div><!-- /.l-contents -->
</article>

@endsection

@section('localScript')
@endsection

@section('localStyle')
@endsection
