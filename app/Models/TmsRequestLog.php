<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model as EloquentModel;
class TmsRequestLog extends EloquentModel
{

    protected $table = 'tms_rpc_log';
    const CREATED_AT = 'tms_rpc_log_request_when';
    const UPDATED_AT = 'tms_rpc_log_response_when';
    protected $primaryKey = 'tms_rpc_log_id';
    protected $guarded = [];

    public $timestamps = true;

}
