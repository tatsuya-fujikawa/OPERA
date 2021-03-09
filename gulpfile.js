"use strict"
// gulpプラグインを読み込みます
const { src, dest, watch } = require("gulp");
// Sassをコンパイルするプラグインを読み込みます
const sass = require("gulp-sass");
// const postcss = require("gulp-postcss");
const sassGlob = require("gulp-sass-glob");
const plumber = require("gulp-plumber");
const notify = require("gulp-notify");
// const autoprefixer = require("autoprefixer");

// コンパイル
const compileSass = () =>
  // style.scssファイルを取得
  src("sass/style.scss")
    // sassのエラー時でもwatchを止めない
    .pipe(plumber({ errorHandler: notify.onError("Error: <%= error.message %>") }))
    // Sassのコンパイルを実行
    // Sassの@importのlobを有効化
    .pipe(sassGlob())
    .pipe(
      // コンパイル後のCSSを展開
      sass({
        outputStyle: "expanded"
      }))
    // prefixを付与
    // .pipe(postcss([autoprefixer()]))
    // sassフォルダー以下に保存
    .pipe(dest("sass"));
/**
 * Sassファイルを監視し、変更があったらSassを変換します
 */
const watchSassFiles = () => watch("sass/**/*.scss", compileSass);

// npx gulpというコマンドを実行した時、watchSassFilesが実行されるようにします
exports.default = watchSassFiles;
