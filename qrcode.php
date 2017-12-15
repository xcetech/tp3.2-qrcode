

function createQrcode($url,$filename,$level,$size){

          Vendor('phpqrcode.phpqrcode');
          $errorCorrectionLevel =intval($level) ;//容错级别 
          $matrixPointSize = intval($size);//生成图片大小 
          $object = new \QRcode();
          $object->png($url, $filename, $errorCorrectionLevel, $matrixPointSize, 2, false);
          return true;

}

			$filename = 'Uploads/qrcode/checking_'.time().'.png';
            $url = 'http://www.baidu.com/';
            if(createQrcode($url,$filename,3,8)) {
                  echo $filename;
            }