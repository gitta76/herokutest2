@extends('layouts.default')

@section('title', '基本情報')
@section('pageId', 'detail')

@section('contents')

<article>
  <div class="p-plan l-contents">
    {{-- TODO トーストの表示が必要な時にこのHTMLを出力する --}}
    <div id="js-toast" class="c-alert">
      <p class="c-alert__text">保存しました</p>
      <div id="js-toast-close" class="c-alert__close-btn"><span></span></div>
    </div>
    {{-- / トーストの表示が必要な時にこのHTMLを出力する --}}

    <div class="c-link-back">
      <a href="/admin/user_list" class="c-link-back__text">一覧へ戻る</a>
    </div>

    <div class="c-heading-m">
      <h1 class="c-heading-m__title">登録者名（会社名）</h1>
    </div>

    <div class="c-contents__parts">
      <div class="c-list-definition">
        <h2 class="c-list-definition__term">サービス利用状況</h2>
        <div class="c-list-definition__description">
          <div class="c-label">利用中</div>
        </div>
      </div>
    </div><!-- /.c-contents__parts -->

    <div class="c-tab-menu">
      <div class="c-tab-item"><a href="/admin/user_detail/plan" class="c-tab-item__inner">プラン</a></div>
      <div class="c-tab-item"><a href="/admin/user_detail" class="c-tab-item__inner c-tab-item__inner--selected">基本情報</a></div>
      <div class="c-tab-item"><a href="/admin/user_detail/history" class="c-tab-item__inner">ご利用履歴</a></div>
      <div class="c-tab-item"><a href="/admin/user_detail/questionnaire/list" class="c-tab-item__inner">アンケート</a></div>
    </div><!-- /.c-tab-menu -->

    <div class="c-contents clearfix">
      <div class="c-table-simple c-contents__main">
        <div class="c-table-simple__row">
          <div class="c-table-simple__header">メールアドレス</div>
          <div class="c-table-simple__data c-text-m">
            navilight@nkgr.co.jp
          </div>
        </div><!-- /.c-table-simple__row -->
        <div class="c-table-simple__row">
          <div class="c-table-simple__header">お名前</div>
          <div class="c-table-simple__data c-text-m">
            山田太郎
          </div>
        </div><!-- /.c-table-simple__row -->
        <div class="c-table-simple__row">
          <div class="c-table-simple__header">会社名</div>
          <div class="c-table-simple__data c-text-m">
            日本経営
          </div>
        </div><!-- /.c-table-simple__row -->
        <div class="c-table-simple__row">
          <div class="c-table-simple__header">業種</div>
          <div class="c-table-simple__data c-text-m">
            コンサルティング
          </div>
        </div><!-- /.c-table-simple__row -->
        <div class="c-table-simple__row">
          <div class="c-table-simple__header">郵便番号</div>
          <div class="c-table-simple__data c-text-m">
            561-8510
          </div>
        </div><!-- /.c-table-simple__row -->
        <div class="c-table-simple__row">
          <div class="c-table-simple__header">住所</div>
          <div class="c-table-simple__data c-text-m">
            大阪府豊中市寺内2-13-3 日本経営ビル
          </div>
        </div><!-- /.c-table-simple__row -->
        <div class="c-table-simple__row">
          <div class="c-table-simple__header">電話番号</div>
          <div class="c-table-simple__data c-text-m">
            06-6868-1158
          </div>
        </div><!-- /.c-table-simple__row -->
      </div><!-- /.c-table-simple -->

      <div class="c-btn c-btn--secondary c-btn--small c-contents__side">
        <a href="/admin/user_detail/modify{{-- TODO: クライアントIDをパラメータで付与？ --}}" class="c-btn__content c-btn__content--small">変更する</a>
      </div>
    </div><!-- /.c-contents -->
  </div><!-- /.l-contents -->
</article>

@endsection

@section('localScript')
@endsection

@section('localStyle')
@endsection
