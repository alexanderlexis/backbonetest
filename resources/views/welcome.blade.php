<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <script src="{{URL::asset('/includes/jquery.js')}}"></script>
        <script src="{{URL::asset('/includes/underscore.js')}}"></script>
        <script src="{{URL::asset('/includes/backbone.js')}}"></script>
        <script>
            function proberen(){
                var Song =  Backbone.Model.extend({
                    
                initialize: function(henkie) {
                        console.log("Song gemaakt"+henkie);
                    },
                promptColor: function(kleurtje) {
//                        var cssColor = prompt("Please enter a CSS color:");
                        this.set({color: kleurtje});
                        alert (this.attributes.color);
//                        this.set(color = (kleurtje));
                    }
                });
                var song = new Song("tiesto");
                var song2 = new Song("Harry");
                var song3 = new Song("Piet");
                var song4 = new Song('poep');
                
                song4.promptColor('purple');
                console.log(song4);
            }
            function proberen2(){
                var Song =  Backbone.Model.extend({

                    initialize: function(henkie) {
                            console.log("Song gemaakt"+henkie);
                        },
                    promptColor: function(kleurtje) {
    //                        var cssColor = prompt("Please enter a CSS color:");
                            this.set({color: kleurtje});
                            alert (this.attributes.color);
    //                        this.set(color = (kleurtje));
                        }
                    });
                    var song = new Song("tiesto");
                    var song2 = new Song("Harry");
                    var song3 = new Song("Piet");
                    var song4 = new Song('poep');

                    song4.promptColor('purple');
                    console.log(song4); 

        
                    song.on({
                           "change:color": song.promptColor('red'),
                           "change:color": song.promptColor('blue'),
                           
                           
                       });
                       
                    song.off(); 
            }
            
            function gebouwAanmaken(){
                
                var gebouw = {
                    naam : "lelijk gebouw",
                    hoogte : "10 meter",
                    kleur : "rood"
                    
                    
                };
                
                var checkGebouw = Backbone.Model.extend({
                    validate: function(attrs) {
                      if (naam !== "mooi gebouw") {
                        alert('het gebouw is lelijk');
                      }
                    }
                });
            }
        </script>
        <style>
            html, body {
                height: 100%;
            }
            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }
            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }
            .content {
                text-align: center;
                display: inline-block;
            }
            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <input type="button" value="start proberen" onclick="proberen()">
                <input type="button" value="start proberen2" onclick="proberen2()">
                <input type="button" value="gebouw aanmaken" onclick="gebouwAanmaken()">
                <div class="title" id="iets">Laravel 5</div>
            </div>
        </div>
    </body>
</html>
