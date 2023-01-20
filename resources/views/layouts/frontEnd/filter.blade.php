@php $price1 = $price2 = $price3 = $price4 = $price5 = $price6 = '' @endphp
@if(request()->get('price'))
    @if(in_array('0-500', request()->input('price')))
        @php $price1 = 'checked' @endphp
    @endif
    @if(in_array('500-1000', request()->input('price')))
        @php $price2 = 'checked' @endphp
    @endif
    @if(in_array('1000-2500', request()->input('price')))
        @php $price3 = 'checked' @endphp
    @endif
    @if(in_array('2500-5000', request()->input('price')))
        @php $price4 = 'checked' @endphp
    @endif
    @if(in_array('5000-10000', request()->input('price')))
        @php $price5 = 'checked' @endphp
    @endif
    @if(in_array('10000-25000', request()->input('price')))
        @php $price6 = 'checked' @endphp
    @endif
@endif
