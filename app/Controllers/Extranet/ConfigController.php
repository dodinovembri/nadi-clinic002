<?php

namespace App\Controllers\Extranet;

use App\Models\ConfigModel;

class ConfigController extends BaseController
{
    public function index()
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->get()->getFirstRow();

        return view('extranet/config/index', $data);
    }

    public function update($id)
    {
        $config = new ConfigModel();

        $favicon = $this->request->getFile('favicon');
        if ($favicon != '') {
            $favicon_name = $favicon->getRandomName();
            $favicon->move('assets/images/favicon/', $favicon_name);

            $config->update($id, [
                'modified_at' => date('Y-m-d H:i:s'),
                'modifier_id' => session()->get('id'),
                'favicon' => $favicon_name
            ]);
        }

        $logo_white = $this->request->getFile('logo_white');
        if ($logo_white != '') {
            $logo_white_name = $logo_white->getRandomName();
            $logo_white->move('assets/images/logo/', $logo_white_name);

            $config->update($id, [
                'modified_at' => date('Y-m-d H:i:s'),
                'modifier_id' => session()->get('id'),
                'logo_white' => $logo_white_name
            ]);
        }

        $logo_black = $this->request->getFile('logo_black');
        if ($logo_black != '') {
            $logo_black_name = $logo_black->getRandomName();
            $logo_black->move('assets/images/logo/', $logo_black_name);

            $config->update($id, [
                'modified_at' => date('Y-m-d H:i:s'),
                'modifier_id' => session()->get('id'),
                'logo_black' => $logo_black_name
            ]);
        }  
        
        $auth_background_image = $this->request->getFile('auth_background_image');
        if ($auth_background_image != '') {
            $auth_background_image_name = $auth_background_image->getRandomName();
            $auth_background_image->move('assets/images/auth/', $auth_background_image_name);

            $config->update($id, [
                'modified_at' => date('Y-m-d H:i:s'),
                'modifier_id' => session()->get('id'),
                'auth_background_image' => $auth_background_image_name
            ]);
        }
        
        $hero_background_image = $this->request->getFile('hero_background_image');
        if ($hero_background_image != '') {
            $hero_background_image_name = $hero_background_image->getRandomName();
            $hero_background_image->move('assets/images/hero/', $hero_background_image_name);

            $config->update($id, [
                'modified_at' => date('Y-m-d H:i:s'),
                'modifier_id' => session()->get('id'),
                'hero_background_image' => $hero_background_image_name
            ]);
        } 
        
        $hero_banner_image = $this->request->getFile('hero_banner_image');
        if ($hero_banner_image != '') {
            $hero_banner_image_name = $hero_banner_image->getRandomName();
            $hero_banner_image->move('assets/images/hero/', $hero_banner_image_name);

            $config->update($id, [
                'modified_at' => date('Y-m-d H:i:s'),
                'modifier_id' => session()->get('id'),
                'hero_banner_image' => $hero_banner_image_name
            ]);
        }  
        
        $user_image_default = $this->request->getFile('user_image_default');
        if ($user_image_default != '') {
            $user_image_default_name = $user_image_default->getRandomName();
            $user_image_default->move('assets/images/users/', $user_image_default_name);

            $config->update($id, [
                'modified_at' => date('Y-m-d H:i:s'),
                'modifier_id' => session()->get('id'),
                'user_image_default' => $user_image_default_name
            ]);
        }          

        $config->update($id, [
            'name'   => $this->request->getPost('name'),
            'author'   => $this->request->getPost('author'),
            'keyword'   => $this->request->getPost('keyword'),
            'description'   => $this->request->getPost('description'),
            'title'   => $this->request->getPost('title'),
            'hero_title'   => $this->request->getPost('hero_title'),
            'hero_subtitle'   => $this->request->getPost('hero_subtitle'),
            'demo_url'   => $this->request->getPost('demo_url'),
            'service_title'   => $this->request->getPost('service_title'),
            'service_subtitle'   => $this->request->getPost('service_subtitle'),
            'pricing_title'   => $this->request->getPost('pricing_title'),
            'pricing_subtitle'   => $this->request->getPost('pricing_subtitle'),
            'pricing_daily_title'   => $this->request->getPost('pricing_daily_title'),
            'pricing_daily_subtitle'   => $this->request->getPost('pricing_daily_subtitle'),
            'pricing_daily_price'   => $this->request->getPost('pricing_daily_price'),
            'pricing_monthly_title'   => $this->request->getPost('pricing_monthly_title'),
            'pricing_monthly_subtitle'   => $this->request->getPost('pricing_monthly_subtitle'),
            'pricing_monthly_price'   => $this->request->getPost('pricing_monthly_price'),
            'pricing_yearly_title'   => $this->request->getPost('pricing_yearly_title'),
            'pricing_yearly_subtitle'   => $this->request->getPost('pricing_yearly_subtitle'),
            'pricing_yearly_price'   => $this->request->getPost('pricing_yearly_price'),
            'subscribe_title'   => $this->request->getPost('subscribe_title'),
            'subscribe_subtitle'   => $this->request->getPost('subscribe_subtitle'),
            'brand_title'   => $this->request->getPost('brand_title'),
            'brand_subtitle'   => $this->request->getPost('brand_subtitle'),
            'copyright'   => $this->request->getPost('copyright'),
            'contact_us_subtitle'   => $this->request->getPost('contact_us_subtitle'),
            'chat_us_description'   => $this->request->getPost('chat_us_description'),
            'email_us_description'   => $this->request->getPost('email_us_description'),
            'call_us_description'   => $this->request->getPost('call_us_description'),
            'whatsapp_url'   => $this->request->getPost('whatsapp_url'),
            'email_address'   => $this->request->getPost('email_address'),
            'phone_number'   => $this->request->getPost('phone_number')
        ]);

        session()->setFlashdata('success', 'Success update data');
        return redirect()->to(base_url('extranet/config'));
    }
}
