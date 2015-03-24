function getResults(param) { // Effectue une requête et récupère les résultats
      
        var xhr = new XMLHttpRequest();
        xhr.open('GET', './search.php?s='+ encodeURIComponent(param));

        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                
                displayResults(xhr.responseText);

            }
        };

        xhr.send(null);

        return xhr;

    }