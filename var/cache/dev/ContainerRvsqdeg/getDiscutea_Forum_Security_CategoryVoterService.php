<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'discutea.forum.security.category_voter' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Authorization\\Voter\\VoterInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Authorization\\Voter\\Voter.php';
include_once $this->targetDirs[3].'\\vendor\\discutea\\forum-bundle\\Discutea\\DForumBundle\\Security\\CategoryVoter.php';

return $this->services['discutea.forum.security.category_voter'] = new \Discutea\DForumBundle\Security\CategoryVoter(${($_ = isset($this->services['debug.security.access.decision_manager']) ? $this->services['debug.security.access.decision_manager'] : $this->getDebug_Security_Access_DecisionManagerService()) && false ?: '_'});
