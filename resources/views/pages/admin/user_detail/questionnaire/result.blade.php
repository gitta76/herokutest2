@extends('layouts.default')

@section('title', 'アンケート')
@section('pageId', 'questionnaire')

@section('contents')

<article>
  <div class="p-questionnaire l-contents">
    <div class="c-link-back">
      <a href="/admin/user_detail/questionnaire/list" class="c-link-back__text">戻る</a>
    </div>

    <div class="c-heading-m">
      <h1 class="c-heading-m__title">システム企画開発部GCS・SAグループなど25文字</h1>
    </div>

    <div class="c-contents__parts">
      <div class="c-list-definition">
        <h2 class="c-list-definition__term">実施期間</h2>
        <div class="c-list-definition__description"><p class="c-text-m">2019.01.01 〜 2019.03.30</p></div>
      </div>

      <div class="c-list-definition">
        <h2 class="c-list-definition__term">参加人数</h2>
        <div class="c-list-definition__description"><p class="c-text-m">19/20</p></div>
      </div>
    </div><!-- /.c-contents__parts -->

    <div id="js-scroll-bar" class="p-questionnaire-result-wrap">
      <table class="p-questionnaire-result-list c-table-normal">
        <thead>
          <tr class="c-table-normal__row">
            <th class="c-table-normal__head c-table-normal__head--line">メールアドレス</th>
            <th class="c-table-normal__head">設問1</th>
            <th class="c-table-normal__head">設問2</th>
            <th class="c-table-normal__head">設問3</th>
            <th class="c-table-normal__head">設問4</th>
            <th class="c-table-normal__head">設問5</th>
            <th class="c-table-normal__head">設問6</th>
            <th class="c-table-normal__head">設問7</th>
            <th class="c-table-normal__head">設問8</th>
            <th class="c-table-normal__head">設問9</th>
            <th class="c-table-normal__head">設問10</th>
            <th class="c-table-normal__head">設問11</th>
            <th class="c-table-normal__head">設問12</th>
          </tr>
        </thead>

        <tbody>
          <tr class="c-table-normal__row">
            <th class="c-table-normal__data">navilight@nkgr.co.jp</th>
            <td class="c-table-normal__data">1</td>
            <td class="c-table-normal__data">2</td>
            <td class="c-table-normal__data">3</td>
            <td class="c-table-normal__data">4</td>
            <td class="c-table-normal__data">5</td>
            <td class="c-table-normal__data">6</td>
            <td class="c-table-normal__data">1</td>
            <td class="c-table-normal__data">2</td>
            <td class="c-table-normal__data">3</td>
            <td class="c-table-normal__data">4</td>
            <td class="c-table-normal__data">5</td>
            <td class="c-table-normal__data">6</td>
          </tr>

          <tr class="c-table-normal__row">
            <th class="c-table-normal__data">navilight@nkgr.co.jp</th>
            <td class="c-table-normal__data">1</td>
            <td class="c-table-normal__data">2</td>
            <td class="c-table-normal__data">3</td>
            <td class="c-table-normal__data">4</td>
            <td class="c-table-normal__data">5</td>
            <td class="c-table-normal__data">6</td>
            <td class="c-table-normal__data">1</td>
            <td class="c-table-normal__data">2</td>
            <td class="c-table-normal__data">3</td>
            <td class="c-table-normal__data">4</td>
            <td class="c-table-normal__data">5</td>
            <td class="c-table-normal__data">6</td>
          </tr>

          <tr class="c-table-normal__row">
            <th class="c-table-normal__data">navilight@nkgr.co.jp</th>
            <td class="c-table-normal__data">1</td>
            <td class="c-table-normal__data">2</td>
            <td class="c-table-normal__data">3</td>
            <td class="c-table-normal__data">4</td>
            <td class="c-table-normal__data">5</td>
            <td class="c-table-normal__data">6</td>
            <td class="c-table-normal__data">1</td>
            <td class="c-table-normal__data">2</td>
            <td class="c-table-normal__data">3</td>
            <td class="c-table-normal__data">4</td>
            <td class="c-table-normal__data">5</td>
            <td class="c-table-normal__data">6</td>
          </tr>

          <tr class="c-table-normal__row">
            <th class="c-table-normal__data">navilight@nkgr.co.jp</th>
            <td class="c-table-normal__data">1</td>
            <td class="c-table-normal__data">2</td>
            <td class="c-table-normal__data">3</td>
            <td class="c-table-normal__data">4</td>
            <td class="c-table-normal__data">5</td>
            <td class="c-table-normal__data">6</td>
            <td class="c-table-normal__data">1</td>
            <td class="c-table-normal__data">2</td>
            <td class="c-table-normal__data">3</td>
            <td class="c-table-normal__data">4</td>
            <td class="c-table-normal__data">5</td>
            <td class="c-table-normal__data">6</td>
          </tr>

          <tr class="c-table-normal__row">
            <th class="c-table-normal__data">navilight@nkgr.co.jp</th>
            <td class="c-table-normal__data">1</td>
            <td class="c-table-normal__data">2</td>
            <td class="c-table-normal__data">3</td>
            <td class="c-table-normal__data">4</td>
            <td class="c-table-normal__data">5</td>
            <td class="c-table-normal__data">6</td>
            <td class="c-table-normal__data">1</td>
            <td class="c-table-normal__data">2</td>
            <td class="c-table-normal__data">3</td>
            <td class="c-table-normal__data">4</td>
            <td class="c-table-normal__data">5</td>
            <td class="c-table-normal__data">6</td>
          </tr>

          <tr class="c-table-normal__row">
            <th class="c-table-normal__data">navilight@nkgr.co.jp</th>
            <td class="c-table-normal__data">1</td>
            <td class="c-table-normal__data">2</td>
            <td class="c-table-normal__data">3</td>
            <td class="c-table-normal__data">4</td>
            <td class="c-table-normal__data">5</td>
            <td class="c-table-normal__data">6</td>
            <td class="c-table-normal__data">1</td>
            <td class="c-table-normal__data">2</td>
            <td class="c-table-normal__data">3</td>
            <td class="c-table-normal__data">4</td>
            <td class="c-table-normal__data">5</td>
            <td class="c-table-normal__data">6</td>
          </tr>

          <tr class="c-table-normal__row">
            <th class="c-table-normal__data">navilight@nkgr.co.jp</th>
            <td class="c-table-normal__data">1</td>
            <td class="c-table-normal__data">2</td>
            <td class="c-table-normal__data">3</td>
            <td class="c-table-normal__data">4</td>
            <td class="c-table-normal__data">5</td>
            <td class="c-table-normal__data">6</td>
            <td class="c-table-normal__data">1</td>
            <td class="c-table-normal__data">2</td>
            <td class="c-table-normal__data">3</td>
            <td class="c-table-normal__data">4</td>
            <td class="c-table-normal__data">5</td>
            <td class="c-table-normal__data">6</td>
          </tr>

          <tr class="c-table-normal__row">
            <th class="c-table-normal__data">navilight@nkgr.co.jp</th>
            <td class="c-table-normal__data">1</td>
            <td class="c-table-normal__data">2</td>
            <td class="c-table-normal__data">3</td>
            <td class="c-table-normal__data">4</td>
            <td class="c-table-normal__data">5</td>
            <td class="c-table-normal__data">6</td>
            <td class="c-table-normal__data">1</td>
            <td class="c-table-normal__data">2</td>
            <td class="c-table-normal__data">3</td>
            <td class="c-table-normal__data">4</td>
            <td class="c-table-normal__data">5</td>
            <td class="c-table-normal__data">6</td>
          </tr>

          <tr class="c-table-normal__row">
            <th class="c-table-normal__data">navilight@nkgr.co.jp</th>
            <td class="c-table-normal__data">1</td>
            <td class="c-table-normal__data">2</td>
            <td class="c-table-normal__data">3</td>
            <td class="c-table-normal__data">4</td>
            <td class="c-table-normal__data">5</td>
            <td class="c-table-normal__data">6</td>
            <td class="c-table-normal__data">1</td>
            <td class="c-table-normal__data">2</td>
            <td class="c-table-normal__data">3</td>
            <td class="c-table-normal__data">4</td>
            <td class="c-table-normal__data">5</td>
            <td class="c-table-normal__data">6</td>
          </tr>

          <tr class="c-table-normal__row">
            <th class="c-table-normal__data">navilight@nkgr.co.jp</th>
            <td class="c-table-normal__data">1</td>
            <td class="c-table-normal__data">2</td>
            <td class="c-table-normal__data">3</td>
            <td class="c-table-normal__data">4</td>
            <td class="c-table-normal__data">5</td>
            <td class="c-table-normal__data">6</td>
            <td class="c-table-normal__data">1</td>
            <td class="c-table-normal__data">2</td>
            <td class="c-table-normal__data">3</td>
            <td class="c-table-normal__data">4</td>
            <td class="c-table-normal__data">5</td>
            <td class="c-table-normal__data">6</td>
          </tr>

          <tr class="c-table-normal__row">
            <th class="c-table-normal__data">navilight@nkgr.co.jp</th>
            <td class="c-table-normal__data">1</td>
            <td class="c-table-normal__data">2</td>
            <td class="c-table-normal__data">3</td>
            <td class="c-table-normal__data">4</td>
            <td class="c-table-normal__data">5</td>
            <td class="c-table-normal__data">6</td>
            <td class="c-table-normal__data">1</td>
            <td class="c-table-normal__data">2</td>
            <td class="c-table-normal__data">3</td>
            <td class="c-table-normal__data">4</td>
            <td class="c-table-normal__data">5</td>
            <td class="c-table-normal__data">6</td>
          </tr>

          <tr class="c-table-normal__row">
            <th class="c-table-normal__data">navilight@nkgr.co.jp</th>
            <td class="c-table-normal__data">1</td>
            <td class="c-table-normal__data">2</td>
            <td class="c-table-normal__data">3</td>
            <td class="c-table-normal__data">4</td>
            <td class="c-table-normal__data">5</td>
            <td class="c-table-normal__data">6</td>
            <td class="c-table-normal__data">1</td>
            <td class="c-table-normal__data">2</td>
            <td class="c-table-normal__data">3</td>
            <td class="c-table-normal__data">4</td>
            <td class="c-table-normal__data">5</td>
            <td class="c-table-normal__data">6</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div><!-- /.l-contents -->
</article>

@endsection

@section('localScript')
<script src="/lib/perfect-scrollbar.min.js"></script>
<script>
var ps = new PerfectScrollbar(document.querySelector('#js-scroll-bar'));
</script>
@endsection

@section('localStyle')
@endsection
