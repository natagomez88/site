<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2014.3.2.295
*/

require_once('form_process.php');

$form = array(
	'subject' => 'Envío de Formulario Inicio, copias:',
	'heading' => 'Envío de nuevo formulario',
	'success_redirect' => '',
	'resources' => array(
		'checkbox_checked' => 'Marcada',
		'checkbox_unchecked' => 'No marcada',
		'submitted_from' => 'Formulario enviado desde el sitio web: %s',
		'submitted_by' => 'Dirección IP del visitante: %s',
		'too_many_submissions' => 'Se han realizado recientemente demasiados envíos a través de esta IP',
		'failed_to_send_email' => 'Error al enviar el correo electrónico',
		'invalid_reCAPTCHA_private_key' => 'Clave privada de reCAPTCHA no válida.',
		'invalid_field_type' => 'Tipo de campo desconocido: %s.',
		'unknown_method' => 'Método de solicitud de servidor desconocido'
	),
	'email' => array(
		'from' => 'natagomez88@hotmail.com',
		'to' => 'natagomez88@hotmail.com'
	),
	'fields' => array(
		'custom_U4253' => array(
			'order' => 1,
			'type' => 'string',
			'label' => 'Name',
			'required' => true,
			'errors' => array(
				'required' => 'El campo \'Name\' es obligatorio.'
			)
		),
		'Email' => array(
			'order' => 2,
			'type' => 'email',
			'label' => 'Email',
			'required' => true,
			'errors' => array(
				'required' => 'El campo \'Email\' es obligatorio.',
				'format' => 'El campo \'Email\' contiene un correo electrónico no válido.'
			)
		),
		'custom_U4261' => array(
			'order' => 3,
			'type' => 'string',
			'label' => 'Message',
			'required' => false,
			'errors' => array(
			)
		)
	)
);

process_form($form);
?>
