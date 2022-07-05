# Navilight 日本経営側管理画面

## 開発環境

https://navilight-admin.herokuapp.com/

## Basic認証

ID tam
PW R8kVHfWd

## 概要

- Laravel 5.8

###  バックログURL
https://testam.backlog.jp/projects/NIH

## インストール

### 必要な実行環境

- php >= 7.1
- composer
- npm(yarnでも可)

### ローカル実行環境構築(Laravel)

```
// PHPモジュールインストール
$ composer install
```

`.env.example` → `.env` にリネーム

```
// アプリケーションキー設定
$ php artisan key:generate

// ローカルサーバー立ち上げ
$ php artisan serve
```

`http://localhost:8000` でページが表示されればLaravelのインストールOK。
フロントの開発に関してはこれで進めること可能。HomesteadやValetを使う場合は別途設定。

### ローカル実行環境構築(フロントエンド開発環境)

Webpack + Laravel Mix によるフロントエンドビルド環境です

#### できること

- SCSSビルド
  - コンパイル時にCSS MQPackerでメディアクエリーをまとめる
  - コンパイル時にCSS Declaration Sorterでプロパティをソート
- JavaScriptビルド (ES2015以降対応)
- SourceMap 生成 (開発ビルド時のみ)
- BrowserSync
- Prettier によるコード整形

#### フォルダ構造

```
├── public
│   ├── css                 CSS (ビルド出力先)
│   ├── img                 画像
│   └── js                  JS (ビルド出力先)
├── resources               ソースコード (JS/CSS)
│   ├── js                  JavaScriptファイル
│   │   ├── xxx.js          resources/js直下のjsファイルがビルド対象
│   │   └── xxx/xx.js       インクルード用のjs
│   └── sass                SCSSファイル
│       ├── xxx.scss        resources/sass直下のscssファイルがビルド対象
│       └── xxx/xx.scss     インクルード用のscssファイル
└── resources/views         ソースコード (JS/CSS)
    └── xxx.blade.php       Laravelのviewファイル
```

#### セットアップ

```
$ npm install
// または
$ yarn install
```

`.env` にBrowserSync用の Proxy URL を追加。
デフォルトで `http://localhost:8000` が設定されているためローカル環境用にドメインなど設定していなければ不要。

```
MIX_SENTRY_DSN_PUBLIC=ローカル開発環境のURL
```

## 実行方法

- `npm start` : 開発用ビルドとBrowserSyncによる watch
- `npm run dev` : 開発用ビルドのみ実行
- `npm run prod` : プロダクション用のビルドのみ実行
