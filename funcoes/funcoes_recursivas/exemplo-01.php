<?php 

$hierarquia = array(
				array(
					"nome_cargo" => "CEO",
					"subordinados" => array(
						//Inicio: Diretor Comercial
						array(
							"nome_cargo" => "Diretor Comercial",
							"subordinados" => array(
								//Inicio: Gerente de Vendas
								array(
									"nome_cargo" => "Gerente de Vendas"
								)
								//Fim: Gerente de Vendas	
							)
						),
						//Fim: Diretor Comercial
						//Inicio: Diretor Financeiro
						array(
							"nome_cargo" => "Diretor Financeiro",
							"subordinados" => array(
								//Inicio: Gerente de Contas a Pagar
								array(
									"nome_cargo" => "Gerente de Contas a Pagar",
									"subordinados" => array(
										//Inicio: Supervisor de Pagamentos
										array(
											"nome_cargo" => "Supervisor de Pagamentos"
										)
										//Fim: Supervisor de Pagamentos
									)
								),
								//Fim: Gerente de Contas a Pagar
								//Inicio: Gerente de Compras
								array(
									"nome_cargo" => "Gerente de Compras",
									"subordinados" => array(
										//Inicio: Supervisor de Falhas
										array(
											"nome_cargo" => "Supervisor de Falhas"
										)
										//Fim: Supervisor de Falhas
									)
								)
								//Fim: Gerente de Compras
							)
						)
						//Fim: Diretor Financeiro
					)
				)
);

function exibe($cargos) {

	$html = "<ul>";

	foreach ($cargos as $cargo) {
		$html .= "<li>";
		$html .= $cargo["nome_cargo"];

		if(isset($cargo["subordinados"]) && $cargo["subordinados"] > 0) {

			$html .= exibe($cargo["subordinados"]);

		}

		$html .= "</li>";
	}

	$html .= "</ul>";

	return $html;	
}


echo exibe($hierarquia);






















?>