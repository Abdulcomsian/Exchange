<?php

use App\Models\Category;
use App\Models\MediaUpload;
use App\Models\StaticOption;
use App\Models\Store;
use Illuminate\Http\Request;

function get_static_option($key)
{
    if (StaticOption::where('option_name', $key)->first()) {
        $return_val = StaticOption::where('option_name', $key)->first();
        return $return_val->option_value;
    }
    return null;
}

function update_static_option($key, $value)
{
    if (!StaticOption::where('option_name', $key)->first()) {
        StaticOption::create([
            'option_name' => $key,
            'option_value' => $value
        ]);
        return true;
    } else {
        StaticOption::where('option_name', $key)->update([
            'option_name' => $key,
            'option_value' => $value
        ]);
        return true;
    }
    return false;
}

function setEnvValue(array $values)
{

    $envFile = app()->environmentFilePath();
    $str = file_get_contents($envFile);

    if (count($values) > 0) {
        foreach ($values as $envKey => $envValue) {

            $str .= "\n"; // In case the searched variable is in the last line without \n
            $keyPosition = strpos($str, "{$envKey}=");
            $endOfLinePosition = strpos($str, "\n", $keyPosition);
            $oldLine = substr($str, $keyPosition, $endOfLinePosition - $keyPosition);

            // If key does not exist, add it
            if (!$keyPosition || !$endOfLinePosition || !$oldLine) {
                $str .= "{$envKey}={$envValue}\n";
            } else {
                $str = str_replace($oldLine, "{$envKey}={$envValue}", $str);
            }
        }
    }

    $str = substr($str, 0, -1);
    if (!file_put_contents($envFile, $str)) return false;
    return true;
}

function render_favicon_by_id($id)
{

    $site_favicon = get_attachment_image_by_id($id, "full", false);
    $output = '';
    if (!empty($site_favicon)) {
        $output .= '<link rel="icon" href="' . $site_favicon['img_url'] . '" type="image/png">';
    }
    return $output;
}

function get_attachment_image_by_id($id, $size = null, $default = false)
{
    $image_details = MediaUpload::find($id);
    $return_val = [];
    $image_url = '';

    if (!empty($id)) {
        switch ($size) {
            case "large":
                if (file_exists('assets/uploads/media-uploader/large-' . $image_details->path)) {
                    $image_url = asset('assets/uploads/media-uploader/large-' . $image_details->path);
                }
                break;
            case "grid":
                if (file_exists('assets/uploads/media-uploader/grid-' . $image_details->path)) {
                    $image_url = asset('assets/uploads/media-uploader/grid-' . $image_details->path);
                }
                break;
            case "thumb":
                if (file_exists('assets/uploads/media-uploader/thumb-' . $image_details->path)) {
                    $image_url = asset('assets/uploads/media-uploader/thumb-' . $image_details->path);
                }
                break;
            default:
                if (is_numeric($id) && file_exists('assets/uploads/media-uploader/' . $image_details->path)) {
                    $image_url = asset('assets/uploads/media-uploader/' . $image_details->path);
                }
                break;
        }
    }

    if (!empty($image_details)) {
        $return_val['image_id'] = $image_details->id;
        $return_val['path'] = $image_details->path;
        $return_val['img_url'] = $image_url;
    } elseif (empty($image_details) && $default) {
        $return_val['img_url'] = asset('assets/uploads/no-image.png');
    }

    return $return_val;
}

function formatBytes($size, $precision = 2)
{
    $base = log($size, 1024);
    $suffixes = array('', 'KB', 'MB', 'GB', 'TB');

    return round(pow(1024, $base - floor($base)), $precision) . ' ' . $suffixes[floor($base)];
}

function filterStores(Request $request)
{
    $query = Store::query();

    if ($request->has('price')) {
        filterByPrice($query, $request->get('price'));
    }

    if ($request->has('revenue')) {
        filterByRevenue($query, $request->get('revenue'));
    }

    if ($request->has('industry')) {
        filterByIndustry($query, $request->get('industry'));
    }

    $stores = $query->where('status', 'approved')->latest()->get();

    return $stores;
}

function filterByPrice($query, $prices)
{
    if (in_array('0-500', $prices)) {
        $query->orWhereBetween('price', [0, 500]);
    }
    if (in_array('500-1000', $prices)) {
        $query->orWhereBetween('price', [500, 1000]);
    }
    if (in_array('1000-2500', $prices)) {
        $query->orWhereBetween('price', [1000, 2500]);
    }
    if (in_array('2500-5000', $prices)) {
        $query->orWhereBetween('price', [2500, 5000]);
    }
    if (in_array('5000-10000', $prices)) {
        $query->orWhereBetween('price', [5000, 10000]);
    }
    if (in_array('10000-25000', $prices)) {
        $query->orWhereBetween('price', [10000, 25000]);
    }
    if (in_array('25000', $revenue)) {
        $query->orWhere('price', '>', 25000);
    }
}

function filterByRevenue($query, $revenue)
{
    if (in_array('0-500', $revenue)) {
        $query->orWhereBetween('revenue', [0, 500]);
    }
    if (in_array('500-2500', $revenue)) {
        $query->orWhereBetween('revenue', [500, 2500]);
    }
    if (in_array('2500-15000', $revenue)) {
        $query->orWhereBetween('revenue', [2500, 15000]);
    }
    if (in_array('15000', $revenue)) {
        $query->orWhere('revenue', '>', 15000);
    }
}

function filterByIndustry($query,$industries)
{
    $categories = Category::all();
        foreach ($categories as $cateogry) {
            if (in_array($cateogry->id, $industries)) {
                $query->orWhere('category_id', $cateogry->id);
            }
    }
}

function numberOfRecordsByPriceRange($startPrice, $endPrice) {
    if($startPrice == 25000){
        return Store::where('price', '>', 25000)->where('status','approved')->count();
    } else {
        return Store::whereBetween('price', [$startPrice, $endPrice])->where('status', 'approved')->count();
    }
}

function numberOfRecordsByRevenueRange($startPrice, $endPrice) {
    if($startPrice == 15000){
        return Store::where('revenue', '>', 15000)->where('status','approved')->count();
    } else{
        return Store::whereBetween('revenue', [$startPrice, $endPrice])->where('status','approved')->count();
    }
}

function numberOfRecordsByCategory($category_id) {
        return Store::where('category_id', $category_id)->where('status','approved')->count();
}

function revenueRange() {
    $revenueRanges = [
        [
            'value' => '0-500',
            'label' => '$0 - $500',
            'min' => 0,
            'max' => 500
        ],
        [
            'value' => '500-2500',
            'label' => '$500 - $2,500',
            'min' => 500,
            'max' => 2500
        ],
        [
            'value' => '2500-15000',
            'label' => '$2,500 - $15,000',
            'min' => 2500,
            'max' => 15000
        ],
        [
            'value' => '15000',
            'label' => '$15,000+',
            'min' => 15000,
            'max' => null
        ],
        // Add more ranges as needed
    ];

    return $revenueRanges;
}

function priceRange(){
    $priceRanges = [
        [
            'value' => '0-500',
            'label' => '$0 - $500',
            'min' => 0,
            'max' => 500
        ],
        [
            'value' => '500-1000',
            'label' => '$500 - $1,000',
            'min' => 500,
            'max' => 1000
        ],
        [
            'value' => '1000-2500',
            'label' => '$1,000 - $2,500',
            'min' => 1000,
            'max' => 2500
        ],
        [
            'value' => '2500-5000',
            'label' => '$2,500 - $5,000',
            'min' => 2500,
            'max' => 5000
        ],
        [
            'value' => '5000-10000',
            'label' => '$5,000 - $10,000',
            'min' => 5000,
            'max' => 10000
        ],
        [
            'value' => '10000-25000',
            'label' => '$10,000 - $25,000',
            'min' => 10000,
            'max' => 25000
        ],
        [
            'value' => '25000',
            'label' => '$25,000+',
            'min' => 25000,
            'max' => null
        ],
        // Add more ranges as needed
    ];

    return $priceRanges;

}

function isChecked($value, $array=null)
{
    return (!is_null($array) && in_array($value, $array)) ? 'checked' : '';
}


function check_role($roles)
{
    return function ($request) use ($roles) {
        if (!$request->user()->hasRole($roles)) {
            return redirect()->route('home');
        }
    };
}
