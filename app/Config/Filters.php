<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Filters extends BaseConfig
{
	// Makes reading things below nicer,
	// and simpler to change out script that's used.
	public $aliases = [
		'csrf'     => \CodeIgniter\Filters\CSRF::class,
		'toolbar'  => \CodeIgniter\Filters\DebugToolbar::class,
		'honeypot' => \CodeIgniter\Filters\Honeypot::class,
		'filteradmin' => \App\Filters\Filteradmin::class,
		'filteruser' => \App\Filters\Filteruser::class,
		'filterpelanggan' => \App\Filters\Filterpelanggan::class,
	];

	// Always applied before every request
	public $globals = [
		'before' => [
			'filteradmin' =>  ['except' => [
				'auth', 'auth/*',
				'web', 'web/*',
				'/'
			]],
			'filteruser' =>  ['except' => [
				'auth', 'auth/*',
				'web', 'web/*',
				'/'
			]],
			'filterpelanggan' =>  ['except' => [
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
				'admin', 'admin/*'
			]],
			'filteruser' =>  ['except' => [
				'home', 'home/*',
				'user', 'user/*'
			]],
			'filterpelanggan' =>  ['except' => [
				'home', 'home/*',
				'pelanggan', 'pelanggan/*'
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
