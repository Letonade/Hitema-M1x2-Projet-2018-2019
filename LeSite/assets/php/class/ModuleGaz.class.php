<?php
class ModuleGaz{

private $var_id_module_gaz;
private $var_consommation;
private $var_date_changement;
private $var_id_container;

public function IdModuleGaz(){
	if (func_num_args() > 0) {$this->var_id_module_gaz = func_get_arg(0);}
	else {return($this->var_id_module_gaz);}
}

public function Consommation(){
	if (func_num_args() > 0) {$this->var_consommation = func_get_arg(0);}
	else {return($this->var_consommation);}
}

public function DateChangement(){
	if (func_num_args() > 0) {$this->var_date_changement = func_get_arg(0);}
	else {return($this->var_date_changement);}
}

public function IdContainer(){
	if (func_num_args() > 0) {$this->var_id_container = func_get_arg(0);}
	else {return($this->var_id_container);}
}


public function AfficherModule($entete){
	$chaine = "";
	if ($entete == 1) {
	$chaine .= "<tr>
					<td style='border:1px solid black;'>Date</td>
					<td style='border:1px solid black;'>Consommation</td>
				</tr>";
	}
	$chaine = "<td style='border:1px solid black;'>".$this->DateChangement()."</td>";
	$chaine .= "<td style='border:1px solid black;'>".$this->Consommation()."</td>";
	return($chaine);
}
public function get_module($val)
{
	$this->IdModuleGaz($val['id_module_gaz']);
	$this->Consommation($val['consomation']);
	$this->DateChangement($val['date_changement']);
	$this->IdContainer($val['id_container']);
	
}
}
?>