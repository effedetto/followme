  <!-- in questo modo si passa alla classe palce l'oggetto placeInput.place e si avvalora nel data()-->
<template>
    <div>
        <place-input
                    :place.sync="placeInput.place"
                    :types.sync="placeInput.types"
                    :component-restrictions.sync="placeInput.restrictions"
                    class='form-control'
            ></place-input>
          <!--   <autocomplete
                    :place.sync=""
                    class='form-control'
                    ></autocomplete> -->
        <pre>{{ placeInput.place | json }}</pre>
     </div>
</template>
<script>
    import { Autocomplete,PlaceInput, Map } from 'vue2-google-maps'
    export default {
       data() {
            return {
                placeInput: {
                    place: {
                        name: ''
                    },
                    types: []
                    // restrictions: {'country': 'usa'}
                }
            }
        },
        components: {
            PlaceInput
        }
    }
</script>
<style>
    label { display: block; }
</style>