<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fos_user.change_password.form.factory' shared service.

include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\Form\\Factory\\FactoryInterface.php';
include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\Form\\Factory\\FormFactory.php';

return $this->services['fos_user.change_password.form.factory'] = new \FOS\UserBundle\Form\Factory\FormFactory(${($_ = isset($this->services['form.factory']) ? $this->services['form.factory'] : $this->load('getForm_FactoryService.php')) && false ?: '_'}, 'fos_user_change_password_form', 'FOS\\UserBundle\\Form\\Type\\ChangePasswordFormType', $this->parameters['fos_user.change_password.form.validation_groups']);
