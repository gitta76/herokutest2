@extends('layouts.default')

@section('title', 'ご利用履歴')
@section('pageId', 'history')

@section('contents')

<article>
  <div class="l-contents">
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
      <div class="c-tab-item"><a href="/admin/user_detail/history" class="c-tab-item__inner c-tab-item__inner--selected">ご利用履歴</a></div>
      <div class="c-tab-item"><a href="/admin/user_detail/questionnaire/list" class="c-tab-item__inner">アンケート</a></div>
    </div><!-- /.c-tab-menu -->

    <div class="c-contents clearfix">
      <div class="c-table-simple">
        <div class="c-table-simple__row">
          <div class="c-table-simple__header">契約期間</div>
          <div class="c-table-simple__data c-text-m">
            2019.01.01 〜 2019.03.30
          </div>
        </div><!-- /.c-table-simple__row -->
        <div class="c-table-simple__row">
          <div class="c-table-simple__header">プラン</div>
          <div class="c-table-simple__data c-text-m">
            120日
          </div>
        </div><!-- /.c-table-simple__row -->
        <div class="c-table-simple__row">
          <div class="c-table-simple__header">ご利用人数</div>
          <div class="c-table-simple__data c-text-m">
            61〜150人
          </div>
        </div><!-- /.c-table-simple__row -->
        <div class="c-table-simple__row">
          <div class="c-table-simple__header">決算方法</div>
          <div class="c-table-simple__data c-text-m">
            銀行振込
          </div>
        </div><!-- /.c-table-simple__row -->
      </div><!-- /.c-table-simple -->
    </div><!-- /.c-contents -->

    <div class="c-contents clearfix">
      <div class="c-table-simple">
        <div class="c-table-simple__row">
          <div class="c-table-simple__header">契約期間</div>
          <div class="c-table-simple__data c-text-m">
            2019.01.01 〜 2019.03.30
          </div>
        </div><!-- /.c-table-simple__row -->
        <div class="c-table-simple__row">
          <div class="c-table-simple__header">プラン</div>
          <div class="c-table-simple__data c-text-m">
            120日
          </div>
        </div><!-- /.c-table-simple__row -->
        <div class="c-table-simple__row">
          <div class="c-table-simple__header">ご利用人数</div>
          <div class="c-table-simple__data c-text-m">
            61〜150人
          </div>
        </div><!-- /.c-table-simple__row -->
        <div class="c-table-simple__row">
          <div class="c-table-simple__header">決算方法</div>
          <div class="c-table-simple__data c-text-m">
            銀行振込
          </div>
        </div><!-- /.c-table-simple__row -->
      </div><!-- /.c-table-simple -->
    </div><!-- /.c-contents -->

    <div class="c-contents clearfix">
      <div class="c-table-simple">
        <div class="c-table-simple__row">
          <div class="c-table-simple__header">契約期間</div>
          <div class="c-table-simple__data c-text-m">
            2019.01.01 〜 2019.03.30
          </div>
        </div><!-- /.c-table-simple__row -->
        <div class="c-table-simple__row">
          <div class="c-table-simple__header">プラン</div>
          <div class="c-table-simple__data c-text-m">
            120日
          </div>
        </div><!-- /.c-table-simple__row -->
        <div class="c-table-simple__row">
          <div class="c-table-simple__header">ご利用人数</div>
          <div class="c-table-simple__data c-text-m">
            61〜150人
          </div>
        </div><!-- /.c-table-simple__row -->
        <div class="c-table-simple__row">
          <div class="c-table-simple__header">決算方法</div>
          <div class="c-table-simple__data c-text-m">
            銀行振込
          </div>
        </div><!-- /.c-table-simple__row -->
      </div><!-- /.c-table-simple -->
    </div><!-- /.c-contents -->
  </div><!-- /.l-contents -->
</article>

@endsection

@section('localScript')
@endsection

@section('localStyle')
@endsection
