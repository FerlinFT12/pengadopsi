<?php

namespace Config;

use App\Controllers\Pelanggan;
use CodeIgniter\Config\BaseConfig;

class Filters extends BaseConfig
{
	// Makes reading things below nicer,
	// and simpler to change out script that's used.
	public $aliases = [
		'csrf'     => \CodeIgniter\Filters\CSRF::class,
		'toolbar'  => \CodeIgniter\Filters\DebugToolbar::class,
		'honeypot' => \CodeIgniter\Filters\Honeypot::class,
		'filteradmin' => \App\Filters\FilterAdmin::class,
		'filterdonatur' => \App\Filters\FilterDonatur::class,
		'filtermitra' => \App\Filters\FilterMitra::class,
		'filterpengadopsi' => \App\Filters\FilterPengadopsi::class,
	];

	// Always applied before every request
	public $globals = [
		'before' => [
			'filteradmin' =>  ['except' => [
				'auth', 'auth/*',
				'web', 'web/*',
				'/',
			]],
			'filterdonatur' =>  ['except' => [
				'auth', 'auth/*',
				'web', 'web/*',
				'/'
			]],
			'filtermitra' =>  ['except' => [
				'auth', 'auth/*',
				'web', 'web/*',
				'/'
			]],
			'filterpengadopsi' =>  ['except' => [
				'auth', 'auth/*',
				'web', 'web/*',
				'/'
			]]
			//'honeypot'
			// 'csrf',
		],
		'after'  => [
			'filteradmin' =>  ['except' => [
				'home', 'home/*',
				'admin', 'admin/*',
				'donatur', 'donatur/*',
				'mitra', 'mitra/*',
				'pengadopsi', 'pengadopsi/*'
			]],
			'filterdonatur' =>  ['except' => [
				'home', 'home/*',
				'donatur', 'donatur/*'
			]],
			'filtermitra' =>  ['except' => [
				'home', 'home/*',
				'mitra', 'mitra/*'
			]],
			'filterpengadopsi' =>  ['except' => [
				'home', 'home/*',
				'pengadopsi', 'pengadopsi/*'
			]],
			'toolbar',
			//'honeypot'
		],
	];

	// Works on all of a particular HTTP method
	// (GET, POST, etc) as BEFORE filters only
	//     like: 'post' => ['CSRF', 'throttle'],
	public $methods = [];

	// List filter aliases and any before/after uri patterns
	// that they should run on, like:
	//    'isLoggedIn' => ['before' => ['account/*', 'profiles/*']],
	public $filters = [];
}
