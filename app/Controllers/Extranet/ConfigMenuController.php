<?php

namespace App\Controllers\Extranet;

use App\Models\ConfigModel;
use App\Models\ConfigMenuModel;

class ConfigMenuController extends BaseController
{
    public function index()
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->get()->getFirstRow();        
        // config menu
        $config_menu = new ConfigMenuModel();
        $data['config_menu'] = $config_menu->get()->getFirstRow();

        return view('extranet/config_menu/index', $data);
    }

    public function update($id)
    {
        $config_menu = new ConfigMenuModel();

        $config_menu->update($id, [
            'home'   => $this->request->getPost('home'),
            'service'   => $this->request->getPost('service'),
            'pricing'   => $this->request->getPost('pricing'),
            'our_apps'   => $this->request->getPost('our_apps'),
            'about_us'   => $this->request->getPost('about_us'),
            'contact_us'   => $this->request->getPost('contact_us'),
            'signin'   => $this->request->getPost('signin'),
            'get_started'   => $this->request->getPost('get_started'),
            'tell_bussiness'   => $this->request->getPost('tell_bussiness'),
            'watch_video'   => $this->request->getPost('watch_video'),
            'plan_pricing'   => $this->request->getPost('plan_pricing'),
            'day_trial'   => $this->request->getPost('day_trial'),
            'daily'   => $this->request->getPost('daily'),
            'monthly'   => $this->request->getPost('monthly'),
            'yearly'   => $this->request->getPost('yearly'),
            'day'   => $this->request->getPost('day'),
            'month'   => $this->request->getPost('month'),
            'year'   => $this->request->getPost('year'),
            'lets_try'   => $this->request->getPost('lets_try'),
            'chat_us'   => $this->request->getPost('chat_us'),
            'email_us'   => $this->request->getPost('email_us'),
            'call_us'   => $this->request->getPost('call_us'),
            'our_app_category'   => $this->request->getPost('our_app_category'),
            'choose_app_category'   => $this->request->getPost('choose_app_category'),
            'choose_app'   => $this->request->getPost('choose_app')
        ]);

        session()->setFlashdata('success', 'Success update data');
        return redirect()->to(base_url('extranet/config-menu'));
    }
}
