<?php
use Illuminate\Database\Capsule\Manager as Capsule;

class Database
{
	 
	function __construct()
	{
		$capsule = new Capsule();		

		$capsule->addConnection([
				'driver'    => 'mysql',
				'host'      => DBHOST,
				'port' 		=> DBPORT,
				'database'  => DBNAME,
				'username'  => DBUSER,
				'password'  => DBPASS,
				'charset'   => 'utf8',
				'collation' => 'utf8_unicode_ci',
				'prefix'    => '',				 
		]);

		$capsule->setAsGlobal();

		$capsule->bootEloquent();
	}
}
