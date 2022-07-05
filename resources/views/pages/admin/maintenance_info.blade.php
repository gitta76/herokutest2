@extends('layouts.default')

@section('title', 'メンテナンス情報')
@section('pageId', 'maintenance')

@section('contents')

<article>
  <div class="c-heading-l">
    <h1 class="c-heading-l__title">メンテナンス情報</h1>
  </div>

  <div class="l-contents p-maintenance-info">
    {{-- TODO トーストの表示が必要な時にこのHTMLを出力する --}}
    <div id="js-toast" class="c-alert">
      <p class="c-alert__text">保存しました</p>
      <div id="js-toast-close" class="c-alert__close-btn"><span></span></div>
    </div>
    {{-- / トーストの表示が必要な時にこのHTMLを出力する --}}

    <div class="c-label c-label-show">現在表示中</div>
    <div class="c-contents">
      <div class="c-table-simple">
        <div class="c-table-simple__row">
          <div class="c-table-simple__header">メッセージ</div>
          <div class="c-table-simple__data c-text-m">
            <p class="p-maintenance-info__message">2019年5月28日(火)の22時00分から2時間の予定でメンテナンスを行います。ご迷惑おかけしますがご協力のほどよろしくお願いいたします。</p>
          </div>
        </div><!-- /.c-table-simple__row -->
        <div class="c-table-simple__row">
          <div class="c-table-simple__header">表示期間</div>
          <div class="c-table-simple__data c-text-m">
            <p class="c-text-m">2019.00.00〜2019.00.00</p>
          </div>
        </div><!-- /.c-table-simple__row -->
      </div><!-- /.c-table-simple -->
    </div><!-- /.c-contents -->

    <div class="c-btn-wrapper">
      <div class="c-btn c-btn--secondary">
        <form method="POST" action="{{-- TODO: POST先設定 --}}">
          @csrf
          {{-- TODO hiddenでデータを渡すのかと思ったので置いてますが不要なら消してください --}}
          <input type="hidden" name="{{-- name値設定--}}" value="0">
          <button class="c-btn__content" type="submit">非表示にする</button>
        </form>
      </div>
      <div class="c-btn c-btn--secondary">
        <a href="/admin/maintenance_info/modify" class="c-btn__content c-btn--lswide">編集</a>
      </div>
    </div><!-- /.c-btn-wrapper -->

    もしくは

    <div class="c-btn-wrapper">
      <div class="c-btn c-btn--secondary c-btn--on">
        <form method="POST" action="{{-- TODO: POST先設定 --}}">
          @csrf
          {{-- TODO hiddenでデータを渡すのかと思ったので置いてますが不要なら消してください --}}
          <input type="hidden" name="{{-- name値設定--}}" value="1">
          <button class="c-btn__content" type="submit">表示する</button>
        </form>
      </div>
      <div class="c-btn c-btn--secondary">
        <a href="/admin/maintenance_info/modify" class="c-btn__content c-btn--lswide">編集</a>
      </div>
    </div><!-- /.c-btn-wrapper -->
  </div><!-- /.l-contents -->

  <div class="l-contents p-maintenance-info">
    <div class="c-label c-label-hidden">現在非表示</div>
    <div class="c-contents">
      <form method="" action="">
        <div class="c-table-simple">
          <div class="c-table-simple__row">
            <div class="c-table-simple__header">メッセージ</div>
            <div class="c-table-simple__data c-text-m">
              <p>現在メッセージはありません</p>
            </div>
          </div><!-- /.c-table-simple__row -->
          <div class="c-table-simple__row">
            <div class="c-table-simple__header">表示期間</div>
            <div class="c-table-simple__data c-text-m">
              ー
            </div>
          </div><!-- /.c-table-simple__row -->
        </div><!-- /.c-table-simple -->
      </form>
    </div><!-- /.c-contents -->

    <div class="c-btn-wrapper">
      <div class="c-btn c-btn--secondary">
        <a href="/admin/maintenance_info/modify" class="c-btn__content c-btn--lswide">編集</a>
      </div>
    </div><!-- /.c-btn-wrapper -->
  </div><!-- /.l-contents -->
</article>

@endsection

@section('localScript')
@endsection

@section('localStyle')
@endsection
