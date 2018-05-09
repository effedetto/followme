<template>
    <div>
        <label>Autocomplete</label>
        <gmap-autocomplete
               @place_changed="setPlace">
        </gmap-autocomplete>
             <button @click="usePlace">Add</button>
        <Gmap-Map style="width: 100%; height: 270px;" :zoom="6" :center="{lat: 41.1171432, lng: 16.871871499999997}">
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
          var lat = this.place.geometry.location.lat();
          var lng = this.place.geometry.location.lng();

          this.markers.push({
            position: {
              lat: this.place.geometry.location.lat(),
              lng: this.place.geometry.location.lng(),
            }
          })
          this.place = null;

          // --- 1: mi creo sulla routes/api.php mi credo una API che accetta in HTTP POST le coordiante OK

          // --- 2: con axios faccio una chiamata verso questa API e gli faccio memorizzare le coordiante su DB
          
          axios.post('/api/save-endpoint', {
              lat:lat ,
              lng:lng
            })
            .then(function (response) {
              console.log(response);

              // --- fai comparire bootbox
              bootbox.confirm({
                  message: "This is a confirm with custom button text and color! Do you like it?",
                  buttons: {
                      confirm: {
                          label: 'Yes',
                          className: 'btn-success'
                      },
                      cancel: {
                          label: 'No',
                          className: 'btn-danger'
                      }
                  },
                  callback: function (result) {
                      console.log('This was logged in the callback: ' + result);
                    if(result)
                    {
                      window.location.href='pagina della chat';
                    }   
                  }
              });
              // if(response.status == 'success') versione alternativa
              if(response.status.indexOf('success')!=-1)
              {
                  // --- faccio comparire bootboxon la richiesta di andare sulla chat
                  // se vuoi andare nella chat allora fai eseguire al browser
                   window.location.href='/chat';
              } 

            })
            .catch(function (error) {
              console.log(error);
            });


          // --- 3: faccio comparire un alert, invitantolo a andare alla pagina della chat; qui puoi effettuare un redirect JS window.location.href='';

        }
      }
    }
   }
  
</script>
<style>
    label { display: block; }
</style>