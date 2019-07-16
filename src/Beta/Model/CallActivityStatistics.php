<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CallActivityStatistics File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

/**
* CallActivityStatistics class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class CallActivityStatistics extends ActivityStatistics
{
    /**
    * Gets the afterHours
    *
    * @return Duration The afterHours
    */
    public function getAfterHours()
    {
        if (array_key_exists("afterHours", $this->_propDict)) {
            if (is_a($this->_propDict["afterHours"], "Microsoft\Graph\Beta\Model\Duration")) {
                return $this->_propDict["afterHours"];
            } else {
                $this->_propDict["afterHours"] = new Duration($this->_propDict["afterHours"]);
                return $this->_propDict["afterHours"];
            }
        }
        return null;
    }
    
    /**
    * Sets the afterHours
    *
    * @param Duration $val The afterHours
    *
    * @return CallActivityStatistics
    */
    public function setAfterHours($val)
    {
        $this->_propDict["afterHours"] = $val;
        return $this;
    }
    
}