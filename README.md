# for NANJ by nanJ

[laravel5.5多言語化](https://readouble.com/laravel/5.5/ja/localization.html#retrieving-translation-strings)
## how to use multi language file.
1. resources/lang/ja/message.php に書きたい文言を配列として追加。
1. resources/view/hogehoge.php の変更したい文言に{{__('message.追加した配列のkey')}}と記述。
1. 完成。

## how to change css, js
css, jsの場所は /public/css と /public/js です。
