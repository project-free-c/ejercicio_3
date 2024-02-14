<?php

namespace AppBundle\Model;

class NormalizaArray{
    
    public function NormalizaArray(array $data = []){        

        if(!$data){
            return [];
        }

        $newData    = [];

        foreach($data as $key => $item){
            $split              = explode(":", $key);
            $split              = count($split) > 1 ? $split[1] : $split[0];
            $newData[$split]    = is_array($item) ? $this->NormalizaArray($item) : $item;
        }

        return $newData;

    }

}

