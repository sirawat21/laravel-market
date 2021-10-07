@extends('layouts.main') 
@section('title', 'Home') 
@section('content') 
<style>
  .card {
    margin-top: 10px;
    margin-right: 10px;
    margin-bottom: 10px;
  }
</style>
<h2>
  <span class="fas fa-car"></span> Market
</h2>
<div class="row"> 
    @foreach($vehicles as $vehicle) 
    @php 
        $vehicleCardTitle = $vehicle->make.' '.$vehicle->model.' '.$vehicle->year; 
    @endphp 
    <div class="card" style="width: 250px;">
    <a type="button" data-toggle="modal" data-target="#{{ $vehicle->rego }}" href="#">
      <img class="card-img-top" src="{{ asset('images/cars/'.$vehicle->img) }}" alt="{{ $vehicleCardTitle }}">
    </a>
    <div class="card-body">
      <h5 class="card-title" style="color:#DD4124;">
        {{ $vehicle->make.' '.$vehicle->model.' '.$vehicle->year }}
      </h5>
      <div class="card-text">
        <table>
          <tr>
            <td>
              <b>Make: </b>
            </td>
            <td>{{ $vehicle->make }}</td>
          </tr>
          <tr>
            <td>
              <b>Model: </b>
            </td>
            <td>{{ $vehicle->model }}</td>
          </tr>
          <tr>
            <td>
              <b>Year: </b>
            </td>
            <td>{{ $vehicle->year }}</td>
          </tr>
          <tr>
            <td>
              <b>Colour: </b>
            </td>
            <td>{{ $vehicle->colour }}</td>
          </tr>
          <tr>
            <td>
              <b>REGO: </b>
            </td>
            <td>{{ strtoupper($vehicle->rego) }}</td>
          </tr>
          <tr>
            <td>
              <b>Odometer: </b>
            </td>
            <td>{{ $vehicle->odometer }} Km</td>
          </tr>
        </table>
        <!-- Modal -->
        <div class="modal fade" id="{{ $vehicle->rego }}" tabindex="-1" role="dialog" aria-labelledby="{{ $vehicle->rego }}" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="{{ $vehicleCardTitle }}" style="color:#DD4124;">
                  {{ $vehicleCardTitle }}
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <img class="card-img-top" src="{{ asset('images/cars/'.$vehicle->img) }}" alt="{{ $vehicleCardTitle }}">
                <table>
                  <tr>
                    <td>
                      <b>Make: </b>
                    </td>
                    <td>{{ $vehicle->make }}</td>
                  </tr>
                  <tr>
                    <td>
                      <b>Model: </b>
                    </td>
                    <td>{{ $vehicle->model }}</td>
                  </tr>
                  <tr>
                    <td>
                      <b>Year: </b>
                    </td>
                    <td>{{ $vehicle->year }}</td>
                  </tr>
                  <tr>
                    <td>
                      <b>Colour: </b>
                    </td>
                    <td>{{ $vehicle->colour }}</td>
                  </tr>
                  <tr>
                    <td>
                      <b>REGO: </b>
                    </td>
                    <td>{{ strtoupper($vehicle->rego) }}</td>
                  </tr>
                  <tr>
                    <td>
                      <b>VIN: </b>
                    </td>
                    <td>{{ strtoupper($vehicle->vin) }}</td>
                  </tr>
                  <tr>
                    <td>
                      <b>Odometer: </b>
                    </td>
                    <td>{{ $vehicle->odometer }} Km</td>
                  </tr>
                </table>
                <b>Description:</b>
                {{ $vehicle->detail }}
              </div>
                <br>
                <br>
            </div>
            <!-- End Modal -->
          </div>
        </div>
      </div>
    </div>
  </div> 
  @endforeach 
</div> 
@endsection