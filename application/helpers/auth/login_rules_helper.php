<?php
function getLoginRules(){
	return array(
        array(
                'field' => 'rut',
                'label' => 'RUT',
                'rules' => 'required|trim',
                'errors' => array(
                        'required' => 'El %s es requerido.',
                )
        ),
        array(
                'field' => 'password',
                'label' => 'Contraseña',
                'rules' => 'required|trim',
                'errors' => array(
                        'required' => 'La %s es requerida.',
                )
        )
    );
}
