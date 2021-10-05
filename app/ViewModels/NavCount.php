<?php

namespace App\ViewModels;

use Statamic\View\ViewModel;
use Statamic\Facades\Nav;
use Symfony\Component\Yaml\Yaml;

class NavCount extends ViewModel
{
    public function data(): array
    {
        // read Yaml file for navbar
        $list = Yaml::parseFile('../content/trees/navigation/navbar.yaml');

        // count navbar item
        if (isset($list['tree']) && count($list['tree']) > 1){
            $count_item = ceil((count($list['tree'])) / 2);//ceil or floor
        } else {
            $count_item = -1;
        }

        $data =  [
            'item_count'    => $count_item
        ];

        $uri = collect($this->cascade->get('current_uri'))[0];

        if ($uri == '/contact'){
            $list2 = Yaml::parseFile('../resources/blueprints/forms/contact_us.yaml');
    
            $options = $list2['sections']['main']['fields'][2]['field']['options'];

            $data['options'] =  $options;
        }

        return $data;
    }
}