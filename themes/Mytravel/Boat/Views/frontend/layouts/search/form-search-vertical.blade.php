<div class="sidebar border border-color-1 rounded-xs">
    <div class="p-4 mb-1">
        <form action="{{ route("boat.search") }}" class="bravo_form" method="get">
            @php $search_fields = setting_item_array('boat_search_fields');
            $search_fields = array_values(\Illuminate\Support\Arr::sort($search_fields, function ($value) {
                return $value['position'] ?? 0;
            }));
            @endphp
            @if(!empty($search_fields))
                @foreach($search_fields as $field)
                    @php $field['title'] = $field['title_'.app()->getLocale()] ?? $field['title'] ?? "" @endphp
                    @switch($field['field'])
                        @case ('service_name')
                            @include('Boat::frontend.layouts.search.fields.service_name')
                        @break
                        @case ('location')
                            @include('Boat::frontend.layouts.search.fields.location')
                        @break
                        @case ('date')
                            @include('Boat::frontend.layouts.search.fields.date')
                        @break
                        @case ('attr')
                            @include('Boat::frontend.layouts.search.fields.attr')
                        @break
                    @endswitch
                @endforeach
            @endif
        </form>
    </div>
</div>