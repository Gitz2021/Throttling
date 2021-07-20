<?php
public $aliases = [
		...
		'ip_throttle' => \App\Filters\IPThrottler::class,
	];

public $globals = [
		'before' => [
			...
			'ip_throttle'
		],
		'after'  => [
      ...
		],
	];

public $methods = [
		'post' => ['CSRF', 'ip_throttle']
	];
?>
