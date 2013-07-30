<?php
/**
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * @copyright (c) Proud Sourcing GmbH | 2013
 * @link www.proudcommerce.com
 * @package psErrorLog
 * @version 1.0.0
**/
class psErrorLog_show extends oxAdminView
{
    /**
     *
     * @var string
     */
    protected $_sThisTemplate = 'pserrorlog_show.tpl';

    /**
     *
     * @var string
     */
    protected $_LogFileName = 'psErrorLog_PHP.log';
    
    /**
     * Generated array for template
     * 
     * @return array
     */    
    public function getErrorsFromLogfile()
    {
        
        $aErrors = $this->_readErrorFile();
        
        foreach(array_reverse($aErrors) as $sError)
        {
            if('' != trim($sError))
            {
                $aErrorList[] = $this->_prepareError($sError);
            }
        }
        return $aErrorList;
    }
    
    /**
     * Deletes logfile
     * 
     * @return array
     */    
    public function deleteLogFile()
    {
        
        $sLogFilePath = oxRegistry::getConfig()->getLogsDir() . $this->_LogFileName;
        if(unlink($sLogFilePath))
        {
            oxRegistry::get("oxUtilsView")->addErrorToDisplay( 'PSERRORLOG_DELETE_OK' );
        }
        else
        {
            oxRegistry::get("oxUtilsView")->addErrorToDisplay( 'PSERRORLOG_DELETE_ERROR' );
        }
    }    
    
    /**
     * Reads the content from the Logfile
     * 
     * @return string
     */
    protected function _readErrorFile()
    {
        $sLogFilePath = oxRegistry::getConfig()->getLogsDir() . $this->_LogFileName;
        if(file_exists($sLogFilePath))
        {
            $aFileContent = file($sLogFilePath);
        }
        return $aFileContent;
    }
    
    /**
     * Formats error data
     * 
     * @param  string   error message
     * @return array
     */     
    protected function _prepareError($sError)
    {
        
        $sDateTime = substr($sError, 0, 23);
        $sDateTime = str_replace("[", "", $sDateTime);
        $sDateTime = str_replace("]", "", $sDateTime);
        $sDateTime = trim($sDateTime);
        
        preg_match("/] (.*)/", $sError, $sErrorPart); 
        $aErrors = explode(":  ", $sErrorPart[1]);
        
        return array('type' => trim($aErrors[0]), 'msg' => trim($aErrors[1]), 'datetime' => $sDateTime);
    }
}