<?php

namespace AppBundle\Model;

use Symfony\Component\Serializer\Encoder\XmlEncoder;



class XmlModel{
    
    public function ReadXmlFile($path="/code/ArchivosXML/Aceptado.xml"){        

        $xmlContent = file_get_contents($path);

        $xmlEncoder = new XmlEncoder();

        $data = $xmlEncoder->decode($xmlContent, 'xml');

        return $data;

    }

}

