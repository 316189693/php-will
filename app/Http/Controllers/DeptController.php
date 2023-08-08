<?php

namespace App\Http\Controllers;

use App\Models\TmsRequestLog;
use Illuminate\Http\Request;
use PDO;

class DeptController extends Controller
{
    public function index(Request $request)
    {
        // 创建一个PDO连接
        $host = 'db-mysql-sfo2-93038-do-user-1515564-0.b.db.ondigitalocean.com';
        $dsn = "mysql:host=$host;port=25060;dbname=will_tms_master";
        $username = 'will_tms_master_test';
        $password = 'AVNS_Tjt-eD-3c6cBF9sbjFT';

        try {
            $charsets = mb_list_encodings();
            $pdo = new PDO($dsn, $username, $password);
        } catch (\PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
            exit;
        }

// 获取PDO支持的字符集
        $driver = $pdo->getAttribute(PDO::ATTR_DRIVER_NAME);

        if ($driver === 'mysql') {
            $stmt = $pdo->query('SHOW CHARACTER SET');
            $charsets = $stmt->fetchAll(PDO::FETCH_ASSOC);


            return json_encode($charsets, JSON_UNESCAPED_UNICODE);
        } else {
            echo "PDO driver $driver does not support character sets.\n";
        }

        echo "PDO client charset is: $charset";
        $request_log = [
            'tms_rpc_log_status' => "creater",
            'tms_rpc_log_authorization' => "creater",
            'tms_rpc_log_company_id' => 23,
            'fk_tms_order_id' => 23,
            'fk_tms_dispatch_id' => 23,
            'tms_rpc_log_request_by' => 23,
            'tms_rpc_log_trigger_where' => "creater",
            'tms_rpc_log_target_url' => "creater",
            'tms_rpc_log_method' => "creater",
            'tms_rpc_log_reference_1' => "creater",
            'tms_rpc_log_reference_2' => "creater",
            'tms_rpc_log_reference_3' => "creater",
            'tms_rpc_log_request_when' => "2023-04-18 15:42"
        ];
        $rst = TmsRequestLog::create($request_log);
        return json_encode(["dd" => $rst], JSON_UNESCAPED_UNICODE);
    }
}
