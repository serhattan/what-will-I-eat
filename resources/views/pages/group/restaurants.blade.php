@extends('pages.groups')

@section('group-content')
    <div class="col-md-6">
        <div class="card card-default">
            <div class="card-header">{{ $group->getName() }} - @lang('messages.group_restaurants')</div>
            <div class="card-body">
                @if (empty($group->getRestaurants()))
                    <h5>@lang('messages.group_not_have_restaurant')</h5>
                @endif
                @foreach ($group->getRestaurants() as $restaurant)
                    <div class="row">
                        <div class="col-md-12">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                {{$restaurant->getName()}} - {{$restaurant->getAveragePrice()}}@lang('messages.currency_icon')
                            </li>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @include('pages.group.userList')
@endsection