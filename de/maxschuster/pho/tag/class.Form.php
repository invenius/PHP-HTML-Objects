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
class Form extends ContainigElement {

    protected $action;
    protected $method;
    protected $name;
    protected $charset;
    protected $tagname = 'form';

    public function __construct($content = false, $id = false, $class = false, $attributes = false) {
        parent::__construct($content, $id, $class, $attributes);
        $this->setMethod('post');
    }

    public function setAction($val) {
        $this->action = new Attribute('action', $val);
        $this->addAttribute($this->action);
    }

    public function setMethod($val) {
        $this->method = new Attribute('method', $val);
        $this->addAttribute($this->method);
    }

    public function setName($val) {
        $this->name = new Attribute('name', $val);
        $this->addAttribute($this->name);
    }

    public function setCharset($val) {
        $this->charset = new Attribute('accept-charset', $val);
        $this->addAttribute($this->charset);
    }

}

?>