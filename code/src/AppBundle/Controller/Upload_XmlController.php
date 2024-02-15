<?php

// src/AppBundle/Controller/XmlController.php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Model\XmlModel;
use AppBundle\Model\NormalizaArray;

use AppBundle\Entity\Document;

class Upload_XmlController extends Controller
{
    /**
     * @Route("/", name="upload_xml", methods={"GET", "POST"})
    */
    public function uploadXmlAction()
    {
        return $this->render('AppBundle::Upload_xml.html.twig');
    }

    /**
     * @Route("/save-xml", name="save_xml", methods={"POST"})
    */
    public function saveXmlAction(Request $request)
    {

        if(!$request->isMethod("POST")){
            return new Response(
                "<html>
                    <body>
                        <div style='display: flex; flex-wrap: wrap; justify-content: center;'>
                            <h1>No se ha encontrado la ruta</h1>
                        <div>
                    </body>
                </html>"
            );
        }

        $archivo        = $request->files->get("fileXml");
        $xmlModel       = new XmlModel();
        $normalizeXml   = new NormalizaArray();
        $data           = $xmlModel->ReadXmlFile($archivo->getPathName())["soapenv:Body"];
        $keys           = array_keys($data)[0];
        $data           = $data[$keys];
        
        unset($data["Signature"]);

        $nameFile       = $archivo->getFilename();
        $normalizeData  = $normalizeXml->NormalizaArray($data);
        $document       = new Document();
        $em             = $this->getDoctrine()->getManager();
        
        
        $document->setNameFile($nameFile);
        $document->setDocument($normalizeData);
        $em->persist($document);
        $em->flush();

        return new Response(
            "<html>
                <body>
                    <div style='display: flex; flex-wrap: wrap; justify-content: center;'>
                        <h1 style='width: 100%; text-align:center'>Archivo subido exitosamente</h1>
                        <h2 style='width: 100%; text-align:center'>Nombre del archivo: $nameFile</h2>
                        <pre>" . var_export($normalizeData, true) . "</pre>
                    <div>
                </body>
            </html>"
        );

    }

}
