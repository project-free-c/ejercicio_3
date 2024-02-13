<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Model\XmlModel;

class XmlController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function parseXmlAction()
    {   

        $xmlModel = new xmlModel();

        $data     = $xmlModel->ReadXmlFile("/code/ArchivosXML/Rechazo_1error.xml");     
        $data2     = $xmlModel->ReadXmlFile("/code/ArchivosXML/Rechazo_2errores.xml");  
        print_r($data);
        print_r($data2); 
        die;    
           
        return $this->render('your_template.html.twig', [
        
        'data'   => $data,
        
        ]);
    
    }

}
