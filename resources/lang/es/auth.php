<?php
return [
    /*
    |--------------------------------------------------------------------------
    | Authentication Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */
    'failed' => 'Las credenciales no concuerdan con nuestros registros.',
    'throttle' => 'Demasiados intentos fallidos de conexi胣. Por favor intente nuevamente en :seconds segundos.',

    /**
     * Login & Register
     */
    'sign_up' => 'Inscribete',
    'log_in' => 'Log in',
    'logout' => 'Logout',

    'name' => 'Nombre',
    'username' => 'Username',
    'email' => 'Email',
    'password' => 'Password',
    'password_confirm' => 'Confirmar Password',
    'password_hint' => 'Debe contener al menos 5 caracteres',
    'forgot_password' => 'Olvid贸 Password?',
    'remember_me' => 'Recordarme',
    'ldap_email_hint' => 'Por favor introduzca un mail para utilizar con esta cuenta.',
    'create_account' => 'Crear una cuenta',
    'social_login' => 'Login Social',
    'social_registration' => 'Registro Social',
    'social_registration_text' => 'Registrar y entrar utilizando otro servicio.',

    'register_thanks' => 'Gracias por registrarse!',
    'register_confirm' => 'Por favor chequee su email y haga clic en el bot贸n de confirmaci贸n enviado para acceder a :appName.',
    'registrations_disabled' => 'Los registros est谩n deshabilitados actualmente',
    'registration_email_domain_invalid' => 'Este dominio de Email no tiene acceso a esta aplicaci贸n',
    'register_success' => 'Gracias por registrarse! Ahora se encuentra registrado y logueado.',


    /**
     * Password Reset
     */
    'reset_password' => 'Reset Password',
    'reset_password_send_instructions' => 'Introduzca su email a continuaci贸n y le ser谩 enviado un correo con un link para la restauraci贸n',
    'reset_password_send_button' => 'Enviar Link de Reset',
    'reset_password_sent_success' => 'Un link para resetear password ha sido enviado a :email.',
    'reset_password_success' => 'Su password ha sido reiniciado de manera 茅xitosa.',

    'email_reset_subject' => 'Reset de su password de :appName',
    'email_reset_text' => 'Ud. esta recibiendo este email debido a que recibimos una solicitud de reset de password de su cuenta.',
    'email_reset_not_requested' => 'Si ud. no solicit贸 un reset de password, no es requerida ninguna acci贸n.',


    /**
     * Email Confirmation
     */
    'email_confirm_subject' => 'Confirme su email en :appName',
    'email_confirm_greeting' => 'Gracias por unirse a :appName!',
    'email_confirm_text' => 'Por favor confirme su direcci贸n de email haciendo click en el siguiente bot贸n:',
    'email_confirm_action' => 'Confirmar Email',
    'email_confirm_send_error' => 'Confirmation de email requerida pero el sistema no pudo enviar el mail. Contacte al administrador para asegurarse que el email est谩 seteado correctamente.',
    'email_confirm_success' => 'Su email hasido confirmado!',
    'email_confirm_resent' => 'Email de confirmaci贸n reenviado, Por favor chequee su Inbox.',

    'email_not_confirmed' => 'Direcci贸n de email no confirmada',
    'email_not_confirmed_text' => 'Su cuenta de email todav铆a no ha sido confirmada.',
    'email_not_confirmed_click_link' => 'Por favor chequee el email con el link de confirmaci贸n que ha sido enviado luego de registrarse.',
    'email_not_confirmed_resend' => 'Si no puede encontrar el email, puede solicitar el renv铆o del email de confirmaci贸n rellenando el formulario a continuaci贸n.',
    'email_not_confirmed_resend_button' => 'Reenviar Email de confirmaci贸n',
];
