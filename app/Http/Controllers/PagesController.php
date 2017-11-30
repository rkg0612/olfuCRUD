<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

	public function getIndex() {
		return view('pages.welcome');
	}

	public function getCreate() {
		return view('posts.create');
	}

	public function getContact() {
		return view('pages.contact');
	}


}