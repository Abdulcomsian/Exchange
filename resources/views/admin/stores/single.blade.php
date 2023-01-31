<div class="card-datatable table-responsive">
    <table class="datatables-demo table table-striped table-bordered">
        <tbody>
        <tr>
            <th colspan="2" class="text-center">
                Store Detail
            </th>
        </tr>
        <tr>
            <th>Store Name</th>
            <td>{{ $store->store_name }}</td>
        </tr>
        <tr>
            <th>Store Link</th>
            <td>{{ $store->store_address }}</td>
        </tr>
        <th colspan="2" class="text-center">
            Business Story
        </th>
        <tr>
            <th>Business Story</th>
            <td>{{ strip_tags($store->business_story) }}</td>
        </tr>
        <tr>
            <th>Description</th>
            <td>{{ strip_tags($store->description) }}</td>
        </tr>
        <th colspan="2" class="text-center">
            Traffiic and Performance
        </th>
        <tr>
            <th>Avg. revenue /month</th>
            <td>
                ${{ $store->revenue }}
                @if($store->revenue_status == 'verified')
                    <span class="badge badge-success">Verified</span>
                @else
                    <span class="badge badge-danger">Unverified</span>
                @endif
                <a href="{{route('change_revenue_status', ['id' => $store->id, 'status' => 'verified'])}}" title="unverify revenue" class="btn btn-success btn-sm float-right mx-1">
                    <i class="fa fa-check"></i>
                </a>
                <a href="{{route('change_revenue_status', ['id' => $store->id, 'status' => 'unverified'])}}" title="verify revenue" class="btn btn-danger btn-sm float-right">
                    <i class="fa fa-times"></i>
                </a>
            </td>
        </tr>
        <tr>
            <th>Avg. sessions /month</th>
            <td>
               ${{ $store->session }}
                @if($store->session_status == 'verified')
                    <span class="badge badge-success">Verified</span>
                @else
                    <span class="badge badge-danger">Unverified</span>
                @endif
                <a href="{{route('change_session_status', ['id' => $store->id, 'status' => 'verified'])}}" title="unverify revenue" class="btn btn-success btn-sm float-right mx-1">
                    <i class="fa fa-check"></i>
                </a>
                <a href="{{route('change_session_status', ['id' => $store->id, 'status' => 'unverified'])}}" title="verify revenue" class="btn btn-danger btn-sm float-right">
                    <i class="fa fa-times"></i>
                </a>
            </td>
        </tr>
        <tr>
            <th>Avg. profit /month</th>
            <td>{{ $store->profit }}</td>
        </tr>
        <tr>
            <th>Inventory Value</th>
            <td>{{ $store->inventory_value }}</td>
        </tr>
        <tr>
            <th>Other Detail</th>
            <td>{{ $store->inventory_value }}</td>
        </tr>
        <th colspan="2" class="text-center">
            Expenses
        </th>
        <tr>
            <th>Shopify Plan</th>
            <td>{{ $store->shopify_plan }}</td>
        </tr>
        <tr>
            <th>Inventory Warehouse</th>
            <td>{{ $store->inventory_warehouse }}</td>
        </tr>
        <tr>
            <th>Domain</th>
            <td>{{ $store->domain }}</td>
        </tr>
        <th colspan="2" class="text-center">
            Sales Include
        </th>
        <tr>
            <th>Sale Include 1</th>
            <td>{{ $store->sale_include_1 }}</td>
        </tr>
        <tr>
            <th>Sale Include 2</th>
            <td>{{ $store->sale_include_2 }}</td>
        </tr>
        <tr>
            <th>Sale Include 3</th>
            <td>{{ $store->sale_include_3 }}</td>
        </tr>
        <tr>
            <th>Sale Include 4</th>
            <td>{{ $store->sale_include_4 }}</td>
        </tr>
        <tr>
            <th>Category</th>
            <td>{{ $store->category->name ?? '' }}</td>
        </tr>
        <tr>
            <th>Created at</th>
            <td>{{ $store->created_at }}</td>
        </tr>

        </tbody>
    </table>
</div>
