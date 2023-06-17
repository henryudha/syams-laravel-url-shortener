<?php declare(strict_types = 1);

namespace App\Helpers;

use Illuminate\Support\Facades\DB;

class TransactionHandler {
    public static function run(\Closure $callback) {
        DB::beginTransaction();

        try {
            $result = $callback();
            DB::commit();

            return $result;
        } catch (\Throwable $e) {
            DB::rollBack();
            throw $e;
        }
    }
}
