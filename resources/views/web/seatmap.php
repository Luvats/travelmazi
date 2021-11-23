@extends('layouts.web')
@section('content')
<!-- ================================
    START SEATMAP AREA
================================= -->
<section class="seatmap-area">
    <div class="plane">
      <div class="cockpit">
        <h1>koltuk seçiniz</h1>
      </div>

      <div class="seat-map" seat-row="29" seats-per-row="7">
        <div class="seat-row seat-row--1 seat-row--exit">
          <div class="seat">
              <input type="checkbox" id="1A" />
              <label for="1A">1A</label>
          </div>
          <div class="seat taken">
              <input type="checkbox" id="1B" disabled />
              <label for="1B">1B</label>
          </div>
          <div class="seat">
              <input type="checkbox" id="1C" />
              <label for="1C">1C</label>
          </div>
          <div class="seat empty">

          </div>
          <div class="seat">
              <input type="checkbox" id="1D" />
              <label for="1D">1D</label>
          </div>
          <div class="seat">
              <input type="checkbox" id="1E" />
              <label for="1E">1E</label>
          </div>
          <div class="seat">
              <input type="checkbox" id="1F" />
              <label for="1F">1F</label>
          </div>
        </div>
        <div class="seat-row seat-row--2">
          <div class="seat">
              <input type="checkbox" id="2A" />
              <label for="2A">2A</label>
          </div>
          <div class="seat">
              <input type="checkbox" id="2B" />
              <label for="2B">2B</label>
          </div>
          <div class="seat">
              <input type="checkbox" id="2C" />
              <label for="2C">2C</label>
          </div>
          <div class="seat empty">

          </div>
          <div class="seat">
              <input type="checkbox" id="2D" />
              <label for="2D">2D</label>
          </div>
          <div class="seat">
              <input type="checkbox" id="2E" />
              <label for="2E">2E</label>
          </div>
          <div class="seat">
              <input type="checkbox" id="2F" />
              <label for="2F">2F</label>
          </div>
        </div>
        <div class="seat-row seat-row--3">
          <div class="seat">
              <input type="checkbox" id="3A" />
              <label for="3A">3A</label>
          </div>
          <div class="seat">
              <input type="checkbox" id="3B" />
              <label for="3B">3B</label>
          </div>
          <div class="seat">
              <input type="checkbox" id="3C" />
              <label for="3C">3C</label>
          </div>
          <div class="seat empty">

          </div>
          <div class="seat">
              <input type="checkbox" id="3D" />
              <label for="3D">3D</label>
          </div>
          <div class="seat">
              <input type="checkbox" id="3E" />
              <label for="3E">3E</label>
          </div>
          <div class="seat">
              <input type="checkbox" id="3F" />
              <label for="3F">3F</label>
          </div>
        </div>
        <div class="seat-row seat-row--4">
          <div class="seat">
              <input type="checkbox" id="4A" />
              <label for="4A">4A</label>
          </div>
          <div class="seat">
              <input type="checkbox" id="4B" />
              <label for="4B">4B</label>
          </div>
          <div class="seat">
              <input type="checkbox" id="4C" />
              <label for="4C">4C</label>
          </div>
          <div class="seat empty">

          </div>
          <div class="seat">
              <input type="checkbox" id="4D" />
              <label for="4D">4D</label>
          </div>
          <div class="seat">
              <input type="checkbox" id="4E" />
              <label for="4E">4E</label>
          </div>
          <div class="seat">
              <input type="checkbox" id="3F" />
              <label for="4F">4F</label>
          </div>
        </div>
        <div class="seat-row seat-row--5 seat-row--large seat-row--wings">
          <div class="seat">
              <input type="checkbox" id="5A" />
              <label for="5A">5A</label>
          </div>
          <div class="seat">
              <input type="checkbox" id="5B" />
              <label for="5B">5B</label>
          </div>
          <div class="seat">
              <input type="checkbox" id="5C" />
              <label for="5C">5C</label>
          </div>
          <div class="seat empty">

          </div>
          <div class="seat">
              <input type="checkbox" id="5D" />
              <label for="5D">5D</label>
          </div>
          <div class="seat">
              <input type="checkbox" id="5E" />
              <label for="5E">5E</label>
          </div>
          <div class="seat">
              <input type="checkbox" id="5F" />
              <label for="5F">5F</label>
          </div>
        </div>
      </div>
    </div>
</section>










@endsection