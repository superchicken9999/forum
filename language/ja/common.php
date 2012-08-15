<?php
/**
*
* common [Japanese]
*
* @package language
* @version $Id: common.php 9845 2009-07-24 11:13:32Z acydburn $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
* Translator: ocean=Yohsuke < n/a > ( n/a ) http://bbmods.info/bbs/
* Translation Contributors: Weby, ELF
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ ≫ “ ” …
//

$lang = array_merge($lang, array(
	'TRANSLATION_INFO'	=> 'Japanese translation principally by <a href="http://bbmods.info/bbs/" onclick="window.open(this.href, \'_blank\'); return false;" title="new window">ocean</a>',
	'DIRECTION'			=> 'ltr',
	'DATE_FORMAT'		=> '|Y M d|',	// 01 Jan 2007 (with Relative days enabled)
	'USER_LANG'			=> 'ja-JP',

	'1_DAY'			=> '1 日',
	'1_MONTH'		=> '1 ヶ月',
	'1_YEAR'		=> '1 年',
	'2_WEEKS'		=> '2 週間',
	'3_MONTHS'		=> '3 ヶ月',
	'6_MONTHS'		=> '6 ヶ月',
	'7_DAYS'		=> '1 週間',

	'ACCOUNT_ALREADY_ACTIVATED'		=> 'あなたのアカウントは既に有効化されています',
	'ACCOUNT_DEACTIVATED'			=> 'あなたのアカウントは無効アカウントです。ログインするには Admin によるアカウントの有効化が必要です',
	'ACCOUNT_NOT_ACTIVATED'			=> 'あなたのアカウントはまだ有効化されていません',
	'ACP'							=> 'Administration Control Panel',
	'ACTIVE'						=> '有効',
	'ACTIVE_ERROR'					=> '入力したユーザー名のアカウントは現在無効です。アカウントの有効化に関して何か問題がある場合は管理人にご連絡ください。',
	'ADMINISTRATOR'					=> 'Admin',
	'ADMINISTRATORS'				=> 'Admin',
	'AGE'							=> '年齢',
	'AIM'							=> 'AIM',
	'ALLOWED'						=> '許可',
	'ALL_FILES'						=> '全てのファイル',
	'ALL_FORUMS'					=> '全てのフォーラム',
	'ALL_MESSAGES'					=> '全てのメッセージ',
	'ALL_POSTS'						=> '全ての投稿記事',
	'ALL_TIMES'						=> 'All times are %1$s %2$s',
	'ALL_TOPICS'					=> '全てのトピック',
	'AND'							=> 'And',
	'ARE_WATCHING_FORUM'			=> 'フォーラムウォッチを開始しました。新しい記事が投稿されるとあなたに通知されます。',
	'ARE_WATCHING_TOPIC'			=> 'トピックウォッチを開始しました。新しい返信が投稿されるとあなたに通知されます。',
	'ASCENDING'						=> '昇順',
	'ATTACHMENTS'					=> '添付ファイル',
	'ATTACHED_IMAGE_NOT_IMAGE'		=> '添付しようとしたファイルは正常な画像ファイルではありません',
	'AUTHOR'						=> '作成者',
	'AUTH_NO_PROFILE_CREATED'		=> 'ユーザープロフィールの取得に失敗しました',
	'AVATAR_DISALLOWED_CONTENT'		=> 'アップロードファイルの内容と MIME Type が一致しなかったため、アップロードファイルの受け取りを拒否しました',
	'AVATAR_DISALLOWED_EXTENSION'	=> '拡張子 <strong>%s</strong> は許可されていないため、ファイルを表示できません',
	'AVATAR_EMPTY_REMOTE_DATA'		=> '指定したアバター画像のデータが破損しているか正常ではないため、画像ファイルをアップロードできませんでした',
	'AVATAR_EMPTY_FILEUPLOAD'		=> 'アップロードしたアバター画像のファイルサイズが空です',
	'AVATAR_INVALID_FILENAME'		=> '%s は正常なファイル名ではありません',
	'AVATAR_NOT_UPLOADED'			=> 'アバター画像をアップロードできませんでした',
	'AVATAR_NO_SIZE'				=> 'リンクされたアバター画像のサイズ（横幅 x 高さ）を取得できなかったため、画像のサイズを入力してください',
	'AVATAR_PARTIAL_UPLOAD'			=> '指定されたファイルは一部分しかアップロードされませんでした',
	'AVATAR_PHP_SIZE_NA'			=> 'アバター画像のファイルサイズが大きすぎます。<br />php.ini オプション upload_max_filesize の設定値を取得できませんでしたが、ファイルサイズがこの値を超えている可能性があります。',
	'AVATAR_PHP_SIZE_OVERRUN'		=> 'アバター画像のファイルサイズが大きすぎます。アップロード可能なファイルの最大サイズは %1$d %2$s です。<br />この値は php.ini で設定されており、phpBB3 がこの設定値を上書きする事はできません。',
	'AVATAR_URL_INVALID'			=> '指定した URL は正しくありません',
	'AVATAR_URL_NOT_FOUND'			=> '指定したファイルが見つかりませんでした',
	'AVATAR_WRONG_FILESIZE'			=> 'アバター画像のファイルサイズは %1d %2s 以下である必要があります',
	'AVATAR_WRONG_SIZE'				=> '送信されたアバター画像のサイズ（横幅 x 高さ）が %5$d x %6$d pix です。アバター画像のサイズは %1$d x %2$d pix から %3$d x %4$d pix の範囲である必要があります。',

	'BACK_TO_TOP'			=> 'ページトップ',
	'BACK_TO_PREV'			=> '１つ前のページに戻る',
	'BAN_TRIGGERED_BY_EMAIL'=> 'あなたはアクセス禁止（メールアドレス）されています',
	'BAN_TRIGGERED_BY_IP'	=> 'あなたはアクセス禁止（IPアドレス）されています',
	'BAN_TRIGGERED_BY_USER'	=> 'あなたはアクセス禁止（ユーザー名）されています',
	'BBCODE_GUIDE'			=> 'BBCode ガイド',
	'BCC'					=> 'BCC',
	'BIRTHDAYS'				=> '今日が誕生日',
	'BOARD_BAN_PERM'		=> 'あなたはこの掲示板へのアクセスを<strong>無期限に</strong>禁止されています。<br /><br />詳細は%2$s管理人%3$sにお問い合わせください。',
	'BOARD_BAN_REASON'		=> 'アクセス禁止の理由: <strong>%s</strong>',
	'BOARD_BAN_TIME'		=> 'あなたは <strong>%1$s</strong> までの間、掲示板へのアクセスを禁止されています。詳細は%2$s管理人%3$sにお問い合わせください。',
	'BOARD_DISABLE'			=> '申し訳ありませんが、掲示板は現在使用できません',
	'BOARD_DISABLED'		=> '掲示板は現在、停止しているため利用することはできません',
	'BOARD_UNAVAILABLE'		=> 'サーバの負担を軽減するため有効なセッション数を制限しており、一部ユーザーに対して掲示板の使用が一時的に不可能になっております。誠に申し訳ありませんが、数分経ってからアクションを再試行して頂きますようお願い致します。その間、送信ボタンやページのリロードを何度もクリックしたりしないようお願い致します。',
	'BROWSING_FORUM'		=> 'このフォーラムを閲覧中のユーザー: %1$s',
	'BROWSING_FORUM_GUEST'	=> 'このフォーラムを閲覧中のユーザー: %1$s &amp; ゲスト[%2$d人]',
	'BROWSING_FORUM_GUESTS'	=> 'このフォーラムを閲覧中のユーザー: %1$s &amp; ゲスト[%2$d人]',	
	'BYTES'					=> 'バイト',

	'CANCEL'				=> 'キャンセル',
	'CHANGE'				=> '変更',
	'CHANGE_FONT_SIZE'		=> 'フォントサイズの変更',
	'CHANGING_PREFERENCES'	=> 'ユーザーCP でユーザー設定を変更中',
	'CHANGING_PROFILE'		=> 'ユーザーCP でプロフィールを変更中',
	'CLICK_VIEW_PRIVMSG'	=> '%s受信ボックスへ移動%s',
	'COLLAPSE_VIEW'			=> '折りたたみビュー',
	'CLOSE_WINDOW'			=> 'ウィンドウを閉じる',
	'COLOUR_SWATCH'			=> '色のサンプル',
	'COMMA_SEPARATOR'		=> ', ',	// Used in pagination of ACP & prosilver, use localised comma if appropriate, eg: Ideographic or Arabic
	'CONFIRM'				=> '確認',
	'CONFIRM_CODE'			=> 'CAPTCHA 認証コード',
	'CONFIRM_CODE_EXPLAIN'	         => '表示されたコードを正確に入力してください。各文字は大文字・小文字の区別があり、数字の 0 はありません。',
	'CONFIRM_CODE_WRONG' => '入力した 認証コード が間違っています',
	'CONFIRM_OPERATION'		=> '本当に実行してもよろしいですか？',
	
	'CONGRATULATIONS'		=> '誕生日おめでとう',
	'CONNECTION_FAILED'		=> 'サーバ接続に失敗しました',
	'CONNECTION_SUCCESS'	=> 'サーバ接続に成功しました！',
	'COOKIES_DELETED'		=> '掲示板の cookie を全て削除しました',
	'CURRENT_TIME'			=> '現在時刻 - %s',

	'DAY'					=> '日',
	'DAYS'					=> '日間',
	'DELETE'				=> '削除',
	'DELETE_ALL'			=> '全て削除',
	'DELETE_COOKIES'		=> '掲示板の cookie を削除',
	'DELETE_MARKED'			=> '削除する',
	'DELETE_POST'			=> '削除',
	'DELIMITER'				=> '区切り文字',
	'DESCENDING'			=> '降順',
	'DISABLED'				=> '無効',
	'DISPLAY'				=> '表示',
	'DISPLAY_GUESTS'		=> 'ゲストを表示する',
	'DISPLAY_MESSAGES'		=> '期間内表示',
	'DISPLAY_POSTS'			=> '期間内表示',
	'DISPLAY_TOPICS'		=> '期間内表示',
	'DOWNLOADED'			=> 'Downloaded',
	'DOWNLOADING_FILE'		=> 'ファイルをダウンロード中',
	'DOWNLOAD_COUNT'	=> 'ダウンロード数: %d 回',
	'DOWNLOAD_COUNTS'	=> 'ダウンロード数: %d 回',
	'DOWNLOAD_COUNT_NONE'	=> 'ダウンロード数: 0 回',
	'VIEWED_COUNT'	=> '表示数: %d 回',
	'VIEWED_COUNTS'	=> '表示数: %d 回',
	'VIEWED_COUNT_NONE'	=> '表示数: 0 回',

	'EDIT_POST'							=> '編集',
	'EMAIL'								=> 'メール', // Short form for EMAIL_ADDRESS
	'EMAIL_ADDRESS'						=> 'メールアドレス',
	'EMAIL_SMTP_ERROR_RESPONSE'			=> 'メールの送信中にエラーが発生しました。<br /><strong>エラー行: %1$s</strong><br />サーバからのリスポンス: %2$s',
	'EMPTY_SUBJECT'						=> 'トピックを投稿するには件名を入力する必要があります',
	'EMPTY_MESSAGE_SUBJECT'				=> 'メッセージを送信するには件名を入力する必要があります',
	'ENABLED'							=> '有効',
	'ENCLOSURE'							=> '囲み文字',
	'ERR_CHANGING_DIRECTORY'			=> 'FTP セッションを開始するに当たってカレントディレクトリをルートディレクトリに変更（CHDIR）しようと試みましたができなかったため、プログラム処理を中断しました',
	'ERR_CONNECTING_SERVER'				=> 'サーバ接続時にエラーが発生しました',
	'ERR_JAB_AUTH'						=> 'Jabber サーバ認証に失敗しました',
	'ERR_JAB_CONNECT'					=> 'Jabber サーバへ接続できませんでした',
	'ERR_UNABLE_TO_LOGIN'				=> '入力した ユーザー名 または パスワード が正しくありません',
	'ERR_UNWATCHING'					=> 'ウォッチの解除を実行中にエラーが発生しました',
	'ERR_WATCHING'						=> 'ウォッチの実行中にエラーが発生しました',
	'ERR_WRONG_PATH_TO_PHPBB'			=> '入力した phpBB へのパス が間違っている可能性があります',
	'EXPAND_VIEW'						=> '展開ビュー',
	'EXTENSION'							=> '拡張子',
	'EXTENSION_DISABLED_AFTER_POSTING'	=> '拡張子 <strong>%s</strong> は無効化されているため、表示できません',

	'FAQ'					=> 'FAQ',
	'FAQ_EXPLAIN'			=> 'よくある質問',
	'FILENAME'				=> 'ファイル名',
	'FILESIZE'				=> 'サイズ',
	'FILEDATE'				=> '日付',
	'FILE_COMMENT'			=> 'コメント',
	'FILE_NOT_FOUND'		=> 'ファイルが見つかりません',
	'FIND_USERNAME'			=> 'ユーザー検索',
	'FOLDER'				=> 'フォルダ',
	'FORGOT_PASS'			=> 'パスワードを忘れてしまいました',
	'FORM_INVALID'			=> '送信されたフォームは不正です。もう一度フォームを送信してみてください。',
	'FORUM'					=> 'フォーラム',
	'FORUMS'				=> 'フォーラム',
	'FORUMS_MARKED'			=> 'すべてのフォーラムを既読にしました',
	'FORUM_CAT'				=> 'カテゴリ',
	'FORUM_INDEX'			=> '掲示板トップ',
	'FORUM_LINK'			=> 'リンク',
	'FORUM_LOCATION'		=> '居場所',
	'FORUM_LOCKED'			=> '閉鎖中フォーラム',
	'FORUM_RULES'			=> 'フォーラムルール',
	'FORUM_RULES_LINK'		=> 'フォーラムルールを確認するにはこちらをクリックしてください',
	'FROM'					=> 'from',
	'FSOCK_DISABLED'		=> 'PHP関数 <var>fsockopen</var> が無効に設定されているかサーバからの応答がないため、クライアント/サーバ間のソケット接続に失敗しました',

	'FTP_FSOCK_HOST'				=> 'FTP ホスト名',
	'FTP_FSOCK_HOST_EXPLAIN'		=> 'このサイトへ接続する際に必要な FTP サーバのドメインです。ほとんどのケースではこのサイトのドメインで問題ありません。',
	'FTP_FSOCK_PASSWORD'			=> 'FTP パスワード',
	'FTP_FSOCK_PASSWORD_EXPLAIN'	=> 'FTP サーバへ接続するためのパスワードです',
	'FTP_FSOCK_PORT'				=> 'FTP ポート番号',
	'FTP_FSOCK_PORT_EXPLAIN'		=> 'FTP サーバへ接続するためのポート番号です',
	'FTP_FSOCK_ROOT_PATH'			=> 'phpBB へのパス',
	'FTP_FSOCK_ROOT_PATH_EXPLAIN'	=> 'Web 公開ディレクトリから phpBB ルートディレクトリへの相対パスです',
	'FTP_FSOCK_TIMEOUT'				=> 'FTP タイムアウト',
	'FTP_FSOCK_TIMEOUT_EXPLAIN'		=> 'FTP サーバからのリスポンスを待つ最大秒数です。この秒数が過ぎても FTP サーバから返答がない場合、FTP サーバとの接続は切断されます。',
	'FTP_FSOCK_USERNAME'			=> 'FTP ユーザー名',
	'FTP_FSOCK_USERNAME_EXPLAIN'	=> 'FTP サーバへ接続するためのユーザー名です',

	'FTP_HOST'					=> 'FTP ホスト名',
	'FTP_HOST_EXPLAIN'			=> 'このサイトへ接続する際に必要な FTP サーバのドメインです。ほとんどのケースではこのサイトのドメインで問題ありません。',
	'FTP_PASSWORD'				=> 'FTP パスワード',
	'FTP_PASSWORD_EXPLAIN'		=> 'FTP サーバへ接続するためのパスワードです',
	'FTP_PORT'					=> 'FTP ポート番号',
	'FTP_PORT_EXPLAIN'			=> 'FTP サーバへ接続するためのポート番号です',
	'FTP_ROOT_PATH'				=> 'phpBB へのパス',
	'FTP_ROOT_PATH_EXPLAIN'		=> 'Web 公開ディレクトリから phpBB ルートディレクトリへの相対パスです',
	'FTP_TIMEOUT'				=> 'FTP タイムアウト',
	'FTP_TIMEOUT_EXPLAIN'		=> 'FTP サーバからのリスポンスを待つ最大秒数です。この秒数が過ぎても FTP サーバから返答がない場合、FTP サーバとの接続は切断されます。',
	'FTP_USERNAME'				=> 'FTP ユーザー名',
	'FTP_USERNAME_EXPLAIN'		=> 'FTP サーバへ接続するためのユーザー名です',

	'GENERAL_ERROR'				=> '一般エラー',
	'GB'						=> 'GB',
	'GIB'						=> 'GiB',
	'GO'						=> '送信',
	'GOTO_PAGE'					=> 'ページ移動',
	'GROUP'						=> 'グループ',
	'GROUPS'					=> 'グループ',
	'GROUP_ERR_TYPE'			=> '不適切なグループタイプが指定されました',
	'GROUP_ERR_USERNAME'		=> 'グループ名が入力されていません',
	'GROUP_ERR_USER_LONG'		=> '入力した グループ名 は長すぎます。グループ名は ６０ 字以内である必要があります。',
	'GUEST'						=> 'ゲスト',
	'GUEST_USERS_ONLINE'		=> 'ゲスト %d 人',
	'GUEST_USERS_TOTAL'			=> 'ゲスト[%d]',
	'GUEST_USERS_ZERO_ONLINE'	=> 'ゲスト 0 人',
	'GUEST_USERS_ZERO_TOTAL'	=> 'ゲスト[0]',
	'GUEST_USER_ONLINE'			=> 'ゲスト %d 人',
	'GUEST_USER_TOTAL'			=> 'ゲスト[%d]',
	'G_ADMINISTRATORS'			=> 'Admin',
	'G_BOTS'					=> 'ボット',
	'G_GUESTS'					=> 'ゲスト',
	'G_REGISTERED'				=> '登録ユーザー',
	'G_REGISTERED_COPPA'		=> '登録ユーザー（COPPA）',
	'G_GLOBAL_MODERATORS'		=> 'グローバルモデレータ',
	'G_NEWLY_REGISTERED'		=> '一見さん',

	'HIDDEN_USERS_ONLINE'			=> 'お忍びユーザー %d 人',
	'HIDDEN_USERS_TOTAL'			=> 'お忍びユーザー[%d]',
	'HIDDEN_USERS_TOTAL_AND'		=> 'お忍びユーザー[%d] ',
	'HIDDEN_USERS_ZERO_ONLINE'		=> 'お忍びユーザー 0 人',
	'HIDDEN_USERS_ZERO_TOTAL'		=> 'お忍びユーザー[0]',
	'HIDDEN_USERS_ZERO_TOTAL_AND'	=> 'お忍びユーザー[0] ',
	'HIDDEN_USER_ONLINE'			=> 'お忍びユーザー %d 人',
	'HIDDEN_USER_TOTAL'			=> 'お忍びユーザー[%d]',
	'HIDDEN_USER_TOTAL_AND'		=> 'お忍びユーザー[%d] ',
	'HIDE_GUESTS'				=> 'ゲストを非表示にする',
	'HIDE_ME'					=> 'オンライン状態を隠す（このログインのみ効果があります）',
	'HOURS'					=> '時間',
	'HOME'					=> 'ホーム',

	'ICQ'						=> 'ICQ',
	'ICQ_STATUS'				=> 'ICQ ステータス',
	'IF'						=> 'もし',
	'IMAGE'						=> '画像',
	'IMAGE_FILETYPE_INVALID'	=> 'MIMEタイプ %s における画像ファイル形式 %d はサポート外です',
	'IMAGE_FILETYPE_MISMATCH'	=> '画像ファイル形式が正しくありません： 正しいと思われる拡張子は 1$s であり、%2$s ではありません',
	'IN'						=> 'in',
	'INDEX'						=> 'トップページ',
	'INFORMATION'				=> 'インフォメーション',
	'INTERESTS'					=> '興味',
	'INVALID_DIGEST_CHALLENGE'	=> 'DIGEST-MD5 方式による認証に失敗したため、処理を中断しました',
	'INVALID_EMAIL_LOG'			=> 'メールアドレス <strong>%s</strong> が正しくない可能性があります',
	'IP'						=> 'IPアドレス',
	'IP_BLACKLISTED'			=> 'あなたの IPアドレス %1$s はブラックリストに登録されているためアクセスが禁止されています。 詳細を見るには次のリンクをクリックしてください。',

	'JABBER'				=> 'Jabber',
	'JOINED'				=> '登録日時',
	'JUMP_PAGE'				=> '移動先のページ番号を入力してください',
	'JUMP_TO'				=> 'ページ移動',
	'JUMP_TO_PAGE'			=> 'ページを指定',

	'KB'					=> 'KB',
	'KIB'					=> 'KiB',

	'LAST_POST'							=> '最新記事',
	'LAST_UPDATED'						=> '最終更新',
	'LAST_VISIT'						=> '最近の訪問日時',
	'LDAP_NO_LDAP_EXTENSION'			=> 'PHP 拡張モジュール LDAP を利用できません',
	'LDAP_NO_SERVER_CONNECTION'			=> 'LDAP サーバに接続できません',
	'LEGEND'							=> 'グループ',
	'LOCATION'							=> 'お住まい',
	'LOCK_POST'							=> '記事の凍結',
	'LOCK_POST_EXPLAIN'					=> '編集禁止',
	'LOCK_TOPIC'						=> 'トピックを閉鎖する',
	'LOGIN'								=> 'ログイン',
	'LOGIN_CHECK_PM'					=> 'プライベートメッセージをチェック',
	'LOGIN_CONFIRMATION'				=> 'ログイン認証',
	'LOGIN_CONFIRM_EXPLAIN'				=> '不正プログラムによるログインを防ぐため、一定回数ログインに失敗すると CAPTCHA 認証コードの入力が要求されます。画像が表示されない、もしくは視覚的に問題がある場合は%s管理人%sにご連絡ください。',
	'LOGIN_ERROR_ATTEMPTS'				=> '不正プログラムによるログインを防ぐため、一定回数ログインに失敗すると CAPTCHA 認証コードの入力が要求されます。ログインするにはユーザー名とパスワードだけでなく、画像に表示されている認証コードも入力してください。',
	'LOGIN_ERROR_EXTERNAL_AUTH_APACHE'	=> 'Apache の HTTP 認証に失敗しました',
	'LOGIN_ERROR_PASSWORD'				=> 'パスワードが正しくありません。パスワードを確認し、再度ログインしてください。 問題が解決しない場合、%s管理人%sにご連絡ください。',
	'LOGIN_ERROR_PASSWORD_CONVERT'		=> 'phpBB2 から phpBB3 へのデータコンバート時にあなたの旧パスワードを新しい暗号化方式に変換する事ができなかったため、%s新しいパスワードを要求%sしてください。 問題が解決しない場合、%s管理人%sにご連絡ください。',
	'LOGIN_ERROR_USERNAME'				=> 'ユーザー名が正しくありません。ユーザー名を確認し再度ログインしてください。 問題が解決しない場合、%s管理人%sにご連絡ください。',
	'LOGIN_FORUM'						=> 'このフォーラムで閲覧・投稿するにはフォーラムパスワードが必要です',
	'LOGIN_INFO'						=> 'ログインするにはユーザー登録が必要です。管理人は登録ユーザーに対してゲストユーザーよりも多くのパーミッション（権限）を与えている場合がほとんどなので、掲示板をよく利用する場合はユーザー登録することをお勧めします。ユーザー登録する前に利用規約とプライバシーポリシーをご確認ください。フォーラムを利用する前にフォーラムルールをご確認ください。',
	'LOGIN_VIEWFORUM'					=> 'このフォーラムを閲覧するにはユーザー登録とログインが必要です',
	'LOGIN_EXPLAIN_EDIT'				=> 'このフォーラムで記事を編集するにはユーザー登録とログインが必要です',
	'LOGIN_EXPLAIN_VIEWONLINE'			=> 'オンラインリストを閲覧するにはユーザー登録とログインが必要です',
	'LOGOUT'							=> 'ログアウト',
	'LOGOUT_USER'						=> 'ログアウト [ %s ]',
	'LOG_ME_IN'							=> '自動ログインを有効にする',

	'MARK'					=> 'マーク',
	'MARK_ALL'				=> '全てマークする',
	'MARK_FORUMS_READ'		=> 'すべてのフォーラムを既読にする',
	'MB'					=> 'MB',
	'MIB'					=> 'MiB',
	'MCP'					=> 'モデレータCP',
	'MEMBERLIST'			=> 'メンバーリスト',
	'MEMBERLIST_EXPLAIN'	=> '登録ユーザーのリスト',
	'MERGE'					=> '統合',
	'MERGE_POSTS'			=> '記事を統合する',
	'MERGE_TOPIC'			=> 'トピックを統合する',
	'MESSAGE'				=> 'メッセージ',
	'MESSAGES'				=> 'メッセージ',
	'MESSAGE_BODY'			=> 'メッセージ本文',
	'MINUTES'				=> '分間',
	'MODERATE'				=> 'モデレート',
	'MODERATOR'				=> 'モデレータ',
	'MODERATORS'			=> 'モデレータ',
	'MONTH'					=> '月',
	'MOVE'					=> '移動',
	'MSNM'					=> 'MSNM/WLM',

	'NA'						=> 'N/A',
	'NEWEST_USER'				=> '最新登録ユーザー <strong>%s</strong>',
	'NEW_MESSAGE'				=> '新着メッセージ',
	'NEW_MESSAGES'				=> '新着メッセージあり',
	'NEW_PM'					=> '<strong>%d</strong> 件の新着メッセージ',
	'NEW_PMS'					=> '<strong>%d</strong> 件の新着メッセージ',
	'NEW_POST'					=> '新しい記事',
	'NEW_POSTS'					=> '新しい記事',
	'NEXT'						=> '次へ',		// Used in pagination
	'NEXT_STEP'					=> '次へ',
	'NEVER'						=> 'Never',
	'NO'						=> 'いいえ',
	'NOT_ALLOWED_MANAGE_GROUP'	=> 'あなたはこのグループの管理を許可されていません',
	'NOT_AUTHORISED'			=> 'あなたはこのエリアへのアクセスを許可されていません',
	'NOT_WATCHING_FORUM'		=> 'フォーラムウォッチを解除しました',
	'NOT_WATCHING_TOPIC'		=> 'トピックウォッチを解除しました',
	'NOTIFY_ADMIN'				=> '管理人またはウェブマスターにご連絡ください',
	'NOTIFY_ADMIN_EMAIL'		=> '管理人またはウェブマスターにご連絡ください: <a href="mailto:%1$s">%1$s</a>',
	'NO_ACCESS_ATTACHMENT'		=> 'あなたはこのファイルへのアクセスを許可されていません',
	'NO_ACTION'					=> 'アクションが指定されていません',
	'NO_ADMINISTRATORS'			=> 'Admin なし',
	'NO_AUTH_ADMIN'				=> 'Admin パーミッションが与えられていないため、 AdminCP へ入室できません',
	'NO_AUTH_ADMIN_USER_DIFFER'	=> '既にログインしている場合、別のユーザーでログインする事はできません',
	'NO_AUTH_OPERATION'			=> 'パーミッションが与えられていないため、そのオペレーションを実行できません',
	'NO_CONNECT_TO_SMTP_HOST'	=> 'SMTPサーバ へ接続できませんでした: %1$s : %2$s',
	'NO_BIRTHDAYS'				=> '',
	'NO_EMAIL_MESSAGE'			=> 'メール本文が空白です',
	'NO_EMAIL_RESPONSE_CODE'	=> 'メールサーバから応答がありませんでした',
	'NO_EMAIL_SUBJECT'			=> 'メールの件名が入力されていません',
	'NO_FORUM'					=> 'そのフォーラムは存在しません',
	'NO_FORUMS'					=> 'フォーラムはありません',
	'NO_GROUP'					=> 'そのグループは存在しません',
	'NO_GROUP_MEMBERS'			=> 'メンバーなし',
	'NO_IPS_DEFINED'			=> '追加された IPアドレス またはホスト名はありません',
	'NO_MEMBERS'				=> '検索に一致するメンバーは見つかりませんでした',
	'NO_MESSAGES'				=> 'メッセージなし',
	'NO_MODE'					=> 'モジュールモードが指定されていません',
	'NO_MODERATORS'				=> 'モデレータなし',
	'NO_NEW_MESSAGES'			=> '新着メッセージなし',
	'NO_NEW_PM'					=> '新着メッセージなし',
	'NO_NEW_POSTS'				=> '新しい記事なし',
	'NO_ONLINE_USERS'			=> 'なし',
	'NO_POSTS'					=> '投稿記事なし',
	'NO_POSTS_TIME_FRAME'		=> '指定した期間内に返信された記事はありません',
	'NO_SUBJECT'				=> '件名が入力されていません',								// Used for posts having no subject defined but displayed within management pages.
	'NO_FEED_ENABLED'			=> '掲示板のフィード機能が無効化されているため、フィードは利用できません',
	'NO_FEED'					=> 'そのフィードを利用することはできません',
	'NO_SUCH_SEARCH_MODULE'		=> 'その検索バックエンドは存在しません',
	'NO_SUPPORTED_AUTH_METHODS'	=> '利用可能な認証方式がありません',
	'NO_TOPIC'					=> 'そのトピックは存在しません',
	'NO_TOPIC_FORUM'			=> 'そのトピックまたはフォーラムは存在していません',
	'NO_TOPICS'					=> 'このフォーラムに投稿されたトピックはありません',
	'NO_TOPICS_TIME_FRAME'		=> '指定した期間内に投稿されたトピックはありません',
	'NO_UNREAD_PM'				=> '<strong>0</strong> 件の未読メッセージ',
	'NO_UPLOAD_FORM_FOUND'		=> 'アップロードのフォーム情報が不正だったため、ファイルアップロードに失敗しました',
	'NO_USER'					=> 'そのユーザーは存在しません',
	'NO_USERS'					=> 'そのユーザーは存在しません',
	'NO_USER_SPECIFIED'			=> 'ユーザー名が指定されていません',

	// Nullar/Singular/Plural language entry. The key numbers define the number range in which a certain grammatical expression is valid.
	'NUM_POSTS_IN_QUEUE'		=> array(
		0			=> '承認待ち記事なし',		// 0
		1			=> '%d つの承認待ち記事',		// 1-9
		10			=> '%d 個の承認待ち記事',		// 10+
	),
	
	'OCCUPATION'				=> 'お仕事',
	'OFFLINE'					=> 'オフライン',
	'ONLINE'					=> 'オンライン',
	'ONLINE_BUDDIES'			=> 'オンラインフレンドユーザー',
	'ONLINE_USERS_TOTAL'		=> 'オンラインユーザー <strong>%d</strong> 人 :: ',
	'ONLINE_USERS_ZERO_TOTAL'	=> 'オンラインユーザー <strong>0</strong> 人 :: ',
	'ONLINE_USER_TOTAL'			=> 'オンラインユーザー <strong>%d</strong> 人 :: ',
	'OPTIONS'					=> 'オプション',

	'PAGE_OF'				=> 'ページ <strong>%1$d</strong> ／ <strong>%2$d</strong>',
	'PASSWORD'				=> 'パスワード',
	'PLAY_QUICKTIME_FILE'	=> 'Quicktimeファイル を再生する',
	'PM'					=> 'PM',
	'POSTING_MESSAGE'		=> '%s で記事を作成中',
	'POSTING_PRIVATE_MESSAGE'	=> 'プライベートメッセージを作成中',
	'POST'					=> '投稿記事',
	'POST_ANNOUNCEMENT'		=> '告知',
	'POST_STICKY'			=> '注目',
	'POSTED'				=> 'Posted',
	'POSTED_IN_FORUM'		=> 'in',
	'POSTED_ON_DATE'		=> 'on',
	'POSTS'					=> '記事',
	'POSTS_UNAPPROVED'		=> 'このトピックにはまだ承認されていない記事があります',
	'POST_BY_AUTHOR'		=> 'by',
	'POST_BY_FOE'			=> 'この記事はブロックユーザー <strong>%1$s</strong> が投稿した記事です。%2$sこの記事を表示する%3$s',
	'POST_DAY'				=> '１日あたりの投稿数: %.2f ',
	'POST_DETAILS'			=> '記事の詳細',
	'POST_NEW_TOPIC'		=> '新しいトピックを投稿する',
	'POST_PCT'				=> '投稿数の割合: %.2f%%',
	'POST_PCT_ACTIVE'		=> '投稿数の割合: %.2f%%',
	'POST_PCT_ACTIVE_OWN'	=> '投稿数の割合: %.2f%%',
	'POST_REPLY'			=> '返信',
	'POST_REPORTED'			=> '通報を見るにはこちらをクリック',
	'POST_SUBJECT'			=> '記事の件名',
	'POST_TIME'				=> '投稿日時',
	'POST_TOPIC'			=> 'トピック投稿',
	'POST_UNAPPROVED'		=> 'この記事は承認待ちです',
	'PREVIEW'				=> 'プレビュー',
	'PREVIOUS'				=> '１つ前へ',		// Used in pagination
	'PREVIOUS_STEP'			=> '１つ前に戻る',
	'PRIVACY'				=> 'プライバシーポリシー',
	'PRIVATE_MESSAGE'		=> 'プライベートメッセージ',
	'PRIVATE_MESSAGES'		=> 'プライベートメッセージ',
	'PRIVATE_MESSAGING'		=> 'プライベートメッセージ',
	'PROFILE'				=> 'ユーザーCP',

	'READING_FORUM'				=> 'フォーラム %s を閲覧中',
	'READING_GLOBAL_ANNOUNCE'	=> 'グローバル告知トピックを閲覧中',
	'READING_LINK'				=> 'リンクフォーラム %s を閲覧中',
	'READING_TOPIC'				=> '%s のトピックを閲覧中',
	'READ_PROFILE'				=> 'プロフィール',
	'REASON'					=> '理由',
	'RECORD_ONLINE_USERS'		=> '最大同時オンラインユーザー数の記録 <strong>%1$s</strong> 人 （ %2$s ）',
	'REDIRECT'					=> 'リダイレクト',
	'REDIRECTS'					=> 'クリック数',
	'REGISTER'					=> 'ユーザー登録',
	'REGISTERED_USERS'			=> '登録ユーザー:',
	'REG_USERS_ONLINE'			=> '登録ユーザー %d 人 &amp; ',
	'REG_USERS_TOTAL'			=> '登録ユーザー[%d] ',
	'REG_USERS_TOTAL_AND'			=> '登録ユーザー[%d] ',
	'REG_USERS_ZERO_ONLINE'		=> '登録ユーザー 0 人 &amp; ',
	'REG_USERS_ZERO_TOTAL'		=> '登録ユーザー[0] ',
	'REG_USERS_ZERO_TOTAL_AND'		=> '登録ユーザー[0] ',
	'REG_USER_ONLINE'				=> '登録ユーザー %d 人 &amp; ',
	'REG_USER_TOTAL'				=> '登録ユーザー[%d] ',
	'REG_USER_TOTAL_AND'			=> '登録ユーザー[%d] ',
	'REMOVE'					=> '削除',
	'REMOVE_INSTALL'			=> '掲示板を利用できるようにするには install ディレクトリを削除する必要があります。install ディレクトリが存在している間は Administration Control Panel (AdminCP) のみしかアクセスできません。',
	'REPLIES'					=> '返信数',
	'REPLY_WITH_QUOTE'			=> '引用付きで返信する',
	'REPLYING_GLOBAL_ANNOUNCE'	=> 'グローバル告知トピックに返信中',
	'REPLYING_MESSAGE'			=> '%s の記事に返信中',
	'REPORT_BY'					=> 'ユーザー',
	'REPORT_POST'				=> '通報',
	'REPORTING_POST'			=> '投稿記事を通報中',
	'RESEND_ACTIVATION'			=> 'アカウント有効化メールの送信',
	'RESET'						=> 'リセット',
	'RESTORE_PERMISSIONS'		=> 'パーミッションテストを終了する',
	'RETURN_INDEX'				=> '%s掲示板トップへ%s',
	'RETURN_FORUM'				=> '%sフォーラムに戻る%s',
	'RETURN_PAGE'				=> '%s元のページに戻る%s',
	'RETURN_TOPIC'				=> '%sトピックに戻る%s',
	'RETURN_TO'					=> 'Return to',
	'FEED'						=> 'フィード',
	'FEED_NEWS'					=> 'ニュース',
	'RULES_ATTACH_CAN'			=> 'ファイル添付: <strong>&nbsp;可</strong>',
	'RULES_ATTACH_CANNOT'		=> 'ファイル添付: <strong>不可</strong>',
	'RULES_DELETE_CAN'			=> '記事削除: <strong>&nbsp;可</strong>',
	'RULES_DELETE_CANNOT'		=> '記事削除: <strong>不可</strong>',
	'RULES_DOWNLOAD_CAN'		=> 'ダウンロード: <strong>&nbsp;可</strong>',
	'RULES_DOWNLOAD_CANNOT'		=> 'ダウンロード: <strong>不可</strong>',

	'RULES_EDIT_CAN'			=> '記事編集: <strong>&nbsp;可</strong>',
	'RULES_EDIT_CANNOT'			=> '記事編集: <strong>不可</strong>',
	'RULES_LOCK_CAN'			=> 'トピック閉鎖: <strong>&nbsp;可</strong>',
	'RULES_LOCK_CANNOT'			=> 'トピック閉鎖: <strong>不可</strong>',
	'RULES_POST_CAN'			=> 'トピック投稿: <strong>&nbsp;可</strong>',
	'RULES_POST_CANNOT'			=> 'トピック投稿: <strong>不可</strong>',
	'RULES_REPLY_CAN'			=> '返信投稿: <strong>&nbsp;可</strong>',
	'RULES_REPLY_CANNOT'		=> '返信投稿: <strong>不可</strong>',
	'RULES_VOTE_CAN'			=> '投票参加: <strong>&nbsp;可</strong>',
	'RULES_VOTE_CANNOT'			=> '投票参加: <strong>不可</strong>',

	'SEARCH'					=> '検索',
	'SEARCH_MINI'				=> 'キーワード検索…',
	'SEARCH_ADV'				=> '詳細検索',
	'SEARCH_ADV_EXPLAIN'		=> '詳細検索ページへ移動します',
	'SEARCH_KEYWORDS'			=> 'キーワード検索',
	'SEARCHING_FORUMS'			=> '記事を検索中',
	'SEARCH_ACTIVE_TOPICS'		=> '最近のトピック',
	'SEARCH_FOR'				=> '検索',
	'SEARCH_FORUM'				=> 'このフォーラムを検索…',
	'SEARCH_NEW'				=> '新しい記事',
	'SEARCH_POSTS_BY'			=> 'Search posts by',
	'SEARCH_SELF'				=> '投稿記事',
	'SEARCH_TOPIC'				=> 'このトピックを検索…',
	'SEARCH_UNANSWERED'			=> '返信なしトピック',
	'SEARCH_UNREAD'				=> '未読記事',
	
	/* add for search box */
   
   'SEARCH_DIFF'   => '難易度から検索',
   'SEARCH_STAR'   => '★',
   
   'SEARCH_CAT'   => 'カテゴリから検索',
   'SEARCH_DOUJIN'   => '同人/Vocaloid&東方',
   'SEARCH_NAMCO'   => 'ナムコオリジナル',
   'SEARCH_POP'   => 'ポップ',
   'SEARCH_CLASSIC'   => 'クラシック',
   'SEARCH_VAR'   => 'バラエティ',
   'SEARCH_ANIME'   => 'アニメ',
   'SEARCH_GAME'   => 'ゲーム',
   'SEARCH_BEMANI'   => 'ビマニ',
   
   'SEARCH_OTHER'   => 'コースから検索',
   'SEARCH_URA'   => '裏譜面コースあり',
   'SEARCH_SIMPLE'   => 'かんたんコースあり',
   'SEARCH_NORMAL'   => 'ふつうコースあり',
   'SEARCH_HARD'   => 'むずかしいコースあり',
	
	'SECONDS'					=> '秒',
	'SELECT'					=> '選択',
	'SELECT_ALL_CODE'			=> '全て選択',
	'SELECT_DESTINATION_FORUM'	=> '移動先フォーラムを選択してください',
	'SELECT_FORUM'				=> 'フォーラムを選択',
	'SEND_EMAIL'				=> 'メール',				// Used for submit buttons
	'SEND_EMAIL_USER'			=> 'メール送信',				// Used as: {L_SEND_EMAIL_USER} {USERNAME} -> E-mail UserX
	'SEND_PRIVATE_MESSAGE'		=> 'プライベートメッセージ送信',
	'SETTINGS'					=> '設定',
	'SIGNATURE'					=> 'サイン',
	'SKIP'						=> 'コンテンツへ',
	'SMTP_NO_AUTH_SUPPORT'		=> 'SMTPサーバ が認証をサポートしていません',
	'SORRY_AUTH_READ'			=> 'パーミッションが与えられていないため、フォーラムへ入室できません',
	'SORRY_AUTH_VIEW_ATTACH'	=> 'パーミッションが与えられていないため、添付ファイルをダウンロードできません',
	'SORT_BY'					=> 'ソート',
	'SORT_JOINED'				=> '登録日時',
	'SORT_LOCATION'				=> 'お住まい',
	'SORT_RANK'					=> 'ランク',
	'SORT_POSTS'				=> '投稿数',
	'SORT_TOPIC_TIME'		=> '作成日時',
	'SORT_TOPIC_TITLE'			=> 'トピックの件名',
	'SORT_USERNAME'				=> 'ユーザー名',
	'SPLIT_TOPIC'				=> 'トピックを分割する',
	'SQL_ERROR_OCCURRED'		=> 'SQLエラー が発生したため、ページ情報をデータベースから取得できませんでした。問題が解決しない場合は%s管理人%sにご連絡ください。',
	'STATISTICS'				=> '統計データ',
	'START_WATCHING_FORUM'		=> 'このフォーラムをウォッチする',
	'START_WATCHING_TOPIC'		=> 'このトピックをウォッチする',
	'STOP_WATCHING_FORUM'		=> 'このフォーラムのウォッチを解除する',
	'STOP_WATCHING_TOPIC'		=> 'このトピックのウォッチを解除する',
	'SUBFORUM'					=> 'サブフォーラム',
	'SUBFORUMS'					=> 'サブフォーラム',
	'SUBJECT'					=> '件名',
	'SUBMIT'					=> '送信',

	'TERMS_USE'			=> '利用規約',
	'TEST_CONNECTION'	=> 'サーバ接続テスト',
	'THE_TEAM'			=> '管理・運営チーム',
	'TIME'				=> '日時',

	'TOO_LONG'						=> '入力した値が長すぎます',
	
	'TOO_LONG_AIM'					=> '入力した AIM が長すぎます',
	'TOO_LONG_CONFIRM_CODE'			=> '入力した 認証コード が長すぎます',
	'TOO_LONG_DATEFORMAT'			=> '入力した 日付フォーマット が長すぎます',
	'TOO_LONG_ICQ'					=> '入力した ICQ が長すぎます',
	'TOO_LONG_INTERESTS'			=> '入力した 興味 が長すぎます',
	'TOO_LONG_JABBER'				=> '入力した Jabber が長すぎます',
	'TOO_LONG_LOCATION'				=> '入力した お住まい が長すぎます',
	'TOO_LONG_MSN'					=> '入力した MSNM/WLM が長すぎます',
	'TOO_LONG_NEW_PASSWORD'			=> '入力した パスワード が長すぎます',
	'TOO_LONG_OCCUPATION'			=> '入力した お仕事 が長すぎます',
	'TOO_LONG_PASSWORD_CONFIRM'		=> '入力した パスワード（確認） が長すぎます',
	'TOO_LONG_USER_PASSWORD'		=> '入力した パスワード が長すぎます',
	'TOO_LONG_USERNAME'				=> '入力した ユーザー名 が長すぎます',
	'TOO_LONG_EMAIL'				=> '入力した メールアドレス が長すぎます',
	'TOO_LONG_EMAIL_CONFIRM'		=> '入力した メールアドレス（確認） が長すぎます',
	'TOO_LONG_WEBSITE'				=> '入力した ウェブサイト が長すぎます',
	'TOO_LONG_YIM'					=> '入力した Yahoo! Messenger が長すぎます',

	'TOO_MANY_VOTE_OPTIONS'			=> '選択した投票オプションが多すぎます',

	'TOO_SHORT'						=> '入力した値が短すぎます',
	
	'TOO_SHORT_AIM'					=> '入力した AIM が短すぎます',
	'TOO_SHORT_CONFIRM_CODE'		=> '入力した 認証コード が短すぎます',
	'TOO_SHORT_DATEFORMAT'			=> '入力した 日付フォーマット が短すぎます',
	'TOO_SHORT_ICQ'					=> '入力した ICQ が短すぎます',
	'TOO_SHORT_INTERESTS'			=> '入力した 興味 が短すぎます',
	'TOO_SHORT_JABBER'				=> '入力した Jabber が短すぎます',
	'TOO_SHORT_LOCATION'			=> '入力した お住まい が短すぎます',
	'TOO_SHORT_MSN'					=> '入力した MSNM/WLM が短すぎます',
	'TOO_SHORT_NEW_PASSWORD'		=> '入力した パスワード が短すぎます',
	'TOO_SHORT_OCCUPATION'			=> '入力した お仕事 が短すぎます',
	'TOO_SHORT_PASSWORD_CONFIRM'	=> '入力した パスワード（確認） が短すぎます',
	'TOO_SHORT_USER_PASSWORD'		=> '入力した パスワード が短すぎます',
	'TOO_SHORT_USERNAME'			=> '入力した ユーザー名 が短すぎます',
	'TOO_SHORT_EMAIL'				=> '入力した メールアドレス が短すぎます',
	'TOO_SHORT_EMAIL_CONFIRM'		=> '入力した メールアドレス（確認） が短すぎます',
	'TOO_SHORT_WEBSITE'				=> '入力した ウェブサイト が短すぎます',
	'TOO_SHORT_YIM'					=> '入力した Yahoo! Messenger が短すぎます',

	'TOPIC'				=> 'トピック',
	'TOPICS'			=> 'トピック',
	'TOPICS_UNAPPROVED'	=> 'フォーラムに承認待ちトピックがあります',
	'TOPIC_ICON'		=> 'トピックアイコン',
	'TOPIC_LOCKED'		=> 'このトピックは閉鎖されているため、記事を編集・返信できません',
	'TOPIC_LOCKED_SHORT'=> '閉鎖中トピック',
	'TOPIC_MOVED'		=> '移動済みトピック',
	'TOPIC_REVIEW'		=> 'トピックのレビュー',
	'TOPIC_TITLE'		=> 'トピックの件名',
	'TOPIC_UNAPPROVED'	=> 'このトピックは承認されていません',
	'TOTAL_ATTACHMENTS'	=> '添付ファイル数',
	'TOTAL_LOG'			=> '1 件のログ',
	'TOTAL_LOGS'		=> '%d 件のログ',
	'TOTAL_NO_PM'		=> 'プライベートメッセージ 0 件',
	'TOTAL_PM'			=> 'プライベートメッセージ 1 件',
	'TOTAL_PMS'			=> 'プライベートメッセージ %d 件',
	'TOTAL_POSTS'		=> '投稿記事数',
	'TOTAL_POSTS_OTHER'	=> '投稿記事数: <strong>%d</strong>',
	'TOTAL_POSTS_ZERO'	=> '投稿記事数: <strong>0</strong>',
	'TOPIC_REPORTED'	=> 'トピックを通報しました',
	'TOTAL_TOPICS_OTHER'=> 'トピック数: <strong>%d</strong>',
	'TOTAL_TOPICS_ZERO'	=> 'トピック数: <strong>0</strong>',
	'TOTAL_USERS_OTHER'	=> '登録ユーザー数: <strong>%d</strong>',
	'TOTAL_USERS_ZERO'	=> '登録ユーザー数: <strong>0</strong>',
	'TRACKED_PHP_ERROR'	=> 'PHPエラー の記録: %s',

	'UNABLE_GET_IMAGE_SIZE'	=> '画像サイズを取得できませんでした。',
	'UNABLE_TO_DELIVER_FILE'=> 'ファイルをダウンロードできませんでした。',
	'UNKNOWN_BROWSER'		=> 'ブラウザ不明',
	'UNMARK_ALL'			=> '全てのマークを外す',
	'UNREAD_MESSAGES'		=> '未読メッセージ',
	'UNREAD_PM'				=> '<strong>%d</strong> 件の未読メッセージ',
	'UNREAD_PMS'			=> '<strong>%d</strong> 件の未読メッセージ',
	'UNWATCHED_FORUMS'			=> '選択したフォーラムのウォッチを解除しました',
	'UNWATCHED_TOPICS'			=> '選択したトピックのウォッチを解除しました',
	'UNWATCHED_FORUMS_TOPICS'	=> '選択したフォーラムとトピックのウォッチを解除しました',
	'UPDATE'				=> '変更',
	'UPLOAD_IN_PROGRESS'	=> '現在アップロードの進行中です',
	'URL_REDIRECT'			=> 'ページが自動的にリダイレクトしない場合、%sこちらをクリック%sしてください',
	'USERGROUPS'			=> 'グループ',
	'USERNAME'				=> 'ユーザー名',
	'USERNAMES'				=> 'ユーザー名',
	'USER_AVATAR'			=> 'アバター',
	'USER_CANNOT_READ'		=> 'パーミッションが与えられていないため、このフォーラムの記事を閲覧できません',
	'USER_POST'				=> '%d 件の記事',
	'USER_POSTS'			=> '%d 件の記事',
	'USERS'					=> 'ユーザー',
	'USE_PERMISSIONS'		=> 'パーミッションテスト',

	'USER_NEW_PERMISSION_DISALLOWED'	=> 'パーミッションが与えられていないため、この機能を使用することはできません。機能の使用にはグループへの参加が必要なものもあります。',

	'VARIANT_DATE_SEPARATOR'	=> ' / ',	// Used in date format dropdown, eg: "Today, 13:37 / 01 Jan 2007, 13:37" ... to join a relative date with calendar date
	'VIEWED'					=> 'Viewed',
	'VIEWING_FAQ'				=> 'FAQ を閲覧中',
	'VIEWING_MEMBERS'			=> 'ユーザーの詳細データを閲覧中',
	'VIEWING_ONLINE'			=> 'オンラインデータを閲覧中',
	'VIEWING_MCP'				=> 'モデレータCP を閲覧中',
	'VIEWING_MEMBER_PROFILE'	=> 'ユーザーのプロフィールを閲覧中',
	'VIEWING_PRIVATE_MESSAGES'	=> 'プライベートメッセージを閲覧中',
	'VIEWING_REGISTER'			=> 'ユーザーアカウントを登録中',
	'VIEWING_UCP'				=> 'ユーザーCP を閲覧中',
	'VIEWS'						=> '閲覧数',
	'VIEW_BOOKMARKS'			=> 'ブックマーク',
	'VIEW_FORUM_LOGS'			=> 'フォーラムログ',
	'VIEW_LATEST_POST'			=> '最新記事',
	'VIEW_NEWEST_POST'			=> '未読記事',
	'VIEW_NOTES'				=> 'ユーザーノート',
	'VIEW_ONLINE_TIME'			=> '過去 %d 分間のユーザーアクションに基づいています',
	'VIEW_ONLINE_TIMES'			=> '過去 %d 分間のユーザーアクションに基づいています',
	'VIEW_TOPIC'				=> 'トピック',
	'VIEW_TOPIC_ANNOUNCEMENT'	=> '告知トピック',
	'VIEW_TOPIC_GLOBAL'			=> 'グローバル告知トピック',
	'VIEW_TOPIC_LOCKED'			=> '閉鎖中トピック',
	'VIEW_TOPIC_LOGS'			=> 'トピックログ',
	'VIEW_TOPIC_MOVED'			=> '移動済みトピック',
	'VIEW_TOPIC_POLL'			=> '投票トピック',
	'VIEW_TOPIC_STICKY'			=> '注目トピック',
	'VISIT_WEBSITE'				=> 'ウェブサイト訪問',

	'WARNINGS'			=> '警告',
	'WARN_USER'			=> '警告',
	'WELCOME_SUBJECT'	=> 'フォーラム %s へようこそ',
	'WEBSITE'			=> 'ウェブサイト',
	'WHOIS'				=> 'Whois',
	'WHO_IS_ONLINE'		=> 'オンラインデータ',
	'WRONG_PASSWORD'	=> 'パスワードが間違っています',

	'WRONG_DATA_ICQ'			=> '入力した ICQ が正しくありません',
	'WRONG_DATA_JABBER'			=> '入力した Jabberアカウント名 が正しくありません',
	'WRONG_DATA_LANG'			=> '指定した 言語 が正しくありません',
	'WRONG_DATA_WEBSITE'		=> 'ウェブサイトのアドレスはプロトコルまで含めた正しい URL である必要があります（例: http://www.example.com/ ）.',
	'WROTE'						=> 'さんが書きました',

	'YEAR'				=> '年',
	'YEAR_MONTH_DAY'	=> '(YYYY-MM-DD)',
	'YES'				=> 'はい',
	'YIM'				=> 'YIM',
	'YOU_LAST_VISIT'	=> '前回の訪問日時: %s',
	'YOU_NEW_PM'		=> '受信ボックスに新着メッセージがあります！',
	'YOU_NEW_PMS'		=> '受信ボックスに新着メッセージがあります！',
	'YOU_NO_NEW_PM'		=> '新着メッセージはありません。',

	'datetime'			=> array(
		'TODAY'		=> 'Today',
		'TOMORROW'	=> 'Tomorrow',
		'YESTERDAY'	=> 'Yesterday',
		'AGO'		=> array(
			0		=> '1 分以内',
			1		=> '%d 分前',
			60		=> '1 時間前',
		),

		'Sunday'	=> '日曜日',
		'Monday'	=> '月曜日',
		'Tuesday'	=> '火曜日',
		'Wednesday'	=> '水曜日',
		'Thursday'	=> '木曜日',
		'Friday'	=> '金曜日',
		'Saturday'	=> '土曜日',

		'Sun'		=> '日',
		'Mon'		=> '月',
		'Tue'		=> '火',
		'Wed'		=> '水',
		'Thu'		=> '木',
		'Fri'		=> '金',
		'Sat'		=> '土',

		'January'	=> '1月',
		'February'	=> '2月',
		'March'		=> '3月',
		'April'		=> '4月',
		'May'		=> '5月',
		'June'		=> '6月',
		'July'		=> '7月',
		'August'	=> '8月',
		'September' => '9月',
		'October'	=> '10月',
		'November'	=> '11月',
		'December'	=> '12月',

		'Jan'		=> '1',
		'Feb'		=> '2',
		'Mar'		=> '3',
		'Apr'		=> '4',
		'May_short'	=> '5',	// Short representation of "May". May_short used because in English the short and long date are the same for May.
		'Jun'		=> '6',
		'Jul'		=> '7',
		'Aug'		=> '8',
		'Sep'		=> '9',
		'Oct'		=> '10',
		'Nov'		=> '11',
		'Dec'		=> '12',
	),

	'tz'				=> array(
		'-12'	=> 'UTC - 12 hours',
		'-11'	=> 'UTC - 11 hours',
		'-10'	=> 'UTC - 10 hours',
		'-9.5'	=> 'UTC - 9:30 hours',
		'-9'	=> 'UTC - 9 hours',
		'-8'	=> 'UTC - 8 hours',
		'-7'	=> 'UTC - 7 hours',
		'-6'	=> 'UTC - 6 hours',
		'-5'	=> 'UTC - 5 hours',
		'-4.5'	=> 'UTC - 4:30 hours',
		'-4'	=> 'UTC - 4 hours',
		'-3.5'	=> 'UTC - 3:30 hours',
		'-3'	=> 'UTC - 3 hours',
		'-2'	=> 'UTC - 2 hours',
		'-1'	=> 'UTC - 1 hour',
		'0'		=> 'UTC',
		'1'		=> 'UTC + 1 hour',
		'2'		=> 'UTC + 2 hours',
		'3'		=> 'UTC + 3 hours',
		'3.5'	=> 'UTC + 3:30 hours',
		'4'		=> 'UTC + 4 hours',
		'4.5'	=> 'UTC + 4:30 hours',
		'5'		=> 'UTC + 5 hours',
		'5.5'	=> 'UTC + 5:30 hours',
		'5.75'	=> 'UTC + 5:45 hours',
		'6'		=> 'UTC + 6 hours',
		'6.5'	=> 'UTC + 6:30 hours',
		'7'		=> 'UTC + 7 hours',
		'8'		=> 'UTC + 8 hours',
		'8.75'	=> 'UTC + 8:45 hours',
		'9'		=> 'UTC + 9 hours',
		'9.5'	=> 'UTC + 9:30 hours',
		'10'	=> 'UTC + 10 hours',
		'10.5'	=> 'UTC + 10:30 hours',
		'11'	=> 'UTC + 11 hours',
		'11.5'	=> 'UTC + 11:30 hours',
		'12'	=> 'UTC + 12 hours',
		'12.75'	=> 'UTC + 12:45 hours',
		'13'	=> 'UTC + 13 hours',
		'14'	=> 'UTC + 14 hours',
		'dst'	=> '[ <abbr title="Daylight Saving Time">DST</abbr> ]',
	),

	'tz_zones'	=> array(
		'-12'	=> '[UTC - 12] ベーカー島時刻',
		'-11'	=> '[UTC - 11] ニウエ時刻、サモア標準時',
		'-10'	=> '[UTC - 10] ハワイ-アリューシャン列島標準時、クック諸島時刻',
		'-9.5'	=> '[UTC - 9:30] マルケサス諸島時刻',
		'-9'	=> '[UTC - 9] アラスカ標準時、ガンビア諸島時刻',
		'-8'	=> '[UTC - 8] 太平洋標準時',
		'-7'	=> '[UTC - 7] 山岳部標準時（MST）',
		'-6'	=> '[UTC - 6] 中央標準時（CST）',
		'-5'	=> '[UTC - 5] 東部標準時（EST） - 米国・カナダなど',
		'-4.5'	=> '[UTC - 4:30] ベネズエラ標準時',
		'-4'	=> '[UTC - 4] 大西洋標準時（AST）',
		'-3.5'	=> '[UTC - 3:30] カナダ・ニューファンドランド州時刻',
		'-3'	=> '[UTC - 3] ブラジル・アマゾナス州時刻、中央グリーンランド時刻',
		'-2'	=> '[UTC - 2] フェルナンド・ド・ノローニャ島時刻、サウスジョージア島とサウスサンドイッチ諸島時刻',
		'-1'	=> '[UTC - 1] アゾレス諸島時刻、カーボベルデ共和国時刻、東グリーンランド時刻',
		'0'		=> '[UTC] 西ヨーロッパ時刻、グリニッジ標準時（GMT)',
		'1'		=> '[UTC + 1] 中央ヨーロッパ標準時、西アフリカ時刻',
		'2'		=> '[UTC + 2] 東ヨーロッパ時刻、中央アフリカ時刻',
		'3'		=> '[UTC + 3] モスクワ標準時、東アフリカ時刻',
		'3.5'	=> '[UTC + 3:30] イラン標準時',
		'4'		=> '[UTC + 4] 湾岸アラブ諸国標準時',
		'4.5'	=> '[UTC + 4:30] アフガニスタン時刻',
		'5'		=> '[UTC + 5] パキスタン標準時、エカテリンブルク標準時',
		'5.5'	=> '[UTC + 5:30] インド標準時、スリランカ時刻',
		'5.75'	=> '[UTC + 5:45] ネパール時刻',
		'6'		=> '[UTC + 6] バングラデシュ時刻、ブータン時刻、ノボシビルスク標準時',
		'6.5'	=> '[UTC + 6:30] ココス諸島時刻、ミャンマー時刻',
		'7'		=> '[UTC + 7] インドシナ時刻、クラスノヤルスク標準時',
		'8'		=> '[UTC + 8] 中国標準時、オーストラリア西部標準時、イルクーツク標準時',
		'8.75'	=> '[UTC + 8:45] オーストラリア南西西部標準時',
		'9'		=> '[UTC + 9] 日本標準時、韓国標準時、チタ標準時',
		'9.5'	=> '[UTC + 9:30] オーストラリア中部標準時',
		'10'	=> '[UTC + 10] オーストラリア東部標準時、ウラジオストク標準時',
		'10.5'	=> '[UTC + 10:30] ロードハウ島標準時',
		'11'	=> '[UTC + 11] ソロモン諸島時刻、マガダン時刻',
		'11.5'	=> '[UTC + 11:30] ノーフォーク島時刻',
		'12'	=> '[UTC + 12] ニュージーランド時刻、フィジー時刻、カムチャッカ標準時',
		'12.75'	=> '[UTC + 12:45] チャタム諸島時刻',
		'13'	=> '[UTC + 13] トンガ時刻、フェニックス諸島時刻',
		'14'	=> '[UTC + 14] ライン諸島時刻',
	),

	// The value is only an example and will get replaced by the current time on view
	'dateformats'	=> array(
		'Y年M月d日(D) H:i'		=> '2007年1月01日(月) 13:37',	
		'Y年M月d日(D) g:i a'		=> '2007年1月01日(月) 1:37 pm',	
		'|Y年M月d日(D)| H:i'			=> 'Today, 13:37 / 2007年1月01日(月) 13:37',
		'|Y/m/d| H:i'			=> 'Today, 13:37 / 2007/01/01 13:37',
		'M jS \'y, H:i'			=> '1 1st \'07, 13:37',
		'd M Y, H:i'			=> '01 1 2007, 13:37',
	
		/*
		'd M Y, H:i'			=> '01 1 2007, 13:37',
		'd M Y H:i'				=> '01 1 2007 13:37',
		'M jS, \'y, H:i'		=> '1 1st, \'07, 13:37',
		'D M d, Y g:i a'		=> '月 1 01, 2007 1:37 pm',
		'F jS, Y, g:i a'		=> 'January 1st, 2007, 1:37 pm',
		'|d M Y|, H:i'			=> 'Today, 13:37 / 01 1 2007, 13:37',
		'|F jS, Y|, g:i a'		=> 'Today, 1:37 pm / January 1st, 2007, 1:37 pm'
		*/
	),

	// The default dateformat which will be used on new installs in this language
	// Translators should change this if a the usual date format is different
	//'default_dateformat'	=> 'D M d, Y g:i a', // Mon Jan 01, 2007 1:37 pm
	'default_dateformat'	=> 'Y年M月d日(D) H:i', // 2007年1月01日(月) 13:37
));

?>
