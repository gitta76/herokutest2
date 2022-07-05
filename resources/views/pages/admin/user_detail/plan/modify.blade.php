@extends('layouts.default')

@section('title', 'プラン')
@section('pageId', 'plan')

@section('contents')

<article>
  <div class="l-contents">
    <div class="c-heading-m">
      <h1 class="c-heading-m__title">プラン変更</h1>
    </div>

    {{-- TODO: [バックエンド結合時] エラー時に表示 --}}
    <div class="c-announce">
      <p class="c-text-error">エラーがある場合はここに表記されます。</p>
      <p class="c-text-error">エラーがある場合はここに表記されます。テキスト長めエラーがある場合はここに表記されます。テキスト長めエラーがある場合はここに表記されます。テキスト長めテキスト長めテキスト長め</p>
    </div>
    {{-- / エラー時に表示 --}}

    <form method="POST" action="{{-- TODO: POST先設定 --}}" onsubmit="return false">
    <div class="c-contents clearfix">
        <div class="c-table-simple p-plan-edit-form">
          <div class="c-table-simple__row">
            <div class="c-table-simple__header"><label for="plan">プラン</label></div>
            <div class="c-table-simple__data c-text-m">
              <div class="c-form-select c-form-select--harf">
                <select id="plan" name="{{-- TODO: name値設定 --}}">
                  <option value="" selected>120日間使い放題 － 31〜60人</option>
                  <option value="">xxx</option>
                  <option value="">xxx</option>
                  <option value="">xxx</option>
                  <option value="">xxx</option>
                </select>
              </div>
              <div class="c-text-error c-form-parts">※プランを変更したら下記の契約期間もご確認ください。</div>
            </div>
          </div><!-- /.c-table-simple__row -->
          <div class="c-table-simple__row">
            <div class="c-table-simple__header">契約期間</div>
            <div class="c-table-simple__data c-text-m">
              2019.01.01
              <span class="c-form-date__between">～</span>
              <label class="c-form-date"><input type="text" class="js-datepicker" value="2019-01-10" name="{{-- TODO: name値設定 --}}" readonly="readonly"></label>
            </div>
          </div><!-- /.c-table-simple__row -->
          <div class="c-table-simple__row">
            <div class="c-table-simple__header"><label for="payment">決算方法</label></div>
            <div class="c-table-simple__data c-text-m">
              <div class="c-form-select c-form-select--harf">
                <select id="payment" name="{{-- TODO: name値設定 --}}">
                  <option value="" selected>銀行振込</option>
                  <option value="">xxx</option>
                  <option value="">xxx</option>
                  <option value="">xxx</option>
                  <option value="">xxx</option>
                </select>
              </div>
            </div>
          </div><!-- /.c-table-simple__row -->
        </div><!-- /.c-table-simple -->
      </div><!-- /.c-contents -->

      <div class="c-btn-wrapper">
        <div class="c-btn c-btn--secondary">
          <button class="c-btn__content" type="button" onclick="history.back()">キャンセル</button>
        </div>
        <div class="c-btn c-btn--primary">
          <button class="c-btn__content c-btn--lswide" type="button" onclick="submit()">確認</button>
        </div>
      </div><!-- /.c-btn-wrapper -->
    </form>

  </div><!-- /.l-contents -->
</article>

@endsection

@section('localScript')
<script src="{{ mix('js/datepicker.js') }}"></script>
@endsection

@section('localStyle')
@endsection
