/**
 * Created by mototsugu on 2016/12/20.
 */
/**
 * 入力内容のバリデーションチェック
 * @returns {boolean}
 */
function validate() {
    var errMsg = '';

    // 名前の空欄チェック
    if (document.myform.name.value =='') {
        errMsg = '名前を入力してください。\n';
    }

    // 投稿内容の空欄チェック
    if (document.myform.content.value == '') {
        errMsg = errMsg + '投稿内容を入力してください。\n';
    }

    // エラーがあればアラートとして表示
    if (errMsg) {
        alert(errMsg);
        return false;
    }
}