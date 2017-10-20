<?php

namespace CarbonFramework\Routing\Conditions;

interface ConditionInterface {
	public function satisfied();

	public function getArguments();
}
