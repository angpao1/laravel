<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ArticlesController extends Controller {

	public function index() {
		return 'This articles page from controller';
	}

	public function show($id) {
		return 'This articles page for ID ' . $id;
	}
}
