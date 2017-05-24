<?php

namespace Admin\BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @Route("/admin")
 */
class DefaultController extends Controller
{
    /**
     * @Route("/",name="back_home")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
 	/**
     * @Route("/login",name="back_login")
     * @Template()
     */
    public function loginAction(Requsest $Requsest)
    {
    	return array();
    }
}
