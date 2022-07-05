@extends('layouts.default')

@section('title', 'メンテナンス情報')
@section('pageId', 'maintenance')

@section('contents')

<article>
  <div class="l-contents p-maintenance">

    <div class="c-heading-m">
      <h1 class="c-heading-m__title">メンテナンス情報</h1>
    </div>

    <div class="c-announce">
      <p class="c-text-error">エラーがある場合はここに表記されます。</p>
      <p class="c-text-error">エラーがある場合はここに表記されます。テキスト長めエラーがある場合はここに表記されます。テキスト長めエラーがある場合はここに表記されます。テキスト長めテキスト長めテキスト長め</p>
    </div>

    <form method="POST" action="{{-- TODO: POST先設定 --}}" onsubmit="return false">
      @csrf

      <div class="c-contents">
        <div class="c-table-simple p-maintenance-edit">
          <div class="c-table-simple__row">
            <div class="c-table-simple__header">
              <label for="message">メッセージ（280文字程度）</label>
              <p class="c-text-error">※改行位置は指定できませんので<br>　ご注意ください。</p>
            </div>
            <div class="c-table-simple__data">
              <textarea id="message" rows="12" cols="80" class="c-form-textarea"></textarea>
            </div>
          </div><!-- /.c-table-simple__row -->
          <div class="c-table-simple__row">
            <div class="c-table-simple__header">表示期間</div>
            <div class="c-table-simple__data">
              <div class="p-maintenance-edit__data-row">
                <div class="p-maintenance-edit__date">
                  <label class="c-form-date">
                    <input type="text" class="js-datepicker" value="2019-01-01" name="{{-- TODO: name値設定 --}}" readonly="readonly">
                  </label>
                </div>
                <div class="p-maintenance-edit__time">
                  <div class="c-form-select">
                    <select name="{{-- name値設定--}}">
                      <option value="" selected>00</option>
                      <option value="">xxx</option>
                      <option value="">xxx</option>
                      <option value="">xxx</option>
                      <option value="">xxx</option>
                    </select>
                  </div>&nbsp;&nbsp;時
                </div>
                <div class="p-maintenance-edit__time">
                  <div class="c-form-select">
                    <select name="{{-- name値設定--}}">
                      <option value="" selected>00</option>
                      <option value="">xxx</option>
                      <option value="">xxx</option>
                      <option value="">xxx</option>
                      <option value="">xxx</option>
                    </select>
                  </div>&nbsp;&nbsp;分〜
                </div>
              </div><!-- /.p-maintenance-edit__data-row -->
              <div class="p-maintenance-edit__data-row">
                <div class="p-maintenance-edit__date">
                  <label class="c-form-date">
                    <input type="text" class="js-datepicker" value="2019-01-10" name="{{-- TODO: name値設定 --}}" readonly="readonly">
                  </label>
                </div>
                <div class="p-maintenance-edit__time">
                  <div class="c-form-select">
                    <select name="{{-- name値設定--}}">
                      <option value="" selected>00</option>
                      <option value="">xxx</option>
                      <option value="">xxx</option>
                      <option value="">xxx</option>
                      <option value="">xxx</option>
                    </select>
                  </div>&nbsp;&nbsp;時
                </div>
                <div class="p-maintenance-edit__time">
                  <div class="c-form-select">
                    <select name="{{-- name値設定--}}">
                      <option value="" selected>00</option>
                      <option value="">xxx</option>
                      <option value="">xxx</option>
                      <option value="">xxx</option>
                      <option value="">xxx</option>
                    </select>
                  </div>&nbsp;&nbsp;分〜
                </div>
              </div><!-- /.p-maintenance-edit__data-row -->
            </div>
          </div><!-- /.c-table-simple__row -->
        </div><!-- /.c-table-simple -->
      </div><!-- /.c-contents -->

      <div class="c-btn-wrapper">
        <div class="c-btn c-btn--secondary">
          <button class="c-btn__content" type="button" onclick="history.back()">キャンセル</button>
        </div>
        <div class="c-btn c-btn--primary">
          <button type="button" class="c-btn__content c-btn--lswide" onclick="submit()">保存</button>
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
