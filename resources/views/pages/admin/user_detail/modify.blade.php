@extends('layouts.default')

@section('title', '基本情報')
@section('pageId', 'detail')

@section('contents')

<article>
  <div class="p-plan l-contents">
    <div class="c-heading-m">
      <h1 class="c-heading-m__title">基本情報変更</h1>
    </div>

    <form method="POST" action="{{-- TODO: POST先設定 --}}" onsubmit="return false">
      @csrf

      <div class="c-announce">
        <p class="c-text-error">エラーがある場合はここに表記されます。</p>
        <p class="c-text-error">エラーがある場合はここに表記されます。テキスト長めエラーがある場合はここに表記されます。テキスト長めエラーがある場合はここに表記されます。テキスト長めテキスト長めテキスト長め</p>
      </div>

      <div class="c-contents">
        <div class="c-table-simple p-detail-edit-form">
          <div class="c-table-simple__row">
            <div class="c-table-simple__header"><label class="c-form-label is-required" for="email">メールアドレス</label></div>
            <div class="c-table-simple__data">
              {{-- TODO エラー時に表示する --}}
              <div class="c-text-error">× エラー文言が入ります。</div>
              <div class="c-text-error">× エラー文言が入ります。</div>
              {{-- / エラー時に表示する --}}
              <input id="email" class="c-form-text" type="text" name="{{-- name値設定--}}" value="navilight@nkgr.co.jp">
            </div>
          </div><!-- /.c-table-simple__row -->
          <div class="c-table-simple__row">
            <div class="c-table-simple__header"><label class="c-form-label is-required" for="name">お名前</label></div>
            <div class="c-table-simple__data">
              {{-- TODO エラー時に表示する --}}
              <div class="c-text-error">× エラー文言が入ります。</div>
              {{-- / エラー時に表示する --}}
              <input id="name" class="c-form-text" type="text" name="{{-- name値設定--}}" value="山田太郎">
            </div>
          </div><!-- /.c-table-simple__row -->
          <div class="c-table-simple__row">
            <div class="c-table-simple__header"><label class="c-form-label" for="company">会社名</label></div>
            <div class="c-table-simple__data">
              <input id="company" class="c-form-text" type="text" name="{{-- name値設定--}}" value="日本経営">
            </div>
          </div><!-- /.c-table-simple__row -->
          <div class="c-table-simple__row">
            <div class="c-table-simple__header"><label class="c-form-label" for="business">業種</label></div>
            <div class="c-table-simple__data">
              <div class="c-form-select c-form-select--harf">
                <select id="business" class="" name="{{-- name値設定--}}" >
                  <option value="" selected>コンサルティング</option>
                  <option value="">xxx</option>
                  <option value="">xxx</option>
                  <option value="">xxx</option>
                  <option value="">xxx</option>
                </select>
              </div>
            </div>
          </div><!-- /.c-table-simple__row -->
          <div class="c-table-simple__row">
            <div class="c-table-simple__header"><label class="c-form-label is-required" for="postal-code">郵便番号</label></div>
            <div class="c-table-simple__data c-text-m">
              {{-- TODO エラー時に表示する --}}
              <div class="c-text-error">× エラー文言が入ります。</div>
              {{-- / エラー時に表示する --}}
              <input id="postal-code" class="c-form-text c-form-text--postal-code" type="text" name="{{-- name値設定--}}" value="561-8510">
              <div class="c-btn-postal">
                <button id="js-postal-button" class="c-btn-postal__content" type="button">郵便番号から住所を入力</button>
              </div>
            </div>
          </div><!-- /.c-table-simple__row -->
          <div class="c-table-simple__row">
            <div class="c-table-simple__header"><label class="c-form-label is-required" for="address">住所</label></div>
            <div class="c-table-simple__data c-text-m">
              {{-- TODO エラー時に表示する --}}
              <div class="c-text-error">× エラー文言が入ります。</div>
              {{-- / エラー時に表示する --}}
              <input id="address" class="c-form-text" type="text" name="{{-- name値設定--}}" value="大阪府豊中市寺内2-13-3 日本経営ビル">
            </div>
          </div><!-- /.c-table-simple__row -->
          <div class="c-table-simple__row">
            <div class="c-table-simple__header"><label class="c-form-label is-required" for="tel">電話番号</label></div>
            <div class="c-table-simple__data c-text-m">
              {{-- TODO エラー時に表示する --}}
              <div class="c-text-error">× エラー文言が入ります。</div>
              {{-- / エラー時に表示する --}}
              <input id="tel" class="c-form-text c-form-text--harf" type="text" name="{{-- name値設定--}}" value="06-6868-1158">
            </div>
          </div><!-- /.c-table-simple__row -->
        </div><!-- /.c-table-simple -->
      </div><!-- /.c-contents -->

      <div class="c-btn-wrapper">
        <div class="c-btn c-btn--secondary">
          <a href="/admin/user_detail{{-- パラメータ？ --}}" class="c-btn__content">キャンセル</a>
        </div>
        <div class="c-btn c-btn--primary">
          <button type="button" class="c-btn__content c-bnt--lswide" onclick="submit()">確認</button>
        </div>
      </div><!-- /.c-btn-wrapper -->
    </form>
  </div><!-- /.l-contents -->
</article>

@endsection

@section('localScript')
<script src="https://yubinbango.github.io/yubinbango-core/yubinbango-core.js"></script>
<script>
const postalBtn = document.getElementById('js-postal-button')

if (postalBtn) {
  postalBtn.addEventListener('click', function(el) {
    try {
      var postalCode = document.getElementById('postal-code').value
      var addressField = document.getElementById('address')

      new YubinBango.Core(postalCode, function(addr) {
        if (addr.region_id) {
          addressField.value = addr.region + addr.locality + addr.street
        } else {
          alert('該当する住所がありません')
        }
      })
    }
    catch (e) {
      alert('郵便番号の形式が正しくありません')
    }
  })
}
</script>
@endsection

@section('localStyle')
@endsection
