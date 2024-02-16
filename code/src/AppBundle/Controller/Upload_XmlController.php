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
                "soapenv:Body"      => [],
            ]
        ];
        
        $xml["soapenv:Envelope"]["soapenv:Body"]["@xmlns:ns10"]  = "http://www.aduana.cl/xml/esquemas/ITEM";
        $xml["soapenv:Envelope"]["soapenv:Body"]["@xmlns:ns11"]  = "http://www.aduana.cl/xml/esquemas/OBSERVACIONITEM";
        $xml["soapenv:Envelope"]["soapenv:Body"]["@xmlns:ns12"]  = "http://www.aduana.cl/xml/esquemas/OBSERVACIONESITEM";
        $xml["soapenv:Envelope"]["soapenv:Body"]["@xmlns:ns13"]  = "http://www.aduana.cl/xml/esquemas/CUENTAITEM";
        $xml["soapenv:Envelope"]["soapenv:Body"]["@xmlns:ns14"]  = "http://www.aduana.cl/xml/esquemas/CUENTASITEM";
        $xml["soapenv:Envelope"]["soapenv:Body"]["@xmlns:ns15"]  = "http://www.aduana.cl/xml/esquemas/INSUMO";
        $xml["soapenv:Envelope"]["soapenv:Body"]["@xmlns:ns16"]  = "http://www.aduana.cl/xml/esquemas/INSUMOS";
        $xml["soapenv:Envelope"]["soapenv:Body"]["@xmlns:ns17"]  = "http://www.aduana.cl/xml/esquemas/ANEXA";
        $xml["soapenv:Envelope"]["soapenv:Body"]["@xmlns:ns18"]  = "http://www.aduana.cl/xml/esquemas/ANEXAS";
        $xml["soapenv:Envelope"]["soapenv:Body"]["@xmlns:ns19"]  = "http://www.aduana.cl/xml/esquemas/ITEMS";
        $xml["soapenv:Envelope"]["soapenv:Body"]["@xmlns:ns2"]   = "http://www.aduana.cl/xml/esquemas/LOG";
        $xml["soapenv:Envelope"]["soapenv:Body"]["@xmlns:ns20"]  = "http://www.aduana.cl/xml/esquemas/VISTOBUENO";
        $xml["soapenv:Envelope"]["soapenv:Body"]["@xmlns:ns21"]  = "http://www.aduana.cl/xml/esquemas/VISTOSBUENOS";
        $xml["soapenv:Envelope"]["soapenv:Body"]["@xmlns:ns22"]  = "http://www.aduana.cl/xml/esquemas/BULTOS";
        $xml["soapenv:Envelope"]["soapenv:Body"]["@xmlns:ns23"]  = "http://www.aduana.cl/xml/esquemas/BULTO";
        $xml["soapenv:Envelope"]["soapenv:Body"]["@xmlns:ns24"]  = "http://www.aduana.cl/xml/esquemas/CUENTASYVALORES";
        $xml["soapenv:Envelope"]["soapenv:Body"]["@xmlns:ns25"]  = "http://www.aduana.cl/xml/esquemas/CUENTAGIRO";
        $xml["soapenv:Envelope"]["soapenv:Body"]["@xmlns:ns26"]  = "http://www.aduana.cl/xml/esquemas/CUENTASGIRO";
        $xml["soapenv:Envelope"]["soapenv:Body"]["@xmlns:ns27"]  = "http://www.aduana.cl/xml/esquemas/PAGODIFERIDO";
        $xml["soapenv:Envelope"]["soapenv:Body"]["@xmlns:ns28"]  = "http://www.aduana.cl/xml/esquemas/FECHAVENCCUOTA";
        $xml["soapenv:Envelope"]["soapenv:Body"]["@xmlns:ns29"]  = "http://www.aduana.cl/xml/esquemas/CUOTA";
        $xml["soapenv:Envelope"]["soapenv:Body"]["@xmlns:ns3"]   = "http://www.aduana.cl/xml/esquemas/CABEZA";
        $xml["soapenv:Envelope"]["soapenv:Body"]["@xmlns:ns30"]  = "http://www.aduana.cl/xml/esquemas/MONTOCUOTA";
        $xml["soapenv:Envelope"]["soapenv:Body"]["@xmlns:ns31"]  = "http://www.aduana.cl/xml/esquemas/CUOTAS";
        $xml["soapenv:Envelope"]["soapenv:Body"]["@xmlns:ns32"]  = "http://www.aduana.cl/xml/esquemas/ANEXASDIN";
        $xml["soapenv:Envelope"]["soapenv:Body"]["@xmlns:ns33"]  = "http://www.aduana.cl/xml/esquemas/ERRORES";
        $xml["soapenv:Envelope"]["soapenv:Body"]["@xmlns:ns34"]  = "http://www.aduana.cl/xml/esquemas/ERROR";
        $xml["soapenv:Envelope"]["soapenv:Body"]["@xmlns:ns35"]  = "http://www.w3.org/2000/09/xmldsig#";
        $xml["soapenv:Envelope"]["soapenv:Body"]["@xmlns:ns36"]  = "http://www.aduana.cl/xml/esquemas/EnvioDin";
        $xml["soapenv:Envelope"]["soapenv:Body"]["@xmlns:ns4"]   = "http://www.aduana.cl/xml/esquemas/IDENTIFICACION";
        $xml["soapenv:Envelope"]["soapenv:Body"]["@xmlns:ns5"]   = "http://www.aduana.cl/xml/esquemas/REGIMENSUSPENSIVO";
        $xml["soapenv:Envelope"]["soapenv:Body"]["@xmlns:ns6"]   = "http://www.aduana.cl/xml/esquemas/ORIGENTRANSPALMACENAJE";
        $xml["soapenv:Envelope"]["soapenv:Body"]["@xmlns:ns7"]   = "http://www.aduana.cl/xml/esquemas/ANTECEDENTESFINANCIEROS";
        $xml["soapenv:Envelope"]["soapenv:Body"]["@xmlns:ns8"]   = "http://www.aduana.cl/xml/esquemas/TOTALES";
        $xml["soapenv:Envelope"]["soapenv:Body"]["@xmlns:ns9"]   = "http://www.aduana.cl/xml/esquemas/RESPUESTA";
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
