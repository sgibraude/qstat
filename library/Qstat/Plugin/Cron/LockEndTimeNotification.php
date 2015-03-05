<?php

class Qstat_Plugin_Cron_LockEndTimeNotification extends Bf_Plugin_Cron_CronAbstract
{

    public function run ()
    {
        
        $objApplicationOptions = new Zend_Config($this->getAppOptions());        
        
        $objCatalog = new Bf_Catalog($objApplicationOptions->catalog);
        
        $objLock = new Qstat_Db_Table_Lock();
        $objLock->runSceduledEndLocksNotification($objCatalog, $objApplicationOptions);
    }

}