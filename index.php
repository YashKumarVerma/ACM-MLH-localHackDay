<?php 

$GLOBALS['turbo'] = false;
$GLOBALS['apikey'] = '20b8cbde86a9055c71d4e7e95ad85ed2';
/****************************************************************************
| laod base module
*****************************************************************************/
include "application/core/core.base.php";


/****************************************************************************
| laod extensions
*****************************************************************************/
include "application/extensions/extensions.core.php";


/***************************************************************************
| some environment actions
***************************************************************************/
session::start();


/****************************************************************************
| laod configurations
*****************************************************************************/
include "application/config/config.app.php";


/****************************************************************************
| laod main processor
*****************************************************************************/
include "application/core/core.processor.php";


/****************************************************************************
| laod routes
*****************************************************************************/
include "application/modules/routes.php";

// console($_GET);