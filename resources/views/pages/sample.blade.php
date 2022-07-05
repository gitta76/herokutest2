@extends('layouts.default')

@section('title', 'サンプルページ')
@section('pageId', 'sample')

@section('contents')

<article>
  <div class="c-heading-l">
    <h1 class="c-heading-l__title">見出し（大）</h1>
  </div>

  <div class="l-contents">
    <div id="js-toast" class="c-alert">
      <p class="c-alert__text">ログアウトしました</p>
      <div id="js-toast-close" class="c-alert__close-btn"><span></span></div>
    </div>

    <div class="c-link-back">
      <a href="" class="c-link-back__text">一覧へ戻る</a>
    </div>

    <div class="c-heading-m">
      <h1 class="c-heading-m__title">見出し（中）</h1>
    </div>

    <div class="c-list-definition">
      <h2 class="c-list-definition__term">見出し</h2>
      <div class="c-list-definition__description"><p class="c-text-m">内容</p></div>
    </div>
    <div class="c-list-definition">
      <h2 class="c-list-definition__term">見出し</h2>
      <div class="c-list-definition__description"><p class="c-text-m">内容</p></div>
    </div>

    <div class="c-tab-menu">
      <div class="c-tab-item"><a href="#" class="c-tab-item__inner">プラン</a></div>
      <div class="c-tab-item"><a href="#" class="c-tab-item__inner c-tab-item__inner--selected">基本情報</a></div>
      <div class="c-tab-item"><a href="#" class="c-tab-item__inner">ご利用履歴</a></div>
      <div class="c-tab-item"><a href="#" class="c-tab-item__inner">アンケート</a></div>
    </div><!-- /.c-tab-menu -->

    <div class="c-contents">
      <form method="" action="">
        <div class="c-table-simple">
          <div class="c-table-simple__row">
            <div class="c-table-simple__header">見出し</div>
            <div class="c-table-simple__data">
              内容
            </div>
          </div><!-- /.c-table-simple__row -->
          <div class="c-table-simple__row">
            <div class="c-table-simple__header">見出し</div>
            <div class="c-table-simple__data">
              内容
            </div>
          </div><!-- /.c-table-simple__row -->
        </div><!-- /.c-table-simple -->
      </form>
    </div><!-- /.c-contents -->

    <div class="c-contents clearfix">
      <form method="" action="">
        <div class="c-table-simple c-contents__main">
          <div class="c-table-simple__row">
            <div class="c-table-simple__header">見出し</div>
            <div class="c-table-simple__data">
              内容
            </div>
          </div><!-- /.c-table-simple__row -->
          <div class="c-table-simple__row">
            <div class="c-table-simple__header">見出し</div>
            <div class="c-table-simple__data">
              内容
            </div>
          </div><!-- /.c-table-simple__row -->
        </div><!-- /.c-table-simple -->
        <div class="c-btn c-btn--secondary c-btn--small c-contents__side">
          <button class="c-btn__content c-btn__content--small" type="submit">変更する</button>
        </div>
      </form>
    </div><!-- /.c-contents -->

    <form method="" action="">
    <div class="c-contents clearfix">
        <div class="c-table-simple p-plan-edit-form">
          <div class="c-table-simple__row">
            <div class="c-table-simple__header">日付</div>
            <div class="c-table-simple__data">
              <label class="c-form-date"><input type="date" value="2019-01-01"></label>&nbsp;&nbsp;&nbsp;～&nbsp;&nbsp;&nbsp;<label class="c-form-date"><input type="date" value="2019-01-10"></label>
            </div>
          </div><!-- /.c-table-simple__row -->
          <div class="c-table-simple__row">
            <div class="c-table-simple__header">セレクトボックス</div>
            <div class="c-table-simple__data">
              <div class="c-form-select c-form-select--harf">
                <select>
                  <option value="" selected>選択してください</option>
                  <option value="">xxx</option>
                  <option value="">xxx</option>
                  <option value="">xxx</option>
                  <option value="">xxx</option>
                </select>
              </div>
            </div>
          </div><!-- /.c-table-simple__row -->
          <div class="c-table-simple__row">
            <div class="c-table-simple__header"><label for="text01" class="c-form-label is-required">テキスト</label></div>
            <div class="c-table-simple__data">
              <input id="text01" class="c-form-text" type="text" value="" placeholder="キーワードを入力">
            </div>
          </div><!-- /.c-table-simple__row -->
          <div class="c-table-simple__row">
            <div class="c-table-simple__header"><label for="text02" class="c-form-label is-required">テキスト（幅が短い）</label></div>
            <div class="c-table-simple__data">
              <input id="text02" class="c-form-text c-form-text--harf" type="text" value="" placeholder="キーワードを入力">
            </div>
          </div><!-- /.c-table-simple__row -->
          <div class="c-table-simple__row">
            <div class="c-table-simple__header"><label for="message" class="c-form-label is-required">テキストエリア</label></div>
            <div class="c-table-simple__data">
              <textarea id="message" rows="12" cols="80" class="c-form-textarea"></textarea>
            </div>
          </div><!-- /.c-table-simple__row -->
        </div><!-- /.c-table-simple -->
      </div><!-- /.c-contents -->

      <div class="c-btn-wrapper">
        <div class="c-btn c-btn--secondary">
          <button class="c-btn__content" type="button">キャンセル</button>
        </div>
        <div class="c-btn c-btn--primary">
          <input class="c-btn__content" type="submit" value="確&nbsp;&nbsp;&nbsp;&nbsp;認">
        </div>
      </div><!-- /.c-btn-wrapper -->
    </form>

    <div class="c-contents__parts">
      <div class="c-btn c-btn--tertiary">
        <a href="" class="c-btn__content c-btn__content--tertiary">アンケート結果CSV出力</a>
      </div>
    </div>

    <div class="c-contents__parts clearfix">
      <div class="c-btn-postal">
        <button class="c-btn-postal__content" type="button">郵便番号から住所を入力</button>
      </div>
    </div>

    <div class="c-contents__parts clearfix">
      <div class="c-label">利用中</div>
      <div class="c-label c-label--accent">開始待ち</div>
      <div class="c-label c-label--disable">停止中</div>
    </div>

    <div class="c-contents__parts clearfix">
      <div class="c-label c-label-show">現在表示中</div>
      <div class="c-label c-label-hidden">現在非表示</div>
    </div>

    <div class="c-contents__parts clearfix">
      <table class="c-table-normal">
        <thead>
          <tr class="c-table-normal__row">
            <th class="c-table-normal__head">見出し01</th>
            <th class="c-table-normal__head">見出し02</th>
            <th class="c-table-normal__head">見出し03</th>
            <th class="c-table-normal__head">見出し04</th>
          </tr>
        </thead>

        <tbody>
          <tr class="c-table-normal__row c-table-normal__row--running">
            <td class="c-table-normal__data">リンクなし</td>
            <td class="c-table-normal__data">リンクなし</td>
            <td class="c-table-normal__data">リンクなし</td>
            <td class="c-table-normal__data">リンクなし</td>
          </tr>

          <tr class="c-table-normal__row">
            <td class="c-table-normal__data"><a href="" class="c-table-normal__data-cell">リンクあり</a></td>
            <td class="c-table-normal__data"><a href="" class="c-table-normal__data-cell">リンクあり</a></td>
            <td class="c-table-normal__data"><a href="" class="c-table-normal__data-cell">リンクあり</a></td>
            <td class="c-table-normal__data"><a href="" class="c-table-normal__data-cell">リンクあり</a></td>
          </tr>

          <tr class="c-table-normal__row">
            <td class="c-table-normal__data"><a href="" class="c-table-normal__data-cell">リンクあり</a></td>
            <td class="c-table-normal__data"><a href="" class="c-table-normal__data-cell">リンクあり</a></td>
            <td class="c-table-normal__data"><a href="" class="c-table-normal__data-cell">リンクあり</a></td>
            <td class="c-table-normal__data"><a href="" class="c-table-normal__data-cell">リンクあり</a></td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="c-contents__parts clearfix">
      <h1>@yield('title')</h1>
      <p>サンプルページです</p>

      @include('components.sample', ['text' => 'テンプレートに変数を渡すサンプル'])
    </div>
  </div><!-- /.l-contents -->
</article>

@endsection

@section('localScript')
<script>
console.log('サンプルページ')
</script>
@endsection

@section('localStyle')
@endsection
