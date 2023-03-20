<?php

namespace App\Controllers\Frontend;

use App\Models\ClientModel;
use App\Models\ConfigModel;
use App\Models\ConfigMenuModel;
use App\Models\SliderEvent;
use App\Models\SliderText;

class HomeController extends BaseController
{
    public function index($trial_name = null)
    {
        // client
        $client_model = new ClientModel();
        $client = $client_model->where("domain_live_url", base_url())->where('status', 1)->get()->getFirstRow();
        // define trial or prod
        if ($client->is_production == 1) {
            $is_production = 1;
            $client_id = $client->id;
        } else {
            $is_production = 0;
            if ($trial_name != null) {
                $trial_access_name = $trial_name;
            } else {
                $trial_access_name = null;
            }
            $client = $client_model->where("domain_live_url", base_url())->where('trial_access_name', $trial_access_name)->where('status', 1)->get()->getFirstRow();
            if ($client) {
                $client_id = $client->id;
            } else {
                return redirect()->to(base_url('/'));
            }
        }
        $data['trial_name'] = $trial_name;
        $data['is_production'] = $is_production;          
        // config
        $config = new ConfigModel();
        $data['config'] = $config->where('client_id', $client_id)->where('status', 1)->get()->getFirstRow();
        // config menu
        $config_menu = new ConfigMenuModel();
        $data['config_menu'] = $config_menu->where('client_id', $client_id)->where('status', 1)->get()->getFirstRow();
        // slider event
        $slider_event = new SliderEvent();
        $data['slider_events'] = $slider_event->where('client_id', $client_id)->where('status', 1)->get()->getResult();
        // slider text
        $slider_text = new SliderText();
        $data['slider_texts'] = $slider_text->where('client_id', $client_id)->where('status', 1)->get()->getResult();


        return view('frontend/home/index', $data);
    }
}
