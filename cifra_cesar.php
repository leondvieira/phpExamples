<?php 
	
	function cripto($texto,$chave){
		$alfabeto = range('a', 'z');
		$flip = array_flip($alfabeto);

		for ($i=0; $i < strlen($texto); $i++) { 
			if (in_array(strtolower($texto{$i}), $alfabeto)) {
				$letra = $flip[strtolower($texto{$i})];

				$letra = ($letra + $chave) % 26;

				if ($letra < 0) $letra += 26;
				$texto{$i} = ($texto{$i} == strtolower($texto{$i})) ? $alfabeto[$letra]
																	: strtoupper($alfabeto[$letra]);
			}

		}

		return $texto;
	}

	print cripto('leonardo',1000);
	print cripto('xqazmdpa',-1000);
	

?>