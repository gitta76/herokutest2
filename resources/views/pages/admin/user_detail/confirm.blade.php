@extends('layouts.default')

@section('title', '基本情報')
@section('pageId', 'detail')

@section('contents')

<article>
  <div class="p-plan l-contents">
    <div class="c-heading-m">
      <h1 class="c-heading-m__title">確認</h1>
    </div>

    <form method="POST" action="{{-- TODO: POST先設定 --}}">
      @csrf

      <div class="c-contents">
        <div class="c-table-simple">
          <div class="c-table-simple__row">
            <div class="c-table-simple__header">メールアドレス</div>
            <div class="c-table-simple__data c-text-m">
              navilight@nkgr.co.jp
            </div>
            {{-- TODO hiddenでデータ渡す --}}
            <input type="hidden" name="" value="">
            {{-- / hiddenでデータ渡す --}}
          </div><!-- /.c-table-simple__row -->
          <div class="c-table-simple__row">
            <div class="c-table-simple__header">お名前</div>
            <div class="c-table-simple__data c-text-m">
              山田太郎
            </div>
            {{-- TODO hiddenでデータ渡す --}}
            <input type="hidden" name="" value="">
            {{-- / hiddenでデータ渡す --}}
          </div><!-- /.c-table-simple__row -->
          <div class="c-table-simple__row">
            <div class="c-table-simple__header">会社名</div>
            <div class="c-table-simple__data c-text-m">
              日本経営
            </div>
            {{-- TODO hiddenでデータ渡す --}}
            <input type="hidden" name="" value="">
            {{-- / hiddenでデータ渡す --}}
          </div><!-- /.c-table-simple__row -->
          <div class="c-table-simple__row">
            <div class="c-table-simple__header">業種</div>
            <div class="c-table-simple__data c-text-m">
              コンサルティング
            </div>
            {{-- TODO hiddenでデータ渡す --}}
            <input type="hidden" name="" value="">
            {{-- / hiddenでデータ渡す --}}
          </div><!-- /.c-table-simple__row -->
          <div class="c-table-simple__row">
            <div class="c-table-simple__header">郵便番号</div>
            <div class="c-table-simple__data c-text-m">
              561-8510
            </div>
            {{-- TODO hiddenでデータ渡す --}}
            <input type="hidden" name="" value="">
            {{-- / hiddenでデータ渡す --}}
          </div><!-- /.c-table-simple__row -->
          <div class="c-table-simple__row">
            <div class="c-table-simple__header">住所</div>
            <div class="c-table-simple__data c-text-m">
              大阪府豊中市寺内2-13-3 日本経営ビル
            </div>
            {{-- TODO hiddenでデータ渡す --}}
            <input type="hidden" name="" value="">
            {{-- / hiddenでデータ渡す --}}
          </div><!-- /.c-table-simple__row -->
          <div class="c-table-simple__row">
            <div class="c-table-simple__header">電話番号</div>
            <div class="c-table-simple__data c-text-m">
              06-6868-1158
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
          <input class="c-btn__content c-btn--lswide" type="submit" value="保存">
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
