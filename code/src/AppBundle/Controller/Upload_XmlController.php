<?php

// src/AppBundle/Controller/XmlController.php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\StreamedResponse;
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
        
        // unset($data["Signature"]);

        $nameFile       = $archivo->getFilename();
        // $normalizeData  = $normalizeXml->NormalizaArray($data);
        $document       = new Document();
        $em             = $this->getDoctrine()->getManager();
        
        
        $document->setNameFile($nameFile);
        // $document->setDocument($normalizeData);
        $document->setDocument($data);
        $em->persist($document);
        $em->flush();

        return new Response(
            "<html>
                <body>
                    <div style='display: flex; flex-wrap: wrap; justify-content: center;'>
                        <h1 style='width: 100%; text-align:center'>Archivo subido exitosamente</h1>
                        <h2 style='width: 100%; text-align:center'>Nombre del archivo: $nameFile</h2>
                        <pre>" . var_export($data, true) . "</pre>
                    <div>
                </body>
            </html>"
        );

    }

    /**
     * @Route("/export-xml", name="export_xml", methods={"POST"})
    */
    public function exportXmlAction(Request $request)
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

        $name           = $request->get("fileName");
        $em             = $this->getDoctrine()->getRepository(Document::class);
        $data           = $em->findOneBy([
            "nameFile" => $name
        ]);
        $data           = $data->getDocument();

        $xml                        = [
            "soapenv:Envelope"      => [
                "@xmlns:soapenv"    => "http://schemas.xmlsoap.org/soap/envelope/",
                "soapenv:Header"    => [],
                "soapenv:Body"      => [
                    "@xmlns:ns10"   => "http://www.aduana.cl/xml/esquemas/ITEM",
                    "@xmlns:ns11"   => "http://www.aduana.cl/xml/esquemas/OBSERVACIONITEM",
                    "@xmlns:ns12"   => "http://www.aduana.cl/xml/esquemas/OBSERVACIONESITEM",
                    "@xmlns:ns13"   => "http://www.aduana.cl/xml/esquemas/CUENTAITEM",
                    "@xmlns:ns14"   => "http://www.aduana.cl/xml/esquemas/CUENTASITEM",
                    "@xmlns:ns15"   => "http://www.aduana.cl/xml/esquemas/INSUMO",
                    "@xmlns:ns16"   => "http://www.aduana.cl/xml/esquemas/INSUMOS",
                    "@xmlns:ns17"   => "http://www.aduana.cl/xml/esquemas/ANEXA",
                    "@xmlns:ns18"   => "http://www.aduana.cl/xml/esquemas/ANEXAS",
                    "@xmlns:ns19"   => "http://www.aduana.cl/xml/esquemas/ITEMS",
                    "@xmlns:ns2"    => "http://www.aduana.cl/xml/esquemas/LOG",
                    "@xmlns:ns20"   => "http://www.aduana.cl/xml/esquemas/VISTOBUENO",
                    "@xmlns:ns21"   => "http://www.aduana.cl/xml/esquemas/VISTOSBUENOS",
                    "@xmlns:ns22"   => "http://www.aduana.cl/xml/esquemas/BULTOS",
                    "@xmlns:ns23"   => "http://www.aduana.cl/xml/esquemas/BULTO",
                    "@xmlns:ns24"   => "http://www.aduana.cl/xml/esquemas/CUENTASYVALORES",
                    "@xmlns:ns25"   => "http://www.aduana.cl/xml/esquemas/CUENTAGIRO",
                    "@xmlns:ns26"   => "http://www.aduana.cl/xml/esquemas/CUENTASGIRO",
                    "@xmlns:ns27"   => "http://www.aduana.cl/xml/esquemas/PAGODIFERIDO",
                    "@xmlns:ns28"   => "http://www.aduana.cl/xml/esquemas/FECHAVENCCUOTA",
                    "@xmlns:ns29"   => "http://www.aduana.cl/xml/esquemas/CUOTA",
                    "@xmlns:ns3"    => "http://www.aduana.cl/xml/esquemas/CABEZA",
                    "@xmlns:ns30"   => "http://www.aduana.cl/xml/esquemas/MONTOCUOTA",
                    "@xmlns:ns31"   => "http://www.aduana.cl/xml/esquemas/CUOTAS",
                    "@xmlns:ns32"   => "http://www.aduana.cl/xml/esquemas/ANEXASDIN",
                    "@xmlns:ns33"   => "http://www.aduana.cl/xml/esquemas/ERRORES",
                    "@xmlns:ns34"   => "http://www.aduana.cl/xml/esquemas/ERROR",
                    "@xmlns:ns35"   => "http://www.w3.org/2000/09/xmldsig#",
                    "@xmlns:ns36"   => "http://www.aduana.cl/xml/esquemas/EnvioDin",
                    "@xmlns:ns4"    => "http://www.aduana.cl/xml/esquemas/IDENTIFICACION",
                    "@xmlns:ns5"    => "http://www.aduana.cl/xml/esquemas/REGIMENSUSPENSIVO",
                    "@xmlns:ns6"    => "http://www.aduana.cl/xml/esquemas/ORIGENTRANSPALMACENAJE",
                    "@xmlns:ns7"    => "http://www.aduana.cl/xml/esquemas/ANTECEDENTESFINANCIEROS",
                    "@xmlns:ns8"    => "http://www.aduana.cl/xml/esquemas/TOTALES",
                    "@xmlns:ns9"    => "http://www.aduana.cl/xml/esquemas/RESPUESTA",
                ],
            ]
        ];
                                                                                                                                                                                                                                                                                                
        $xml["soapenv:Envelope"]["soapenv:Body"][$data["ns36:TIPOENVIO"]] = $data;

        $xmlModel       = new XmlModel();
        $xmlContent     = $xmlModel->ExportXmlFile($xml);

        $response       = new StreamedResponse();
        $response->setCallback(function () use ($xmlContent) {
            echo $xmlContent;
        });
        $response->headers->set("Content-Type", "application/xml");
        $response->headers->set("Content-Disposition", "attachment; filename=$name.xml");
        
        return $response;

    }

}
