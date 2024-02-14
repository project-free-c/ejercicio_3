<?php

// src/AppBundle/Controller/XmlController.php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Service\XmlModel;

class Upload_XmlController extends Controller
{
    /**
     * @Route("/upload-xml", name="upload_xml", methods={"GET", "POST"})
     */

    public function uploadXmlAction()
    {
        return $this->render('AppBundle::Upload_xml.html.twig');
    }
}
