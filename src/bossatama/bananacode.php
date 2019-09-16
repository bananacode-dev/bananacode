<?php

/**
 * This is a sample code.
 * @package bananacode
 * @author bossatama
 * @link https://github.com/bananacode-dev/bananacode/
 * @license http://opensource.org/licenses/MIT MIT License
 */

// エラーを出力する
ini_set('display_errors', "On");

require_once __DIR__ . '../../../vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

try {
    // accountチャンネル(Loggerインスタンス)の作成
    $channel = new Logger('account');
    // ハンドラーの作成
    $handler = new StreamHandler(__DIR__ . '/sample.log');
    $channel->pushHandler($handler);
} catch (\Exception $e) {
    die($e->getMessage());
}

echo 'Starting logs!!';

// ログ出力
$channel->info('新しいアカウントが作成されました');
$channel->warning('画像認証に5回連続で間違えたユーザーがいます');
$channel->error('DBエラーで新しいアカウントの作成に失敗しました');