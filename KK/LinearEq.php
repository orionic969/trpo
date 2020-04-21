<?php
namespace KK;
class LinearEq 
	{
		function solvel($a,$b,$c)
		{
			//aX+b=0
			//x=-b/a
			if ($a==0) 
			{
				throw new KKException("Equation does not exist", 1);
			}
			$x=(-1*$b)/$a;
			$this->x=$x;
            Log::log("Linear equation ({$a}x+{$b}) root: {$x}");
			return $x;
		}
	}