<?php

/*
 * Copyright 2012 Max Schuster 
 * 
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace de\maxschuster\pho\tag;

use de\maxschuster\pho\ContainigElement;
use de\maxschuster\pho\Attribute;

/**
 * This class has no Description...
 * @author Max Schuster 
 * @package pho
 */
class Object extends ContainigElement {
    protected $tagname = 'object';
    //classid='clsid:D27CDB6E-AE6D-11cf-96B8-444553540000' width='300' height='300' id='player1' name='player1'
    protected $classId;
    protected $width;
    protected $height;
    
    public function setClassId($classId) {
        $this->classId = new Attribute('classid', $classId);
        $this->addAttribute($this->classId);
    }

    public function setWidth($width) {
        $this->width = new Attribute('width', $width);
        $this->addAttribute($this->width);
    }

    public function setHeight($height) {
        $this->height = new Attribute('height', $height);
        $this->addAttribute($this->height);
    }


}

?>