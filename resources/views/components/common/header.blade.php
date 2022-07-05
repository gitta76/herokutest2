<header class="l-header">
  <div class="l-header__logo">
    <a href=""><img src="/img/logo.svg" alt="Navilight">管理画面</a>
  </div>

  <nav class="l-header__nav">
    <ul id="js-header-nav" class="l-header__nav-list clearfix">
      {{-- ↓↓↓「is-current」クラスをつけると現在地表示になります --}}
      <li class="l-header__nav-list-item"><a href="/admin/user_list" data-current="user-list">アカウント一覧</a></li>
      <li class="l-header__nav-list-item"><a href="/admin/maintenance_info" data-current="maintenance">メンテナンス情報</a></li>
      <li class="l-header__nav-list-item"><a href="/logout">ログアウト</a></li>
    </ul>
  </nav><!-- /l-header__nav -->
</header><!-- /l-header -->
