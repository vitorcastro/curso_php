<?php

/**
 * @author vitorcastro
 * Classe representa quais a possibilidade de prioridade de tarefa
 */
class Prioridade
{
	const ALTA = 3;
	const MEDIA = 2;
	const BAIXA = 1;
	
	public static function getById($prioridade)
	{
		switch ($prioridade)
		{
			case self::ALTA: return 'Alta'; break;
			case self::MEDIA: return 'Média'; break;
			case self::BAIXA: return 'Baixa'; break;
			default: return 'Sem Prioridade'; break;
		}
	}
	
}


?>