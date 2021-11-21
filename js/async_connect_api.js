
const config_connection = {};

function config_api_connection(URL){
    config_connection['URL'] = URL;
}

function get_values_by(route, callback){
    
    var newLink = config_connection.URL+"/wp-json/sapi/v0/posts"+route;

    const confNews = { 
        method: 'GET',
        mode: 'cors',
        cache: 'default'
    };

    fetch(newLink, confNews)
    .then(function(response) {
        return response.json();
    })
    .then(function(json) {
        callback(json);
    });

}