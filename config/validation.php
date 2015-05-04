<?php
    
/**
 * @author: afes oktavianus
 * @abstract: file for validation
 * @version: 1.0
 * @copyright Copyright (c) 2015, Afes Oktavianus
 */
    
    function is_valid_state($state) 
    {
        $validStates = array('NANGGROE ACEH DARUSSALAM','SUMATRA UTARA',
                    'SUMATRA BARAT','RIAU','JAMBI','SUMATRA SELATAN',
                    'BENGKULU','LAMPUNG','KEP. BANGKA BELITUNG',
                    'KEP. RIAU','DKI JAKARTA','JAWA BARAT','JAWA TENGAH',
                    'DI YOGYAKARTA','JAWA TIMUR','BANTEN','BALI',
                    'NUSA TENGGARA BARAT','NUSA TENGGARA TIMUR',
                    'KALIMANTAN BARAT','KALIMANTAN TENGAH',
                    'KALIMANTAN SELATAN','KALIMANTAN TIMUR',
                    'SULAWESI UTARA','SULAWESI TENGAH','SULAWESI SELATAN',
                    'SULAWESI TENGGARA','GORONTALO','MALUKU',
                    'MALUKU UTARA','PAPUA','IRIAN JAYA BARAT');
        if (in_array($state,$validStates))
        {
            return true;
        } else
        {
            return false;
        }
    } // end funtion is_valid_state
    
    function is_valid_zip($zip)
    {
        if (preg_match('/^[\d]+$/', $zip))
        {
            return true;
        } else if (strlen($zip) == 5 || strlen($zip) == 9)
        {
            return true;
        } else
        {
            return false;
        }
    } // end function is_valid_zip
?>
