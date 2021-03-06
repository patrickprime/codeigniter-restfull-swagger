<?php
namespace Swagger\Annotations;

/**
 * @license    http://www.apache.org/licenses/LICENSE-2.0
 *             Copyright [2014] [Robert Allen]
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @package
 * @category
 * @subpackage
 */
use Swagger\Annotations\AbstractAnnotation;
use Swagger\Annotations\Parameter;

/**
 * @package
 * @category
 * @subpackage
 *
 * @Annotation
 */
class Parameters extends AbstractAnnotation
{
    /**
     * @var Parameter[]
     */
    public $parameters;

    protected static $mapAnnotations = array(
        '\Swagger\Annotations\Parameter' => 'parameters[]'
    );
}
