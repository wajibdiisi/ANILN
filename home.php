<?php 
require('vendor/autoload.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.min.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
  <title>ANILN</title>
</head>

<body>

  

  <div id="App">
    <v-app>
    <v-tabs align-with-title>
          <v-tab>Home</v-tab>
    <v-tab-item>
          <div class="jumbotron jumbotron warna-bg">
    </div>
      <v-container>
        <v-row>
          <v-col cols="12">
      <form @submit.prevent="submit">
      <v-text-field
      label="Search Anime or Light Novel"
      color="primary"
      v-model="input"
      placeholder="Enter Anime or Light Novel Name"
      @keypress.enter="show">
  
       <template v-slot:append>
  
          <v-btn
  color="accent"
  type="submit"
  elevation="2"
>Search</v-btn>
        
      </template>
        
    </v-text-field>
    </form>
    </v-col>
      <v-col cols="12">
        <h3>Search Result</h3>
        <p>Search: <span>
           </span></p>
       <v-col cols="12">
         <v-row>
         <div v-for="(item,index) in anime_data" :key ="index">
           <v-col cols="12"> <v-card
    class="mx-auto"
    max-width="800"
  >
  
    <v-img
class="white--text align--end"
      :src="item.Image"
      height="1142px"
      width = "800px"
    ></v-img>

    <v-card-title>
      {{item.Nama}}
    </v-card-title>

    <v-card-subtitle>
    {{item.Tipe}}
    </v-card-subtitle>
    <v-card-subtitle>
    {{item.Genre}}
    </v-card-subtitle>

    <v-card-actions>
      
      <template v-if ="reveal != item.Nama">
      <v-btn
        color="orange lighten-2"
        text
        @click="reveal = item.Nama"
      >
        Find out More
      </v-btn>

      <v-spacer></v-spacer>
      <v-btn
        icon
        @click="reveal = item.Nama"
      >
        <v-icon>{{ show ? 'mdi-chevron-up' : 'mdi-chevron-down' }}</v-icon>
      </v-btn>
      </template>
      <template v-if="reveal == item.Nama">
      <v-btn
        color="orange lighten-2"
        text
        @click="reveal = false"
      >
        Find out More
      </v-btn>

      <v-spacer></v-spacer>
      <v-btn
        icon
        @click="reveal = false"
      >
        <v-icon>{{ show ? 'mdi-chevron-up' : 'mdi-chevron-down' }}</v-icon>
      </v-btn>
      </template>
    </v-card-actions>

    <v-expand-transition>
      <div v-if="reveal == item.Nama">
        <v-divider></v-divider>
        <v-card-title>
          Synopsis
        </v-card-title>
        <v-card-text>
          {{item.Sinopsis}}
        </v-card-text>
        <v-divider></v-divider>
        <v-card-title>
          Status
        </v-card-title>
        <v-card-text>
          {{item.Status}}
        </v-card-text>
        <v-divider></v-divider>
        <v-card-title>
          Release Date
        </v-card-title>
        <v-card-text>
          {{item.Rilis}}
        </v-card-text>
        <v-divider></v-divider>
        <v-card-title>
          Episode or Chapters
        </v-card-title>
        <v-card-text>
          {{item.JumlahEps}}
        </v-card-text>
      </div>
    </v-expand-transition>
  </v-card></v-col>
         </div>
         </v-row>
       </v-col>
      </v-col>
      
    </v-row>
    <v-btn
          class="load_more"
          text
          large
          @click="listToShow += 9"
          block
        >
          Load More
        </v-btn>
      </v-container>
          </v-tab-item>
          <v-tab>About Us</v-tab>
          <v-tab-item>
          <div class="jumbotron jumbotron warna-bg">
    </div>

    <div class="konten">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">
                                <div class="header-data"> <b>Name : </b></div>
                                <div class="item-data"><b>Ahmad Irfan F</b></div>
                                <div class="item-data"><b>140810180034</b></div>
                                <div class="accordion" id="accordionExample">
                                    <div class="jumbotron jumbotron pic-bg">
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                      
                            <v-img  width="600" height="800" src="asset/1.jpg" class="rounded-lg"></v-img>
                           
                                <div class="header-data"> <b>Job :</b>
                                    <div class="item-data">Back End</div>
                                </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">
                                <div class="header-data"> <b>Name : </b></div>
                                <div class="item-data"><b>Gede Bagus Darmagita</b></div>
                                <div class="item-data"><b>140810180068</b></div>
                                <div class="accordion" id="accordionExample">
                                    <div class="jumbotron jumbotron pic-bg2">
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                        
                            <v-img
                            width="600" height="800" src="asset/2.jpg" class="rounded-lg"></v-img>
                        
                                <div class="header-data"> <b>Job :</b>
                                    <div class="item-data">Front End</div>
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
          </v-tab-item>
        </v-tabs>
    
    </v-app>
  </div>
  <footer>&copy; ANILN Otaku</footer>

</body>
<style>
  body {
    font-family: 'Poppins', sans-serif;
    font-weight: 400;
    color: #515155;
  }

  .my-auto p {
    font-family: 'Poppins', sans-serif;
    font-weight: 700;
    text-align: center;
    font-size: 2rem;
    color: white;
  }

  .warna-bg {
    background: url(asset/ANILN2.png);
    background-size: 100% 100%;
    height: 440px;
  }

  .has-search .form-control {
    padding-left: 2.375rem;
  }

  .has-search .form-control-feedback {
    position: absolute;
    z-index: 2;
    display: block;
    width: 2.375rem;
    height: 2.375rem;
    line-height: 2.375rem;
    text-align: center;
    pointer-events: none;
    color: #aaa;
    margin-top: 5px
  }

  .form-control {
    background-color: white;
    border: 0;
  }

  .layout {
    margin-top: -60px;
  }

  .header-data {
    padding-right: 15px;
    justify-content: space-between;
    font-weight: 500;
    letter-spacing: 2%;
  }

  .item-data {
    padding-right: 15px;
    justify-content: space-between;
    font-weight: 400;
    letter-spacing: 2%;
  }

  .data {
    line-height: 30px;
    padding-bottom: 10px;
  }

  .card {
    margin-bottom: 40px;
    border-radius: 10px;
  }
</style>
<script src="https://cdn.jsdelivr.net/npm/vue@2.x/dist/vue.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.js"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
  var application = new Vue({
    el: '#App',
    vuetify: new Vuetify(),
    data: {
      reveal : [{

      }],
      listToShow : 8,
      input :'',
      anime_data : [],
      query: '',
      nodata: false
    },
    methods: {
      submit(){
        axios.post('process.php',{
          data : this.input
        }).then(response =>{
            this.anime_data = response.data
        })
      }
    },
    created() {
      axios.get('process.php',{
          data : this.input
        }).then(response =>{
            this.anime_data = response.data
        })

    }
  });
</script>
</body>

</html>