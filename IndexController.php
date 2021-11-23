$view =  new DBViewsHelper();
        $result = $view->SetView('amazon_enteries_view')->limit(10)->get();
        dd($result);