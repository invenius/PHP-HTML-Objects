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

use de\maxschuster\pho\SelfClosingElement;
use de\maxschuster\pho\Attribute;

/**
 * This class has no Description...
 * @author Max Schuster 
 * @package pho
 */
class Img extends SelfClosingElement {

    protected $src;
    protected $alt;
    protected $title;
    protected $tagname = 'img';

    public function setSrc($val) {
        $this->src = new Attribute('src', $val);
        $this->addAttribute($this->src);
    }

    public function setAlt($val) {
        $this->alt = new Attribute('alt', $val);
        $this->addAttribute($this->alt);
    }

    public function setTitle($val) {
        $this->title = new Attribute('title', $val);
        $this->addAttribute($this->title);
    }

}

?>