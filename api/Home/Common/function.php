<?php
	/**
     +----------------------------------------------------------
     * 将数据进行urlencode加密，PHP的JSON格式中文乱码所以进行urlencode加密
     * echo时在进行urldecode解密即可
     +----------------------------------------------------------
     * @access public
     +----------------------------------------------------------
     * @param $str array or str 要加密的数组或字符串
     */
	function url_encode($str) {  
	    if(is_array($str)) {  
	        foreach($str as $key=>$value) {  
	            $str[urlencode($key)] = url_encode($value);  
	        }  
	    } else {  
	        $str = urlencode($str);  
	    }  
	      
	    return $str;  
	}
?>