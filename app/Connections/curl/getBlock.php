<?php
     function getBlock($hash)
    {
        $url = "https://blockchain.info/rawblock/" . $hash;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, $url);
        $res = curl_exec($ch);
        curl_close($ch);
        $block = json_decode($res);
        if($block == null){
            redirect('/error');
        }else{
            return $block;
        }
    }
?>
