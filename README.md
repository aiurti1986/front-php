# for NANJ by NANJ

[laravel5.5多言語化](https://readouble.com/laravel/5.5/ja/localization.html#retrieving-translation-strings)
## how to use multi language file.
新言語を追加する場合
1. resources/lang/追加したい言語の略　フォルダを作成する。（日本語ならja、中国語ならchなど）
1. resources/lang/追加したい言語の略/message.php に書きたい文言を配列として追加。
1. resources/view/hogehoge.php の変更したい文言に{{__('message.追加した配列のkey')}}と記述。
1. 完成。
1. URL末尾に自分が表示したい言語の略を入れて表示する事で確認ができます。

## how to change css, js
css, jsの場所は /public/css と /public/js です。
