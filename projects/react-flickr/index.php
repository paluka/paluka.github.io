        <?php include( '../../includes/meta.php'); ?>

        <title>Flickr Photo App - Erik Paluka</title>
        <meta name="description" content="Flickr Photo Web App Using ReactJ">
        <link rel="stylesheet" href="../../css/style.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="./css/main.css" type="text/css" media="screen" />
    </head>

    <body>
        <div class="container">
            <?php include( '../../includes/header.php'); ?>
            <div class="researchTitle">
            <h1>Flickr Photo Web App Using ReactJS</h1>
                April 2016</div>
            <div id="content"></div>`

    <script src="./js/react/react.js"></script>
    <script src="./js/react/react-dom.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.6.16/browser.js"></script>

    <script type="text/babel">

    var largerImg = "b", // large, 1024 on longest side
        smallerImg = "q", // large square 150x150
        searchMethod = "flickr.photos.search",
        infoMethod = "flickr.photos.getInfo",
        apiKey = "525eaeb947b97a583028ebc03ead2826",
        format = "json",
        initialSearch = "cats",
        startPage = 1,
        perPage = 16,
        searchURL = "https://api.flickr.com/services/rest/?nojsoncallback=1&per_page=" + perPage + "&api_key=" + apiKey + "&format=" + format + "&method=" + searchMethod,
        infoURL = "https://api.flickr.com/services/rest/?nojsoncallback=1&api_key=" + apiKey + "&format=" + format + "&method=" + infoMethod,
        sortDatePostedAsc = "date-posted-asc",
        sortDatePostedDesc = "date-posted-desc",
        sortDateTakenAsc = "date-taken-asc",
        sortDateTakenDesc = "date-taken-desc";

    // PhotoBox is the root React element
    var PhotoBox = React.createClass({

      getInitialState: function() {
        return {photos: [], page: startPage, loadMore: true, search: initialSearch, showViewer: false, scrollPos: 0, leftEnabled: true, rightEnabled: true};
      },

      // Query flickr using default/initial search terms
      componentDidMount: function() {
        //window.addEventListener('scroll', this.handleScroll);
        this.loadPhotos();
      },

      /*componentWillUnmount: function() {
        window.removeEventListener('scroll', this.handleScroll);
      },*/

      // Separate function for making multiple AJAX requests for photo information
      ajaxInfo: function (i, component, photos, xhr) {

        var url = infoURL + "&photo_id=" + photos[i].id;
            xhr[i] = new XMLHttpRequest();

        xhr[i].onreadystatechange = function() {

          if (xhr[i].readyState == 4 && xhr[i].status == 200) {

            var parsedData = JSON.parse(xhr[i].responseText);
            // convert UNIX timestamp in seconds to milliseconds for date function
            var date = new Date(parsedData.photo.dates.posted * 1000);

              photos[i].dateUploaded = {
                unix: parsedData.photo.dates.posted,
                dateObj: date
            };

            photos[i].dateTaken = parsedData.photo.dates.taken;
            photos[i].user = parsedData.photo.owner.username;
            photos[i].title = parsedData.photo.title._content;

            component.setState({photos: photos});
          }
        };

        xhr[i].open("GET", url, true);
        xhr[i].send();
      },

      // Grab information about each photo with AJAX
      getPhotosInfo: function(photos, length) {

        var xhr = [];

        for (var i = length; i < photos.length; i++) {
            this.ajaxInfo(i, this, photos, xhr);
        }

      },

      // Query flickr for photos that match the search terms
      loadPhotos: function() {

        console.log("Searching for \"" + this.state.search + "\" on page " + this.state.page);

        var xhttp = new XMLHttpRequest(),
            url = searchURL + "&text=" + this.state.search + "&page=" + this.state.page,// + "&sort=" + currentSort,
            pArrayLength = this.state.photos.length;

        if (this.state.page == "1") {
           pArrayLength = 0;
        }

        xhttp.onreadystatechange = function() {

          if (xhttp.readyState == 4 && xhttp.status == 200) {
            var response = [],
                parsedData = JSON.parse(xhttp.responseText);

            // Attach previous photos to the photos response array
            if (this.state.page != "1") {
              response = this.state.photos;
            }

            for (var i = 0; i < parsedData.photos.photo.length; i++) {

              var photo = parsedData.photos.photo[i];
              response.push(photo);
            }

            this.getPhotosInfo(response, pArrayLength);
            this.setState({photos: response, loadMore: true});
          }
        }.bind(this);

        xhttp.open("GET", url, true);
        xhttp.send();
      },

      // Search for photos using flickr
      handlePhotoSearch: function(terms) {
        this.setState({page: 1, search: terms, photos: []}, function() {
          this.loadPhotos();
        });
      },

      // Scrolling to bottom of page loads more photos
      // Disabled since "More Photos" button accomplishes the same thing
      // To enable scrolling, need to add event listener to PhotoBox
      /*handleScroll: function(event) {

        if (!this.state.showViewer && this.state.loadMore && (window.innerHeight + window.scrollY) >= document.body.offsetHeight) {

          var page = parseInt(this.state.page) + 1;
          this.setState({loadMore: false, page: page});
          this.loadPhotos();

        }
      },*/

      // Show ImageViewer for single large photo
      handleShowViewer: function(imgURL, vID) {

        var doc = document.documentElement,
            top = (window.pageYOffset || doc.scrollTop)  - (doc.clientTop || 0);

        if (vID == 0) {
            this.setState({leftEnabled: false});
        }

        if (vID == this.state.photos.length - 1) {
            this.setState({rightEnabled: false});
        }

        initialSearch = this.state.search;
        this.setState({imgURL: imgURL, showViewer: true, vID: vID, scrollPos: top});
      },

      // Grab previous photo for ImagerViewer
      handleViewerLeft: function() {

        if (this.state.vID > 0) {
            var vID = parseInt(this.state.vID) - 1,
                viewer = document.getElementsByClassName("viewerImg")[0],
                photo = this.state.photos[vID],
                imageURL = "https://farm" + photo.farm + ".staticflickr.com/" + photo.server + "/" + photo.id + "_" + photo.secret + "_" + largerImg + ".jpg";

            this.setState({imgURL: imageURL, vID: vID});

            if (vID == 0) {
                this.setState({leftEnabled: false})

            } else if (!this.state.rightEnabled && vID < this.state.photos.length - 1) {
                this.setState({rightEnabled: true})
            }
        }
      },

      // Grab next photo for ImagerViewer
      handleViewerRight: function() {
          if (this.state.vID < this.state.photos.length - 1) {
            var vID = parseInt(this.state.vID) + 1,
                viewer = document.getElementsByClassName("viewerImg")[0],
                photo = this.state.photos[vID],
                imageURL = "https://farm" + photo.farm + ".staticflickr.com/" + photo.server + "/" + photo.id + "_" + photo.secret + "_" + largerImg + ".jpg";

            this.setState({imgURL: imageURL, vID: vID});

            if (vID == this.state.photos.length - 1) {
                this.setState({rightEnabled: false})

            } else if (!this.state.leftEnabled && vID > 0) {
                this.setState({leftEnabled: true})
            }
        }
      },

      // Go back to PhotoList from ImagerViewer
      handleBackButton: function() {
        this.setState({showViewer: false, leftEnabled: true, rightEnabled: true});
      },

      // Sort images by date taken or date uploaded
      handleSort: function(sortType){

        var photos = this.state.photos;

        if (sortType == sortDatePostedDesc) {

            photos.sort(function(a, b) {

               if (a.dateUploaded.unix < b.dateUploaded.unix) {
                   return 1;
               } else if (a.dateUploaded.unix > b.dateUploaded.unix) {
                   return -1;
               }
                return 0;
            });

        } else if (sortType == sortDatePostedAsc) {

            photos.sort(function(a, b) {

               if (a.dateUploaded.unix > b.dateUploaded.unix) {
                   return 1;
               } else if (a.dateUploaded.unix < b.dateUploaded.unix) {
                   return -1;
               }
                return 0;
            });

        } else if (sortType == sortDateTakenDesc) {

            photos.sort(function(a, b) {

               if (a.dateTaken < b.dateTaken) {
                   return 1;
               } else if (a.dateTaken > b.dateTaken) {
                   return -1;
               }
                return 0;
            });

        } else if (sortType == sortDateTakenAsc) {

            photos.sort(function(a, b) {

               if (a.dateTaken > b.dateTaken) {
                   return 1;
               } else if (a.dateTaken < b.dateTaken) {
                   return -1;
               }
                return 0;
            });

        }

        this.setState({photos: photos});
      },

      // Grabs more photos using same search terms
      handleMorePhotos: function() {

        if (!this.state.showViewer && this.state.loadMore) {

          var page = parseInt(this.state.page) + 1;
          this.setState({loadMore: false, page: page}, function() {
            this.loadPhotos();
          });

        }
      },

      render: function() {
        return (
          <div className="photoBox">
            {this.state.showViewer ? <ImageViewer imgURL={this.state.imgURL} vPhoto={this.state.photos[this.state.vID]} leftButton={this.state.leftEnabled} rightButton={this.state.rightEnabled} onLeftClick={this.handleViewerLeft} onRightClick={this.handleViewerRight} onBackButton={this.handleBackButton}/> : null}

            {this.state.showViewer ? null : <SearchForm onSearch={this.handlePhotoSearch} onSort={this.handleSort} />}
            {this.state.showViewer ? null : <PhotoList photos={this.state.photos} showViewer={this.handleShowViewer} scrollPos={this.state.scrollPos} />}
            {this.state.showViewer ? null : <MorePhotos onMorePhotos={this.handleMorePhotos} />}
          </div>
        );
      }
    });

    // Button to grab more photos
    var MorePhotos = React.createClass({

        handleMoreClick: function(event) {
            event.preventDefault();
            this.props.onMorePhotos();
        },

        render: function() {
            return (
                <input className="morePhotos" onClick={this.handleMoreClick} value="More Photos" type="submit" />
            );
        }
    });

    // View for single large image
    var ImageViewer = React.createClass({

      // To go back to PhotoList
      handleBackButton: function(event) {
        this.props.onBackButton();
      },

      // To view previous photo
      handleLeftClick: function(event) {
        this.props.onLeftClick();
      },

      // To view next photo
      handleRightClick: function(event) {
        this.props.onRightClick();
      },

      // Render the photo upload date
      renderDate: function() {
        var date = this.props.vPhoto.dateUploaded;

        if (date) {
            return <span id="uploadDate">Uploaded on {date.dateObj.toDateString()} at {date.dateObj.toLocaleTimeString()}</span>;
        }
      },

      render: function() {
        return (
          <div className="viewerOuter">
            <div className="viewerMiddle">
              <div className="viewerInner">
                <div className="viewerInfo">{this.props.vPhoto.title} <br/> By {this.props.vPhoto.user} <br/> {this.renderDate()}</div>
                {this.props.leftButton ? <div className="leftArrow" onClick={this.handleLeftClick} /> : null}
                <img src={this.props.imgURL} className="viewerImg" />
                {this.props.rightButton ? <div className="rightArrow" onClick={this.handleRightClick} /> : null}
                <div className="backButton" onClick={this.handleBackButton}>Back To Photos</div>
              </div>
            </div>
          </div>
        );
      }
    });

    // Search form, search button, and sort dropdown elements
    var SearchForm = React.createClass({

      getInitialState: function() {
        return {search: initialSearch};
      },

      // Update search terms on text change
      handleTextChange: function(event) {
        this.setState({search: event.target.value});
      },

      // Search button
      handleSearch: function(event) {
        event.preventDefault();
        var terms = this.state.search.trim();

        if (!terms) {
          return;
        }
        this.props.onSearch(terms);
      },

      // Sort dropdown element
      handleSortChange: function(event) {

        var dropDown = document.getElementById("sortDropdown"),
            value = dropDown.value;

        dropDown.options.selectedIndex = 0;

        if (value == sortDatePostedDesc) {
            //currentSort = sortDatePostedDesc;
            this.props.onSort(sortDatePostedDesc);

        } else if (value == sortDatePostedAsc) {
            //currentSort = sortDatePostedAsc;
            this.props.onSort(sortDatePostedAsc);

        } else if (value == sortDateTakenDesc) {
            //currentSort = sortDateTakenDesc;
            this.props.onSort(sortDateTakenDesc);

        } else if (value == sortDateTakenAsc) {
            //currentSort = sortDateTakenAsc;
            this.props.onSort(sortDateTakenAsc);
        }
      },

      render: function() {
        return (
          <form className="searchForm" onSubmit={this.handleSearch}>
            <div className="searchIcon" />
            <input className="searchBox" type="text" value={this.state.search} onChange={this.handleTextChange} />
            <input className="searchButton" type="submit" value="Search" />
            <select onChange={this.handleSortChange} id="sortDropdown">
                <option value="default">Sort By Date</option>
                <option value={sortDatePostedDesc}>Sort Date Uploaded Descending</option>
                <option value={sortDatePostedAsc}>Sort Date Uploaded Ascending</option>
                <option value={sortDateTakenDesc}>Sort Date Taken Descending</option>
                <option value={sortDateTakenAsc}>Sort Date Taken Ascending</option>
            </select>
          </form>
        );
      }
    });

    // List of photos
    var PhotoList = React.createClass({

      // Set the scroll bar to its previous position
      // This is needed since viewing the ImageViewer removes the PhotoList
      componentDidMount: function() {
        window.scrollTo(0, this.props.scrollPos);
      },

      // Gets each photo's URL to pass to the Photo component
      render: function() {
        var viewerFunction = this.props.showViewer,
            photoArray = this.props.photos,

            photoNodes = this.props.photos.map(function(photo, index) {

              var imageURL = "https://farm" + photo.farm + ".staticflickr.com/" + photo.server + "/" + photo.id + "_" + photo.secret + "_";
              photoArray[index].baseURL = imageURL;

              return (
                <Photo onClick={viewerFunction} photoObj={photo} key={index} id={index} />
              );
            });

        return (
          <div className="photoList">
            {photoNodes}
          </div>
        );
      }
    });

    // Contains a photo
    var Photo = React.createClass({

      // Hide the PhotoList, etc. and show a larger version of the photo in the ImageViewer
      handleSelect: function(event) {
        var largerImg = "b",
        fullImgURL = this.props.photoObj.baseURL + largerImg + ".jpg";
        this.props.onClick(fullImgURL, this.props.id);
      },

      render: function() {

        var fullURL = this.props.photoObj.baseURL + smallerImg + ".jpg";

        return (
          <div className="photoContainer" onClick={this.handleSelect} >
            <img src={fullURL} className="photo" id={this.props.id} width="150" height="150" />
          </div>
        );
      }
    });

    ReactDOM.render(
      <PhotoBox />,
      document.getElementById('content')
    );

    </script>

        </div>
    </body>

</html>

