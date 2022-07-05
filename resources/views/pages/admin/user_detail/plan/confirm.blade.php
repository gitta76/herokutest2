@extends('layouts.default')

@section('title', 'プラン')
@section('pageId', 'plan')

@section('contents')

<article>
  <div class="l-contents">
    <div class="c-heading-m">
      <h1 class="c-heading-m__title">確認</h1>
    </div>

    <form method="POST" action="{{-- TODO: POST先設定 --}}">
      @csrf

      <div class="c-contents clearfix">
        <div class="c-table-simple">
          <div class="c-table-simple__row">
            <div class="c-table-simple__header">プラン</div>
            <div class="c-table-simple__data c-text-m">
              120日間使い放題 － 31〜60人
            </div>
            {{-- TODO hiddenでデータ渡す --}}
            <input type="hidden" name="" value="">
            {{-- / hiddenでデータ渡す --}}
          </div><!-- /.c-table-simple__row -->
          <div class="c-table-simple__row">
            <div class="c-table-simple__header">契約期間</div>
            <div class="c-table-simple__data c-text-m">
              2019.01.01 〜 2019.03.30
            </div>
            {{-- TODO hiddenでデータ渡す --}}
            <input type="hidden" name="" value="">
            {{-- / hiddenでデータ渡す --}}
          </div><!-- /.c-table-simple__row -->
          <div class="c-table-simple__row">
            <div class="c-table-simple__header">決算方法</div>
            <div class="c-table-simple__data c-text-m">
              銀行振込
            </div>
            {{-- TODO hiddenでデータ渡す --}}
            <input type="hidden" name="" value="">
            {{-- / hiddenでデータ渡す --}}
          </div><!-- /.c-table-simple__row -->
        </div><!-- /.c-table-simple -->
      </div><!-- /.c-contents -->

      <div class="c-btn-wrapper">
        <div class="c-btn c-btn--secondary">
          <button class="c-btn__content" type="button" onclick="history.back()">戻る</button>
        </div>
        <div class="c-btn c-btn--primary">
          <button type="submit" class="c-btn__content c-btn--lswide">保存</button>
        </div>
      </div><!-- /.c-btn-wrapper -->
    </form>

  </div><!-- /.l-contents -->
</article>

@endsection

@section('localScript')
@endsection

@section('localStyle')
@endsection
