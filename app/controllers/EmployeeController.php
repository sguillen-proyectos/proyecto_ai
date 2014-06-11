<?php
class EmployeeController extends BaseController {
    public function index($id) {
        $user = Auth::user();
        $model = Employee::find($id);

        $redis = Redis::connection();
        if ($redis->hexists("user:$user->id", "total:$user->id")) {
            $value = intval($redis->hget("user:$user->id", "total:$user->id"));
            $redis->hset("user:$user->id", "total:$user->id", $value+1);
        } else {
            $redis->hset("user:$user->id", "total:$user->id", 1);
        }

        if ($redis->hexists("user:$user->id", "employee:$id")) {
            $value = intval($redis->hget("user:$user->id", "employee:$id"));
            $redis->hset("user:$user->id", "employee:$id", $value+1);
        } else {
            $redis->hset("user:$user->id", "employee:$id", 1);
        }


        return View::make('employee')
            ->with('model', $model);
    }
}
