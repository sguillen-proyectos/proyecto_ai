<?php

class HomeController extends BaseController {
	public function index() {
		if (!Auth::check()) {
			return View::make('login');
		}
		$user = Auth::user();
		$q = Input::get('q');
		if($q) {
			$list = Employee::where('name', 'like', "%$q%")->get();
		} else {
			$list = Employee::orderBy('name')->get();
		}
		$list = $list->toArray();

		$redis = Redis::connection();
		$total = intval($redis->hget("user:$user->id", "total:$user->id"));
		$total = $total === 0 ? 1 : $total;
		$bst = new BalancedBinaryTree();
		for($i = 0; $i < count($list); $i++) {
			$item = $list[$i];
			if($redis->hexists("user:$user->id", "employee:".$item['id'])) {
				$value = intval($redis->hget("user:$user->id", "employee:".$item['id']));
			} else {
				$redis->hset("user:$user->id", "employee:".$item['id'], 0);
				$value = 0;
			}
			$item['count'] = (float)$value / $total*1.0;
			$node = new Node($value, $item);
			$bst->insert($node);
		}
		$bst->balance();
		$a = [];
		$bst->inorder($a);

		return View::make('index')
			->with('q', $q)
			->with('list', $a);
	}
	public function login() {
		return View::make('login');
	}
	public function logout(){
		Auth::logout();

		return Redirect::to('/');
	}
	public function doLogin() {
		if (!Auth::attempt(Input::only(['username','password']))) {
			return Redirect::to('login')
				->with('error', 'Credenciales invalidas')
				->withInput();
		}

		return Redirect::to('/');
	}
}
