<!DOCTYPE html>
<html lang="ja">
<head>
@include('components.common.meta')
<link rel="stylesheet" href="{{ mix('css/style.css') }}">
@hasSection('localStyle')
@yield('localStyle')
@endif
</head>
<body id="@yield('pageId')">

<main class="l-container">
@yield('contents')
</main>

<script src="{{ mix('js/common.js') }}"></script>
@hasSection('localScript')
@yield('localScript')
@endif
</body>
</html>
