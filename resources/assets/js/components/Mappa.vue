<template>
    <div>
        <label>Autocomplete</label>
        <gmap-autocomplete
               @place_changed="setPlace">
        </gmap-autocomplete>
             <button @click="usePlace">Add</button>
        <Gmap-Map style="width: 570px; height: 270px;" :zoom="6" :center="{lat: 41.1171432, lng: 16.871871499999997}">
          <Gmap-Marker v-for="(marker, index) in markers"
            :key="index"
            :position="marker.position"
            ></Gmap-Marker>
          <Gmap-Marker
            v-if="this.place"
            label="&#x2605;"
            :position="{
              lat: this.place.geometry.location.lat(),
              lng: this.place.geometry.location.lng(),
            }"
            ></Gmap-Marker>
        </Gmap-Map>
      </div>
</template>

<script>
    export default {
      data: function(){
       return { markers: [],
                place:null,
               }
                    },
    methods: {
      setDescription(description) {
        this.description = description;
      },
      setPlace(place) {
        this.place = place
      },
      usePlace(place) {
        if (this.place) {
          this.markers.push({
            position: {
              lat: this.place.geometry.location.lat(),
              lng: this.place.geometry.location.lng(),
            }
          })
          this.place = null;
        }
      }
    }
   }
  
</script>
<style>
    label { display: block; }
</style>