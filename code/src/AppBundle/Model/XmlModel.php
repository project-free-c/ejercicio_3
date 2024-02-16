<?php

namespace AppBundle\Model;

use Symfony\Component\Serializer\Encoder\XmlEncoder;

class XmlModel{
    
    public function ReadXmlFile(string $path ="/code/ArchivosXML/Aceptado.xml"){        

        $xmlContent = file_get_contents($path);

        $xmlEncoder = new XmlEncoder();

        $data = $xmlEncoder->decode($xmlContent, 'xml');

        return $data;

    }

    public function ExportXmlFile(array $data = []){
        $encoder    = new XmlEncoder();
        $keys       = array_keys($data);
        $encoder->setRootNodeName($keys[0]);
        $xmlContent = $encoder->encode($data[$keys[0]], "xml");
        return $xmlContent;
    }

}

