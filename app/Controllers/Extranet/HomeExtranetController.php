<?php

namespace App\Controllers\Extranet;

use App\Models\ConfigModel;
use App\Models\AppTypeModel;
use App\Models\AppModel;
use App\Models\ClientModel;
use App\Models\FeatureModel;

class HomeExtranetController extends BaseController
{
    public function index()
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->get()->getFirstRow();
        // app type
        $app_type = new AppTypeModel();
        $data['app_type_total'] = $app_type->countAll();
        // app
        $app = new AppModel();
        $data['app_total'] = $app->countAll();
        // client
        $client = new ClientModel();
        $data['client_total'] = $client->countAll();
        // feature
        $feature = new FeatureModel();
        $data['feature_total'] = $feature->countAll();

        return view('extranet/home/index', $data);
    }
}
