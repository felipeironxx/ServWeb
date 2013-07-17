<?php

class cfServicoWeb {

    public function dateToBr($dataAmericana) {
        $d = explode('-',$dataAmericana);
        $dOk = $d[2].'/'.$d[1].'/'.$d[0];
        return $dOk;
    }

    public function dateToUS($dataBrasil) {
        $d = explode('/', $dataBrasil);
        $dOk = $d[2].'-'.$d[1].'-'.$d[0];
        return $dOk;
    }
    
    public function dateTimeToBR($data_americana_his){
         $d = explode(' ', $data_americana_his);
         $ok = $this->dateToBr($d[0]).' '.$d[1];
         return $ok;
    }
    
    public function dateTimeToUS($data_br_his){
         $d = explode(' ', $data_br_his);
         $ok = $this->dateToUS($d[0]).' '.$d[1];
         return $ok;
    }

}

?>
