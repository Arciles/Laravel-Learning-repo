<?php
/**
 * Created by PhpStorm.
 * User: esattahaibis
 * Date: 2016-03-16
 * Time: 5:23 PM
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PagesController extends Controller
{
	public function getIndex() {
		return view('welcome');
	}
	public function getAbout() {
		$greeting = "This is the About page!";
		$flag = true;
		return view('pages.about', ['greeting' => $greeting, 'flag' => $flag]);
	}
	public function getContact() {
		return view('pages.contact');
	}
	public function getHelp() {
		return view('pages.help');
	}

}