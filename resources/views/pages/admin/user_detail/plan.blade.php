@extends('layouts.default')

@section('title', 'プラン')
@section('pageId', 'plan')

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
        {{-- TODO 状態によって出しわけ --}}
        <div class="c-list-definition__description">
          <div class="c-label c-label--accent">開始待ち</div>
          <div class="c-label">利用中</div>
        </div>
        {{-- / 状態によって出しわけ --}}
      </div>
    </div><!-- /.c-contents__parts -->

    <div class="c-tab-menu">
      <div class="c-tab-item"><a href="/admin/user_detail/plan" class="c-tab-item__inner c-tab-item__inner--selected">プラン</a></div>
      <div class="c-tab-item"><a href="/admin/user_detail" class="c-tab-item__inner">基本情報</a></div>
      <div class="c-tab-item"><a href="/admin/user_detail/history" class="c-tab-item__inner">ご利用履歴</a></div>
      <div class="c-tab-item"><a href="/admin/user_detail/questionnaire/list" class="c-tab-item__inner">アンケート</a></div>
    </div><!-- /.c-tab-menu -->

    <div class="c-contents clearfix">
      <div class="c-table-simple c-contents__main">
        <div class="c-table-simple__row">
          <div class="c-table-simple__header">プラン</div>
          <div class="c-table-simple__data c-text-m">
            120日間使い放題 － 31〜60人
          </div>
        </div><!-- /.c-table-simple__row -->
        <div class="c-table-simple__row">
          <div class="c-table-simple__header">契約期間</div>
          <div class="c-table-simple__data c-text-m">
            2019.01.01 〜 2019.03.30
          </div>
        </div><!-- /.c-table-simple__row -->
        <div class="c-table-simple__row">
          <div class="c-table-simple__header">決算方法</div>
          <div class="c-table-simple__data c-text-m">
            銀行振込
          </div>
        </div><!-- /.c-table-simple__row -->
      </div><!-- /.c-table-simple -->

      <div class="c-btn c-btn--secondary c-btn--small c-contents__side">
        <a href="/admin/user_detail/plan/modify{{-- TODO: クライアントIDをパラメータで付与？ --}}" class="c-btn__content c-btn__content--small">変更する</a>
      </div>
    </div><!-- /.c-contents -->

    {{-- TODO 利用前の場合は出力する --}}
    <div class="p-plan-btn-wrapper c-btn-wrapper">
      <div class="c-btn c-btn--primary">
        <button type="button" data-modal="modal-use" class="c-btn__content js-modal-show">利用開始</button>
      </div>
    </div><!-- /.p-plan-btn -->
    {{-- / 利用前の場合は出力する --}}
  </div><!-- /.l-contents -->

  {{-- TODO 利用前の場合は出力する --}}
  <div id="js-modal-overlay" class="c-modal-overlay">
    <div id="modal-use" class="c-modal js-modal">
      <div class="c-modal__content p-plan-modal__content">
        <form method="POST" action="{{-- TODO: POST先設定 --}}">
          @csrf
          {{-- TODO hiddenでクライアントのIDを渡すのかと思ったので置いてますが不要なら消してください --}}
          <input type="hidden" name="" value="">
          {{-- / hiddenでクライアントのアンケートのIDを渡す --}}

          <p class="p-plan-modal__title">サービスをの利用を許可します。</p>
          <p class="p-plan-modal__text">入金または申込書の確認は済みましたか？</p>
          <div class="c-btn-wrapper">
            <div class="c-btn c-btn--secondary">
              <button class="c-btn__content js-modal-close" type="button">キャンセル</button>
            </div>
            <div class="c-btn c-btn--primary">
              <input class="c-btn__content c-btn--lswide" type="submit" value="OK">
            </div>
          </div><!-- /.c-btn-wrapper -->
        </form>
      </div>
    </div>
  </div><!-- / .c-modal-overlay -->
  {{-- / 利用前の場合は出力する --}}
</article>

@endsection

@section('localScript')
@endsection

@section('localStyle')
@endsection
