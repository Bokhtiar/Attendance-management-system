@extends('layouts.app')
@section('content')

@section('title', 'Attendance')

@section('css')
@endsection


@component('components.brad-crumbs', [
    'title' => 'Attendance information',
])
@endcomponent

<div class="card">
    <div class="card-header">
        <span class="font-weight-bold">Name :</span> {{ $item->user ? $item->user->f_name : '' }}
    </div>
    <div class="card-body">
        <div class="panel-body">
            <div class="content">
                <div class="mapform">
                    <div id="map" style="height:500px; width: 100%;" class="my-3"></div>
                    <script>
                        let map;

                        function initMap() {
                            map = new google.maps.Map(document.getElementById("map"), {
                                center: {
                                    lat: {{ $item->let }},
                                    lng: {{ $item->lon }}
                                },
                                zoom: 8,
                                scrollwheel: true,
                            });
                            const uluru = {
                                lat: {{ $item->let }},
                                lng: {{ $item->lon }}
                            };
                            let marker = new google.maps.Marker({
                                position: uluru,
                                map: map,
                                draggable: true
                            });
                            google.maps.event.addListener(marker, 'position_changed',
                                function() {
                                    let lat = marker.position.lat()
                                    let lng = marker.position.lng()
                                    $('#lat').val(lat)
                                    $('#lng').val(lng)
                                })
                            google.maps.event.addListener(map, 'click',
                                function(event) {
                                    pos = event.latLng
                                    marker.setPosition(pos)
                                })
                        }
                    </script>
                    <script async defer src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap" type="text/javascript"></script>
                </div>
            </div>
        </div>
    </div>
</div>

@section('js')
@endsection
@endsection
