<?php
/*
 * Copyright 2018 the original author or authors.
 *
 * Licensed under the Apache License, Version 2.0 (the 'License');
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an 'AS IS' BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

class FileTools {

    private $logger;

    public function __construct($config) {
        $this->logger = new Logger($config, 'FileTools');
    }

    public function findAvatars(){
        $this->logger->logInfo('findAvatars()');
        $images = glob('img/avatar/*.{png}', GLOB_BRACE);
        $this->logger->logInfo('  - ' . sizeof($images));
        foreach($images as &$image){
            $image = str_replace('img/avatar/', '', $image);
            $image = str_replace('.png', '', $image);
        }
        return $images;
    }
}

?>