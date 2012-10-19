<?php

return array(
	'name'=>'ClimaxMM',
	'defaultController'=>'climax',
	'components'=>array(
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'climax/guess/<g:\w>'=>'climax/guess',
			),
		),
	),
);