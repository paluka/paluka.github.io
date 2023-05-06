Galleria.loadTheme('../js/galleria/themes/classic/galleria.classic.min.js');
        Galleria.run('#gallery', {

            _toggleInfo: false,
            // search flickr for "galleria"
            flickr: 'user:erikpaluka',

            flickrOptions: {
                //sort: 'interestingness-desc',
                max: 100,
                description: true
            }
        }); 
        

   /* Galleria.run('#gallery');
        var flickr = new Galleria.Flickr();
        flickr.setOptions({
            max: 10,
            description: true
        }).search('erikpaluka', function(data){
            //Galleria.get(0).load( data );
            $('#galleria').galleria({
               dataSource: data
            });
        });*/