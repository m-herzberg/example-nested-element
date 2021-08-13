<?php

return [

	'transforms' => [

		'presave' => function ($node, $params) {
			if(isset($params['parent']->source))
			{
				if(!isset($node->source))
				$node->source = $params['parent']->source;
			}

		},

	],

];
