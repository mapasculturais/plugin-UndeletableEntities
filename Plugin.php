<?php

namespace UndeletableEntities;

use MapasCulturais\App;
use MapasCulturais\i;
use MapasCulturais\Definitions\Taxonomy;

class Plugin extends \MapasCulturais\Plugin
{
    function __construct($config = [])
    {
        $config += [
            // 'Seal' => [],
            // 'Agent'=> [],
        ];

        parent::__construct($config);
    }

    public function _init()
    {

        $app = App::i();
        $plugin = $this;

        foreach($this->config as $entity => $ids){

            $app->hook("can($entity.<<remove|destroy>>)", function ($user, &$result) use ($ids) {
                if (in_array($this->id, $ids)) {
                    $result = false;
                }
            });
        }
        
    }

    public function register()
    {
    }
}
