require("dotenv").config();

const mix = require("laravel-mix");
const glob = require("glob");
const cssOption = {
    processCssUrls: false,
    postCss: [
        require("css-mqpacker")(),
        require("css-declaration-sorter")({
            order: "smacss"
        })
    ],
    autoprefixer: {
        options: {
            browsers: ["last 2 versions"]
        }
    }
};

// scssディレクトリ直下のscssファイルを全てコンパイル
glob.sync("resources/sass/*.scss").map(function(file) {
    mix.sass(file, "public/css").options(cssOption);
});

//jsディレクトリ直下のjsファイルを全てコンパイル
glob.sync("resources/js/*.js").map(function(file) {
    mix.js(file, "public/js");
});

// webpackConfig設定の追加
// Prettierの設定
// sassをglobでインポートできるように
mix.webpackConfig({
    module: {
        rules: [
            {
                test: /\.js$/,
                loader: "prettier-loader",
                options: {
                    // Prettier Options https://prettier.io/docs/en/options.html
                    printWidth: 120,
                    singleQuote: true,
                    semi: false
                }
            },
            // {
            //     test: /\.vue$/,
            //     loader: "prettier-loader",
            //     options: {
            //         parser: "vue",
            //         printWidth: 120,
            //         singleQuote: true,
            //         semi: false
            //     }
            // },
            {
                test: /\.scss/,
                loader: "import-glob-loader"
            },
            {
                test: /\.scss$/,
                loader: "prettier-loader",
                options: {
                    parser: "postcss"
                }
            }
        ]
    }
});

// browserSync設定
// 通知オフ
mix.disableNotifications()
    .browserSync({
        files: "resources/**/*",
        proxy: process.env.MIX_SENTRY_DSN_PUBLIC || "http://localhost:8000"
    })
    .version();

// 開発環境のみソースマップ生成
if (!mix.inProduction()) {
    mix.sourceMaps();
}
