@extends('layouts.default')

@section('title', 'アカウント一覧')
@section('pageId', 'user-list')

@section('contents')

<article>
  <div class="c-heading-l">
    <h1 class="c-heading-l__title">アカウント一覧</h1>
  </div>

  <div class="p-user-list-search">
    <form method="GET" action="/admin/user_list" onsubmit="return false">
      <div class="p-user-list-search__inner">
        <div class="p-user-list-search__parts">
          <div class="p-user-list-search__label"><label for="status">状況</label></div>
          <div class="c-form-select">
            <select id="status" name="status">
              <option value="" selected>選択してください</option>
              <option value="1">開始待ち</option>
              <option value="2">利用中</option>
              <option value="3">停止中</option>
              <option value="4">xxx</option>
            </select>
          </div>
        </div>

        <div class="p-user-list-search__parts">
          <div class="p-user-list-search__label"><label for="start">申込月</label></div>
          <div class="c-form-select">
            <select id="start" name="start">
              <option value="" selected>選択してください</option>
              <option value="201908">2019年8月</option>
              <option value="201907">2019年7月</option>
              <option value="201906">2019年6月</option>
              <option value="201905">2019年5月</option>
            </select>
          </div>
        </div>

        <div class="p-user-list-search__parts">
          <div class="p-user-list-search__label"><label for="business">業種</label></div>
          <div class="c-form-select">
            <select id="business" name="business">
              <option value="" selected>選択してください</option>
              <option value="1">xxx</option>
              <option value="2">xxx</option>
              <option value="3">xxx</option>
              <option value="4">xxx</option>
            </select>
          </div>
        </div>

        <div class="p-user-list-search__parts p-user-list-search__parts--keyword">
          <div class="p-user-list-search__label"><label for="keyword">キーワード</label></div>
          <input class="c-form-text" type="text" id="keyword" name="keyword" value="" placeholder="キーワードを入力">
        </div>

        <div class="c-btn c-btn--primary p-user-list-search__btn">
          <input class="c-btn__content c-btn--lswide" type="button" onclick="submit()" value="検索">
        </div>
      </div>
    </form>
  </div>

  <form method="POST" action="/admin/user_list/csvdl">
    @csrf

    <div class="p-user-list-contents">
      <div class="p-user-list-csv clearfix">
        <div class="c-form-checkbox p-user-list-csv__checkbox">
          <div class="c-form-checkbox__input">チェックの</div>
        </div>
        <div class="c-btn c-btn--tertiary p-user-list-csv__btn">
          <button type="submit" class="c-btn__content c-btn__content--tertiary">アンケート結果CSV出力</button>
        </div>
      </div>

      <table class="c-table-normal p-user-list-table">
        <thead>
          <tr class="c-table-normal__row">
            <th class="c-table-normal__head">
              <div class="c-form-checkbox p-user-list-table__checkbox">
                <input type="checkbox" id="check-all">
                <label for="check-all" class="c-form-checkbox__input"></label>
              </div>
            </th>
            <th class="c-table-normal__head">状況</th>
            <th class="c-table-normal__head">申込者氏名</th>
            <th class="c-table-normal__head">会社名</th>
            <th class="c-table-normal__head">業種</th>
            <th class="c-table-normal__head">メールアドレス</th>
            <th class="c-table-normal__head">申込日</th>
          </tr><!-- /.c-table-normal__row -->
        </thead>

        <tbody id="js-user-table">
          <tr class="c-table-normal__row">
            <td class="c-table-normal__data">
              <div class="c-form-checkbox p-user-list-table__checkbox">
                <input type="checkbox" name="{{-- TODO name値 --}}" value="{{-- TODO value値 --}}" id="check-01">
                <label for="check-01" class="c-form-checkbox__input"></label>
              </div>
            </td>
            <td class="c-table-normal__data"><a href="/admin/user_detail/plan" class="c-table-normal__data-cell"><div class="c-label c-label--accent">開始待ち</div></a></td>
            <td class="c-table-normal__data"><a href="/admin/user_detail/plan" class="c-table-normal__data-cell">山田 太郎</a></td>
            <td class="c-table-normal__data"><a href="/admin/user_detail/plan" class="c-table-normal__data-cell">日本経営</a></td>
            <td class="c-table-normal__data"><a href="/admin/user_detail/plan" class="c-table-normal__data-cell">コンサルティング</a></td>
            <td class="c-table-normal__data"><a href="/admin/user_detail/plan" class="c-table-normal__data-cell">navilight@nkgr.co.jp</a></td>
            <td class="c-table-normal__data"><a href="/admin/user_detail/plan" class="c-table-normal__data-cell">2019/01/01</a></td>
          </tr><!-- /.c-table-normal__row -->

          <tr class="c-table-normal__row">
            <td class="c-table-normal__data">
              <div class="c-form-checkbox p-user-list-table__checkbox">
                  <input type="checkbox" name="{{-- TODO name値 --}}" value="{{-- TODO value値 --}}" id="check-02">
                <label for="check-02" class="c-form-checkbox__input"></label>
              </div>
            </td>
            <td class="c-table-normal__data"><a href="/admin/user_detail/plan" class="c-table-normal__data-cell"><div class="c-label">利用中</div></a></td>
            <td class="c-table-normal__data"><a href="/admin/user_detail/plan" class="c-table-normal__data-cell">山田 太郎</a></td>
            <td class="c-table-normal__data"><a href="/admin/user_detail/plan" class="c-table-normal__data-cell">日本経営</a></td>
            <td class="c-table-normal__data"><a href="/admin/user_detail/plan" class="c-table-normal__data-cell">コンサルティング</a></td>
            <td class="c-table-normal__data"><a href="/admin/user_detail/plan" class="c-table-normal__data-cell">navilight@nkgr.co.jp</a></td>
            <td class="c-table-normal__data"><a href="/admin/user_detail/plan" class="c-table-normal__data-cell">2019/01/01</a></td>
          </tr><!-- /.c-table-normal__row -->

          <tr class="c-table-normal__row">
            <td class="c-table-normal__data">
              <div class="c-form-checkbox p-user-list-table__checkbox">
                <input type="checkbox" name="{{-- TODO name値 --}}" value="{{-- TODO value値 --}}" id="check-03">
                <label for="check-03" class="c-form-checkbox__input"></label>
              </div>
            </td>
            <td class="c-table-normal__data"><a href="/admin/user_detail/plan" class="c-table-normal__data-cell"><div class="c-label">利用中</div></a></td>
            <td class="c-table-normal__data"><a href="/admin/user_detail/plan" class="c-table-normal__data-cell">山田 太郎</a></td>
            <td class="c-table-normal__data"><a href="/admin/user_detail/plan" class="c-table-normal__data-cell">日本経営</a></td>
            <td class="c-table-normal__data"><a href="/admin/user_detail/plan" class="c-table-normal__data-cell">コンサルティング</a></td>
            <td class="c-table-normal__data"><a href="/admin/user_detail/plan" class="c-table-normal__data-cell">navilight@nkgr.co.jp</a></td>
            <td class="c-table-normal__data"><a href="/admin/user_detail/plan" class="c-table-normal__data-cell">2019/01/01</a></td>
          </tr><!-- /.c-table-normal__row -->

          <tr class="c-table-normal__row">
            <td class="c-table-normal__data">
              <div class="c-form-checkbox p-user-list-table__checkbox">
                <input type="checkbox" name="{{-- TODO name値 --}}" value="{{-- TODO value値 --}}" id="check-04">
                <label for="check-04" class="c-form-checkbox__input"></label>
              </div>
            </td>
            <td class="c-table-normal__data"><a href="/admin/user_detail/plan" class="c-table-normal__data-cell"><div class="c-label">利用中</div></a></td>
            <td class="c-table-normal__data"><a href="/admin/user_detail/plan" class="c-table-normal__data-cell">山田 太郎</a></td>
            <td class="c-table-normal__data"><a href="/admin/user_detail/plan" class="c-table-normal__data-cell">日本経営</a></td>
            <td class="c-table-normal__data"><a href="/admin/user_detail/plan" class="c-table-normal__data-cell">コンサルティング</a></td>
            <td class="c-table-normal__data"><a href="/admin/user_detail/plan" class="c-table-normal__data-cell">navilight@nkgr.co.jp</a></td>
            <td class="c-table-normal__data"><a href="/admin/user_detail/plan" class="c-table-normal__data-cell">2019/01/01</a></td>
          </tr><!-- /.c-table-normal__row -->

          <tr class="c-table-normal__row">
            <td class="c-table-normal__data">
              <div class="c-form-checkbox p-user-list-table__checkbox">
                <input type="checkbox" name="{{-- TODO name値 --}}" value="{{-- TODO value値 --}}" id="check-05">
                <label for="check-05" class="c-form-checkbox__input"></label>
              </div>
            </td>
            <td class="c-table-normal__data"><a href="/admin/user_detail/plan" class="c-table-normal__data-cell"><div class="c-label">利用中</div></a></td>
            <td class="c-table-normal__data"><a href="/admin/user_detail/plan" class="c-table-normal__data-cell">山田 太郎</a></td>
            <td class="c-table-normal__data"><a href="/admin/user_detail/plan" class="c-table-normal__data-cell">日本経営</a></td>
            <td class="c-table-normal__data"><a href="/admin/user_detail/plan" class="c-table-normal__data-cell">コンサルティング</a></td>
            <td class="c-table-normal__data"><a href="/admin/user_detail/plan" class="c-table-normal__data-cell">navilight@nkgr.co.jp</a></td>
            <td class="c-table-normal__data"><a href="/admin/user_detail/plan" class="c-table-normal__data-cell">2019/01/01</a></td>
          </tr><!-- /.c-table-normal__row -->

          <tr class="c-table-normal__row">
            <td class="c-table-normal__data">
              <div class="c-form-checkbox p-user-list-table__checkbox">
                <input type="checkbox" name="{{-- TODO name値 --}}" value="{{-- TODO value値 --}}" id="check-06">
                <label for="check-06" class="c-form-checkbox__input"></label>
              </div>
            </td>
            <td class="c-table-normal__data"><a href="/admin/user_detail/plan" class="c-table-normal__data-cell"><div class="c-label">利用中</div></a></td>
            <td class="c-table-normal__data"><a href="/admin/user_detail/plan" class="c-table-normal__data-cell">山田 太郎</a></td>
            <td class="c-table-normal__data"><a href="/admin/user_detail/plan" class="c-table-normal__data-cell">日本経営</a></td>
            <td class="c-table-normal__data"><a href="/admin/user_detail/plan" class="c-table-normal__data-cell">コンサルティング</a></td>
            <td class="c-table-normal__data"><a href="/admin/user_detail/plan" class="c-table-normal__data-cell">navilight@nkgr.co.jp</a></td>
            <td class="c-table-normal__data"><a href="/admin/user_detail/plan" class="c-table-normal__data-cell">2019/01/01</a></td>
          </tr><!-- /.c-table-normal__row -->

          <tr class="c-table-normal__row">
            <td class="c-table-normal__data">
              <div class="c-form-checkbox p-user-list-table__checkbox">
                <input type="checkbox" name="{{-- TODO name値 --}}" value="{{-- TODO value値 --}}" id="check-07">
                <label for="check-07" class="c-form-checkbox__input"></label>
              </div>
            </td>
            <td class="c-table-normal__data"><a href="/admin/user_detail/plan" class="c-table-normal__data-cell"><div class="c-label">利用中</div></a></td>
            <td class="c-table-normal__data"><a href="/admin/user_detail/plan" class="c-table-normal__data-cell">山田 太郎</a></td>
            <td class="c-table-normal__data"><a href="/admin/user_detail/plan" class="c-table-normal__data-cell">日本経営</a></td>
            <td class="c-table-normal__data"><a href="/admin/user_detail/plan" class="c-table-normal__data-cell">コンサルティング</a></td>
            <td class="c-table-normal__data"><a href="/admin/user_detail/plan" class="c-table-normal__data-cell">navilight@nkgr.co.jp</a></td>
            <td class="c-table-normal__data"><a href="/admin/user_detail/plan" class="c-table-normal__data-cell">2019/01/01</a></td>
          </tr><!-- /.c-table-normal__row -->

          <tr class="c-table-normal__row">
            <td class="c-table-normal__data">
              <div class="c-form-checkbox p-user-list-table__checkbox">
                <input type="checkbox" name="{{-- TODO name値 --}}" value="{{-- TODO value値 --}}" id="check-08">
                <label for="check-08" class="c-form-checkbox__input"></label>
              </div>
            </td>
            <td class="c-table-normal__data"><a href="/admin/user_detail/plan" class="c-table-normal__data-cell"><div class="c-label c-label--disable">停止中</div></a></td>
            <td class="c-table-normal__data"><a href="/admin/user_detail/plan" class="c-table-normal__data-cell">山田 太郎</a></td>
            <td class="c-table-normal__data"><a href="/admin/user_detail/plan" class="c-table-normal__data-cell">日本経営</a></td>
            <td class="c-table-normal__data"><a href="/admin/user_detail/plan" class="c-table-normal__data-cell">コンサルティング</a></td>
            <td class="c-table-normal__data"><a href="/admin/user_detail/plan" class="c-table-normal__data-cell">navilight@nkgr.co.jp</a></td>
            <td class="c-table-normal__data"><a href="/admin/user_detail/plan" class="c-table-normal__data-cell">2019/01/01</a></td>
          </tr><!-- /.c-table-normal__row -->
        </tbody>
      </table>
    </div><!-- /.p-user-list-contents -->
  </form>
</article>

@endsection

@section('localScript')
<script>
var checkAll = document.getElementById('check-all')
var userTable = document.getElementById('js-user-table')
var userList = Array.prototype.slice.call(userTable.querySelectorAll('input'),0);
var userCount = userList.length

checkAll.addEventListener('change', function(ev) {
  if (ev.target.checked === true) {
    userList.forEach(function(el){
      el.checked = true
    })
  } else {
    userList.forEach(function(el){
      el.checked = false
    })
  }
})

if (userCount > 0) {
  userList.forEach(function(el){
    el.addEventListener('change', function(ev){

      var checkedCount = userTable.querySelectorAll('input:checked').length

      if (checkedCount >= userCount) {
        checkAll.checked = true
      } else {
        checkAll.checked = false
      }
    })
  })
}
</script>
@endsection

@section('localStyle')
@endsection
